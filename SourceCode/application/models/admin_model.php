<?php 

/**
* 
*/
class admin_model extends CI_Model
{
	
	public $nama_tabel = 'admin';
	public $username = 'username_admin';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->order_by($this->username,$this->order);
		return $this->db->get($this->nama_tabel)->result();
	}	

	

	function hapus_data($username)
	{
		$this->db->where($this->username,$username);
		return $this->db->delete($this->nama_tabel);
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->nama_tabel,$data);
	}

	function edit_data($username_admin,$data)
	{
		$this->db->where($this->username,$username_admin);
		return $this->db->update($this->nama_tabel,$data);
	}

	function ambil_data_id($username)
	{
		$this->db->where($this->username,$username);
		return $this->db->get($this->nama_tabel)->row();//1 data
	}

	function cek_login($username_admin,$password_admin)
	{
		$this->db->where('username_admin',$username_admin);
		$this->db->where('password_admin',$password_admin);
		return $this->db->get($this->nama_tabel)->row();
	}

}

 ?>