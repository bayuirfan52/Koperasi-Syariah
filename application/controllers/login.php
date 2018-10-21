<?php
	/**
	* 
	*/
	class login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_login');
			$this->load->helper('url');
		}

		function index()
		{
			if ($this->session->userdata('status') == "login") {
				redirect('dashboard');
			}
			$this->load->view('login');
		}

		function daftar()
		{
			$this->load->view('daftar');
		}

		function f_login()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'id_user' => $username,
				'pin_user' => $password
				);
			$cek = $this->m_login->validate("user",$where);
			if ($cek->num_rows() > 0) {
				foreach ($cek->result() as $data) {
					$sess_data['status'] = "login";
					$sess_data['id'] = $data->id_user;
					$sess_data['status_user'] = $data->status_user;
					$this->session->set_userdata($sess_data);
				}
				if ($this->session->userdata('status_user') == 'Nasabah') {
					redirect('dashboard/index');
				}
				elseif($this->session->userdata('status_user') == 'Karyawan'){
					redirect('dashboard_karyawan/index');
				}
			}
			else{
				redirect('login/index');
			}
		}

		function logout()
		{
			$this->session->sess_destroy();
			redirect('Welcome');
		}
	}
?>