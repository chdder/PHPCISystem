<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	function insert()
	{
		$this->load->model('test_m');
        //定义数组
        $arr = array('uname'=>'李煜','upass'=>'1234');
        $this->test_m->user_insert($arr);
	}
    
    function update()
	{
		$this->load->model('test_m');
        //定义数组
        $arr = array('uname'=>'ull','upass'=>'1234');
        $this->test_m->user_update(2,$arr);
	}
    
    function del()
	{
		$this->load->model('test_m');
        
        $this->test_m->user_delete(1);
	}
    
    function select(){
        $this->laod->model('test_m');
        //返回的是一个一维数组
        $user=$this->test_m->user_select(2);
        echo $user[0]->uid;
    }
}
