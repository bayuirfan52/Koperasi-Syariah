<?php
	/**
	* 
	*/
	class Dashboard_karyawan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_login');
			$this->load->model('m_karyawan');
			$this->load->helper('url');
		}

		function index()
		{
			if ($this->session->userdata('status') == "login") {
				redirect('dashboard_karyawan/dashboard');
			}
			$this->load->view('v_login');
		}

		function dashboard()
		{
			if ($this->session->userdata('status') != "login") {
				redirect('login/index');
			}
			$this->load->view('karyawan/dashboard');
		}

		public function profil()
		{
			$nama = $this->session->userdata('id');
			$hasil['data'] = $this->m_karyawan->get_data('karyawan',array('id_user' => $nama))->result();
			$this->load->view('karyawan/dashboard');
			$this->load->view('karyawan/profil',$hasil);
		}

		public function gaji()
		{
			$id = $this->session->userdata('id');
			$hasil['data'] = $this->m_karyawan->get_data_gaji($id)->result();
			$this->load->view('karyawan/dashboard');
			$this->load->view('karyawan/gaji',$hasil);
		}

		public function setting_profil()
		{
			$id = $this->session->userdata('id');
			$data_profil = array('id_user' => $id);
			$hasil['profil'] = $this->m_karyawan->get_data('karyawan',$data_profil)->result();
			$this->load->view('karyawan/dashboard');
			$this->load->view('karyawan/pengaturan_profil',$hasil);
		}

		public function setting_akun()
		{
			$id = $this->session->userdata('id');
			$data_profil = array('id_user' => $id);
			$hasil['akun'] = $this->m_karyawan->get_data('user',$data_profil)->result();
			$this->load->view('karyawan/dashboard');
			$this->load->view('karyawan/pengaturan_akun',$hasil);
		}

		public function peringatan()
		{
			$id = $this->session->userdata('id');
			$hasil['warning'] = $this->m_karyawan->get_data_sp($id)->result();
			$this->load->view('karyawan/dashboard');
			$this->load->view('karyawan/peringatan',$hasil);
		}

		public function update_profil()
		{
			$id = $this->input->post('id');
			$data = array(
				'alamat_karyawan' => $this->input->post('alamat'), 
				'kode_pos' => $this->input->post('kode_pos'),
			);
			$this->m_karyawan->update_data('karyawan','id_user',$id,$data);
			redirect('dashboard_karyawan/profil');
		}

		public function update_akun()
		{
			$id = $this->input->post('id');
			$data = array('pin_user' => $this->input->post('newPass'));
			$this->m_karyawan->update_data('user','id_user',$id,$data);
			redirect('dashboard_karyawan/setting_akun');
		}
	}
?>