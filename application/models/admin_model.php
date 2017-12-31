<?php

class Admin_model extends CI_Model {
	
	function can_login()
	{
		$this->db->where('username', $this->db->escape_str($this->input->post('username')));
		$this->db->where('password', md5($this->db->escape_str($this->input->post('password'))));
		$query= $this->db->get('adminuser');
		
		if($query->num_rows() == 1)
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	
	function change_password($password)
	{
		$this->db->set('password', md5($password));
		$this->db->update('adminuser');
	}
	
	function admin_profile()
	{
		$query = $this->db->query('SELECT * FROM adminuser');
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;	
			}
			
			return $data;	
		}
	}
	
	function update_profile($update_profile)
	{
		$this->db->update('admin_setting', $update_profile);
	}				
}
