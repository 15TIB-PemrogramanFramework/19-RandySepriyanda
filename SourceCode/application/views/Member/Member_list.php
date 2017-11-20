<?php $this->load->view('templates/header_member'); ?>


  

<h2>Data Member</h2>


<div class="row">


<form action="<?php echo $aksi; ?>" method="POST">
		<div class="form-group">
		
		<label>ID Member: </label>
		<?php echo $id_member; ?>
	</div>
	<div class="form-group">
		
		<label>Username: </label>
		<?php echo $username_member; ?>
	</div>

	<div class="form-group">
		
		<label>Password: </label>
		<input type="text" name="password_member" class="form-control" placeholder="Inputkan password_member" 
		required value="<?php echo $password_member; ?>">
	</div>

	<div class="form-group">
		
		<label>Nama Member: </label>
		<input type="text" name="nama_member" class="form-control" placeholder="Inputkan nama_member" 
		required value="<?php echo $nama_member; ?>">
	</div>

	<div class="form-group">
		
		<label>JK Member: </label>
		<input type="text" name="jk_member" class="form-control" placeholder="Inputkan jk_member" 
		required value="<?php echo $jk_member; ?>">
	</div>

	<div class="form-group">
		
		<label>Nomor HP Member: </label>
		<input type="text" name="hp_member" class="form-control" placeholder="Inputkan hp_member" 
		required value="<?php echo $hp_member; ?>">
	</div>

	<div class="form-group">
		
		<label>Alamat Member: </label>
		<input type="text" name="alamat_member" class="form-control" placeholder="Inputkan alamat_member" 
		required value="<?php echo $alamat_member; ?>">
	</div>

	<div class="form-group">
		

		<label>Email Member: </label>
		<input type="text" name="email_member" class="form-control" placeholder="Inputkan email_member" 
		required value="<?php echo $email_member; ?>">
	</div>


	<input type="hidden" name="username_member" value="<?php echo $username_member; ?>">
	<input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>

	<?php $id_admin="randy123" ?>

	<?php $this->session->set_userdata('id_member',$id_member);  ?>
	<?php $this->session->set_userdata('id_admin',$id_admin);  ?>

</form>

</div>

<?php $this->load->view('templates/footer_member'); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>