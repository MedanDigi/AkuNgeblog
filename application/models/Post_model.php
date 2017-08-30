<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends CI_Model {

    //nama tabel
    private $default_table = 'posts';

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

    //menghapus data
    public function delete($idpost) {
        return $this->db->delete($this->default_table, array('idpost' => $idpost));
    }

    //mendapatkan berita berdasarkan idpost
    public function get($idpost) {
        $post = $this->db->get_where($this->default_table, array('idpost' => $idpost, 'type' => 'post'),1);
         //$post = $this->db->get_where($this->default_table, array('type' => 'post'), 1);
        if(!$post) {
            return FALSE;
        }
        return $post->row();
    }

   //mendapatkan type pages berdasarkan idpost
    public function getpages($idpost) {
        $post = $this->db->get_where($this->default_table, array('idpost' => $idpost), 1);
        //$post = $this->db->get_where($this->default_table, array('type' => 'page'), 1);
        if(!$post) {
            return FALSE;
        }
        return $post->row();
    }

 //mendapatkan berita berdasarkan idpost
    public function getseo($seotag) {
        $post = $this->db->get_where($this->default_table, array('seotag' => $seotag), 1);
        //$post = $this->db->get_where($this->default_table, array('type' => 'page'), 1);
        if(!$post) {
            return FALSE;
        }
        return $post->row();
    }

    //mendapatkan berita berdasarkan idpost
    public function getseopages($seotag) {
        $post = $this->db->get_where($this->default_table, array('seotag' => $seotag), 1);
        if(!$post) {
            return FALSE;
        }
        return $post->row();
    }

    //mendapatkan post dengan limit batas 
    public function get_posts($count = 5) {
        $this->db->order_by('add_date', 'desc');
        //$this->db->get_where($this->default_table, array('type' => 'post'), 1);
        $posts = $this->db->get($this->default_table, $count);
        if(!$posts) {
            return FALSE;
        }
        return $posts->result();
    }

    //mendapatkan semua post
    public function get_all() {
        $this->db->order_by('add_date', 'desc');
        //$this->db->get_where($this->default_table, array('type' => 'post'));
        $posts = $this->db->get_where($this->default_table, array('status' => 'publish','status' => 'publish'));
        if(!$posts) {
            return FALSE;
        }
        return $posts->result();
    }

    //mendapatkan keyword
    public function get_by_keyword($keyword) {
        $this->db->like('title', $keyword);
        $this->db->or_like('body', $keyword);
        $this->db->order_by('add_date', 'desc');
        $posts = $this->db->get($this->default_table);
        if(!$posts) {
            return FALSE;
        }
        return $posts->result();
    }

    //mendapatkan data id user
    public function get_by_iduser($iduser) {
        $this->db->order_by('add_date', 'desc');
        $posts = $this->db->get_where($this->default_table, array('iduser' => $iduser));
        if(!$posts) {
            return FALSE;
        }
        return $posts->result();
    }

    //mendapatkan data idtag
    public function get_by_idtag($idtag) {
        $this->load->model('post_tag_model', 'ptm');
        return $this->ptm->get_posts_by_idtag($idtag);
    }

    //mendapatkan data idcatagori
    public function get_by_idcategory($idcategory) {
        $this->load->model('post_category_model', 'pcm');
        return $this->pcm->get_posts_by_idcategory($idcategory);
    }

     public function update_counter($idpost) {
    // return current article views 
    $this->db->where('idpost', urldecode($idpost));
    $this->db->select('view');
    $count = $this->db->get($this->default_table)->row();
    // then increase by one 
    $this->db->where('idpost', urldecode($idpost));
    $this->db->set('view', ($count->view + 1));
    $this->db->update($this->default_table);
    }

}