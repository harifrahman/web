<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('media_model', 'dbObject');	
    }

	public function index()
	{
		$data['media'] = $this->dbObject->get_media();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('blog/post', $data);
		$this->load->view('templates/footer');
	}

	public function post($param='')
	{
		if($param == null){
			redirect('media','refresh');
		}

		$table = 'media';
		$id_name = 'media_id';

		$data['detail_media'] = $this->dbObject->get_media_by_id($param);

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('blog/single-post', $data);
		$this->load->view('templates/footer');
	}
}
