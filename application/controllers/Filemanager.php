<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filemanager extends CI_Controller {

	public function index()
	{
		$config = $this->load->config('filemanager', TRUE);
		$root = FCPATH.'uploads/';
		$app = new RFM\Application();
		$local = new RFM\Repository\Local\Storage($this->config->item('filemanager'));
		$local->setRoot($root, TRUE, FALSE);
		$app->setStorage($local);
		$app->api = new RFM\Api\LocalApi();
		$app->run();
	}

}

/* End of file Filemanager.php */
/* Location: ./application/controllers/Filemanager.php */