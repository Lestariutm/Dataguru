<?php
 class Dataguru extends CI_Controller{
 		function __construct(){
 			parent:: __construct();
 			$this->load->model('Guru_model');
 		}
 	public function index(){
 		$data["query"]=$this->Guru_model->getAllData();
 		$data['content']="admin/dataguru/Dataguru_view";
 		$this->load->view('template',$data);
 	}
 		function tambah(){
 			$data['content']="admin/dataguru/Dataguru_tambah";
 			$this->load->view('template',$data);
 		}
 		function tambah_proses(){
 			$nama=$this->input->post("nama");
 			$ttl=$this->input->post("ttl");
 			$kelas=$this->input->post("kelas");
 			$alamat=$this->input->post("alamat");
 			$pengajar=$this->input->post("pengajar");
 			$jabatan=$this->input->post("jabatan");

 			$data=array(
 				"guru_nama"=> $nama,
 				"guru_ttl" => $ttl,
 				"guru_kelas" => $kelas,
 				"guru_alamat" => $alamat,
 				"guru_pengajar" => $pengajar,
 				"guru_jabatan" => $jabatan
 				);

 			$insert=$this->db->insert("gurusekolah",$data);
 			if($insert){
 				echo"
 				<script>
 					alert('Data Berhasil Ditambahkan');
 					window.location = '".base_url('dataguru')."';
 				</script>
 					";
 				}else{
 					echo "
 					<script>
 						alert('Data Gagal Disimpan!');
 						window.location = '".base_url('dataguru/tambah')."';
 					</script>
 					";

 				} 
   				}
	function edit($id){
	    $data['query'] = $this->db->get_where('gurusekolah', ['guru_id' => $id])->row();   
	    $data['content']='admin/dataguru/Dataguru_edit';
		$this->load->view("template",$data);
	}
   function update(){
			$nama =$this->input->post("nama");
			$ttl= $this->input->post("ttl");
			$kelas=$this->input->post("kelas");
			$alamat=$this->input->post("alamat");
			$pengajar=$this->input->post("pengajar");
			$jabatan=$this->input->post("jabatan");
			
			$data=array(
 				"guru_nama"=> $nama,
 				"guru_ttl" => $ttl,
 				"guru_kelas" => $kelas,
 				"guru_alamat" => $alamat,
 				"guru_pengajar" => $pengajar,
 				"guru_jabatan" => $jabatan
 				);
			$this->db->update('gurusekolah',$data);
			redirect('dataguru');	
		}
 			function hapus($id){
		if($this->db->delete('gurusekolah',['guru_id'=>$id])){
			?>
			<script type="text/javascript">
				alert("Data Berhasil di hapus");
				window.location="<?php echo base_url('dataguru'); ?>";
			</script>
			<?php
 		}
 	}
 }
 ?>