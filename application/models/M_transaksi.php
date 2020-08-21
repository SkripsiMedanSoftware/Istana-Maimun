<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

	public function create($data = array()) {

		if ($this->db->insert('tbl_transaksi_tiket', $data)) {
			return $this->db->insert_id();
		}

		return FALSE;
	}

	public function list() {

		$query = $this->db->get('tbl_transaksi_tiket');

		if ($query->num_rows() > 0) {
			return $query->result_array();
		}

		return FALSE;
	}

	public function view($value, $field = 'id') {

		$query = $this->db->get_where('tbl_transaksi_tiket', array($field => $value));


		if ($query->num_rows() > 0) {
			return $query->result_array();
		}

		return FALSE;
	}

	public function update($data = array(), $where = array()) {

		return $this->db->update('tbl_transaksi_tiket', $data, $where);
	}

	public function delete($value = NULL, $field = 'id') {

		$query = $this->db->get_where('tbl_transaksi_tiket', array($field => $value));


		if ($query->num_rows() > 0) {
			return $this->db->delete('tbl_transaksi_tiket', array($field => $value));
		}

		return FALSE;
	}

	public function total_pendapatan() {

		$this->db->select_sum('harga_tiket');
		$query = $this->db->get('tbl_transaksi_tiket');
		return $query->row();

	}

}

/* End of file M_transaksi.php */
/* Location: ./application/models/M_transaksi.php */