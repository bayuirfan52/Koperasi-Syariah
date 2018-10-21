<?php
	/**
	* 
	*/
	class m_nasabah extends CI_Model
	{
		
		function get_data_profil($where)
		{
			return $this->db->get_where('anggota',array('id_user' => $where));
		}

		function get_data_akun($where)
		{
			return $this->db->get_where('user',array('id_user' => $where));
		}

		function update_akun($where,$pass_new)
		{
			$this->db->set('pin_user',$pass_new,FALSE);
			$this->db->where('id_user',$where);
			return $this->db->update('user');
		}

		function update_profil($id,$where)
		{
			$this->db->where('id_user',$id);
			return $this->db->update('anggota',$where);
		}

		function get_data_tabungan($where)
		{
			$this->db->order_by('no_transaksi','DESC');
			return $this->db->get_where('tabungan',array('id_user' => $where));
		}

		function update_penarikan_tabungan($id,$data,$saldo)
		{
			$saldo_akhir = $saldo - $data;
			$hasil = array(
				'no_transaksi' => '',
				'id_user' => $id,
				'tgl_tabungan' => date('Y-m-d'),
				'setoran' => 0,
				'penarikan' => $data,
				'saldo' => $saldo_akhir,
			);
			return $this->db->insert('tabungan',$hasil);
		}

		function get_saldo($id)
		{
			$query = $this->db->query("SELECT saldo FROM tabungan WHERE id_user = '$id' ORDER BY no_transaksi DESC LIMIT 1");
			foreach ($query->result() as $hasil) {
				return $saldo = $hasil->saldo;
			}
		}

		function get_data_pinjaman($where)
		{			
			$this->db->order_by('id_pinjaman','DESC');
			$this->db->limit(1);
			return $this->db->get_where('pinjaman',array('id_user' => $where));
		}

		function insert_pinjaman($data)
		{
			return $this->db->insert('pinjaman',$data);
		}

		public function insert_tabungan($data)
		{
			return $this->db->insert('tabungan',$data);
		}
		
		function update_data_pinjaman($where,$data)
		{
			$this->db->where('id_user',$where);
			return $this->db->update('pinjaman',$data);
		}

		function get_data_riwayat($where)
		{
			$this->db->order_by('no_riwayat','DESC');
			return $this->db->get_where('riwayat',array('id_user' => $where));
		}

		function update_riwayat($id,$nominal,$ket,$keperluan)
		{			
			$tanggal = date('Y-m-d');
			$hasil = array(
				'no_riwayat' => '',
				'id_user' => $id,
				'tanggal' => $tanggal,
				'nominal' => $nominal,
				'keterangan' => $ket,
				'keperluan' => $keperluan,
			);
			return $this->db->insert('riwayat',$hasil);
		}

		function terima_transfer($id_tujuan,$nominal,$saldo)
		{
			$saldo_akhir = $saldo + $nominal;
			$hasil = array(
				'no_transaksi' => '',
				'id_user' => $id_tujuan,
				'tgl_tabungan' => date('Y-m-d'),
				'setoran' => $nominal,
				'penarikan' => 0,
				'saldo' => $saldo_akhir,
			);
			return $this->db->insert('tabungan',$hasil);
		}

		function pembayaran($data)
		{
			return $this->db->insert('pembayaran',$data);
		}
	}
?>