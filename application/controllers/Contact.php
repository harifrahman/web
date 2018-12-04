<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
    {
			parent::__construct();
    		
			$this->load->model('contact_model', 'dbObject');
    }

    public $tbl = 'contact';
	public $id_name = 'contact_id';

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('contact');
		$this->load->view('templates/footer');

	}

	public function create($param1='')
	{
		if ($param1 == 'do_create') {
			$contact_nama=trim($this->input->post('contact_nama'));

			$contact_subject=trim($this->input->post('contact_subject'));
			$contact_isi=$this->input->post('contact_isi');
			$contact_email=$this->input->post('contact_email');
			$contact_nohp=$this->input->post('contact_nohp');
	        $data = array(
				'contact_nama' => $contact_nama,
				'contact_subject' => $contact_subject,
				'contact_isi' => $contact_isi,
				'contact_email' => $contact_email,
				'contact_nohp' => $contact_nohp,
				'contact_created_time' => date('Y-m-d H:i:s')
			);
        
			if($this->dbObject->create_general($this->tbl, $data)===TRUE)		// using direct parameter
			{
				?>
				<script>
					alert(" Pesan Berhasil Terkirim. ");
					location.replace("<?=base_url()?>contact");
				</script>
				<?php
			}
			else {
				?>
				<script>
					alert(" Pesan Gagal Terkirim. ");
					location.replace("<?=base_url()?>contact");
				</script>
				<?php
			}
		}

	}
}
