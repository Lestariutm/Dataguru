<div class="panel panel-default" style="border-radius: 0px;">
	<div class="panel-heading">
		<h4 style="padding: 0px;margin:0 ;"><strong>Data Guru PPL</strong></h4>
	</div>
	<div class="panel-body">
		<a href="<?php echo base_url('Guruppl/tambah'); ?>" class="btn btn-success">Tambah Data</a>
		<a href="#" class="btn btn-warning ">Cetak Laporan</a>
		<br/>
		<br/>
		<table class="table table-bordered table-striped" style="font-size:12px;">
			<thead>
				<tr>
					<th>NO</th>
					<th>Nama Guru</th>
					<th>Alamat</th>
					<th>Pengganti Guru</th>
					<th>Mata Pelajaran</th>
					<th>Asal Universitas</th>
					<th>Lama PPL</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					if ($query->num_rows() > 0){
						$no = 1;
						foreach ($query->result() as $row) {
							echo '
								<tr>
									<td>'.$no.'</td>
									<td>'.$row->Guruppl_nama.'</td>
									<td>'.$row->Guruppl_alamat.'</td>
									<td>'.$row->Guruppl_pengganti.'</td>
									<td>'.$row->Guruppl_bidang.'</td>
									<td>'.$row->Guruppl_universitas.'</td>
									<td>'.$row->Guruppl_bulan.'</td>
									<td>
										<a href="'.base_url('index.php/Guruppl/edit/'.$row->Guruppl_id).'" class="btn btn-info btn-xs">Edit</a>
										<a href="'.base_url('index.php/guruppl/hapus/'.$row->Guruppl_id).'" class="btn btn-danger btn-xs">Hapus</a>
									</td>
								</tr>
							';
							$no++;
						}
					}else{
						echo '
							<tr>
								<td colspan="8" class="text-center">Data Masih Kosong</td>
							</tr>
						';
					}
					?>
			</tbody>
		</table>
	</div>
</div>
