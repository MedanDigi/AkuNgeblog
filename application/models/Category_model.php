<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {

    //nama tabel
    private $default_table = 'categories';

    //penambahan data katagori
    public function add($data) {
        if($this->db->insert($this->default_table, $data)){
            return $this->db->insert_id();
        }

        return FALSE;
    }

    //proses perubahan data
    public function update($data, $where) {
        if($this->db->update($this->default_table, $data, $where)) {
            return $this->db->affected_rows();
        }
        return FALSE;
    }

    //mendapatkan data berdasarkan idcatagori
    public function get($idcategory) {
        $category = $this->db->get_where($this->default_table, array('idcategory' => $idcategory), 1);
        if(!$category) {
            return FALSE;
        }
        return $category->row();
    }

    //mendapatkan semua data
    public function get_all() {
        if($categories = $this->db->get($this->default_table)) {
            return $categories->result();
        }
        return FALSE;
    }

    //mendapatkan catagori berdasarkan judul
    public function get_by_category($title) {
        $category = $this->db->get_where($this->default_table, array('title' => $title), 1);
        if(!$category) {
            return FALSE;
        }
        return $category->row();
    }

    //mendapatkan catagori bersarkan idpost
    public function get_by_idpost($idpost) {
        $this->load->model('post_category_model', 'pcm');
        return $this->pcm->get_category_by_idpost($idpost);
    }

}