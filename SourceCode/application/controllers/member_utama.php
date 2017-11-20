<?php 

/**
* 
*/
class member_utama extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
	}

	function index()
	{
		$this->load->view('Member/member_list');
	}




}


 ?>