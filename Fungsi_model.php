<?php
class Fungsi_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getAllProducts()
	{
		$this->db->select("*");
		$this->db->from("tabel");

		return $this->db->get();
	}

	function getProduct($id)
	{
		return $this->db->get_where('tabel', array('id' => $id));
	}

	function addProduct($data)
	{
		$this->db->insert('tabel', $data);
	}

	function updateProcuct($data,$id)
	{
		$this->db->update("tabel", $data,$id);
	}

	function deleteProduct($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tabel');
	}
}
?>