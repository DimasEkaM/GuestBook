<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Guestbook extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_guestbook');
		$this->load->model('m_event');		
	}
 
	function index(){
		$data['event'] = $this->m_event->ambil_data()->result();
		$this->load->view('guestbook/guestbook',$data);
	}

	function listGuest($id){
		$where = array('event_id' => $id);
		$data['guestbook'] = $this->m_guestbook->edit_data($where,'guestbook')->result();		
	    $this->load->view('guestbook/viewGuestbook',$data);
	}

	function pagination(){
		$this->load->database();
		$jumlah_data = $this->m_guestbook->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'guestbook/pagination/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['guestbook'] = $this->m_guestbook->data($config['per_page'],$from);
		$this->load->view('guestbook/viewGuestbook',$data);	
	}
	
	function pagination2($id){
		$this->load->database();
		$where = array('event_id' => $id);
		
		$jumlah_data = $this->m_guestbook->jumlah_data($where,'guestbook');
		
		$this->load->library('pagination');
		$config['base_url'] = base_url().'guestbook/pagination2/'.$id;
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);	
		
		
		$data['guestbook'] = $this->m_guestbook->cari_data($where,'guestbook',$config['per_page'],$from);	
		$this->load->view('guestbook/viewGuestbook',$data);	
	}	
	
	function addGuest($id){
		$where = array('id_event' => $id);
		$data['event'] = $this->m_event->edit_data($where,'event')->result();		
	    $this->load->view('guestbook/addGuest',$data);
	}
	
    function tambahGuest(){
		
		$event_id  			= $this->input->post('event_id');
		$nama   			= $this->input->post('nama');
		$no_telepon			= $this->input->post('no_telepon');
		$nama_perusahaan  	= $this->input->post('nama_perusahaan');
		$jabatan  			= $this->input->post('jabatan');
		$email  			= $this->input->post('email');		
		date_default_timezone_set('Asia/Jakarta');	
		$today = date("Y-m-d H:i:s");

		$datetime  			= $today;
		$nama_sales 		= $this->session->userdata("nama");	

		$data = array(
			'event_id'			=> $event_id,
			'nama' 				=> $nama,
			'no_telepon' 		=> $no_telepon,
			'nama_perusahaan' 	=> $nama_perusahaan,
			'jabatan' 			=> $jabatan,
			'email' 			=> $email,
			'datetime'			=> $datetime,
			'nama_sales'		=> $nama_sales,
			);
			$this->m_guestbook->input_data($data,'guestbook');
			$this->session->set_flashdata('item', 'Data berhasil disimpan');
			redirect('guestbook/addGuest/'.$event_id);

	}


		
 
}