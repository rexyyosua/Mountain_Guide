<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eq extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if ($this->session->userdata('group') !='1'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		//load model -> model_admin_eq
		$this->load->model('model_admin_eq');
	}

	public function index()
		
	{
		$data['wis'] =$this->model_admin_eq->all();
		$this->load->view('backend/view_all_eq',$data);
	}
	
	public function create(){
		$this->form_validation->set_rules('name', 'Nama tempat wisata', 'required');
		$this->form_validation->set_rules('description', 'Deskripsi', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/form_tambah_eq');
		}else{
			
			$config['upload_path'] = './image/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '20000';
			$config['max_width']  = '2000';
			$config['max_height']  = '2000';

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$this->load->view('backend/form_tambah_eq');
			}else{
				$gambar = $this->upload->data();
				$data_wisata = array(
				'judul'			=> set_value('name'),
				'deskripsi'	=> set_value('description'),
				'gambar'			=> $gambar['file_name']
			);
			$this->model_admin_eq->create($data_wisata);
			redirect('admin/eq');
			}	
		}
	}
	
	public function update($id){
		$this->form_validation->set_rules('name', 'Nama Tempat Wisata', 'required');
		$this->form_validation->set_rules('description', 'Deskripsi', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['product'] = $this->model_admin_eq->find($id);
			$this->load->view('backend/form_edit_eq', $data);
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
					$data['wis'] = $this->model_admin_eq->find($id);
					$this->load->view('backend/form_edit_eq', $data);
				}else{
					$gambar = $this->upload->data();
					$data_wisata = array(
						'judul'			=> set_value('name'),
						'deskripsi'	=> set_value('description'),
						'gambar'			=> $gambar['file_name']
					);
					$this->model_admin_eq->update($id,$data_wisata);
					redirect('admin/eq');
				}
			}else{
				$data_product = array(
					'judul'			=> set_value('name'),
					'deskripsi'	=> set_value('description'),
				);
				$this->model_admin_eq->update($id,$data_wisata);
				redirect('admin/eq');
			}
		
		}

	}
	
	public function delete($id){
		$this->model_admin_eq->delete($id);
		redirect('admin/eq'); 
	}
}
 