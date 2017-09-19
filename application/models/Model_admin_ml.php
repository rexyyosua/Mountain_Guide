<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_ml extends CI_Model {
		
		public function all(){
			$hasil =$this->db->get('ml');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find ($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('ml');
			if($hasil->num_rows() > 0){
				return $hasil->row();
			}else{
				return array();
			}
		}
		
		public function create($data_wisata){
			$this->db->insert('ml',$data_wisata);
		}
		
		public function update($id, $data_wisata){
			$this->db->where('id',$id)
					 ->update('ml',$data_wisata);
		}
		
		public function delete($id){
			$this->db->where('id',$id)
					 ->delete('ml'); 
		}
		
		public function details($id){
			$hasil =$this->db->where('id',$id)
						 ->limit(1)
						 ->get('ml');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		
}