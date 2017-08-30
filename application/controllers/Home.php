<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Display the default home page
     */
    public function index() {
        //judul
        $data['title'] = 'UPUNEWS';
        //load model
        $this->load->model('post_model', 'news');
        //apakah sudah login
        if(!is_logged_in()) {
            $this->template->alert('silahkan Login untuk melihat semua berita');
            //dibatasi menampilkan berita sebanyak 10 apabila belum login
            $data['news'] = $this->news->get_posts(10);
            $this->template->view('home/public', $data);
        } else {
            //menampilkan seluruh berita
            $data['news'] = $this->news->get_all();
            $this->template->view('home/member', $data);
        }
    }

    public function rekomendasi() {
        //judul
        $data['title'] = 'Rekomendasi';
        //load model
        $this->load->model('post_model', 'news');
        //apakah sudah login
        if(!is_logged_in()) {
            //dibatasi menampilkan berita sebanyak 10 apabila belum login
            //$data['news'] = $this->news->get_posts(10);
           $this->template->view('home/rekomendasi', $data);
        } else {
            //menampilkan seluruh berita
            //$data['news'] = $this->news->get_all();
            $this->template->view('home/rekomendasi', $data);
        }
    }

    
}