<?php 

/**
* 
*/
class admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	function index()
	{
		//print_r($this->admin_model->ambil_data());
		$data['admin'] = $this-> admin_model->ambil_data();
		$this->load->view('Admin/Admin_list',$data);
	}

	function delete($id)
	{
		$this->admin_model->hapus_data($id);
		redirect(site_url('admin'));
	}

	function tambah()
	{
		$data = array(
			'aksi' 					=> site_url('admin/tambah_aksi'),
			'username_admin' 		=> set_value('username_admin'),
			'password_admin' 		=> set_value('password_admin'),
			'nama_admin' 			=> set_value('nama_admin'),
			'button' 				=> 'Insert'
			);
		$this->load->view('admin/admin_form',$data);
	}

	function tambah_aksi()
	{
		$data = array(
			'username_admin' 	=> $this->input->post('username_admin'),
			'password_admin' 	=> $this->input->post('password_admin'),
			'nama_admin' 		=> $this->input->post('nama_admin')
			);
		$this->admin_model->tambah_data($data);
		redirect(site_url('admin'));
	}

	function update($id)
	{
			$admin = $this->admin_model->ambil_data_id($id);
			$data = array(
			'aksi' 					=> site_url('admin/update_aksi'),
			'username_admin' 		=> set_value('username_admin',$admin->username_admin),
			'password_admin' 		=> set_value('password_admin',$admin->password_admin),
			'nama_admin' 			=> set_value('nama_admin',$admin->nama_admin),
			'button' 				=> 'Edit'
			);
		$this->load->view('admin/admin_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'username_admin' 	=> $this->input->post('username_admin'),
			'password_admin' 	=> $this->input->post('password_admin'),
			'nama_admin' 		=> $this->input->post('nama_admin')
			);	

		$username_admin = $this->input->post('username_admin');
		$this->admin_model->edit_data($username_admin,$data);
		redirect(site_url('admin'));
	}


}


 ?>