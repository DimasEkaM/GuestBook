<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Event extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_event');
	}
 


	public function index($id=NULL)
	 {
	 $jml = $this->db->get('event');

	//pengaturan pagination
	 $config['base_url'] = base_url().'event/index';
	 $config['total_rows'] = $jml->num_rows();
	 $config['per_page'] = '5';
	 $config['first_page'] = 'Awal';
	 $config['last_page'] = 'Akhir';
	 $config['next_page'] = '&laquo;';
	 $config['prev_page'] = '&raquo;';

	//inisialisasi config
	 $this->pagination->initialize($config);

	//buat pagination
	 $data['halaman'] = $this->pagination->create_links();

	//tamplikan data
	 $data['event'] = $this->m_event->ambil_event($config['per_page'], $id);

	$this->load->view('event/viewEvent', $data);
    }
	
	
	
	function tambah(){
		$this->load->view('event/tambahEvent');
	}
	
    function tambah_aksi(){
		$nama_event  = $this->input->post('nama_event');
		$tgl_mulai   = $this->input->post('tgl_mulai');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$keterangan  = $this->input->post('keterangan');
 
 		$this->form_validation->set_rules('nama_event','nama_event','required');
		$this->form_validation->set_rules('tgl_mulai','tgl_mulai','required');	
		$this->form_validation->set_rules('tgl_selesai','tgl_selesai','required');	
		$this->form_validation->set_rules('keterangan','keterangan','required');	
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');	
		
		if($this->form_validation->run() != false){
			$data = array(
				'nama_event'	=> $nama_event,
				'tgl_mulai' 	=> $tgl_mulai,
				'tgl_selesai' 	=> $tgl_selesai,
				'keterangan' 	=> $keterangan,
				);
			$this->m_event->input_data($data,'event');
			$this->session->set_flashdata('item', 'Data berhasil disimpan');
			redirect(current_url());
		}else{
			$this->load->view('event/tambahEvent');
		}
	}

	function edit($id){
		$where = array('id_event' => $id);
		$data['event'] = $this->m_event->edit_data($where,'event')->result();
		$this->load->view('event/updateEvent',$data);
	}
	
	function update(){
		$id_event 		= $this->input->post('id_event');
		$nama_event 	= $this->input->post('nama_event');
		$tgl_mulai 		= $this->input->post('tgl_mulai');
		$tgl_selesai 	= $this->input->post('tgl_selesai');
		$keterangan 	= $this->input->post('keterangan');

		$data = array(
			'nama_event'	=> $nama_event,
			'tgl_mulai'  	=> $tgl_mulai,
			'tgl_selesai' 	=> $tgl_selesai,
			'keterangan' 	=> $keterangan,
		);

		$where = array(
			'id_event' => $id_event
		);

		$this->m_event->update_data($where,$data,'event');
		redirect('event');
	}

	function hapus($id){
		$where = array('id_event' => $id);
		$this->m_event->hapus_data($where,'event');
		redirect('event');
	}	
 
}