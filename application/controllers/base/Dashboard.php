<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('tag_model', 'tags');
    }
    
    //Berita sepenuhnya hanya dapat diakses yang sudah login
    public function index() {
        /*if(!is_logged_in()) {
            $this->template->alert(
                'Only members can access this page',
                'warning'
            );
            redirect('account/login');
            return;
        }*/
        //$data['title'] = 'Topics';
        //$data['tags'] = $this->tags->get_all();
        $this->adtemplate->view('layout');
    }
 
    public function users() {
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

    public function news() {
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

	public function ajax_list()
	{
		$db = array('id','firstName','lastName','gender','address','dob');

		$list = $this->person->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			for($i=1;$i<=5;$i++)
			{
				$row[] = $person->$db[$i];
			}
			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="edit_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->person->count_all(),
						"recordsFiltered" => $this->person->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->person->get_by_id($id);
		$data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->_validate();
		$data = array(
				'firstName' => $this->input->post('firstName'),
				'lastName' => $this->input->post('lastName'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
			);
		$insert = $this->person->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
		$data = array(
				'firstName' => $this->input->post('firstName'),
				'lastName' => $this->input->post('lastName'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
			);
		$this->person->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->person->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('firstName') == '')
		{
			$data['inputerror'][] = 'firstName';
			$data['error_string'][] = 'First name is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('lastName') == '')
		{
			$data['inputerror'][] = 'lastName';
			$data['error_string'][] = 'Last name is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('dob') == '')
		{
			$data['inputerror'][] = 'dob';
			$data['error_string'][] = 'Date of Birth is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('gender') == '')
		{
			$data['inputerror'][] = 'gender';
			$data['error_string'][] = 'Please select gender';
			$data['status'] = FALSE;
		}

		if($this->input->post('address') == '')
		{
			$data['inputerror'][] = 'address';
			$data['error_string'][] = 'Addess is required';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}

}
