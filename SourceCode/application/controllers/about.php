<?php 

/**
* 
*/
class about extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('toko_model');
	}

	function index()
	{
		$id2 = "12345678";
		$toko = $this->toko_model->ambil_data_id($id2);
		$data = array(
			'aksi' 						=> site_url('toko/update_aksi'),
			'id_toko' 					=> set_value('id_toko',$toko->id_toko),
			'nama_toko' 				=> set_value('nama_toko',$toko->nama_toko),
			'deskripsi_toko' 			=> set_value('deskripsi_toko',$toko->deskripsi_toko),
			'alamat_toko' 				=> set_value('alamat_toko',$toko->alamat_toko),
			'bank_rekening_toko'		=> set_value('bank_rekening_toko',$toko->bank_rekening_toko),
			'nama_rekening_toko' 		=> set_value('nama_rekening_toko',$toko->nama_rekening_toko),
			'nomor_rekening_toko' 		=> set_value('nomor_rekening_toko',$toko->nomor_rekening_toko),
			'hp_toko' 					=> set_value('hp_toko',$toko->hp_toko),
			'line_toko' 				=> set_value('line_toko',$toko->line_toko),
			'instagram_toko'			=> set_value('instagram_toko',$toko->instagram_toko),
			'button' 					=> 'Edit'
			);	
	
		$this->load->view('Utama/About_list',$data);
	}

	
}


 ?>


