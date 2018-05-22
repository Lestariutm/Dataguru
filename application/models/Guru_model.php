<?php 
	class Guru_model extends CI_Model{
		function getAllData(){
			$query = $this->db->get("gurusekolah");
			return $query;
		}
	}
 ?>