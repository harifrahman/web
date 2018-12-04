<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('team_model', 'dbObject');	
    }

	public function index()
	{
		$data['team'] = $this->dbObject->get_general('team');

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('team', $data);
		$this->load->view('templates/footer');
	}

}
