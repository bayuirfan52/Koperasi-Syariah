<?php
/**
 * 
 */
		class m_karyawan extends CI_Model
		{
			
			function get_data($table,$where)
			{
				return $this->db->get_where($table,$where);
			}

			public function get_data_gaji($where)
			{
				$this->db->select('golongan.nama_golongan, golongan.nominal_gaji, tanggal_terima, tunjangan.nama_tunjangan, tunjangan.nominal');
				$this->db->from('gajian');
				$this->db->join('golongan','gajian.id_gaji = golongan.id_gaji','INNER');
				$this->db->join('tunjangan','gajian.id_tunjangan = tunjangan.id_tunjangan','INNER');
				$this->db->where('id_user',$where);
				$this->db->order_by('id_gajian','DESC');
				return $this->db->get();
			}

			public function get_data_sp($where)
			{
				$this->db->select('peringatan.nama_peringatan,peringatan.poin,status');
				$this->db->from('sp');
				$this->db->join('peringatan','sp.id_peringatan = peringatan.id_peringatan','INNER');
				$this->db->where('id_user',$where);
				$this->db->order_by('id_sp','DESC');
				return $this->db->get();
			}

			public function update_data($table,$col,$where,$data)
			{
				$this->db->where($col,$where);
				return $this->db->update($table,$data);
			}	
	}
?>