<?php
class M_admins extends CI_Model{

	function get_all_admins(){
		$hsl=$this->db->query("SELECT tbl_admins.*,IF(admins_jenkel='L','Laki-Laki','Perempuan') AS jenkel FROM tbl_admins");
		return $hsl;	
	}

	function simpan_admins($nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar){
		$hsl=$this->db->query("INSERT INTO tbl_admins (admins_nama,admins_jenkel,admins_username,admins_password,admins_email,admins_nohp,admins_level,admins_photo) VALUES ('$nama','$jenkel','$username',md5('$password'),'$email','$nohp','$level','$gambar')");
		return $hsl;
	}

	function simpan_admins_tanpa_gambar($nama,$jenkel,$username,$password,$email,$nohp,$level){
		$hsl=$this->db->query("INSERT INTO tbl_admins (admins_nama,admins_jenkel,admins_username,admins_password,admins_email,admins_nohp,admins_level) VALUES ('$nama','$jenkel','$username',md5('$password'),'$email','$nohp','$level')");
		return $hsl;
	}

	//UPDATE admins //
	function update_admins_tanpa_pass($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar){
		$hsl=$this->db->query("UPDATE tbl_admins set admins_nama='$nama',admins_jenkel='$jenkel',admins_username='$username',admins_email='$email',admins_nohp='$nohp',admins_level='$level',admins_photo='$gambar' where admins_id='$kode'");
		return $hsl;
	}
	function update_admins($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar){
		$hsl=$this->db->query("UPDATE tbl_admins set admins_nama='$nama',admins_jenkel='$jenkel',admins_username='$username',admins_password='$password',admins_email='$email',admins_nohp='$nohp',admins_level='$level',admins_photo='$gambar' where admins_id='$kode'");
		return $hsl;
	}

	function update_admins_tanpa_pass_dan_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level){
		$hsl=$this->db->query("UPDATE tbl_admins set admins_nama='$nama',admins_jenkel='$jenkel',admins_username='$username',admins_email='$email',admins_nohp='$nohp',admins_level='$level' where admins_id='$kode'");
		return $hsl;
	}
	function update_admins_tanpa_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level){
		$hsl=$this->db->query("UPDATE tbl_admins set admins_nama='$nama',admins_jenkel='$jenkel',admins_username='$username',admins_password='$password',admins_email='$email',admins_nohp='$nohp',admins_level='$level' where admins_id='$kode'");
		return $hsl;
	}
	//END UPDATE admins//

	function hapus_admins($kode){
		$hsl=$this->db->query("DELETE FROM tbl_admins where admins_id='$kode'");
		return $hsl;
	}
	function getusername($id){
		$hsl=$this->db->query("SELECT * FROM tbl_admins where admins_id='$id'");
		return $hsl;
	}
	function resetpass($id,$pass){
		$hsl=$this->db->query("UPDATE tbl_admins set admins_password=md5('$pass') where admins_id='$id'");
		return $hsl;
	}

	function get_admins_login($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_admins where admins_id='$kode'");
		return $hsl;
	}


}