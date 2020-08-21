<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_status');

	}

	function index(){
			$x['status']=$this->m_status->get_status_home();
			$x['page'] = $this->m_page->list();
			$this->load->view('depan/v_home',$x);
	}

	public function page($id = NULL) {
		if (!empty($id)) {
			$id = $this->m_page->view($id);
			if (!empty($id))
			{
				$x['page'] = $id;
				$x['status']=$this->m_status->get_status_home();
				$this->load->view('depan/v_home',$x);
			}
			else
			{
				show_404();
			}
		} else {
			$x['status']=$this->m_status->get_status_home();
			$x['page'] = $this->m_page->list();
			$this->load->view('depan/v_home',$x);
		}
	}

}
