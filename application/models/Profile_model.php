<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model {

    //nama tabel
    private $default_table = 'profiles';

    //penambahan data
    public function add($data) {
        if($this->db->insert($this->default_table, $data)){
            return $this->db->insert_id();
        }

        return FALSE;
    }

    //perubahan data
    public function update($data, $where) {
        if($this->db->update($this->default_table, $data, $where)) {
            return $this->db->affected_rows();
        }
        return FALSE;
    }

    //mendapatkan data profile berdasarkan ID
    public function get($idprofile) {
        $profile = $this->db->get_where($this->default_table, array('idprofile' => $idprofile), 1);
        if(!$profile) {
            return FALSE;
        }
        return $profile->row();
    }

    //mendapatkan iduser 
    public function get_by_iduser($iduser) {
        $profile = $this->db->get_where($this->default_table, array('iduser' => $iduser), 1);
        if(!$profile) {
            return FALSE;
        }
        return $profile->row();
    }

    //mendapatkan user berdasarkan ID
    public function get_user($idprofile) {
        $profile = $this->get($idprofile);
        if(!$profile) {
            return FALSE;
        }
        $this->load->model('user_model', 'um');
        return $this->pm->get_by_iduser($profile->iduser);
    }

}