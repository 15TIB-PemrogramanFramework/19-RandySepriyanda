<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index()
    {

		if($this->session->userdata('logined') && $this->session->userdata('logined') == true)
		{
			redirect('admin');
		}
		
		if(!$this->input->post())
		{
			$this->load->view('login');
		}
		else
		{

			$cek_login=$this->admin_model->cek_login(
				$this->input->post('username_admin'),
				$this->input->post('password_admin')
				);

			if( !empty($cek_login))
			{
				
				$this->session->set_userdata('username_admin',$cek_login->username_admin);
				$this->session->set_userdata('logined', true);
				
				redirect("admin");
			}
			else 
			{
				redirect("Login_admin");
			}
		}
        
    } 
	
	public function logout()
    {

		$this->session->unset_userdata('logined');
		redirect("Login_admin");
    } 
}

?>