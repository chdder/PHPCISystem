<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderForm_controll extends CI_Controller {
  
    public function show_order_form_view(){
        
        if(isset($_SESSION['useremail'])){
            
            $this->load->model('test_m');
            $data = $this->test_m->select_form($_SESSION['u_id']);

            $this->load->view('shopcart',array('data' => $data));
        }
        else{
            
            $this->load->view('login_view');
        }
        
    }
    
    public function deleOrderForm($id){
        
        header("Cache-control: private");
        $this->load->model('test_m');
        $result = $this->test_m->deleFormAndDelivery($id);
        if($result){
            
            echo "<script language='javascript'>alert('已删除!');</script>";
            $this->show_order_form_view();
        }
        else{
            
            echo "<script language='javascript'>alert('该订单未完成，删除失败!请耐心等待送货到达。');</script>";
            $this->show_order_form_view();
        }
    }
}
?>