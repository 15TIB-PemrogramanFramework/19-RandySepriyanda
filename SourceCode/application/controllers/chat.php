<?php 

/**
* 
*/
class chat extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('chat_model');
	}

	function index()
	{
		//print_r($this->admin_model->ambil_data());
		$id_member = $this->session->userdata('id_member');
		$id_admin = $this->session->userdata('id_admin');

		$data['chat'] = $this-> chat_model->ambil_data_id($id_member,$id_admin);
		$this->load->view('Member/chat_member_form',$data);

	}

	
	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('chat/tambah_aksi'),
			'id_admin' 			=> set_value('username_admin'),
			'id_member' 		=> set_value('id_member'),
			'isi_chat' 			=> set_value('isi_chat'),
			'button' 			=> 'KIRIM'
			);
		$this->load->view('Member/chat_member_form',$data);
	}

	function tambah_aksi()
	{
		$data = array(
			'id_admin' 	=> $this->input->post('id_admin'),
			'id_member' 	=> $this->input->post('id_member'),
			'isi_chat' 		=> $this->input->post('isi_chat')
			);
		$this->admin_model->tambah_data($data);
		redirect(site_url('Member/chat_member_form'));
	}

	
	}





 ?>