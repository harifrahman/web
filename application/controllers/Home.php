<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
    {   parent::__construct();

		$this->load->model('home_model', 'dbObject');	
    }

	public function index()
	{
		$data['media'] = $this->dbObject->get_media_limit();
		$data['work'] = $this->dbObject->get_work_limit('work', 4);
		$data['testimoni'] = $this->dbObject->get_testimoni_limit('testimony', 3);

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('home2', $data);
		$this->load->view('templates/footer');
	}
	
}
