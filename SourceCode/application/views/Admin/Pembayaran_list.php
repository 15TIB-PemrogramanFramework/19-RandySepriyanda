<?php $this->load->view('templates/header'); ?>

<style>
.zoom-effect {  
  position: relative;
  width: 200px;
  height: 150px;
  margin: 0 auto;
  overflow: hidden;  
}
 

 
.kotak img {
  -webkit-transition: 0.4s ease;
  transition: 3s ease;
  width: 200px;
}
 
.zoom-effect:hover .kotak img {
  -webkit-transform: scale(0.2);
  transform: scale(3.1);
}
</style>

<h2>Data Pembayaran</h2>


<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID Pembayaran</th>
				<th>ID Pesanan</th>
				<th>ID Member</th>
				<th>Bank Pengirim</th>
				<th>Nama Pengirim</th>
				<th>Jumlah Pengirim</th>
				<th>Keterangan Pengirim</th>
				<th>Status Pengirim</th>
				<th>Gambar</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>

			<?php foreach ($pembayaran as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_pembayaran; ?></td>
					<td><?php echo $value->id_pesanan; ?></td>
					<td><?php echo $value->id_member; ?></td>
					<td><?php echo $value->bank_pengirim; ?></td>
					<td><?php echo $value->nama_pengirim; ?></td>
					<td><?php echo $value->jumlah_pengirim; ?></td>
					<td><?php echo $value->keterangan_pengirim; ?></td>
					<td><?php echo $value->status_pembayaran; ?></td>
					<td><div class="zoom-effect">
			<div class="kotak"><img src="./assets/gambar/uploads/<?php echo $value->gambar; ?>" width="100" height="150" alt=""></div></div></td>
					<td>
						<a href="<?php echo site_url('pembayaran/delete/'.$value->id_pembayaran); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
							</a>
						<a href="<?php echo site_url('pembayaran/update/'.$value->id_pembayaran); ?>"
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