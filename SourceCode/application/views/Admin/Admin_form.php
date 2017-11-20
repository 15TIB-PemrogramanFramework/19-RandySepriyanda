<?php $this->load->view('templates/header'); ?>

<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">

	<div class="form-group">
		<label>Username: </label>
		<input type="text" name="username_admin" class="form-control" placeholder="Inputkan Username" 
		required value="<?php echo $username_admin; ?>">
	</div>
	<div class="form-group">
		<label>Passoword: </label>
		<input type="text" name="password_admin" class="form-control" placeholder="Inputkan Password" 
		required value="<?php echo $password_admin; ?>">
	</div>
	<div class="form-group">
		<label>Nama Admin: </label>
		<input type="text" name="nama_admin" class="form-control" placeholder="Inputkan Nama Admin" 
		required value="<?php echo $nama_admin; ?>">
	</div>
	
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
	
</form>
<?php $this->load->view('templates/footer'); ?>