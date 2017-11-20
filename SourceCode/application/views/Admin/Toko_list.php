<?php $this->load->view('templates/header'); ?>

<h2>Data Toko</h2>


<div class="row">


<form action="<?php echo $aksi; ?>" method="POST">
		<div class="form-group">
		<i class="glyphicon glyphicon-home" style="font-size:30px;color:black;"></i>
		<br>
		<label>Nama toko: </label>
		<input type="text" name="nama_toko" class="form-control" placeholder="Inputkan Nama Toko" 
		required value="<?php echo $nama_toko; ?>">
	</div>
	<div class="form-group">
		<i class="fa fa-align-justify" style="font-size:30px;color:black;"></i>
		<br>
		<label>Deskripsi Toko: </label>
		<input type="text" name="deskripsi_toko" class="form-control" placeholder="Inputkan Deskripsi Toko" 
		required value="<?php echo $deskripsi_toko; ?>">
	</div>

	<div class="form-group">
		<i class="fa fa-map-marker" style="font-size:30px;color:red;"></i>
		<br>
		<label>Alamat Toko: </label>
		<input type="text" name="alamat_toko" class="form-control" placeholder="Inputkan Alamat Toko" 
		required value="<?php echo $alamat_toko; ?>">
	</div>

	<div class="form-group">
		<i class="fa fa-university" style="font-size:30px;color:black;"></i>
		<br>
		<label>Bank Rekening Toko: </label>
		<input type="text" name="bank_rekening_toko" class="form-control" placeholder="Inputkan Bank Rekening Toko" 
		required value="<?php echo $bank_rekening_toko; ?>">
	</div>

	<div class="form-group">
		<i class="fa fa-credit-card" style="font-size:30px;color:black;"></i>
		<br>
		<label>Nama Rekening Toko: </label>
		<input type="text" name="nama_rekening_toko" class="form-control" placeholder="Inputkan Nama Rekening Toko" 
		required value="<?php echo $nama_rekening_toko; ?>">
	</div>

	<div class="form-group">
		<i class="fa fa-paypal" style="font-size:30px;color:black;"></i>
		<br>
		<label>Nomor Rekening Toko: </label>
		<input type="text" name="nomor_rekening_toko" class="form-control" placeholder="Inputkan Nomor Rekening Toko" 
		required value="<?php echo $nomor_rekening_toko; ?>">
	</div>

	<div class="form-group">
		<i class="fa fa-mobile" style="font-size:30px;color:black;"></i>
		<br>
		<label>Nomor HP Toko: </label>
		<input type="text" name="hp_toko" class="form-control" placeholder="Inputkan Nomor HP Toko" 
		required value="<?php echo $hp_toko; ?>">
	</div>

	<div class="form-group">
		<i class="fa fa-skype" style="font-size:30px;color:blue;"></i>
		<br>

		<label>Line Toko: </label>
		<input type="text" name="line_toko" class="form-control" placeholder="Inputkan Line Toko" 
		required value="<?php echo $line_toko; ?>">
	</div>

	<div class="form-group">
		<i class="fa fa-instagram" style="font-size:30px;color:red;"></i>
		<br>
		<label>Nama Instagram: </label>
		<input type="text" name="instagram_toko" class="form-control" placeholder="Inputkan Nama Instagram" 
		required value="<?php echo $instagram_toko; ?>">
	</div>

	<input type="hidden" name="id_toko" value="<?php echo $id_toko; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>


</div>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>