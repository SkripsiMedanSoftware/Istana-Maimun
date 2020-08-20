<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('masuk')) {
			redirect(base_url('administrator'), 'refresh');
		}

		$this->load->model('m_page');
	}

	public function index($id = NULL)
	{
		if (!empty($id)) {
			$id = $this->m_page->view($id);

			if (!empty($id)) {
				$this->load->view('v_page', $data);
			} else {
				show_404();
			}
		} else {
			$this->load->view('v_page', $data);
		}
	}
}

/* End of file Page.php */
/* Location: ./application/controllers/admin/Page.php */