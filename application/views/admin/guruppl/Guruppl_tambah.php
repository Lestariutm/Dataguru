<?php echo form_open("guruppl/tambah_proses"); ?>
	<div class="panel panel-default">
		<div class="panel-heading">
		<h3 class="panel-title">Tambah Data Guru PPL</h3>
	</div>
	<div class="panel-body">
		<div class="fore-group">
			<tabel for="">Nama Guru</tabel>
			<input type="text" class="form-control" id="" placeholder="" name="nama">
			<p class="help-block"></p>
		</div>
		<div class="fore-group">
			<tabel for="">Alamat</tabel>
			<input type="" class="form-control" id="" placeholder="" name="alamat">
			<p class="help-block"></p>
		</div>
				<div class="fore-group">
			<tabel for="">Pengganti Guru</tabel>
			<input type="" class="form-control" id="" placeholder="" name="pengganti">
			<p class="help-block"></p>
		</div>
			<div class="fore-group">
			<tabel for="">Mata Pelajaran</tabel>
			<input type="" class="form-control" id="" placeholder="" name="pelajaran">
			<p class="help-block"></p>
		</div>
		 <div class="form-group">
		 	<tabel for="">Asal Universitas</tabel>
		 	<input type="" class="form-control" id="" placeholder="" name="univesitas" >
		 	<p class="help-block"></p>
		 </div>
		 <div class="form-group">
		 	<tabel for="">Lama PPL</tabel><br>
		 	<input type="text" class="form-control" id="" placeholder="" name="lamappl">
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