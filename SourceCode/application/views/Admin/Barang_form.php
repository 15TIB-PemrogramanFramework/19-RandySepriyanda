<?php $this->load->view('templates/header'); ?>


<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
	<div class="form-group">

		<label>Nama Barang: </label>
		<input type="text" name="nama_barang" class="form-control" placeholder="Inputkan Nama Barang" 
		required value="<?php echo $nama_barang; ?>">
	</div>
	<div class="form-group">
		<label>Stock Barang: </label>
		<input type="text" name="stock_barang" class="form-control" placeholder="Inputkan Stock Barang" 
		required value="<?php echo $stock_barang; ?>">
	</div>
	<div class="form-group">
		<label>Harga Barang: </label>
		<input type="text" name="harga_barang" class="form-control" placeholder="Inputkan Harga Barang" 
		required value="<?php echo $harga_barang; ?>">
	</div>

	<div class="form-group">
		<label>Ukuran Barang: </label>
		<input type="text" name="ukuran_barang" class="form-control" placeholder="Inputkan Ukuran Barang" required value="<?php echo $ukuran_barang; ?>">
	</div>
 
	<div class="form-group">
		<label>Gambar Barang: </label>
		<input type="file" name="gambar"  class="form-control" placeholder="Inputkan gambar Barang">
	</div>
	
	<input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
<?php $this->load->view('templates/footer'); ?>