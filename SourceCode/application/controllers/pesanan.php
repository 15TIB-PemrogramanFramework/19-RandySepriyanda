<?php 

/**
* 
*/
class pesanan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pesanan_model');
		$this->load->model('barang_model');
	}

	function index()
	{
		//print_r($this->barang_model->ambil_data());
		$data['pesanan'] = $this-> pesanan_model->ambil_data();
		$this->load->view('Admin/Pesanan_list',$data);
	}

	function delete($id)
	{
		$this->pesanan_model->hapus_data($id);
		redirect(site_url('pesanan'));
	}

	function tambah()
	{
		$data = array(
			'aksi' 						=> site_url('pesanan/tambah_aksi'),
			'id_pesanan' 				=> set_value('id_pesanan'),
			'id_member' 				=> set_value('id_member'),
			'id_barang' 				=> set_value('id_barang'),	
			'tanggal_pesanan' 			=> set_value('tanggal_pesanan'),
			'status_pesanan' 			=> set_value('status_pesanan'),
			'jumlah_barang_pesanan' 	=> set_value('jumlah_barang_pesanan'),
			'total_bayar_pesanan' 		=> set_value('total_bayar_pesanan'),
			'barang_pesanan' 			=> set_value('barang_pesanan'),	
			'jasa_pesanan' 				=> set_value('jasa_pesanan'),
			'button' 					=> 'Insert'
			);

		$this->load->view('Admin/Barang_form',$data);
	}

	function tambah_aksi()
	{
		$data = array(
			'id_pesanan' 				=> $this->input->post('id_pesanan'),
			'id_member' 				=> $this->input->post('id_member'),
			'id_barang' 				=> $this->input->post('id_barang'),
			'tanggal_pesanan' 			=> $this->input->post('tanggal_pesanan'),
			'status_pesanan' 			=> $this->input->post('status_pesanan'),
			'jumlah_barang_pesanan' 	=> $this->input->post('jumlah_barang_pesanan'),
			'total_bayar_pesanan' 		=> $this->input->post('total_bayar_pesanan'),
			'barang_pesanan' 			=> $this->input->post('barang_pesanan'),
			'jasa_pesanan' 				=> $this->input->post('jasa_pesanan')
			);

		$this->pesanan_model->tambah_data($data);
		redirect(site_url('pesanan'));
	}

	function update($id)
	{
		$pesanan = $this->pesanan_model->ambil_data_id($id);
		$data = array(
			'aksi' 						=> site_url('pesanan/update_aksi'),
			'id_pesanan' 				=> set_value('id_pesanan',$pesanan->id_pesanan),
			'id_member' 				=> set_value('id_member',$pesanan->id_member),
			'id_barang' 				=> set_value('id_barang',$pesanan->id_barang),
			'tanggal_pesanan' 			=> set_value('tanggal_pesanan',$pesanan->tanggal_pesanan),
			'status_pesanan' 			=> set_value('status_pesanan',$pesanan->status_pesanan),
			'jumlah_barang_pesanan' 	=> set_value('jumlah_barang_pesanan',$pesanan->jumlah_barang_pesanan),
			'total_bayar_pesanan' 		=> set_value('total_bayar_pesanan',$pesanan->total_bayar_pesanan),
			'barang_pesanan' 			=> set_value('barang_pesanan',$pesanan->barang_pesanan),
			'jasa_pesanan' 				=> set_value('jasa_pesanan',$pesanan->jasa_pesanan),
			'button' 					=> 'Edit'
			);

		$this->load->view('Admin/Pesanan_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'id_pesanan' 				=> $this->input->post('id_pesanan'),
			'id_member' 				=> $this->input->post('id_member'),
			'id_barang' 				=> $this->input->post('id_barang'),	
			'tanggal_pesanan' 			=> $this->input->post('tanggal_pesanan'),
			'status_pesanan' 			=> $this->input->post('status_pesanan'),
			'jumlah_barang_pesanan' 	=> $this->input->post('jumlah_barang_pesanan'),
			'total_bayar_pesanan' 		=> $this->input->post('total_bayar_pesanan'),	
			'barang_pesanan' 			=> $this->input->post('barang_pesanan'),
			'jasa_pesanan' 				=> $this->input->post('jasa_pesanan')
			);	

		$id_pesanan = $this->input->post('id_pesanan');
		$this->pesanan_model->edit_data($id_pesanan,$data);
		redirect(site_url('pesanan'));
	}

function tambah_form($id_barang)
	{
		$barang = $this->barang_model->ambil_data_id($id_barang);
		$data = array(
			'aksi' 			=> site_url('pesanan/tambah_aksi_form'),
			'id_barang' 		=> set_value('id_barang',$barang->id_barang),
			'nama_barang' 		=> set_value('nama_barang',$barang->nama_barang),
			'stock_barang' 		=> set_value('stock_barang',$barang->stock_barang),
			'harga_barang' 		=> set_value('harga_barang',$barang->harga_barang),
			'ukuran_barang'		=> set_value('ukuran_barang',$barang->ukuran_barang),
			'button' 			=> 'PESAN'
			);

		$this->load->view('Utama/pesan_form',$data);		
	}

	function tambah_aksi_form()
	{

		$id_member = $this->session->userdata('id_member');

		if($id_member != NULL )
		{
		$data = array(
			'id_pesanan' 				=> $this->input->post('id_pesanan'),
			'id_member' 				=> $this->input->post('id_member'),
			'id_barang' 				=> $this->input->post('id_barang'),
			'tanggal_pesanan' 			=> $this->input->post('tanggal_pesanan'),
			'status_pesanan' 			=> $this->input->post('status_pesanan'),
			'jumlah_barang_pesanan' 	=> $this->input->post('jumlah_barang_pesanan'),
			'total_bayar_pesanan' 		=> $this->input->post('total_bayar_pesanan'),
			'barang_pesanan' 			=> $this->input->post('barang_pesanan'),
			'jasa_pesanan' 				=> $this->input->post('jasa_pesanan')
			);

		$this->pesanan_model->tambah_data($data);
		redirect(site_url('pembayaran/konfirmasi_form'));
		}

		else {
				redirect(site_url('member/tambah'));
		}

		
	}

	function total($harga_barang,$jumlah_barang_pesanan)
	{
		
		$total = $harga_barang*$jumlah_barang_pesanan;

		
		$this->load->view('Utama/pesan_form',$total);	
	}


	function pesanan_id()
	{
		$id_member = $this->session->userdata('id_member');
		

		$data['pesanan'] = $this-> pesanan_model->ambil_data_idmember($id_member);
		$this->load->view('Member/pesanan_list',$data);
	
	}

}


 ?>