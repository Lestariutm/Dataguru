<div class="panel panel-default" style="border-radius: 0px;">
	<div class="panel-heading">
		<h4 style="padding: 0px;margin:0 ;"><strong>Data Master Siswa</strong></h4>
	</div>
	<div class="panel-body">
		<a href="<?php echo base_url('dataguru/tambah'); ?>" class="btn btn-success">Tambah Data</a>
		<a href="#" class="btn btn-warning ">Cetak Laporan</a>
		<br/>
		<br/>
		<table class="table table-bordered table-striped" style="font-size:12px;">
			<thead>
				<tr>
					<th>NO</th>
					<th>Nama Guru</th>
					<th>Tempat Tanggal Lahir</th>
					<th>Mengajar Di Kelas</th>
					<th>Alamat</th>
					<th>Mata Pelajaran</th>
					<th>Jabatan</th>
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
									<td>'.$row->guru_nama.'</td>
									<td>'.$row->guru_ttl.'</td>
									<td>'.$row->guru_kelas.'</td>
									<td>'.$row->guru_alamat.'</td>
									<td>'.$row->guru_pengajar.'</td>
									<td>'.$row->guru_jabatan.'</td>
									<td>
										<a href="'.base_url('dataguru/edit/'.$row->guru_id).'" class="btn btn-info btn-xs">Edit</a>
										<a href="'.base_url('dataguru/hapus/'.$row->guru_id).'" class="btn btn-danger btn-xs">Hapus</a>
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
