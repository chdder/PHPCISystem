<?php
    class Test_m extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database();
        }
        
        function user_insert($arr){
//            $this->db->insert('user',$arr);
            $sql_insert = "insert into customers(upass,uemail) values('".$arr['upass']."','".$arr['uemail']."')";
            $this->db->query($sql_insert);
        }
        
        function user_update($id,$arr){
            
            $this->db->where('uid',$id);
            $this->db->update('user',$arr);
        }
        
        function user_delete(){
            $this->db->where('uid',$id);
            $this->db->delete('user');
        }
        
        function user_select($id){
            $this->db->where('loginState',$id);
            $this->db->select('uname');
            $query=$this->db->get('user');
            return $query->result();
        }
        
        //不使用框架封装的方法，自己写原生的SQL语句
        function user_search($uemail){
//            $this->db->where('uname',$uname);
//            $this->db->select('*');
//            $query=$this->db->get('user');
//            return $query->result();
            $sql_user="select * from customers where uemail='".$uemail."'";
            $query = $this->db->query($sql_user);
            return $query->result();
        }
        
        //用户id获取订单数
        function get_history_order($u_id){
            
            $sql_get_num = "select count(uid) as haha from orderform where uid=".$u_id;
            $query = $this->db->query($sql_get_num);
            return $query->result();
        }
        
        function set_user_login($user,$login_state){
            
            $this->db->where('uname',$user);
            $this->db->update('user',$login_state);
        }
        
        function get_all_cakes_name(){
            
            $result = $this->db->query('select * from BirthdayCakes');
            return $result->result();
        }
        
        //通过id来获取蛋糕的信息
        function cakes_search($uname){
            
            $this->db->where('bid',$uname);
            $this->db->select('*');
            $query=$this->db->get('birthdaycakes');
            return $query->result();
        }
        
        //获取订单所要显示的信息
        public function get_pay_information($arr){
            
            $sql="select bir.bname as cakename,bir.bprice as price,bir.bprice*bir.brate as dis_price,cus.phone_number as p_number,cus.address as c_address from customers cus,birthdaycakes bir where cus.uemail='".$arr['uemail']."'"." and bir.bid=".$arr['b_id'];
//            echo $sql;
            $query = $this->db->query($sql);
            return $query->unbuffered_row();
        }
        
        //购买蛋糕，当蛋糕数量不够时提示错误
        function buy_cakes($param){
            
            $sql_getuid = "select uid from customers where uemail='".$param['uemail']."'";
//            echo $param['uemail'];
            $query = $this->db->query($sql_getuid);
//            $u_id = $query->unbuffered_row();
            foreach ($query->result() as $row) {
                
                $hh = $row->uid;
            //    echo $row->name;
            //    echo $row->body;
            }
//            echo $hh;
//            $hh = $u_id->uid;
            
            $sql_store = "select bown from birthdaycakes where bid=".$param['b_id'];
            $get_store = $this->db->query($sql_store);
            $get_own = $get_store->result();
            
            if($get_own[0]->bown < $param['q_ty']){
                
                return FALSE;
            }
            else{
                
                $sql_buy = "call add_order_form(".$hh.",".$param['b_id'].",".$param['q_ty'].")";
    //            echo $sql_buy;
                $result = $this->db->query($sql_buy);
    //            $error_msg = $this->db->_error_message();
    //            echo $error_msg;
                return $result;
            }
        }
        
        //计算每月销售量
        public function calculate_month_sale($bid){
            
            $Calculation_sql = "call monthly_sale(".$bid.")";
            $query = $this->db->query($Calculation_sql);
            if($query){
                
                $count = 0;
                foreach($query->result() as $row){
                    
                    $count += $row->sale_sum;
                }
                if($query->num_rows() != 0){
                    
                    return $count / $query->num_rows();
                }
                else{
                    
                    return 0;
                }
            }
            else
                return 0;
        }
        
        // 筛选订单
        public function select_form($uid){
            
            $sql = "call select_form(".$uid.")";
            $query = $this->db->query($sql);
            return $query->result();
        }
        
        //用关键词搜索蛋糕
        public function search_cakes($key_word){
            
            $sql="select bname,bprice,bid from birthdaycakes where bname like '%".$key_word."%'";
            $query = $this->db->query($sql);
            return $query->result();
        }
        
        //更新用户资料
        public function up_infor($data){
            
            $count=0;
            $sql="update customers set ";
            
            if($data['gender']!=''){
                    
                $sql .= "gender='".$data['gender']."'";
                $count++;

            }
            if($data['p_num']!=''){
                
                if($count!=0){
                    
                    $sql.=",";
                }
                
                $sql .= "phone_number='".$data['p_num']."'";
                $count++;
            }
            if($data['addr']!=''){
                
                if($count!=0){
                    
                    $sql.=",";
                }
                
                $sql .= "address='".$data['addr']."'";
                $count++;
            }
            if($data['year']!='' and $data['month']!='' and $data['day']!=''){
                
                if($count!=0){
                    
                    $sql.=",";
                }
                
                $sql .= "birthday=DATE('".$data['year']."-".$data['month']."-".$data['day']."')";
            }
            $sql.=" where uemail='".$_SESSION['useremail']."'";
//            echo $sql;
//            }
            $query = $this->db->query($sql);
            return $query;
        }
        
        //获取用户资料
        public function getUserMaterial($email){
            
            $sql="select * from customers where uemail='".$email."'";
            $query = $this->db->query($sql);
            return $query->unbuffered_row();
        }
        
        //删除订单以及对应的送货单
        public function deleFormAndDelivery($id){
            
            $sql_1="DELETE FROM orderform WHERE oid=".$id;
            $sql_2="DELETE FROM delivery WHERE oid=".$id;
            $sql_check="SELECT delivery_done FROM delivery WHERE oid=".$id;
            $query = $this->db->query($sql_check);
            $row=$query->unbuffered_row('array');
            if($row['delivery_done'] == 'no'){
                
                return FALSE;
            }
            else{
                
                $this->db->query($sql_2);
                $this->db->query($sql_1);
                return TRUE;
            }
        }
       
    }
?>
