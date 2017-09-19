<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_ml');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function monutlist()
	{
		$data['ml'] = $this->model_ml->all();
		$this->load->view('mountain_list',$data);
	}
	public function tutorial()
	{
		$data['ml'] = $this->model_ml->all_tutor();
		$this->load->view('tutorial',$data);
	}
	public function tnt()
	{
		$data['ml'] = $this->model_ml->all_tnt();
		$this->load->view('tnt',$data);
	}
	public function eq()
	{
		$data['ml'] = $this->model_ml->all_eq();
		$this->load->view('eq',$data);
	}
	public function detail($gn_id)
	{
		$data['ml'] = $this->model_ml->find($gn_id);
		$this->load->view('detail',$data);
	}
	public function detail_tutor($gn_id)
	{
		$data['ml'] = $this->model_ml->find_tutor($gn_id);
		$this->load->view('detail_tutor',$data);
	}
	public function detail_tnt($gn_id)
	{
		$data['ml'] = $this->model_ml->find_tnt($gn_id);
		$this->load->view('detail_tutor',$data);
	}
	public function detail_eq($gn_id)
	{
		$data['ml'] = $this->model_ml->find_eq($gn_id);
		$this->load->view('detail_eq',$data);
	}
}