<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function index()
	{
		$this->load->model('m_transaksi');
		$data['transaksi'] = $this->m_transaksi->list();
		$this->load->view('admin/v_transaksi', $data);
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/admin/Transaksi.php */