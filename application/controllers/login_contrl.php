<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_contrl extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    //显示登陆页面
	public function show_login()
	{
//        ob_start();
		$this->load->view('login_view');
//        ob_end_flush();
	}
    
    //显示注册页面
    public function show_register(){
        
        $this->load->view('register');
    }
    
    //显示主页面
    public function show_home(){
        
//        $login_state='false';
//        $this->load->model('test_m');
//        $get=$this->test_m->user_select("true");
//
//        if($get){
//            
//            echo $get[0]->uname;
//        }
        
//        if(isset($_SESSION['useremail'])){
//
//            echo "show_home: ".$_SESSION['useremail']."\n";
//        }
//        else{
//            
//            echo "session 已销毁。\n";
//        }
        
        $this->load->model('test_m');
        $user = null;
        if(isset($_SESSION['useremail'])){
            
            $user = $this->test_m->user_search($_SESSION['useremail']);
        }
        if($user!=null){
            
            $num = $this->test_m->get_history_order($user[0]->uid);
            $this->load->view('home',array('num' => $num));
        }
        else{
            $this->load->view('home');
        }
    }
    
    public function show_information(){
        
        if(isset($_SESSION['useremail'])){
            
            $this->load->view('/person/information');
        }
        else{
            
            $this->show_login();
        }
    }
    
    public function show_search(){
        
        if($_POST['index_none_header_sysc']==''){
            
            $this->load->view('search');
            
            echo "<script language='javascript'>alert('请输入搜素内容。');</script>";
        }
        else{
            
            //防止按后退按钮的时候表单重新提交
            header("Cache-control: private");
            $this->load->model('test_m');
            $data = $this->test_m->search_cakes($_POST['index_none_header_sysc']);
            $goods=$_POST['index_none_header_sysc'];
            $this->load->view('search',array('data' => $data,'goods' => $goods));
        }
    }
    
    public function show_introdution($bid){
//        echo $name;
//        $this->load->model('test_m');
//        $user = $this->test_m->cakes_search($name);
//        if($user){
//            echo "can";
//        }
//        else
//            echo "no";
        
//        $login_state='false';
//        $this->load->model('test_m');
//        $get_state = $this->test_m->user_select("true");
//
//        if($get_state){
//            
//            $state=array('na' => $get_state[0]->uname);
//
//           $this->load->view('introduction', $state);
//        }
        $sql = 'select * from BirthdayCakes bir,cakesuppliers cak where bid='.$bid." and bir.sid=cak.sid";
        $queryc = $this->db->query($sql);
        $data = $queryc->unbuffered_row('array');
//        $data['aa']='bb';
        $this->load->model('test_m');
        $month_sale = $this->test_m->calculate_month_sale($bid);
        
        $this->load->view('introduction',array('data' => $data,'month_sale' => $month_sale));
    }
    
    public function show_success($da,$qu){
        
            if(isset($_SESSION['useremail'])){
                
                if($_SESSION['payed']==0){

                    $this->load->model('test_m');
                    $arr = array(

                        'uemail' => $_SESSION['useremail'],
                        'b_id' => $da,
                        'q_ty' => $qu
                    );

                    $qr = $this->test_m->buy_cakes($arr);
                    if($qr){

                        $_SESSION['order_num'] += 1;
                        $_SESSION['payed']=1;
                    }

                    $getCakeBuyInformation=$this->test_m->get_pay_information($arr);
                    $result=$getCakeBuyInformation;
                    $iarray = array(

                        'c_name' => $result->cakename,
                        'total_price' =>($qu * $result->dis_price),
                        'quantity' => $qu,
                        'number_of_phone' => $result->p_number,
                        'ori_price' => $result->price,
                        'address' => $result->c_address
                    );
                    $this->load->library('session');
                    $this->session->set_userdata($iarray);
                }
                    
                $this->load->view('success');
            }
            else{

                $this->show_login();
            }
    }
    
    public function show_pay_second(){
        
        $this->load->view('success');
    }
    
    public function show_pay($da){
        
        if(isset($_SESSION['useremail'])){

                $this->load->model('test_m');
                
                $qr = $this->test_m->cakes_search($da);
//                header("Cache-control: private");

                if($qr[0]->bown >= $_POST['number']){
                    
                    header("Cache-control: private");

//                    echo $qr[0]->bown." ".$_POST['number'];

                    $arr = array(

                        'uemail' => $_SESSION['useremail'],
                        'b_id' => $da,
                        'q_ty' => $_POST['number']
                    );
//                    $qr = $this->test_m->buy_cakes($arr);
//                    if($qr){

                    $getCakeBuyInformation=$this->test_m->get_pay_information($arr);
                    $result=$getCakeBuyInformation;
                    $iarray = array(

                        'c_name' => $result->cakename,
                        'total_price' =>($_POST['number'] * $result->dis_price),
                        'quantity' => $_POST['number'],
                        'number_of_phone' => $result->p_number,
                        'bid' => $da,
                        'ori_price' => $result->price
                    );
                    $this->load->view('pay',array('iarray' => $iarray));
                }
                else{

//                    $this->show_introdution($da);
//                    unset($_POST['number']);
                    echo "<script language='javascript'>alert('库存不足，请联系客服。');</script>";
                    $this->show_introdution($da);
                }
        }
        else {

            $this->show_login();
        }
    }
    
    public function show_person_information(){
        
        $this->load->model('test_m');
        $material=$this->test_m->getUserMaterial($_SESSION['useremail']);
        
        $this->load->view('/person/information_show',array('material'=>$material));
    }
    
    //检查登陆信息即邮箱密码是否正确
    public function check_login(){
        
//        $this->load->model('test_m');
//        $user = $this->test_m->user_search($_POST['uname']);
//        
//        if($user){
//            echo "用户已存在。";
//            if($user[0]->upass == $_POST['upass']){
//                echo "密码正确";
//            }
//            else{
//                echo "密码不正确";
//            }
//            var_dump($user);
//        }
//        else{
//            echo "用户不存在。";
//        }
//        if(isset($_SESSION['useremail'])){
//            
//            echo "直接显示";
//            $this->show_home();
//        }
//        else{
            
            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');

            $this->form_validation->set_rules('uname', '邮箱', 'required',
                array('required' => '请输入正确的邮箱。')
            );

            $this->form_validation->set_rules('upass', '密码', 'callback_check_password_right');

            if ($this->form_validation->run() == FALSE){

                $this->load->view('login_view');
            }
            else{

                $this->load->library('session');
                
                //防止按后退按钮的时候表单重新提交
                header("Cache-control: private");
                
                $this->load->model('test_m');
                $user = $this->test_m->user_search($_POST['uname']);
                
                
                
                $num = $this->test_m->get_history_order($user[0]->uid);
                
                $user_data = array(

                    'useremail' => $_POST['uname'],
                    'u_id' => $user[0]->uid,
                    'order_num' => $num[0]->haha,
                    'payed' => 0
                );
                $this->session->set_userdata($user_data);

    //            $arr = array('loginState' => "true");
    //            $this->load->model('test_m');
    //            $this->test_m->set_user_login($_POST['uname'],$arr);
                $this->show_home();
            }
//        }
    }
    
    //检查登陆密码是否正确
    function check_password_right($str){
        
        $this->load->model('test_m');
        $user = $this->test_m->user_search($_POST['uname']);
//        echo $_POST['upass'];
//        echo $str;
//        echo $user[0]->upass;
        if($user != null){
//            echo "jin";
            if($user[0]->upass == $_POST['upass']){
//                echo $_POST['upass'];
                return TRUE;
            }
            else{
                
                $this->form_validation->set_message('check_password_right', '请输入正确的密码。');
                return FALSE;
            }
            
        }
        else{
//            echo "没进去";
            $this->form_validation->set_message('check_password_right', '用户不存在。');
            return FALSE;
        }
    }
    
    //退出登陆，删除session，显示原来的未登录页面
    function logout(){
        
//        echo "logout: ".$_SESSION['useremail'];
        unset($_SESSION['useremail']);
        $this->session->sess_destroy();
        $this->show_home();
    }
    
    //重定向，更改用户资料的时候用到
    function for_redirect(){
//        echo $_SESSION['useremail'];
        $this->load->helper('url');
        redirect('/login_contrl/show_information','refresh');
    }
    
    function test_for_redirect(){
//        echo $_SESSION['useremail'];
        $this->load->helper('url');
        redirect('/login_contrl/show_pay','refresh');
    }
    
    //检查邮箱是否存在，暂不用（自己的写法）
    function check_email_exist(){
        //检查邮箱
        if(!empty($_POST["uemail"])){
        
            $this->load->model('test_m');
            $user = $this->test_m->user_search($_POST['uemail']);

            //邮箱已被注册，返回
            if($user){
                echo "<script language='javascript'>alert('该邮箱已被注册!');</script>";
                //如果邮箱已被注册或者无效，则重定向回该网页
                $this->for_redirect();
            }
            //邮箱未被注册，检查密码
            else{
                //密码未填写，返回
                if($_POST['set_pwd'] == "" or $_POST['check_pwd'] == ""){
                    
                    echo "<script language='javascript'>alert('请填写密码!');</script>";
                    $this->for_redirect();
                }
                //密码填写但不一致
                else if($_POST['set_pwd'] != $_POST['check_pwd']){
                    echo "<script language='javascript'>alert('两次填写的密码不一致!');</script>";
                    $this->for_redirect();
                }
                else{
                    
                    if(empty($_POST["agreement"])){
                        
                        echo "<script language='javascript'>alert('请勾选同意服务协议!');</script>";
                        $this->for_redirect();
                    }
                    else{
                        
                        $this->show_home();
                    }
                }
            }
        }
        else{
            
            echo "<script language='javascript'>alert('请填写邮箱!');</script>";
            $this->for_redirect();
        }
    }
    
    //检查邮箱注册信息是否合理
    public function index(){
        
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('uemail', '邮箱', 'callback_check_email');
        
        $this->form_validation->set_rules('set_pwd', 'password', 'required',
            array('required' => '请输入%s。')
        );
//        $config = array(
//            array(
//                'field' => 'check_pwd',
//                'label' => '确认密码',
//                'rules' => 'required|matches[set_pwd]',
//                'errors' => array('required' => "aaaaa",
//                                    'matches[set_pwd]' => 'asasasas'),
//            ),
//        );
//        $this->form_validation->set_rules($config);
        $this->form_validation->set_rules('check_pwd', 'confirm password', 'required|matches[set_pwd]',
            array('required' => '请输入正确的确认密码。'));

        if ($this->form_validation->run() == FALSE){
            
            $this->load->view('register');
        }
        else{
            
            $username = $this->input->post('uemail');
            $pwd = $this->input->post('set_pwd');
            $this->insert($username,$pwd);
//            $this->show_home();
            $this->show_login();
            
        }
    }
    
    //检查邮箱是否被注册过
    public function check_email($str){

        if($str != null){
            
            $this->load->model('test_m');
            $user = $this->test_m->user_search($str);
            //邮箱已被注册，返回
            if($user){

                $this->form_validation->set_message('check_email', '该邮箱已被注册');
                return FALSE;
            }
            else{
                
                return TRUE;
            }
        }
        else{
            
            $this->form_validation->set_message('check_email', '请输入邮箱');
            return FALSE;
        }
    }
    
    //插入注册成功的用户信息到数据库中
    function insert($useremail,$pwd)
	{
		$this->load->model('test_m');
        //定义数组
        $arr = array('uemail'=>$useremail,'upass'=>$pwd);
        $this->test_m->user_insert($arr);
	}
    
    //更改用户资料
    function update_information(){
        
        $this->load->model('test_m');

        if(!isset($_POST['sex'])){
            
            $_POST['sex']='';
        }
        $arr = array('p_num'=>$_POST['phone_number'],'gender'=>$_POST['sex'],'year'=>$_POST['year'],'month'=>$_POST['month'],'day'=>$_POST['day'],'addr' => $_POST['address']);
        $result = $this->test_m->up_infor($arr);
        if($result){
            
            echo "<script language='javascript'>alert('修改成功!');</script>";
        }
        else{
            
            echo "<script language='javascript'>alert('修改失败！');</script>";
        }
        $material=$this->test_m->getUserMaterial($_SESSION['useremail']);
//        $this->for_redirect($material);
//        $this->load->view('information_show',array('material'=>$material));
//        $this->show_person_information($material);
        $this->for_redirect();
    }
    
}
