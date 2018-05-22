<?php echo form_open("dataguru/update"); ?>
	<div class="panel panel-default">
		<div class="panel-heading">
		<h3 class="panel-title">Edit Data Guru Sekolah</h3>
	</div>
	<div class="panel-body">
		<div class="fore-group">
			<tabel for="">Nama Guru</tabel>
			<input type="" class="form-control" id="" placeholder="" name="nama" value="<?php echo $query->guru_nama; ?>">
			<p class="help-block"></p>
		</div>
		<div class="fore-group">
			<tabel for="">Tempat Tanggal Lahir</tabel>
			<input type="" class="form-control" id="" placeholder="" name="ttl" value="<?php echo $query->guru_ttl; ?>">
			<p class="help-block"></p>
		</div>
		 <tabel for="">Mengajar di Kelas</tabel>
			<input type="" class="form-control" id="" placeholder="" name="kelas" value="<?php echo $query->guru_kelas; ?>">
			<p class="help-block"></p>
		 </div>
				<div class="fore-group">
			<tabel for="">Mata Pelajaran</tabel>
			<input type="" class="form-control" id="" placeholder="" name="pengajar" value="<?php echo $query->guru_pengajar; ?>">
			<p class="help-block"></p>
		</div>

		<div class="fore-group">
			<tabel for="">Alamat</tabel>
			<input type="" class="form-control" id="" placeholder="" name="alamat" value="<?php echo $query->guru_alamat; ?>">
			<p class="help-block"></p>
		</div>

		<div class="form-group">
		  <tabel for="">Jabatan</tabel>
			<input type="" class="form-control" id="" placeholder="" name="jabatan" value="<?php echo $query->guru_jabatan; ?>">
			<p class="help-block"></p>
		 </div>
		 <div class="panel-footer">
		 	<button type="submit" name="buttonback" value="button" class="btn btn-warning">
		 		Update & Kembali
		 	</button>
		 	<button type="submit" name="buttonback" value="button" class="btn btn-primary">
		 		Update
		 	</button>
		 </div>
		</div>
	<?php echo form_close();?>