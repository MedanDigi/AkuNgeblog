<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    /**
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
        if(!is_logged_in()) {
            $this->template->alert(
                'Only members can access this page',
                'warning'
            );
            redirect('account/login');
            return;
        }
        redirect('/');
        /*$data['title'] = 'News archive | News portal';
        $data['news'] = $this->news->get_all();
        $this->template->view('news/list', $data);*/
    }

    //katagori
    public function category($idcategory) {
        if(!is_logged_in()) {
            $this->template->alert(
                'Only members can access this page',
                'warning'
            );
            redirect('account/login');
            return;
        }
        $this->load->model('category_model', 'cm');
        $category = $this->cm->get($idcategory);
        
        $data['category'] = $this->cm->get($idcategory);
        $data['title'] = $category->title . ' | UPUNEWS';
        $data['news'] = $this->news->get_by_idcategory($idcategory);

        $this->template->view('news/list', $data);
    }

    
    //tags
    public function tag($idtag) {
        if(!is_logged_in()) {
            $this->template->alert(
                'Only members can access this page',
                'warning'
            );
            redirect('account/login');
            return;
        }
        $this->load->model('tag_model', 'tm');
        $tag = $this->tm->get($idtag);

         $data['tag'] = $this->tm->get($idtag);
        $data['title'] = 'Topic '.$tag->title . ' | UPUNEWS';
        $data['news'] = $this->news->get_by_idtag($idtag);

        $this->template->view('news/list', $data);
    }

    //untuk pencarian keywords
    public function search($keyword = '') {
        if(!is_logged_in()) {
            $this->template->alert(
                'Only members can access this page',
                'warning'
            );
            redirect('account/login');
            return;
        }

        if($this->input->method(TRUE) == 'POST' && $this->input->post('keyword')) {
            $keyword = preg_replace('/[^a-z0-9_\-]/', '', trim($this->input->post('keyword')));
        }
        $data['title'] = 'Search: ' . $keyword . ' | UPUNEWS';
        $data['news'] = $this->news->get_by_keyword($keyword);
        if($data['news'] == null){
            $this->template->alert(
                'Sorry, Keyword "'.$this->input->post('keyword').'" is not found',
                'warning'
            );
        }

        $this->template->view('news/list', $data);
    }

    //fungsi untuk membuat RSS blog
    public function rss() {
        $this->load->helper('xml');
        $this->load->helper('text');

        $data['news'] = $this->news->get_posts(10);

        $data['encoding'] = 'utf-8';
        $data['feed_url'] = base_url('news/feed');
        header("Content-Type: application/rss+xml");

        $this->template->view('news/rss', $data, FALSE, $this->template->get(), TRUE);
    }

    //menampilkan detail dari berita
    public function detail($idpost) {
        //mendapatkan IP
        $ip = $this->input->ip_address();

        $post = $this->news->get($idpost);
        if(!$post) {
            $this->template->alert(
                'Could not load the requested item',
                'warning'
            );
            redirect('news');
            return;
        }
        $data['sidebar_left'] = false;
        $data['title'] = $post->title . ' | UPUNEWS';
        $data['news'] = $post;
        $data['author'] = get_user_profile($data['news']->iduser);

        $this->template->view('news/detail', $data);
        $this->add_count($idpost);
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


    //fungsi merubah berita menjadi pdf
    public function pdf($idpost) {
        $post = $this->news->get($idpost);
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
        $data['sidebar'] = FALSE;
        $data['template_name'] = $this->template->get();
        $data['pdf'] = TRUE;

        $this->load->library('pdf');
        $this->pdf->generate($this->template->get() . '/layout', array('data' => $data, 'view' => $this->template->get() . '/news/detail'));
        $this->pdf->Output("news_".$idpost.".pdf", "D");
    }

    public function tags(){
    $this->load->model('tag_model', 'tm');
    $tags = $this->tm->get_all(); 
    $data['tags'] = $tags;

    $response = array();
   $data = array();
    foreach ($tags as $tag) 
    { 
        $data[]  = array(
            "idtag"                 =>  $tag->idtag,
            "title"                 =>  $tag->title
        );
    } 

    echo json_encode($data,TRUE);
    }

    public function trending(){
        //judul
        $data['title'] = 'Trending';
        $this->template->view('home/rekomendasi', $data);
    }

}