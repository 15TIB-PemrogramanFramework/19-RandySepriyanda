<?php 

/**
* 
*/
class pembayaran_model extends CI_Model
{
	
	public $nama_tabel = 'pembayaran';
	public $id = 'id_pembayaran';
	public $id_member = 'id_member';
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

	function tambah_data($data)//array
	{
		return $this->db->insert($this->nama_tabel,$data);
	}

	function edit_data($id_pembayaran,$data)
	{
		$this->db->where($this->id,$id_pembayaran);
		return $this->db->update($this->nama_tabel,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_tabel)->row();//1 data
	}

	function ambil_data_idpesanan($id_member)
	{	
		 $this->db->where ( 'id_member', $id_member);
		return $this->db->get($this->nama_tabel)->result();//1 data
	}

}

 ?>
