<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ml extends CI_Model {
		
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
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function all_tutor(){
			$hasil =$this->db->get('tutor');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find_tutor ($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('tutor');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function all_tnt(){
			$hasil =$this->db->get('tnt');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find_tnt ($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('tnt');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function all_eq(){
			$hasil = $this->db->get('eq');
			if($hasil->num_rows() > 0 ){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find_eq ($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('eq');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}		
}