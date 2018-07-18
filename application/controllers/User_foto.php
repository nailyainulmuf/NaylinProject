<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_foto extends CI_Controller {
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
		$this->load->model('user_foto_model');
		$data["foto_list"] = $this->user_foto_model->getTampilFoto();

		$this->load->view('view_user');
	}

	public function create()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];
		}
		$this->load->model('user_foto_model');
		$data['kategori_list'] = $this->user_foto_model->getKategori();
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('user_input_foto', $data);
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
						$this->load->view('user_input_foto');
				}
				else
				{
						$this->user_foto_model->insertFoto();
						$this->load->view('sukses_user_upload');
				}
		}
	}

}
