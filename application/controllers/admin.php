<?php
	/**
	* 
	*/
	class admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_login');
			$this->load->model('m_admin');
			$this->load->helper('url');
		}

		function index()
		{
			if ($this->session->userdata('status') == "adminlogin") {
				redirect('admin/dashboard');
			}
			$this->load->view('administrator');
		}

		function f_login()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'id_admin' => $username,
				'password' => $password
				);
			$cek = $this->m_login->validate('admin',$where);
			if ($cek->num_rows() > 0) {
				foreach ($cek->result() as $data) {
					$sess_data['status'] = "adminlogin";
					$sess_data['id'] = $data->id_admin;
					$this->session->set_userdata($sess_data);
				}
				redirect('admin/dashboard');
			}
			else{
				redirect('admin/index');
			}
		}

		function logout()
		{
			$this->session->sess_destroy();
			redirect('Welcome');
		}

		function dashboard()
		{
			$this->load->view('administrator/dashboard');
		}

		function data_anggota()
		{
			$data['anggota'] = $this->m_admin->get_data('anggota')->result();
			$this->load->view('administrator/dashboard');
			$this->load->view('administrator/data_anggota',$data);
		}

		function data_karyawan()
		{
			$hasil['data'] = $this->m_admin->get_data('karyawan')->result();
			$this->load->view('administrator/dashboard');
			$this->load->view('administrator/data_karyawan',$hasil);
		}

		function data_admin()
		{
			$hasil['data'] = $this->m_admin->get_data('admin')->result();
			$this->load->view('administrator/dashboard');
			$this->load->view('administrator/data_admin',$hasil);
		}

		public function data_berita()
		{
			$hasil['data'] = $this->m_admin->get_data('kabar')->result();
			$this->load->view('administrator/dashboard');
			$this->load->view('administrator/data_berita',$hasil);
		}

		public function editor()
		{
			$this->load->view('administrator/dashboard');
			$this->load->view('administrator/editor_berita');
		}

		public function input_berita()
		{
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			/*$config['upload_path'] = './assets/images/blog/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '2048';
			$config['max_width'] = '1600';
			$config['max_height'] = '1200';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('gambar')) {
				$image = $this->upload->data('file_name');
				$image_path = '/assets/images/blog/' + $image;*/
				$data = array(
					'id_berita' => null,
					'image' => 'no_image',
					'judul_berita' => $judul,
					'tanggal_berita' => date('Y-m-d'),
					'isi' => $isi
					);
				$this->m_admin->insert_berita($data);
				redirect('admin/data_berita');				
			/*}
			else{
				redirect('admin/editor');
			}*/
		}

		public function update_berita()
		{
			$id = $this->input->post('id');
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			/*$config['upload_path'] = './assets/images/blog/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '2048';
			$config['max_width'] = '1600';
			$config['max_height'] = '1200';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('gambar')) {
				$image = $this->upload->data('file_name');
				$image_path = '/assets/images/blog/' + $image;*/
				$data = array(
					'image' => 'no_image',
					'judul_berita' => $judul,
					'tanggal_berita' => date('Y-m-d'),
					'isi' => $isi
					);
				$this->m_admin->update_data('kabar','id_berita',$id,$data);
				redirect('admin/data_berita');				
			/*}
			else{
				redirect('admin/editor');
			}*/
		}

		public function edit_nasabah()
		{
			$id = $this->input->post('id');
			$data_profil = array('id_user' => $id);
			$hasil['profil'] = $this->m_admin->get_where_data('anggota',$data_profil)->result();
			$hasil['akun'] = $this->m_admin->get_where_data('user',$data_profil)->result();
			$this->load->view('administrator/dashboard');
			$this->load->view('administrator/edit_anggota',$hasil);
		}

		public function edit_karyawan()
		{
			$id = $this->input->post('id');
			$data_profil = array('id_user' => $id);
			$hasil['profil'] = $this->m_admin->get_where_data('karyawan',$data_profil)->result();
			$hasil['akun'] = $this->m_admin->get_where_data('user',$data_profil)->result();
			$this->load->view('administrator/dashboard');
			$this->load->view('administrator/edit_karyawan',$hasil);
		}

		public function edit_admin()
		{
			$id = $this->input->post('id');
			$data_profil = array('id_admin' => $id);
			$hasil['akun'] = $this->m_admin->get_where_data('admin',$data_profil)->result();
			$this->load->view('administrator/dashboard');
			$this->load->view('administrator/edit_admin',$hasil);
		}

		public function edit_akun()
		{
			$id = $this->session->userdata('id');
			$data_profil = array('id_admin' => $id);
			$hasil['akun'] = $this->m_admin->get_where_data('admin',$data_profil)->result();
			$this->load->view('administrator/dashboard');
			$this->load->view('administrator/edit_akun',$hasil);
		}

		public function edit_berita()
		{
			$id_berita = $this->input->post('id');
			$data = array('id_berita' => $id_berita);
			$hasil['data'] = $this->m_admin->get_where_data('kabar',$data)->result();
			$this->load->view('administrator/dashboard');
			$this->load->view('administrator/editor_berita',$hasil);
		}

		public function update_profil()
		{
			$id = $this->input->post('id');
			$data = array(
				'nama_nasabah' => $this->input->post('nama'),
				'tmp_lahir_nasabah' => $this->input->post('tmp_lahir'),
				'tgl_lahir_nasabah' => date('Y-m-d',$this->input->post('tanggal')),
				'jk_nasabah' => $this->input->post('jk'),
				'alamat_nasabah' => $this->input->post('alamat'), 
				'kode_pos' => $this->input->post('kode_pos'),
				'pekerjaan_nasabah' => $this->input->post('pekerjaan'),
				'penghasilan_nasabah' => $this->input->post('penghasilan'),
				'pengeluaran_nasabah' => $this->input->post('penghasilan'),
			);
			$this->m_admin->update_data('anggota','id_user',$id,$data);
			redirect('admin/data_anggota');
		}

		public function update_akun()
		{
			$id = $this->input->post('id');
			$data = array('pin_user' => $this->input->post('newPass'));
			$this->m_admin->update_data('user','id_user',$id,$data);
			redirect('admin/data_anggota');
		}

		public function update_karyawan_p()
		{
			$id = $this->input->post('id');
			$data = array(
				'nama_karyawan' => $this->input->post('nama'),
				'tmp_lahir_karyawan' => $this->input->post('tmp_lahir'),
				'tgl_lahir_karyawan' => date('Y-m-d',$this->input->post('tanggal')),
				'jk_karyawan' => $this->input->post('jk'),
				'alamat_karyawan' => $this->input->post('alamat'), 
				'kode_pos' => $this->input->post('kode_pos'),
			);
			$this->m_admin->update_data('karyawan','id_user',$id,$data);
			redirect('admin/data_karyawan');
		}

		public function update_karyawan_a()
		{
			$id = $this->input->post('id');
			$data = array('pin_user' => $this->input->post('newPass'));
			$this->m_admin->update_data('user','id_user',$id,$data);
			redirect('admin/data_karyawan');
		}

		public function update_akun_admin()
		{
			$id = $this->input->post('id');
			$data = array(
				'id_admin' => $id,
				'password' => $this->input->post('newPass'));
			$this->m_admin->update_data('admin','id_admin',$id,$data);
			redirect('admin/edit_akun');
		}

		public function update_admin()
		{
			$id = $this->input->post('id');
			$data = array(
				'id_admin' => $id,
				'password' => $this->input->post('newPass'));
			$this->m_admin->update_data('admin','id_admin',$id,$data);
			redirect('admin/data_admin');
		}
	}
?>