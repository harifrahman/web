<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Team_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

   function get_general($table)
    {
    	$query = $this->db->get($table);
		return $query->result();
    }

    function get_by_id_general($table, $id, $val)
    {
    	$query = $this->db->where($id, $val)->get($table);
		return $query->result();
    }
   
}
?>