<?php $this->load->view('templates/header'); ?>

<h2>Data Pesanan</h2>


<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID Pesanan</th>
				<th>ID Member</th>
				<th>ID Barang</th>
				<th>Status Pesanan</th>
				<th>Jumlah Barang Pesanan</th>
				<th>Total Pembayaran</th>
				<th>Keterangan Pesanan</th>
				<th>Jasa Pengiriman</th>
				<th>Tanggal Pesanan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>

			<?php foreach ($pesanan as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_pesanan; ?></td>
					<td><?php echo $value->id_member; ?></td>
					<td><?php echo $value->id_barang; ?></td>
					<td><?php echo $value->status_pesanan; ?></td>
					<td><?php echo $value->jumlah_barang_pesanan; ?></td>
					<td><?php echo $value->total_bayar_pesanan; ?></td>
					<td><?php echo $value->barang_pesanan; ?></td>
					<td><?php echo $value->jasa_pesanan; ?></td>
					<td><?php echo $value->tanggal_pesanan; ?></td>
					<td>
						<a href="<?php echo site_url('pesanan/delete/'.$value->id_pesanan); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
							</a>
						<a href="<?php echo site_url('pesanan/update/'.$value->id_pesanan); ?>"
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