<?php

class M_guestbook extends CI_Model{
	function ambil_data(){
		return $this->db->get('guestbook');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function cari_data($where,$table,$number,$offset){		
		return $query = $this->db->get_where($table,$where,$number,$offset)->result();
	}
	
	function data($number,$offset){
		return $query = $this->db->get('guestbook',$number,$offset)->result();		
	}
 
	function jumlah_data($where,$table){
		return $this->db->get_where($table,$where)->num_rows();
	}	



	
	
}