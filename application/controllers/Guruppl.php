<?php
	class Guruppl extends CI_Controller{
		function __construct(){
			parent:: __construct();
			$this->load->model("Guruppl_model");
		}
		public function index(){
			$data['query'] = $this->Guruppl_model->getAllData();
			$data["content"] = "admin/guruppl/Guruppl_view";
			$this->load->view("template",$data);
		}
		function tambah(){
 			$data['content']="admin/guruppl/Guruppl_tambah";
 			$this->load->view('template',$data);
 		}
 		function tambah_proses(){
 			$nama=$this->input->post("nama");
 			$alamat=$this->input->post("alamat");
 			$pengganti=$this->input->post("pengganti");
 			$pelajaran=$this->input->post("pelajaran");
 			$universitas=$this->input->post("universitas");
 			$lamappl=$this->input->post("lamappl");

 			$data=array(
 				"Guruppl_nama"=> $nama,
 				"Guruppl_alamat" => $alamat,
 				"Guruppl_pengganti" => $pengganti,
 				"Guruppl_bidang" => $pelajaran,
 				"Guruppl_universitas" => $universitas,
 				"Guruppl_bulan" => $lamappl
 				);
 		
 			$insert=$this->db->insert("Guruppl",$data);
 			if($insert){
 				echo"
 				<script>
 					alert('Data Berhasil Ditambahkan');
 					window.location = '".base_url('Guruppl')."';
 				</script>
 					";
 				}else{
 					echo "
 					<script>
 						alert('Data Gagal Disimpan!');
 						window.location = '".base_url('Guruppl/tambah')."';
 					</script>
 					";

 				}   
	}
	function hapus($id){
		if($this->db->delete('guruppl',['guruppl_id'=>$id])){
			?>
			<script type="text/javascript">
				alert("Data Berhasil di hapus");
				window.location="<?php echo base_url('guruppl'); ?>";
			</script>
			<?php
		}
	}
	function edit($id){
		$data['query']= $this->db->get_where('guruppl',['guruppl_id' => $id])->row(); 

		$data["content"]='admin/guruppl/Guruppl_edit';
		$this->load->view('template',$data); 
	}
	function update(){
		$id=$this->input->post("id");
		$nama=$this->input->post("nama");
		$alamat=$this->input->post("alamat");
		$pengganti=$this->input->post("pengganti");
		$bidang=$this->input->post("bidang");
		$universitas=$this->input->post("universitas");
		$lamappl=$this->input->post("lamappl");

		$data = array( 
			"guruppl_nama"=> $nama,
			"guruppl_alamat"=>$alamat,
			"guruppl_pengganti" =>$pengganti,
			"guruppl_bidang" => $bidang,
			"guruppl_universitas" => $universitas,
			"guruppl_bulan" => $lamappl,
			);
		$this->db->where('guruppl_id',$id); 
		$this->db->update('guruppl',$data);

		if ($this->input->post('buttonback')) {
			redirect('guruppl');
		}

			 
	}
}
	?>