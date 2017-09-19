<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if ($this->session->userdata('group') !='1'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		//load model -> model_admin_tutor
		$this->load->model('model_admin_tutor');
	}

	public function index()
		
	{
		$data['wis'] =$this->model_admin_tutor->all();
		$this->load->view('backend/view_all_tutor',$data);
	}
	
	public function create(){
		$this->form_validation->set_rules('name', 'Nama tempat wisata', 'required');
		$this->form_validation->set_rules('description', 'Deskripsi', 'required');
		$this->form_validation->set_rules('ly', 'Link Youtube', 'required');
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/form_tambah_tutor');
		}else{
			
			$config['upload_path'] = './image/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '20000';
			$config['max_width']  = '2000';
			$config['max_height']  = '2000';

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$this->load->view('backend/form_tambah_tutor');
			}else{
				$gambar = $this->upload->data();
				$data_wisata = array(
				'judul'		=> set_value('name'),
				'details'	=> set_value('description'),
				'ly'		=> set_value('ly'),
				'gambar'	=> $gambar['file_name']
			);
			$this->model_admin_tutor->create($data_wisata);
			redirect('admin/tutor');
			}	
		}
	}
	
	public function update($id){
		$this->form_validation->set_rules('name', 'Nama Tempat Wisata', 'required');
		$this->form_validation->set_rules('description', 'Deskripsi', 'required');
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['product'] = $this->model_admin_tutor->find($id);
			$this->load->view('backend/form_edit_tutor', $data);
		}else{
			if($_FILES['userfile']['name'] !=''){
				$config['upload_path'] = './image/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '2000000';
				$config['max_width']  = '2000';
				$config['max_height']  = '2000';

				$this->load->library('upload', $config);
			
				if ( ! $this->upload->do_upload())
				{
					$data['wis'] = $this->model_admin_tutor->find($id);
					$this->load->view('backend/form_edit_tutor', $data);
				}else{
					$gambar = $this->upload->data();
					$data_wisata = array(
						'judul'			=> set_value('name'),
						'details'	=> set_value('description'),
						'ly'		=>set_value('ly'),
						'gambar'			=> $gambar['file_name']
					);
					$this->model_admin_tutor->update($id,$data_wisata);
					redirect('admin/tutor');
				}
			}else{
				$data_product = array(
					'judul'			=> set_value('name'),
					'details'	=> set_value('description'),
					'ly'		=>set_value('ly'),
					
				);
				$this->model_admin_tutor->update($id,$data_wisata);
				redirect('admin/tutor');
			}
		
		}

	}
	
	public function delete($id){
		$this->model_admin_tutor->delete($id);
		redirect('admin/tutor'); 
	}
}
 