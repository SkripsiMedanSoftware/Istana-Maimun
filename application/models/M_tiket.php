<?php
class M_tiket extends CI_Model{

	function get_all_tiket(){
		$hsl=$this->db->query("SELECT * FROM tbl_tiket");
		return $hsl;
	}
	function simpan_tiket($id,$bukti,$nama,$kontak,$tanggal,$dewasa,$pelajar){
		$hsl=$this->db->query("INSERT INTO tbl_tiket(tiket_id,bukti_bayar,tiket_nama,tiket_kontak,tiket_tanggal,tiket_dewasa,tiket_pelajar) VALUES ('$id','$bukti','$nama','$kontak','$tanggal','$dewasa','$pelajar')");
		return $hsl;
	}
	function simpan_tiket_tanpa_img($id,$bukti,$nama,$kontak,$tanggal,$dewasa,$pelajar){
		$hsl=$this->db->query("INSERT INTO tbl_tiket(tiket_id,bukti_bayar,tiket_nama,tiket_kontak,tiket_tanggal,tiket_dewasa,tiket_pelajar) VALUES ('$id','$bukti','$nama','$kontak','$tanggal','$dewasa','$pelajar')");
		return $hsl;
	}
	
	function hapus_tiket($id){
		$hsl=$this->db->query("DELETE FROM tbl_tiket WHERE tiket_id='$id'");
		return $hsl;
	}

	//Front-end
	function tiket(){
		$hsl=$this->db->query("SELECT * FROM tbl_tiket");
		return $hsl;
	}
	function tiket_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_tiket limit $offset,$limit");
		return $hsl;
	}


}
