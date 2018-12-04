<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends CI_Controller {

	public function __construct()
    {
			parent::__construct();
    		if ($this->session->userdata('login') == 0) redirect('auth/logout');
			$this->load->model('admin/work_model', 'dbObject');
    }

  	public $tbl = 'work';
	public $id_name = 'work_id';

	public function index()
	{
		$data['work'] = $this->dbObject->get_general($this->tbl);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/work/index', $data);
		$this->load->view('admin/templates/footer');
	}

	public function create($param1='')
	{
		$data['kategori'] = $this->dbObject->get_general('media_kategori');
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/work/create');
		$this->load->view('admin/templates/footer');
		if ($param1 == 'do_create') {
			$work_nama=trim($this->input->post('work_nama'));
			$work_deskripsi=trim($this->input->post('work_deskripsi'));
			$work_isi=$this->input->post('work_isi');
			$config['upload_path']          = 'assets/img/work';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 10000;
	        
	        $this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('work_image'))
	        {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);die;
	        }
	        else
	        {
		        $data = array(
					'work_nama' => $work_nama,
					'work_image' => $this->upload->data('file_name'),
					'work_isi' => $work_isi,
					'work_deskripsi' => $work_deskripsi,
					// 'work_created_by' => $this->session->userdata('user_id'),
					// 'work_created_by' => $this->session->userdata('user_id'),
					'work_created_time' => date('Y-m-d H:i:s')
				);
	        }
			if($this->dbObject->create_general($this->tbl, $data)===TRUE)		// using direct parameter
			{
				?>
				<script>
					alert(" Data berhasil disimpan. ");
					location.replace("<?=base_url()?>admin/work");
				</script>
				<?php
			}
			else {
				?>
				<script>
					alert(" Data gagal disimpan. ");
					location.replace("<?=base_url()?>admin/work");
				</script>
				<?php
			}
		}
	}

	public function update($param2='', $param1='')
	{
		$data['data_work'] = $this->dbObject->get_by_id_general($this->tbl, $this->id_name, $param2);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/work/update', $data);
		$this->load->view('admin/templates/footer');
		if ($param1 == 'do_update') {
			$work_nama=trim($this->input->post('work_nama'));
			$work_deskripsi=trim($this->input->post('work_deskripsi'));
			$work_isi=$this->input->post('work_isi');
			$config['upload_path']          = 'assets/img/work';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 10000;
	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('work_image'))
	        {
          $data = array(
					'work_nama' => $work_nama,
					'work_isi' => $work_isi,
					'work_deskripsi' => $work_deskripsi,
					'work_update_by' => $this->session->userdata('user_id'),
					'work_update_time' => date('Y-m-d H:i:s')
				);
	        }
	        else
	        {
		        $data = array(
					'work_nama' => $work_nama,
					'work_image' => $this->upload->data('file_name'),
					'work_isi' => $work_isi,
					'work_deskripsi' => $work_deskripsi,
					'work_created_by' => $this->session->userdata('user_id'),
					'work_created_time' => date('Y-m-d H:i:s')
				);
	        }
			if($this->dbObject->update_general($this->tbl, $this->id_name, $param2, $data)===TRUE)		// using direct parameter
			{
				?>
				<script>
					alert(" Data berhasil diubah. ");
					location.replace("<?=base_url()?>admin/work/");
				</script>
				<?php
			}
			else {
				?>
				<script>
					alert(" Data gagal diubah. ");
					location.replace("<?=base_url()?>admin/work/");
				</script>
				<?php
			}
		}
	}

	public function delete($param2='')
	{
		if($this->dbObject->delete_general($this->tbl, $this->id_name, $param2)===TRUE)		// using direct parameter
		{
			?>
			<script>
				alert(" Data berhasil dihapus. ");
				location.replace("<?=base_url()?>admin/work");
			</script>
			<?php
		}
		else {
			?>
			<script>
				alert(" Data gagal dihapus. ");
				location.replace("<?=base_url()?>admin/work");
			</script>
			<?php
		}
	}

}
