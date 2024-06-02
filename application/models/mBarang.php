<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mBarang extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('produk', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
		return $this->db->get()->result();
	}
	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where('id_produk', $id);
		return $this->db->get()->row();
	}
	public function update($id, $data)
	{
		$this->db->where('id_produk', $id);
		$this->db->update('produk', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_produk', $id);
		$this->db->delete('produk');
	}
}

/* End of file mBarang.php */
