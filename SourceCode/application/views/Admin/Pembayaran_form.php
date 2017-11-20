<?php $this->load->view('templates/header'); ?>

<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">

		<label>Status Pembayaran: </label>
		<br>
		<input type="radio" name="status_pembayaran" value="Belum Melakukan Pembayaran">Belum Melakukan Pembayaran
           <br>
           <input type="radio" name="status_pembayaran" value="Sudah Melakukan Pembayaran ">Sudah Melakukan Pembayaran

	</div>
	
	<input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran; ?>">
	<input type="hidden" name="id_pesanan" value="<?php echo $id_pesanan; ?>">
	<input type="hidden" name="bank_pengirim" value="<?php echo $bank_pengirim; ?>">
	<input type="hidden" name="nama_pengirim" value="<?php echo $nama_pengirim; ?>">
	<input type="hidden" name="jumlah_pengirim" value="<?php echo $jumlah_pengirim; ?>">
	<input type="hidden" name="keterangan_pengirim" value="<?php echo $keterangan_pengirim; ?>">

	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
<?php $this->load->view('templates/footer'); ?>