<?php echo form_open("Guruppl/update"); ?>
	<div class="panel panel-default">
		<div class="panel-heading">
		<h3 class="panel-title">Edit Guru PPL</h3>
	</div>
	<div class="panel-body">
		<input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?php echo $query->Guruppl_id; ?>">
		<div class="fore-group">
			<tabel for="">Nama Guru</tabel>
			<input type="text" class="form-control" id="" placeholder="" name="nama" value="<?php echo $query->Guruppl_nama; ?>">
			<p class="help-block"></p>
		</div>
		<div class="fore-group">
			<tabel for="">Alamat</tabel>
			<input type="text" class="form-control" id="" placeholder="" name="alamat" value="<?php echo $query->Guruppl_alamat; ?>">
			<p class="help-block"></p>
		</div>
		 <tabel for="">Pengganti Guru</tabel>
			<input type="text" class="form-control" id="" placeholder="" name="pengganti" value="<?php echo $query->Guruppl_pengganti; ?>">
			<p class="help-block"></p>
		 </div>
				<div class="fore-group">
			<tabel for="">Bidang</tabel>
			<input type="text" class="form-control" id="" placeholder="" name="bidang" value="<?php echo $query->Guruppl_bidang; ?>">
			<p class="help-block"></p>
		</div>

		<div class="form-group">
		  <tabel for="">Asal Universitas</tabel>
			<input type="text" class="form-control" id="" placeholder="" name="universitas" value="<?php echo $query->Guruppl_universitas; ?>">
			<p class="help-block"></p>
		 </div>
		 <div class="fore-group">
		 	<tabel for="">Lama PPL</tabel>
		 	<input type="" class="form-control" id="" placeholder="" name="lamappl" value="<?php echo $query->Guruppl_bulan; ?>">
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