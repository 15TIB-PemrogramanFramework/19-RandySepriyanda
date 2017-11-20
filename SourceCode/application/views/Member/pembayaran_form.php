<?php $this->load->view('templates/header_member'); ?>



<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
	<div class="form-group">

<label>Rekening : 
BCA : 059-04-02-788
A/n Randy Sepriyanda</label>

<br>
<br>
		<label>Konfirmasi Pembayaran: </label>

	<div class="form-group">
	<label>Bank Pengirim: </label>	
	<input type="text" name="bank_pengirim" class="form-control" placeholder="nama bank pengirim" 
		required value="<?php echo $bank_pengirim; ?>">
	</div>

	<div class="form-group">
	<label>Nama Pengirim: </label>	
	<input type="text" name="nama_pengirim" class="form-control" placeholder="Nama pengirim " 
		required value="<?php echo $nama_pengirim; ?>">
	</div>

	<div class="form-group">
	<label>Jumlah Transfer: </label>	
	<input type="text" name="jumlah_pengirim" class="form-control" placeholder="jumlah transfer pengirim"
	required value="<?php echo $jumlah_pengirim; ?>">
	</div>


	<div class="form-group">
	<label>Keterangan: </label>
	<input type="text" name="keterangan_pengirim" class="form-control" placeholder="Keterangan"
	required value="<?php echo $keterangan_pengirim; ?>">
	</div>

	<div class="form-group">
	<label>Gambar: </label>
	<input type="file" name="gambar" class="form-control">
	</div>

	
	<input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
	<input type="hidden" name="status_pembayaran" value="<?php echo $status_pembayaran; ?>">
	<input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran; ?>">
	<input type="hidden" name="id_pesanan" value="<?php echo $id_pesanan; ?>">

	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
<?php $this->load->view('templates/footer_member'); ?>
