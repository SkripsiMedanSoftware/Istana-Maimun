<?php
class M_sejarah extends CI_Model{

	function get_all_sejarah(){
		$hsl=$this->db->query("SELECT * FROM tbl_sejarah");
		return $hsl;
	}
	function simpan_sejarah($judul,$deskripsi,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_sejarah(sejarah_judul,sejarah_deskripsi,sejarah_photo) VALUES ('$judul','$deskripsi','$photo')");
		return $hsl;
	}
	function simpan_sejarah_tanpa_img($judul,$deskripsi){
		$hsl=$this->db->query("INSERT INTO tbl_sejarah (sejarah_judul,sejarah_deskripsi) VALUES ('$judul','$deskripsi')");
		return $hsl;
	}
	function update_sejarah($id,$judul,$deskripsi,$photo){
		$hsl=$this->db->query("UPDATE tbl_sejarah SET sejarah_judul='$judul',sejarah_deskripsi='$deskripsi',sejarah_photo='$photo' where sejarah_id='$id'");
		return $hsl;
	}
	function update_sejarah_tanpa_img($id,$judul,$deskripsi){
		$hsl=$this->db->query("UPDATE tbl_sejarah SET sejarah_judul='$judul',sejarah_deskripsi='$deskripsi' WHERE sejarah_id='$id'");
		return $hsl;
	}
	function hapus_sejarah($id){
		$hsl=$this->db->query("DELETE FROM tbl_sejarah WHERE sejarah_id='$id'");
		return $hsl;
	}

	//Front-end
	function sejarah(){
		$hsl=$this->db->query("SELECT * FROM tbl_sejarah");
		return $hsl;
	}
	function sejarah_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_sejarah limit $offset,$limit");
		return $hsl;
	}


}
