<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_tag_model extends CI_Model {

    //nama table
    private $default_table = 'post_tags';

    //penambahan data
    public function add($data) {
        if(!isset($data['added_by']) && $this->user->id()) {
            $data['added_by'] = $this->user->id();
        }
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

    //mendapatkan tags berdasarkan idpost
    public function get_tags_by_idpost($idpost) {
        $post_tags = $this->db->get_where($this->default_table, array('idpost' => $idpost));
        if(!$post_tags) {
            return FALSE;
        }
        $this->load->model('tag_model', 'tm');
        $tags = array();
        foreach($post_tags->result() as $pt) {
            $tags[] = $this->tm->get($pt->idtag);
        }
        return $tags;
    }

    //mendapatkan post bedasarkan idtag
    public function get_posts_by_idtag($idtag) {
        $this->db->order_by('add_date', 'desc');
        $post_tags = $this->db->get_where($this->default_table, array('idtag' => $idtag));
        if(!$post_tags) {
            return FALSE;
        }
        $this->load->model('post_model', 'pm');
        $posts = array();
        foreach($post_tags->result() as $pt) {
            $posts[] = $this->pm->get($pt->idpost);
        }
        return $posts;
    }

}