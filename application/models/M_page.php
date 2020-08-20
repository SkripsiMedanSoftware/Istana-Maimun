<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_page extends CI_Model {

	public function create($data = array()) {

		if ($this->db->insert('tbl_halaman', $data)) {
			return $this->db->insert_id();
		}

		return FALSE;
	}

	public function list() {

		$query = $this->db->get('tbl_halaman');

		if ($query->num_rows() > 0) {
			return $query->result_array();
		}

		return FALSE;
	}

	public function view($value, $field = 'id') {

		$query = $this->db->get_where('tbl_halaman', array($field => $value));


		if ($query->num_rows() > 0) {
			return $query->result_array();
		}

		return FALSE;
	}

	public function update($data = array(), $where = array()) {

		return $this->db->update('tbl_halaman', $data, $where);
	}

	public function delete($value = NULL, $field = 'id') {

		$query = $this->db->get_where('tbl_halaman', array($field => $value));


		if ($query->num_rows() > 0) {
			return $this->db->delete('tbl_halaman', array($field => $value));
		}

		return FALSE;
	}
}

/* End of file M_page.php */
/* Location: ./application/models/M_page.php */