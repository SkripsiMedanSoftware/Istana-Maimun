<?php
class M_status extends CI_Model{

	function get_all_status(){
		$hsl=$this->db->query("SELECT * FROM tbl_status");
		return $hsl;
	}
	function simpan_status($status){
		$hsl=$this->db->query("insert into tbl_status values ('$status')");
		return $hsl;
	}
	
	function update_status($status_id,$status){
		$hsl=$this->db->query("update tbl_status set status='$status' where status_id='$status_id'");
		return $hsl;
	}
	function update_status_tanpa_img($status_id,$status){
		$hsl=$this->db->query("update tbl_status set status='$status' where status_id='$status_id'");
		return $hsl;
	}
	function hapus_status($id){
		$hsl=$this->db->query("delete from tbl_status where status_id='$id'");
		return $hsl;
	}

	//Front-End
	function get_status_slider(){
		$hsl=$this->db->query("SELECT * FROM tbl_status");
		return $hsl;
	}
	function get_status_home(){
		$hsl=$this->db->query("SELECT * FROM tbl_status");
		return $hsl;
	}

	function status_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_status");
		return $hsl;
	}

	function status(){
		$hsl=$this->db->query("SELECT * FROM tbl_status");
		return $hsl;
	}
	function get_status_by_id($id){
		$hsl=$this->db->query("SELECT * FROM tbl_status");
		return $hsl;
	}

	function cari_status($keyword){
		$hsl=$this->db->query("SELECT * FROM tbl_status");
		return $hsl;
	}

	


}
