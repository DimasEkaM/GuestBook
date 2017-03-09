<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_user');
	}
 
	public function index($id=NULL)
	 {
	 $jml = $this->db->get('user');

	//pengaturan pagination
	 $config['base_url'] = base_url().'user/index';
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
	 $data['user'] = $this->m_user->ambil_user($config['per_page'], $id);

	$this->load->view('user/viewUser', $data);
    }
 
 	function tambah(){
		$this->load->view('user/tambahUser');
	}
	
    function tambah_aksi(){
		$username  	= $this->input->post('username');
		$password   = $this->input->post('password');
		$level 		= $this->input->post('level');
		$nama 		= $this->input->post('nama');

		$this->form_validation->set_rules('username','Username','required|min_length[6]|max_length[10]');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');	
		$this->form_validation->set_rules('level','Level','required');	
		$this->form_validation->set_rules('nama','Nama','required');	

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');	
		
	if($this->form_validation->run() != false){
		$data = array(
			'username'	=> $username,
			'password' 	=> $password,
			'level' 	=> $level,
			'nama'		=> $nama,
			);
		$this->m_user->input_data($data,'user');
		$this->session->set_flashdata('item', 'Data berhasil disimpan');
		redirect(current_url());

		}else{
		$this->load->view('user/tambahUser');
		}		

	}
	
	function edit($id){
	$where = array('id' => $id);
	$data['user'] = $this->m_user->edit_data($where,'user')->result();
	$this->load->view('user/updateUser',$data);
	}
	
	function update(){
		$id 		= $this->input->post('id');
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$level 		= $this->input->post('level');
		$nama 		= $this->input->post('nama');
		
		$data = array(
			'username'	=> $username,
			'password'  => $password,
			'level' 	=> $level,
			'nama'		=> $nama,
		);

		$where = array(
			'id' => $id
		);

		$this->m_user->update_data($where,$data,'user');
		redirect('user');
	}	
	function hapus($id){
		$where = array('id' => $id);
		$this->m_user->hapus_data($where,'user');
		redirect('user');
	}	
 
}