<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_status');
		$this->load->model('m_sejarah');

	}
	function index(){
			$x['status']=$this->m_status->get_status_home();

			$this->load->view('depan/v_home',$x);
	}

}
