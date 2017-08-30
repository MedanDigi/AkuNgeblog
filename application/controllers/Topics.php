<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topics extends CI_Controller {

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('tag_model', 'tags');
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
        $data['title'] = 'Topics';
        $data['tags'] = $this->tags->get_all();
        $this->template->view('home/topics', $data);
    }

   
    
    //tags
    public function topic($idtag) {
        if(!is_logged_in()) {
            $this->template->alert(
                'Only members can access this pzage',
                'warning'
            );
            redirect('account/login');
            return;
        }
        $this->load->model('tag_model', 'tm');
        $tag = $this->tm->get($idtag);

        $data['title'] = $tag->title . ' | News portal';
        $data['news'] = $this->news->get_by_idtag($idtag);

        $this->template->view('news/list', $data);
    }

}