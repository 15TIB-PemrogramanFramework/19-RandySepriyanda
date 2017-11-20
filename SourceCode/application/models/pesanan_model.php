<?php 

/**
* 
*/
class pesanan_model extends CI_Model
{
	
	public $nama_tabel = 'pesanan';
	public $id = 'id_pesanan';
	public $id_member = 'id_member';
	public $order = 'ASC';
	public $desc = 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{

		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_tabel)->result();
	}	

	function ambil_data_idmember($id_member)
	{

		$this->db->where($this->id_member,$id_member);
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_tabel)->result();
	}	

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->nama_tabel);
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->nama_tabel,$data);
	}

	function edit_data($id_pesanan,$data)
	{
		$this->db->where($this->id,$id_pesanan);
		return $this->db->update($this->nama_tabel,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_tabel)->row();//1 data
	}


	function ambil_data_id_pesanan_akhir()
	{	
		$this->db->order_by($this->id,$this->desc);
		return $this->db->get($this->nama_tabel)->row();
	}	

}

 ?>