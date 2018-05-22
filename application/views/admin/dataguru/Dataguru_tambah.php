<?php echo form_open("dataguru/tambah_proses"); ?>
	<div class="panel panel-default">
		<div class="panel-heading">
		<h3 class="panel-title">Tambah Data</h3>
	</div>
	<div class="panel-body">
		<div class="fore-group">
			<tabel for="">Nama Guru</tabel>
			<input type="text" class="form-control" id="" placeholder="" name="nama">
			<p class="help-block"></p>
		</div>
		<div class="fore-group">
			<tabel for="">Tempat Tanggal Lahir</tabel>
			<input type="" class="form-control" id="" placeholder="" name="ttl">
			<p class="help-block"></p>
		</div>
				<div class="fore-group">
			<tabel for="">Mengajar Di Kelas</tabel>
			<input type="" class="form-control" id="" placeholder="" name="Kelas">
			<p class="help-block"></p>
		</div>
			<div class="fore-group">
			<tabel for="">Alamat</tabel>
			<input type="" class="form-control" id="" placeholder="" name="alamat">
			<p class="help-block"></p>
		</div>
		 <div class="form-group">
		 	<tabel for="">Mata Pelajaran</tabel>
		 	<input type="" class="form-control" id="" placeholder="" name="pengajar" >
		 	<p class="help-block"></p>
		 </div>
		 <div class="form-group">
		 	<tabel for="">Jabatan</tabel><br>
		 	<input type="text" class="form-control" id="" placeholder="" name="jabatan">
		 	<p class="help-block"></p>
		 </div>
		 </div>
		 <div class="panel-footer">
		 	<button type="submit" name="buttonback" value="button" class="btn btn-warning">
		 		Tambah & Kembali
		 	</button>
		 	<button type="submit" name="buttonback" value="button" class="btn btn-primary">
		 		Tambahkan
		 	</button>
		 </div>
		</div>
	<?php echo form_close();?>