<?php 

/**
* 
*/
class pembayaran extends CI_Controller
{


	var $limit=10;
	var $offset=10;
	
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pembayaran_model');
		$this->load->model('pesanan_model');
		$this->load->helper(array('url'));
	}

	function index()
	{
		//print_r($this->barang_model->ambil_data());
		$data['pembayaran'] = $this-> pembayaran_model->ambil_data();
		$this->load->view('Admin/Pembayaran_list',$data);
	}

	function delete($id)
	{
		$this->pembayaran_model->hapus_data($id);
		redirect(site_url('pembayaran'));
	}

	
	function update($id)
	{
		$pembayaran = $this->pembayaran_model->ambil_data_id($id);
		$data = array(
			'aksi' 							=> site_url('pembayaran/update_aksi'),
			'id_pembayaran' 				=> set_value('id_pembayaran',$pembayaran->id_pembayaran),
			'id_pesanan' 					=> set_value('id_pesanan',$pembayaran->id_pesanan),
			'bank_pengirim' 				=> set_value('bank_pengirim',$pembayaran->bank_pengirim),
			'nama_pengirim' 				=> set_value('nama_pengirim',$pembayaran->nama_pengirim),
			'jumlah_pengirim' 				=> set_value('jumlah_pengirim',$pembayaran->jumlah_pengirim),
			'keterangan_pengirim' 			=> set_value('keterangan_pengirim',$pembayaran->keterangan_pengirim),
			'status_pembayaran' 			=> set_value('status_pembayaran',$pembayaran->status_pembayaran),
			'button' 						=> 'Edit'
			);

		$this->load->view('Admin/Pembayaran_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'id_pembayaran' 				=> $this->input->post('id_pembayaran'),
			'id_pesanan' 				=> $this->input->post('id_pesanan'),
			'bank_pengirim' 				=> $this->input->post('bank_pengirim'),	
			'nama_pengirim' 			=> $this->input->post('nama_pengirim'),
			'jumlah_pengirim' 			=> $this->input->post('jumlah_pengirim'),
			'keterangan_pengirim' 	=> $this->input->post('keterangan_pengirim'),
			'status_pembayaran' 		=> $this->input->post('status_pembayaran')
			);	

		$id_pembayaran = $this->input->post('id_pembayaran');
		$this->pembayaran_model->edit_data($id_pembayaran,$data);
		redirect(site_url('pembayaran'));
	}

	

	function konfirmasi_form()
	{
		$pesanan_akhir = $this->pesanan_model->ambil_data_id_pesanan_akhir();
		$id_pesan = $pesanan_akhir->id_pesanan;

		$pesanan = $this->pesanan_model->ambil_data_id($id_pesan);


		$data = array(
			'aksi' 						=> site_url('pembayaran/konfirmasi_pembayaran'),
			'id_pesanan' 				=> set_value('id_pesanan',$pesanan->id_pesanan),
			'id_member' 				=> set_value('id_member',$pesanan->id_member),
			'id_barang' 				=> set_value('id_barang',$pesanan->id_barang),
			'tanggal_pesanan' 			=> set_value('tanggal_pesanan',$pesanan->tanggal_pesanan),
			'status_pesanan' 			=> set_value('status_pesanan',$pesanan->status_pesanan),
			'jumlah_barang_pesanan' 	=> set_value('jumlah_barang_pesanan',$pesanan->jumlah_barang_pesanan),
			'total_bayar_pesanan' 		=> set_value('total_bayar_pesanan',$pesanan->total_bayar_pesanan),
			'barang_pesanan' 			=> set_value('barang_pesanan',$pesanan->barang_pesanan),
			'jasa_pesanan' 				=> set_value('jasa_pesanan',$pesanan->jasa_pesanan),
			'button' 					=> 'BAYAR'
			);


		$this->load->view('Utama/pembayaran_form',$data);		
	}


function konfirmasi_pembayaran()
	{
		$data = array(
			'id_pembayaran' 			=> $this->input->post('id_pembayaran'),
			'id_pesanan' 				=> $this->input->post('id_pesanan'),
			'id_member' 				=> $this->input->post('id_member'),
			'bank_pengirim' 			=> $this->input->post('bank_pengirim'),	
			'nama_pengirim' 			=> $this->input->post('nama_pengirim'),
			'jumlah_pengirim' 			=> $this->input->post('jumlah_pengirim'),
			'keterangan_pengirim' 		=> $this->input->post('keterangan_pengirim'),
			'status_pembayaran' 		=> $this->input->post('status_pembayaran')
		);

		$this->pembayaran_model->tambah_data($data);
		redirect(site_url('home'));
	}	


	function pembayaran_id()
	{
		$id_member = $this->session->userdata('id_member');
		

		$data['pembayaran'] = $this-> pembayaran_model->ambil_data_idpesanan($id_member);
		$this->load->view('Member/pembayaran_list',$data);

	
	}


	function update_m($id)
	{
		$pembayaran = $this->pembayaran_model->ambil_data_id($id);
		$data = array(
			'aksi' 							=> site_url('pembayaran/update_aksi_m'),
			'id_pembayaran' 				=> set_value('id_pembayaran',$pembayaran->id_pembayaran),
			'id_pesanan' 					=> set_value('id_pesanan',$pembayaran->id_pesanan),
			'id_member' 					=> set_value('id_member',$pembayaran->id_member),
			'bank_pengirim' 				=> set_value('bank_pengirim',$pembayaran->bank_pengirim),
			'nama_pengirim' 				=> set_value('nama_pengirim',$pembayaran->nama_pengirim),
			'jumlah_pengirim' 				=> set_value('jumlah_pengirim',$pembayaran->jumlah_pengirim),
			'keterangan_pengirim' 			=> set_value('keterangan_pengirim',$pembayaran->keterangan_pengirim),
			'status_pembayaran' 			=> set_value('status_pembayaran',$pembayaran->status_pembayaran),
			'button' 						=> 'Edit'
			);

		$this->load->view('Member/Pembayaran_form',$data);		
	}

	function update_aksi_m()
	{


		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/gambar/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gambar = $this->upload->data();
                $data = array(           
                'id_pembayaran' 			=> $this->input->post('id_pembayaran'),
				'id_pesanan' 				=> $this->input->post('id_pesanan'),
				'id_member' 				=> $this->input->post('id_member'),
				'bank_pengirim' 			=> $this->input->post('bank_pengirim'),	
				'nama_pengirim' 			=> $this->input->post('nama_pengirim'),
				'jumlah_pengirim' 			=> $this->input->post('jumlah_pengirim'),
				'keterangan_pengirim' 		=> $this->input->post('keterangan_pengirim'),
				'status_pembayaran' 		=> $this->input->post('status_pembayaran'),
                'gambar' 					=> $gambar['file_name']   
                );
               
               $id_pembayaran = $this->input->post('id_pembayaran');
				$this->pembayaran_model->edit_data($id_pembayaran,$data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('pembayaran/pembayaran_id'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('member_utama'); //jika gagal maka akan ditampilkan form upload
            }
        }




		$data = array(
			'id_pembayaran' 				=> $this->input->post('id_pembayaran'),
			'id_pesanan' 				=> $this->input->post('id_pesanan'),
			'id_member' 				=> $this->input->post('id_member'),
			'bank_pengirim' 				=> $this->input->post('bank_pengirim'),	
			'nama_pengirim' 			=> $this->input->post('nama_pengirim'),
			'jumlah_pengirim' 			=> $this->input->post('jumlah_pengirim'),
			'keterangan_pengirim' 	=> $this->input->post('keterangan_pengirim'),
			'status_pembayaran' 		=> $this->input->post('status_pembayaran')
			);	

		$id_pembayaran = $this->input->post('id_pembayaran');
		$this->pembayaran_model->edit_data($id_pembayaran,$data);
		redirect(site_url('pembayaran/pembayaran_id'));
	}


}


 ?>

