<?php $this->load->view('templates/header'); ?>

<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">

		<label>Status Pesanan: </label>
		   <br>
		   <input type="radio" name="status_pesanan" value="Sedang di Proses">Sedang di Proses
           <br>
           <input type="radio" name="status_pesanan" value="Sudah di Kirim ">Sudah di Kirim
           <br>
           <input type="radio" name="status_pesanan" value="Pesanan selesai ">Pesanan Selesai
           <br>
		
	</div>

	<div class="form-group">

		<label>Jasa Pengiriman dan Resi: </label>
		   <br>
		   <input type="text" name="jasa_pesanan" value="<?php echo $jasa_pesanan; ?>">
           <br>
		
	</div>
	
	<input type="hidden" name="id_pesanan" value="<?php echo $id_pesanan; ?>">
	<input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
	<input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
	<input type="hidden" name="tanggal_pesanan" value="<?php echo $tanggal_pesanan; ?>">
	<input type="hidden" name="jumlah_barang_pesanan" value="<?php echo $jumlah_barang_pesanan; ?>">
	<input type="hidden" name="total_bayar_pesanan" value="<?php echo $total_bayar_pesanan; ?>">
	<input type="hidden" name="barang_pesanan" value="<?php echo $barang_pesanan; ?>">
	

	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
<?php $this->load->view('templates/footer'); ?>