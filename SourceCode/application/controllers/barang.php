<?php 

/**
* 
*/
class barang extends CI_Controller
{
	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
		$this->load->helper(array('url'));
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		//print_r($this->barang_model->ambil_data());
		$data['barang'] = $this-> barang_model->ambil_data();
		$this->load->view('Admin/Barang_list',$data);
	}

	function delete($id)
	{
		$this->barang_model->hapus_data($id);
		redirect(site_url('barang'));
	}

	function tambah()
	{
		$data = array(
			'aksi' 			=> site_url('barang/tambah_aksi'),
			'id_barang' 	=> set_value('id_barang'),
			'nama_barang' 	=> set_value('nama_barang'),
			'stock_barang' 	=> set_value('stock_barang'),
			'harga_barang' 	=> set_value('harga_barang'),
			'ukuran_barang' => set_value('ukuran_barang'),
			'button' 		=> 'Insert'
			);

		$this->load->view('Admin/Barang_form',$data);
	}

	function tambah_aksi()
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
                'id_barang' 		=> $this->input->post('id_barang'),
				'nama_barang' 		=> $this->input->post('nama_barang'),
				'stock_barang' 		=> $this->input->post('stock_barang'),
				'harga_barang' 		=> $this->input->post('harga_barang'),
				'ukuran_barang' 	=> $this->input->post('ukuran_barang'),
                'gambar' 			=> $gambar['file_name']   
                );
                $this->barang_model->tambah_data($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('barang'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('barang/tambah'); //jika gagal maka akan ditampilkan form upload
            }
        }



		$data = array(
			'id_barang' 	=> $this->input->post('id_barang'),
			'nama_barang' 	=> $this->input->post('nama_barang'),
			'stock_barang' 	=> $this->input->post('stock_barang'),
			'harga_barang' 	=> $this->input->post('harga_barang'),
			'ukuran_barang' => $this->input->post('ukuran_barang')
			);

		$this->barang_model->tambah_data($data);
		redirect(site_url('login_admin'));
	}

	function update($id)
	{
		$barang = $this->barang_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('barang/update_aksi'),
			'id_barang' 		=> set_value('id_barang',$barang->id_barang),
			'nama_barang' 		=> set_value('nama_barang',$barang->nama_barang),
			'stock_barang' 		=> set_value('stock_barang',$barang->stock_barang),
			'harga_barang' 		=> set_value('harga_barang',$barang->harga_barang),
			'ukuran_barang'		=> set_value('ukuran_barang',$barang->ukuran_barang),
			'button' 			=> 'Edit'
			);

		$this->load->view('Admin/Barang_form',$data);		
	}

	function update_aksi()
	{

		$id_barang = $this->input->post('id_barang');

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
                'id_barang' 		=> $this->input->post('id_barang'),
				'nama_barang' 		=> $this->input->post('nama_barang'),
				'stock_barang' 		=> $this->input->post('stock_barang'),
				'harga_barang' 		=> $this->input->post('harga_barang'),
				'ukuran_barang' 	=> $this->input->post('ukuran_barang'),
                'gambar' 			=> $gambar['file_name']   
                );
                
				$this->barang_model->edit_data($id_barang,$data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('barang'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('barang/tambah'); //jika gagal maka akan ditampilkan form upload
            }
        }



		$data = array(
			'id_barang' 	=> $this->input->post('id_barang'),
			'nama_barang' 	=> $this->input->post('nama_barang'),
			'stock_barang' 	=> $this->input->post('stock_barang'),
			'harga_barang' 	=> $this->input->post('harga_barang'),
			'ukuran_barang' => $this->input->post('ukuran_barang')
			);	

	
		$this->barang_model->edit_data($id_barang,$data);
		redirect(site_url('barang'));
	}


}


 ?>