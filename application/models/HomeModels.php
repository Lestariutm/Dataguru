<?php 
class HomeModels extends CI_Model{
	function getData(){
		$data = array(
			"nama" => "Tarsih",
			"kelas" => "teu sakola",
			"alamat" => "meikarta",
			"website" => "youtube.com"
		);
		return $data;
	}
}

 ?>