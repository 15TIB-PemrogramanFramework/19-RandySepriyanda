<?php 

/**
* 
*/
class toko extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('toko_model');
	}

	#function index()
	#{
		//print_r($this->barang_model->ambil_data());
	#	$data['toko'] = $this-> toko_model->ambil_data();
	#	$this->load->view('Admin/Toko_list',$data);
	#}

	function delete($id)
	{
		$this->toko_model->hapus_data($id);
		redirect(site_url('toko'));
	}

	function tambah()
	{
		$data = array(
			'aksi' 					=> site_url('toko/tambah_aksi'),
			'id_toko' 				=> set_value('id_toko'),
			'nama_toko' 			=> set_value('nama_toko'),
			'deskripsi_toko' 		=> set_value('deskripsi_toko'),
			'alamat_toko' 			=> set_value('alamat_toko'),
			'bank_rekening_toko'	=> set_value('bank_rekening_toko'),
			'nama_rekening_toko' 	=> set_value('nama_rekening_toko'),
			'nomor_rekening_toko' 	=> set_value('nomor_rekening_toko'),
			'hp_toko' 				=> set_value('hp_toko'),
			'line_toko' 			=> set_value('line_toko'),
			'instagram_toko'		=> set_value('instagram_toko'),
			'button' 				=> 'Insert'
			);

		$this->load->view('Admin/Toko_list',$data);
	}

	function tambah_aksi()
	{
		$data = array(
			'id_toko' 				=> $this->input->post('id_toko'),
			'nama_toko' 			=> $this->input->post('nama_toko'),
			'deskripsi_toko' 		=> $this->input->post('deskripsi_toko'),
			'alamat_toko' 			=> $this->input->post('alamat_toko'),
			'bank_rekening_toko'	=> $this->input->post('bank_rekening_toko'),
			'nama_rekening_toko' 	=> $this->input->post('nama_rekening_toko'),
			'nomor_rekening_toko' 	=> $this->input->post('nomor_rekening_toko'),
			'hp_toko' 				=> $this->input->post('hp_toko'),
			'line_toko' 			=> $this->input->post('line_toko'),
			'instagram_toko' 		=> $this->input->post('instagram_toko')
			);

		$this->toko_model->tambah_data($data);
		redirect(site_url('toko'));
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

		$this->load->view('Admin/Toko_list',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'id_toko' 				=> $this->input->post('id_toko'),
			'nama_toko' 			=> $this->input->post('nama_toko'),
			'deskripsi_toko'	 	=> $this->input->post('deskripsi_toko'),
			'alamat_toko' 			=> $this->input->post('alamat_toko'),
			'bank_rekening_toko' 	=> $this->input->post('bank_rekening_toko'),
			'nama_rekening_toko' 	=> $this->input->post('nama_rekening_toko'),
			'nomor_rekening_toko' 	=> $this->input->post('nomor_rekening_toko'),
			'hp_toko' 				=> $this->input->post('hp_toko'),
			'line_toko' 			=> $this->input->post('line_toko'),
			'instagram_toko' 		=> $this->input->post('instagram_toko')
			);	

		$id_toko = $this->input->post('id_toko');
		$this->toko_model->edit_data($id_toko,$data);
		redirect(site_url('toko'));
	}


}


 ?>