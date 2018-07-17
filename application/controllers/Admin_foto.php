<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_foto extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];

			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if(! $this->acl->is_public($current_controller)){
				if (! $this->acl->is_allowed($current_controller, $data['level'])){
					redirect('login/logout', 'refresh');
				}
			}

			}else{
				redirect('login', 'refresh');
			}
	}

	public function index() 
	{		

		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];
		}
			$this->load->model('foto_model');
			$data["foto_list"] = $this->foto_model->getTampilFoto();
			$this->load->view('view_foto_admin', $data);
			
	}

	public function create()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];
		}
		$this->load->model('foto_model');
		$data['kategori_list'] = $this->foto_model->getKategori();
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('input_data_foto', $data);
		}else{
				$config['upload_path']			= './assets/images/foto';
				$config['allowed_types']		= 'gif|jpg|png';
				$config['max_size']				= 1000000000;
				$config['max_width']			= 10240;
				$config['max_height']			= 7680;

				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('userfile'))
				{
						$error = array('error' => $this->upload->display_errors());
						$this->load->view('input_data_foto');
				}
				else
				{
						$this->foto_model->insertFoto();
						$this->load->view('sukses_input_foto');
				}
		}
	}

	public function update($id)
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];
		}
		$this->load->model('foto_model');
		$data['admin_foto']=$this->foto_model->getFoto($id);
		$data['kategori_list'] = $this->foto_model->getKategori();
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('edit_data_foto', $data);
		}else{
			
				$config['upload_path']			= './assets/images/foto';
				$config['allowed_types']		= 'gif|jpg|png';
				$config['max_size']				= 1000000000;
				$config['max_width']			= 10240;
				$config['max_height']			= 7680;

				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('userfile'))
				{
						$this->foto_model->updateById($id);
						$this->load->view('sukses_edit_foto');
				}
				else
				{
						$this->foto_model->updateById($id);
						$this->load->view('sukses_edit_foto');
				}
		}
	}

	public function delete($id)
	{
		$this->load->model('foto_model');
		$this->foto_model->delete($id);
		redirect('admin_foto');
	}

}
