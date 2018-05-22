<?php
	class Guruppl_model extends CI_Model{
		function getAllData(){
			$query = $this->db->get("Guruppl");
			return $query;
		}
	}