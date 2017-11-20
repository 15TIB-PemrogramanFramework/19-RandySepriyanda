<?php 

/**
* 
*/
class Member_model extends CI_Model
{
	
	public $nama_tabel = 'member';
	public $id = 'id_member';
	public $order = 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_tabel)->result();
	}	

	

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->nama_tabel);
	}


	function cek_login($username_member,$password_member)
	{
		$this->db->where('username_member',$username_member);
		$this->db->where('password_member',$password_member);
		return $this->db->get($this->nama_tabel)->row();
	}

function ambil_data_username($username_member)
	{
		$this->db->where('username_member',$username_member);
		return $this->db->get($this->nama_tabel)->row();//1 data
	}

	function edit_data($id_member,$data)
	{
		$this->db->where($this->id,$id_member);
		return $this->db->update($this->nama_tabel,$data);
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->nama_tabel,$data);
	}

}

 ?>