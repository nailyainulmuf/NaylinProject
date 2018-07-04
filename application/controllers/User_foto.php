<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_foto extends CI_Controller {
	
	public function index()
	{
		$this->load->model('user_foto_model');
			$data["foto_list"] = $this->user_foto_model->getTampilFoto();
		$this->load->view('view_user');
	}
	
	public function create()
	{
		$this->load->model('user_foto_model');
		$data['kategori_list'] = $this->user_foto_model->getKategori();
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

		//$data['id_user'] = $session_data['fk_user'];
		
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
						$this->load->view('user_sukses_input_foto');
				}
		}
	}
	public function update($id)
	{
		$this->load->model('user_foto_model');
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		
		$data['admin_foto']=$this->user_foto_model->getFoto($id);

		if ($this->form_validation->run() == FALSE){
			$this->load->view('user_edit_foto', $data);
		}else{
			$this->user_foto_model->updateById($id);
			$this->load->view('user_sukses_edit_foto');

		}
	}

	public function delete($id)
	{
		$this->load->model('user_foto_model');
		$this->user_foto_model->delete($id);
		redirect('user_foto');
	}

}
