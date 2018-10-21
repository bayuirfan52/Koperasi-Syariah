<?php
	/**
	* 
	*/
	class m_login extends CI_Model
	{
		
		function validate($table,$where)
		{
			return $this->db->get_where($table,$where);
		}

		function input_anggota($table,$data)
		{
			return $this->db->insert($table,$data);
		}

		function ambil_username($where)
		{
			return $this->db->get_where('user',$where);
		}

		public function blog()
		{
			return $this->db->get('kabar');
		}
	}
?>