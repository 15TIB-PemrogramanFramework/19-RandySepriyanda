<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	
	function generate_sidemenu()
	{
	return '
	<center>
	<li>
	<a href="'.site_url('toko').'" style="text-decoration:none"><i class="fa fa-institution" style="font-size:60px;color:black;"></i>
	<br>Toko</a>
	</li><li>
	</center>
	<center>
	<li>
	<a href="'.site_url('admin').'" style="text-decoration:none"><i class="fa fa-lock" style="font-size:60px;color:black;"></i>
	<br>Admin</a>
	</li>
	</center>
	<center>
	<li>
	<a href="'.site_url('member').'" style="text-decoration:none"><i class="fa fa-list-alt" style="font-size:60px;color:black;"></i>
	<br>Member</a>
	</li>
	</center>
	<center>
	<li>
	<a href="'.site_url('barang').'" style="text-decoration:none"><i class="fa fa-table" style="font-size:60px;color:black;"></i>
	<br>Barang</a>
	</li>
	</center>
	<center>
	<li>
	<a href="'.site_url('pesanan').'" style="text-decoration:none"><i class="fa fa-truck" style="font-size:60px;color:black;"></i>
	<br>Pesanan</a>
	</li><li>
	</center>
	<center>
	<li>
	<a href="'.site_url('pembayaran').'" style="text-decoration:none"><i class="fa fa-credit-card" style="font-size:60px;color:black;"></i>
	<br>Pembayaran</a>
	</li>
	</center>';
	}


	function generate_sidemenu_member()
	{

	return '
	<center>
	
	<li>
	<a href="'.site_url('member/index_member').'" style="text-decoration:none"><i class="fa fa-list-alt" style="font-size:60px;color:black;"></i>
	<br>Member</a>
	</li>
	</center>
	<center>
	
	<li>
	<a href="'.site_url('pesanan/pesanan_id').'" style="text-decoration:none"><i class="fa fa-truck" style="font-size:60px;color:black;"></i>
	<br>Pesanan</a>
	</li><li>
	</center>
	<center>
	<li>
	<a href="'.site_url('pembayaran/pembayaran_id').'" style="text-decoration:none"><i class="fa fa-credit-card" style="font-size:60px;color:black;"></i>
	<br>Pembayaran</a>
	</li>
	</center>';
	}


