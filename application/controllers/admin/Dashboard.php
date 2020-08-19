<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_status');
	}
	function index(){
		if($this->session->userdata('akses')=='1'){
			$x['status'] = $this->m_status->status();
			$this->load->view('admin/v_dashboard',$x);
		}else{
			redirect('administrator');
		}
	
	}
	
}