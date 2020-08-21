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
		$this->load->helper('text');
	}

	public function index($id = NULL)
	{
		if (!empty($id)) {
			$id = $this->m_page->view($id);

			if (!empty($id)) {
				$data['page'] = $id;
				$this->load->view('admin/v_page', $data);
			} else {
				show_404();
			}
		} else {
			$data['page'] = $this->m_page->list();
			$this->load->view('admin/v_page', $data);
		}
	}

	public function option($id = NULL) {
		if (!empty($id)) {
			$id = $this->m_page->view($id);
			if (!empty($id)) {
				$this->m_page->update(array(
					'judul' => $this->input->post('judul'),
					'konten' => $this->input->post('konten')
				), array('id' => $id['id']));

				redirect(base_url('admin/page'), 'refresh');
			} else {
				show_404();
			}
		} else {
			$this->m_page->create(array(
				'judul' => $this->input->post('judul'),
				'konten' => $this->input->post('konten')
			));

			redirect(base_url('admin/page'), 'refresh');
		}
	}

	public function hapus($id = NULL) {
		$this->m_page->delete($id);
		redirect(base_url('admin/page'), 'refresh');
	}
}

/* End of file Page.php */
/* Location: ./application/controllers/admin/Page.php */