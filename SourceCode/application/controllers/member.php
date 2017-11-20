<?php 

/**
* 
*/
class member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
	}

	function index()
	{
		//print_r($this->Member_model->ambil_data());
		$data['member'] = $this-> member_model->ambil_data();
		$this->load->view('Admin/Member_list',$data);
	}

	function delete($id)
	{
		$this->member_model->hapus_data($id);
		redirect(site_url('member'));
	}

	function member_cek($username)
	{
		//print_r($this->Member_model->ambil_data());
		$data['member'] = $this-> member_model->ambil_data();
		$this->load->view('Admin/Member_list',$data);
	}


	function index_member()
	{
		$username_member = $this->session->userdata('username_member');
		$member = $this->member_model->ambil_data_username($username_member);
		$data = array(
			'aksi' 				=> site_url('member/update_aksi'),
			'id_member' 		=> set_value('id_member',$member->id_member),
			'username_member' 	=> set_value('username_member',$member->username_member),
			'password_member' 	=> set_value('password_member',$member->password_member),
			'nama_member' 		=> set_value('nama_member',$member->nama_member),
			'jk_member' 		=> set_value('jk_member',$member->jk_member),
			'hp_member' 		=> set_value('hp_member',$member->hp_member),
			'alamat_member' 	=> set_value('alamat_member',$member->alamat_member),
			'email_member' 		=> set_value('email_member',$member->email_member),
			'button' 			=> 'Edit'
			);

		$this->load->view('Member/Member_list',$data);		
	
	}

	function update_aksi()
	{
		$data = array(
			'id_member' 	=> $this->input->post('id_member'),
			'username_member' 	=> $this->input->post('username_member'),
			'password_member' 	=> $this->input->post('password_member'),
			'nama_member' 	=> $this->input->post('nama_member'),
			'jk_member' 	=> $this->input->post('jk_member'),
			'hp_member' 	=> $this->input->post('hp_member'),
			'alamat_member' 	=> $this->input->post('alamat_member'),
			'email_member' => $this->input->post('email_member')
			);	

		$id_member = $this->input->post('id_member');
		$this->member_model->edit_data($id_member,$data);

		$username_member = $this->session->userdata('username_member');

		redirect('member/index_member/'.$username_member);
	}

	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('member/tambah_aksi'),
			'id_member' 		=> set_value('id_member'),
			'username_member' 	=> set_value('username_member'),
			'password_member' 	=> set_value('password_member'),
			'nama_member' 		=> set_value('nama_member'),
			'jk_member' 		=> set_value('jk_member'),
			'hp_member' 		=> set_value('hp_member'),
			'alamat_member'		=> set_value('alamat_member'),
			'email_member' 		=> set_value('email_member'),
			'button' 			=> 'DAFTAR'
			);

		$this->load->view('Utama/member_form',$data);
	}


	function tambah_aksi()
	{

		$data = array(
			'id_member' 		=> $this->input->post('id_member'),
			'username_member' 	=> $this->input->post('username_member'),
			'password_member' 	=> $this->input->post('password_member'),
			'nama_member' 		=> $this->input->post('nama_member'),
			'jk_member' 		=> $this->input->post('jk_member'),
			'hp_member' 		=> $this->input->post('hp_member'),
			'alamat_member' 	=> $this->input->post('alamat_member'),
			'email_member' 		=> $this->input->post('email_member')
			);

		$this->member_model->tambah_data($data);
		redirect('Login_member');
	}

}


 ?>
