<?php
	/**
	* 
	*/
	class get_data_nasabah extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_nasabah');
			$this->load->helper('url');
			$this->load->library('nasabah');
		}

		function profil()
		{
			$nama = $this->session->userdata('id');
			$hasil['data'] = $this->m_nasabah->get_data_profil($nama)->result();
			$this->load->view('nasabah/dashboard');
			$this->load->view('nasabah/profil',$hasil);
		}

		function tabungan()
		{
			$nama = $this->session->userdata('id');
			$hasil['data'] = $this->m_nasabah->get_data_tabungan($nama)->result();
			$this->load->view('nasabah/dashboard');
			$this->load->view('nasabah/tabungan',$hasil);
		}

		function pinjaman()
		{
			$nama = $this->session->userdata('id');
			$hasil['data'] = $this->m_nasabah->get_data_pinjaman($nama)->result();
			$this->load->view('nasabah/dashboard');
			$this->load->view('nasabah/pinjaman',$hasil);
		}

		function validate_pinjaman()
		{
			$status = $this->input->post('status');
			if ($status == "Belum Lunas") {
				redirect('get_data_nasabah/pinjaman');
			}
			else{
				$id = $this->input->post('id');
				redirect('get_data_nasabah/request_pinjaman/'.$id);
			}
		}

		function request_pinjaman($id)
		{
			if ($id == 1) {
				$nama = $this->session->userdata('id');
				$hasil = $this->m_nasabah->get_data_profil($nama);
				foreach ($hasil->result() as $duit) {
					$penghasilan = $duit->penghasilan_nasabah;
					$pengeluaran = $duit->pengeluaran_nasabah;
				}
				$uang_pinjam['uang_pinjam'] = $this->nasabah->hitung_peminjaman($penghasilan);
				$this->load->view('nasabah/dashboard');
				$this->load->view('nasabah/modal',$uang_pinjam);
			}
			else{
				$nama = $this->session->userdata('id');
				$hasil = $this->m_nasabah->get_data_profil($nama);
				foreach ($hasil->result() as $duit) {
					$penghasilan = $duit->penghasilan_nasabah;
					$pengeluaran = $duit->pengeluaran_nasabah;
				}
				$saldo['saldo'] = $this->m_nasabah->get_saldo($nama);
				$this->load->view('nasabah/dashboard');
				$this->load->view('nasabah/kendaraan',$saldo);
			}
		}

		function proses_pinjaman()
		{
			$id = $this->session->userdata('id');
			$data = array(
				'id_pinjaman' => null,
				'id_user' => $id,
				'nominal_total' => $this->input->post('nominal_total'),
				'nominal_bulan' => $this->input->post('angsuran'),
				'pembayaran_bulan' => $this->input->post('durasi'),
				'terakhir_bayar' => date('Y-m-d'),
				'sisa_pembayaran' => $this->input->post('nominal_total'),
				'sisa_bulan' => $this->input->post('durasi'),
				'status_pinjaman' => 'Belum Lunas'
			);
			$saldo = $this->m_nasabah->get_saldo($id);
			$saldo_akhir = $saldo + $this->input->post('nominal_total');
			$hasil = array(
				'no_transaksi' => null,
				'id_user' => $id,
				'tgl_tabungan' => date('Y-m-d'),
				'setoran' => $this->input->post('nominal_total'),
				'penarikan' => 0,
				'saldo' => $saldo_akhir,
			);
			$this->m_nasabah->insert_tabungan($hasil);
			$this->m_nasabah->insert_pinjaman($data);
			redirect('get_data_nasabah/pinjaman');
		}

		public function pinjaman_kendaraan()
		{
			$id = $this->session->userdata('id');
			$data = array(
				'id_pinjaman' => null,
				'id_user' => $id,
				'nominal_total' => $this->input->post('total_biaya'),
				'nominal_bulan' => $this->input->post('angsuran'),
				'pembayaran_bulan' => $this->input->post('durasi'),
				'terakhir_bayar' => date('Y-m-d'),
				'sisa_pembayaran' => $this->input->post('total_biaya'),
				'sisa_bulan' => $this->input->post('durasi'),
				'status_pinjaman' => 'Belum Lunas'
			);
			$saldo = $this->m_nasabah->get_saldo($id);
			$saldo_akhir = $saldo - $this->input->post('dp');
			$hasil = array(
				'no_transaksi' => null,
				'id_user' => $id,
				'tgl_tabungan' => date('Y-m-d'),
				'setoran' => 0,
				'penarikan' => $this->input->post('dp'),
				'saldo' => $saldo_akhir,
			);
			$this->m_nasabah->insert_tabungan($hasil);
			$this->m_nasabah->insert_pinjaman($data);
			redirect('get_data_nasabah/pinjaman');
		}

		function update_angsuran()
		{
			$id = $this->session->userdata('id');
			$saldo = $this->m_nasabah->get_saldo($id);
			$sisa_angsur = $this->input->post('sisa_angsur');
			$nominal = $this->input->post('duit');
			if ($this->input->post('sisa') == 1) {
				$data = array(
					'terakhir_bayar' => date('Y-m-d'),
					'sisa_pembayaran' => $sisa_angsur - $nominal,
					'sisa_bulan' => $this->input->post('sisa_bulan') - 1,
					'status_pinjaman' => 'Lunas'
				);				
			}
			else{
				$data = array(
					'terakhir_bayar' => date('Y-m-d'),
					'sisa_pembayaran' => $sisa_angsur - $nominal,
					'sisa_bulan' => $this->input->post('sisa_bulan') - 1,
					'status_pinjaman' => 'Belum Lunas'
				);
			}
			$this->m_nasabah->update_data_pinjaman($id,$data);
			$this->m_nasabah->update_riwayat($id,$nominal,'Keluar','Angsuran');
			$this->m_nasabah->update_penarikan_tabungan($id,$nominal,$saldo);
			redirect('get_data_nasabah/pinjaman');
		}

		function pengaturan_akun()
		{
			$nama = $this->session->userdata('id');
			$hasil['id_data'] = $this->m_nasabah->get_data_akun($nama)->result();
			$this->load->view('nasabah/dashboard');
			$this->load->view('nasabah/pengaturan_akun',$hasil);
		}

		function pengaturan_profil()
		{
			$nama = $this->session->userdata('id');
			$hasil['data'] = $this->m_nasabah->get_data_profil($nama)->result();
			$this->load->view('nasabah/dashboard');
			$this->load->view('nasabah/pengaturan_profil',$hasil);
		}

		function riwayat()
		{
			$nama = $this->session->userdata('id');
			$hasil['data'] = $this->m_nasabah->get_data_riwayat($nama)->result();
			$this->load->view('nasabah/dashboard');
			$this->load->view('nasabah/riwayat',$hasil);
		}

		function update_riwayat($id)
		{

			$nominal = $this->input->post('nominal');
			switch ($id) {
				case 1:
					$ket = 'Keluar';
					$keperluan = 'Pulsa';
					break;
				case 2:
					$ket = 'Keluar';
					$keperluan = 'Pembayaran';
					$data = array(
						'id_pembayaran' => null, 
						'id_user' => $this->session->userdata('id'),
						'nama_pembayaran' => $this->input->post('nama_bayar'),
						'nominal_pembayaran' => $nominal,
						'status_pembayaran' => 'Lunas'
					);
					$this->m_nasabah->pembayaran($data);
					break;
			}
			$id = $this->session->userdata('id');
			$this->m_nasabah->update_riwayat($id,$nominal,$ket,$keperluan);
			redirect('get_data_nasabah/penarikan/'.$nominal.'');			
		}

		function update_akun()
		{
			$id = $this->session->userdata('id');
			$oldPass = $this->input->post('oldPass');
			$pass_new = $this->input->post('newPass');
			$this->m_nasabah->update_akun($id,$pass_new);
			redirect('get_data_nasabah/pengaturan_akun');
		}

		function update_profil()
		{
			$id = $this->session->userdata('id');
			$data = array(
				'alamat_nasabah' => $this->input->post('alamat'), 
				'kode_pos' => $this->input->post('kode_pos'),
				'no_hp' => $this->input->post('hp'),
				'pekerjaan_nasabah' => $this->input->post('pekerjaan'),
				'penghasilan_nasabah' => $this->input->post('penghasilan'),
				'pengeluaran_nasabah' => $this->input->post('pengeluaran'),
			);
			$this->m_nasabah->update_profil($id,$data);
			redirect('get_data_nasabah/pengaturan_profil');
		}

		function terima_transfer()
		{
			$username = $this->session->userdata('id');
			$nominal = $this->input->post('nominal');
			$id_tujuan = $this->input->post('no_tujuan');
			$saldo = $this->m_nasabah->get_saldo($id_tujuan);
			$this->m_nasabah->terima_transfer($id_tujuan,$nominal,$saldo);

			//update riwayat penarikan
			$this->m_nasabah->update_riwayat($id_tujuan,$nominal,'Terima','Transfer');
			$this->m_nasabah->update_riwayat($username,$nominal,'Keluar','Transfer');
			redirect('get_data_nasabah/penarikan/'.$nominal.'');
		}

		function penarikan($nominal)
		{
			$nama = $this->session->userdata('id');
			$saldo = $this->m_nasabah->get_saldo($nama);
			$this->m_nasabah->update_penarikan_tabungan($nama,$nominal,$saldo);
			redirect('get_data_nasabah/tabungan');
		}

		function view_pembayaran()
		{
			$this->load->view('nasabah/dashboard');
			$this->load->view('nasabah/pembayaran');
		}

		function view_pulsa()
		{
			$this->load->view('nasabah/dashboard');
			$this->load->view('nasabah/beli_pulsa');
		}
		
		function view_transfer()
		{
			$this->load->view('nasabah/dashboard');
			$this->load->view('nasabah/transfer');
		}

		function angsuran()
		{
			$nama = $this->session->userdata('id');
			$hasil['data'] = $this->m_nasabah->get_data_pinjaman($nama)->result();
			$this->load->view('nasabah/dashboard');
			$this->load->view('nasabah/angsuran',$hasil);
		}
	}