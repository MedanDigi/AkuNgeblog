<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    /**S
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('post_model', 'news');
    }

    /**
     * Display the default news list page
     */
    
    //Berita sepenuhnya hanya dapat diakses yang sudah login
    public function index() {
        /*if(!is_logged_in()) {
            $this->template->alert(
                'Only members can access this page',
                'warning'
            );
            redirect('account/login');
            return;
        }
        */
        redirect('/');
        //notfound
        /*$data['title'] = 'News archive | News portal';
        $data['news'] = $this->news->get_all();
        $this->template->view('news/list', $data);*/
    }

    //menampilkan detail dari berita
    public function detail($seotag) {
        //mendapatkan IP
        $ip = $this->input->ip_address();

       $post = $this->news->getseopages($seotag);
        if(!$post) {
            $this->template->alert(
                'Could not load the requested item',
                'warning'
            );
            redirect('news');
            //redirect to error
            return;
        }
        $data['sidebar_right'] = false;
        $data['title'] = $post->title . ' | UPUNEWS';
        $data['news'] = $post;
        $data['author'] = get_user_profile($data['news']->iduser);

        $this->template->view('news/pagedetail', $data);
        //$this->add_count($idpost);
    }

    // menghintung yang melihat
    public function add_count($idpost)
    {
        $this->load->helper('cookie');
       $check_visitor = $this->input->cookie(urldecode($idpost), FALSE);
        $ip = $this->input->ip_address();
        if ($check_visitor == false) {
            $cookie = array(
                "name"   => urldecode($idpost),
                "value"  => "$ip",
                "expire" =>  time() + 7200,
                "secure" => false
            );
            $this->input->set_cookie($cookie);
            $this->news->update_counter(urldecode($idpost));
        }
    }

       //menampilkan detail dari berita
    public function baca($seotag) {
        $data['sidebar_left'] = false;
        $post = $this->news->getseo($seotag);
        if(!$post) {
            $this->template->alert(
                'Could not load the requested item',
                'warning'
            );
            redirect('news');
            return;
        }

        $data['title'] = $post->title . ' | UPUNEWS';
        $data['news'] = $post;
        $data['author'] = get_user_profile($data['news']->iduser);

        $this->template->view('news/detail', $data);
    }


  

   

}