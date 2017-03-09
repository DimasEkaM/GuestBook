<?php

class M_event extends CI_Model{
	function ambil_data(){
		return $this->db->get('event');
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}	
	public function ambil_event($num, $offset)
	{
		$this->db->order_by('id_event', 'ASC');
		$data = $this->db->get('event', $num, $offset);
		return $data->result();
	}
	
	
}