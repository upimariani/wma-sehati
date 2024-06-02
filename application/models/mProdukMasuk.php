<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mProdukMasuk extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('produk_masuk');
		$this->db->join('produk', 'produk_masuk.id_produk = produk.id_produk', 'left');
		return $this->db->get()->result();
	}
	public function insert($data)
	{
		$this->db->insert('produk_masuk', $data);
	}
	public function update($id, $data)
	{
		$this->db->where('id_produk_masuk', $id);
		$this->db->update('produk_masuk', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_produk_masuk', $id);
		$this->db->delete('produk_masuk');
	}
}

/* End of file mProdukMasuk.php */
