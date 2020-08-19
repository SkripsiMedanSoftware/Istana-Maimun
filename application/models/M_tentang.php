<?php
class M_tentang extends CI_Model{

	function get_all_tentang(){
		$hsl=$this->db->query("SELECT * FROM tbl_tentang");
		return $hsl;
	}
	function simpan_tentang($judul,$deskripsi,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_tentang(tentang_judul,tentang_deskripsi,tentang_photo) VALUES ('$judul','$deskripsi','$photo')");
		return $hsl;
	}
	function simpan_tentang_tanpa_img($judul,$deskripsi){
		$hsl=$this->db->query("INSERT INTO tbl_tentang (tentang_judul,tentang_deskripsi) VALUES ('$judul','$deskripsi')");
		return $hsl;
	}
	function update_tentang($id,$judul,$deskripsi,$photo){
		$hsl=$this->db->query("UPDATE tbl_tentang SET tentang_judul='$judul',tentang_deskripsi='$deskripsi',tentang_photo='$photo' where tentang_id='$id'");
		return $hsl;
	}
	function update_tentang_tanpa_img($id,$judul,$deskripsi){
		$hsl=$this->db->query("UPDATE tbl_tentang SET tentang_judul='$judul',tentang_deskripsi='$deskripsi' WHERE tentang_id='$id'");
		return $hsl;
	}
	function hapus_tentang($id){
		$hsl=$this->db->query("DELETE FROM tbl_tentang WHERE tentang_id='$id'");
		return $hsl;
	}

	//Front-end
	function tentang(){
		$hsl=$this->db->query("SELECT * FROM tbl_tentang");
		return $hsl;
	}
	function tentang_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_tentang limit $offset,$limit");
		return $hsl;
	}


}
