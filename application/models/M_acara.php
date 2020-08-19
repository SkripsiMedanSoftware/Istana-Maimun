<?php
class M_acara extends CI_Model{

	function get_all_acara(){
		$hsl=$this->db->query("SELECT * FROM tbl_acara");
		return $hsl;
	}
	function simpan_acara($judul,$deskripsi,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_acara(acara_judul,acara_deskripsi,acara_photo) VALUES ('$judul','$deskripsi','$photo')");
		return $hsl;
	}
	function simpan_acara_tanpa_img($judul,$deskripsi){
		$hsl=$this->db->query("INSERT INTO tbl_acara (acara_judul,acara_deskripsi) VALUES ('$judul','$deskripsi')");
		return $hsl;
	}
	function update_acara($id,$judul,$deskripsi,$photo){
		$hsl=$this->db->query("UPDATE tbl_acara SET acara_judul='$judul',acara_deskripsi='$deskripsi',acara_photo='$photo' where acara_id='$id'");
		return $hsl;
	}
	function update_acara_tanpa_img($id,$judul,$deskripsi){
		$hsl=$this->db->query("UPDATE tbl_acara SET acara_judul='$judul',acara_deskripsi='$deskripsi' WHERE acara_id='$id'");
		return $hsl;
	}
	function hapus_acara($id){
		$hsl=$this->db->query("DELETE FROM tbl_acara WHERE acara_id='$id'");
		return $hsl;
	}

	//Front-end
	function acara(){
		$hsl=$this->db->query("SELECT * FROM tbl_acara");
		return $hsl;
	}
	function acara_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_acara limit $offset,$limit");
		return $hsl;
	}


}
