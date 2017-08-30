<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_model extends CI_Model {

    //nama table
    private $default_table = 'users';

    //penambahan data
    public function add($data) {
        if($this->db->insert($this->default_table, $data)){
            return $this->db->insert_id();
        }

        return FALSE;
    }

    //perubahan data user
    public function update($data, $where) {
        if($this->db->update($this->default_table, $data, $where)) {
            return $this->db->affected_rows();
            /*  mengetahui apakah proses insert, update, atau delete berhasil atau tidaknya. */
        }
        return FALSE;
    }

    //mendapatkan user berdasarkan id
    public function get($iduser) {
        $user = $this->db->get_where($this->default_table, array('iduser' => $iduser), 1);
        if(!$user) {
            return FALSE;
        }
        return $user->row();
    }

    //mengecek email apakah ada
    public function get_by_email($email) {
        $user = $this->db->get_where($this->default_table, array('email' => $email), 1);
        if(!$user) {
            return FALSE;
        }
        return $user->row();
    }

    //mendapatkan key akses
    public function get_by_key($key) {
        $user = $this->db->get_where($this->default_table, array('code' => $key), 1);
        if(!$user) {
            return FALSE;
        }
        return $user->row();
    }

    //mendapatkan profile
    public function get_profile($iduser) {
        $this->load->model('profile_model', 'pm');
        return $this->pm->get_by_iduser($iduser);
    }

    //membuat fungsi login
    public function login($data) {
        if(!isset($data['status'])) {
            $data['status'] = 1;
        }

        $user = $this->db->get_where($this->default_table, $data, 1);
        if(!$user) {
            return FALSE;
        }

        $user_data = $user->row_array();
        if(isset($user_data['password'])) {
            unset($user_data['password']);
        }
        if(isset($user_data['code'])) {
            unset($user_data['code']);
        }

        return $user_data;
    }

}