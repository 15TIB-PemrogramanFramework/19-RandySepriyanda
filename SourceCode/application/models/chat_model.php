<?php 

/**
* 
*/
class chat_model extends CI_Model
{
	
	public $nama_tabel = 'chat';
	public $id_member = 'id_member';
	public $id_admin = 'id_admin';
	public $order = 'ASC';
	public $desc= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_tabel)->result();
	}	

	

	function tambah_data($data)//array
	{
		return $this->db->insert($this->nama_tabel,$data);
	}

	
	function ambil_data_id($id_member,$id_admin)
	{
		$this->db->where($this->id_member,$id_member);
		$this->db->where($this->id_admin,$id_admin);
		return $this->db->get($this->nama_tabel)->result();//1 data
	}

}

 ?>