<?php
class Stock_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

    function get_search($serach='')
	{
		$query = $this->db->query("SELECT name,id FROM `stocks`where name like '%$serach%' LIMIT 5");
		if ($query->num_rows() > 0)
		{
		return $query->result();
		}
		else{
			return false;
		}
    }

	function get_company($id)
	{
		$query = $this->db->query("SELECT * FROM `stocks` where id=$id");
		if ($query->num_rows() > 0)
		{
		return $query->result();
		}
		else{
			return false;
		}
    }
	
}