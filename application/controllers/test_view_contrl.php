<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_view_contrl extends CI_Controller {

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
	public function show()
	{
        $name="liyu";
        @$count=file_get_contents('./num.txt');
        $count=$count?$count:0;
        $count++;
        $re=fopen('./num.txt','w');
        fwrite($re,$count);
        fclose($re);
        
        $data=array('v_name'=>$name,'v_count'=>$count);
		$this->load->view('test_view.php',$data);
	}
}
