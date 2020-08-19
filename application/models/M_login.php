<?php
class M_login extends CI_Model{
    function cekadmin($u,$p){
        $hasil=$this->db->query("SELECT * FROM tbl_admins WHERE admins_username='$u' AND admins_password=md5('$p')");
        return $hasil;
    }

}
