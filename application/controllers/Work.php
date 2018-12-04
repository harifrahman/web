<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('work_model', 'dbObject');	
    }

	public function index()
	{
		$data['work'] = $this->dbObject->get_general('work');

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('work/post', $data);
		$this->load->view('templates/footer');
	}

	public function post($param='')
	{
		if($param == null){
			redirect('work','refresh');
		}

		$table = 'work';
		$id_name = 'work_id';

		$data['detail_work'] = $this->dbObject->get_work_by_id($param);

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('work/single-post', $data);
		$this->load->view('templates/footer');
	}
}
