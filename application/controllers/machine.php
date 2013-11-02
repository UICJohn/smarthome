<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 这个是machine 的controller, CBR请在这里调用model内的函数获取machine的list，YM请在这里调用model内的函数获取某个machine信息
* 第一个function是constructor
**/
	class machine extends CI_Controller{
	
		function __construct(){
			parent::__construct();
			$this->load->model('machine_model');
		}

		function index(){
			if($this->session->userdata("email") && $this->session->userdata("username")){
				$machine_list=$this->machine_model->machineList($this->session->userdata['email']);
                        	$data = array("machine_list" => $machine_list);
                        	$this->load->view("machine/index",$data);
			}
		}
	
	}


?>
