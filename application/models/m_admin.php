<?php
	/**
		 * 
		 */
		class m_admin extends CI_Model
		{
			
			public function get_data($table)
			{
				return $this->db->get($table);
			}

			public function insert_berita($data)
			{
				return $this->db->insert('kabar',$data);
			}

			public function get_where_data($table,$where)
			{				
				return $this->db->get_where($table,$where);
			}

			public function update_data($table,$col,$where,$data)
			{
				$this->db->where($col,$where);
				return $this->db->update($table,$data);
			}
		}	
?>