<?php $this->load->view('templates/header_member'); ?>


<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">

		<label>Dari: </label>
		   <br>
		   <?php echo $id_admin; ?>
           <br>
		
	</div>

	<div class="form-group">

		<label>Ke: </label>
		   <br>
		   <?php echo $id_member; ?>
           <br>
		
	</div>

	<div class="form-group">

			<?php foreach ($chat as $key => $value) { ?>

		<label></label>
		   <br>
		  <?php echo $value->isi_chat; ?>
           <br>
		<?php } ?>
	</div>
	
		<div class="form-group">

		<label>Pesan</label>
		   <br>
		   <input type="text" name="isi_chat" value="<?php echo $isi_chat; ?>" placeholder="Isi Pesan"
	required value="<?php echo $keterangan_pengirim; ?>">
           <br>
		
	</div>

	 <input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
	 <input type="hidden" name="id_admin" value="<?php echo $id_admin; ?>">
	 <input type="hidden" name="id_chat" value="<?php echo $id_chat; ?>">

	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
<?php $this->load->view('templates/footer_member'); ?>