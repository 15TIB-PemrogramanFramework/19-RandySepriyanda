<?php $this->load->view('templates/header'); ?>

<h2>Data Barang</h2>

<div class="row">
	<div class="col-md-12 text-right">
		<a href="<?php echo site_url('barang/tambah'); ?>" class="btn btn-primary" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-circle"></i> Insert</a>
	</div>
</div>

<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Stock</th>
				<th>Harga</th>
				<th>Ukuran</th>
				<th>Gambar</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($barang as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_barang; ?></td>
					<td><?php echo $value->nama_barang; ?></td>
					<td><?php echo $value->stock_barang; ?></td>
					<td><?php echo $value->harga_barang; ?></td>
					<td><?php echo $value->ukuran_barang; ?></td>
					<td><img src="./assets/gambar/uploads/<?php echo $value->gambar; ?>" width="100" height="100" alt=""></td>
					<td>
						<a href="<?php echo site_url('barang/delete/'.$value->id_barang); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
							</a>
						<a href="<?php echo site_url('barang/update/'.$value->id_barang); ?>"
							class="btn btn-warning">
							<i class="fa fa-pencil-square"></i>
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