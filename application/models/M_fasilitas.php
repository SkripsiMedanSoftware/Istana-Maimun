<?php
class M_fasilitas extends CI_Model{

	function get_all_fasilitas(){
		$hsl=$this->db->query("SELECT * FROM tbl_fasilitas");
		return $hsl;
	}
	function simpan_fasilitas($judul,$deskripsi,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_fasilitas(fasilitas_judul,fasilitas_deskripsi,fasilitas_photo) VALUES ('$judul','$deskripsi','$photo')");
		return $hsl;
	}
	function simpan_fasilitas_tanpa_img($judul,$deskripsi){
		$hsl=$this->db->query("INSERT INTO tbl_fasilitas (fasilitas_judul,fasilitas_deskripsi) VALUES ('$judul','$deskripsi')");
		return $hsl;
	}
	function update_fasilitas($id,$judul,$deskripsi,$photo){
		$hsl=$this->db->query("UPDATE tbl_fasilitas SET fasilitas_judul='$judul',fasilitas_deskripsi='$deskripsi',fasilitas_photo='$photo' where fasilitas_id='$id'");
		return $hsl;
	}
	function update_fasilitas_tanpa_img($id,$judul,$deskripsi){
		$hsl=$this->db->query("UPDATE tbl_fasilitas SET fasilitas_judul='$judul',fasilitas_deskripsi='$deskripsi' WHERE fasilitas_id='$id'");
		return $hsl;
	}
	function hapus_fasilitas($id){
		$hsl=$this->db->query("DELETE FROM tbl_fasilitas WHERE fasilitas_id='$id'");
		return $hsl;
	}

	//Front-end
	function fasilitas(){
		$hsl=$this->db->query("SELECT * FROM tbl_fasilitas");
		return $hsl;
	}
	function fasilitas_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_fasilitas limit $offset,$limit");
		return $hsl;
	}


}
