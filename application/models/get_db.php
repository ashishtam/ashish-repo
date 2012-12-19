<?php

class Get_db extends CI_Model
{
	public function getAll()
	{
		$query = $this->db->query("SELECT * from test");
		return $query->result();
		
	}
	
	function insert1($data)
	{
		$this->db->insert('test', $data);
	}
	
	function insert2($data)
	{
			$this->db->insert_batch('test', $data);
	}
	
	function update1($data)
	{
		$this->db->update('test', $data, 'id = 2');	
	}
	
	function update2($data)
	{
		$this->db->update_batch('test', $data, 'id');	
	}
	
	function delete1($data)
	{
		$this->db->delete('test', $data);	
		
	}
	
	function empty1($table)
	{
		$this->db->empty($table);	
	}
}