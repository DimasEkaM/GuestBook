<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('main/v_login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password,
			);

		$query  = $this->m_login->cek_login("user",$where);	
		$cek = $this->m_login->cek_login("user",$where)->num_rows();

		if($cek > 0){
 		foreach ($query->result_array() as $row)
			{
				$row['level'];

			
			$data_session = array(
				'nama'    => $row['nama'],
				'status'  => "login",
				'level' => $row['level']
				
				);
			}
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("dashboard"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}


