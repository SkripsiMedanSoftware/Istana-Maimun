<?php
class Tiket extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_tiket');
	}

	function index(){
		$x['data']=$this->m_tiket->get_all_tiket();
		$this->load->view('admin/v_tiket',$x);
	}

	function hapus_tiket(){
		$id=$this->input->post('id');
		$this->m_tiket->hapus_tiket($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/tiket');
	}
}