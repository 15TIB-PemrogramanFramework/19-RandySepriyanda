<?php $this->load->view('templates/header'); ?>

<h2>Data Member</h2>

<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID Member</th>
				<th>Username Member</th>
				<th>Password</th>
				<th>Nama Member</th>
				<th>Jenis Kelamin</th>
				<th>No Hp</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($member as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_member; ?></td>
					<td><?php echo $value->username_member; ?></td>
					<td><?php echo $value->password_member; ?></td>
					<td><?php echo $value->nama_member; ?></td>
					<td><?php echo $value->jk_member; ?></td>
					<td><?php echo $value->hp_member; ?></td>
					<td><?php echo $value->alamat_member; ?></td>
					<td><?php echo $value->email_member; ?></td>
					<td>
						<a href="<?php echo site_url('admin/delete/'.$value->id_member); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
					</td>	
				</tr>
				<?php } ?>
			</tbody>
	</table>
</div>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>