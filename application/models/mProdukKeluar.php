<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mProdukKeluar extends CI_Model
{
	public function periode()
	{
		return $this->db->query("SELECT * FROM `produk_keluar` GROUP BY tgl_keluar")->result();
	}
	public function insert($data)
	{
		$this->db->insert('produk_keluar', $data);
	}
	public function view($tgl)
	{
		return $this->db->query("SELECT * FROM `produk_keluar` JOIN produk ON produk_keluar.id_produk_masuk=produk.id_produk WHERE produk_keluar.tgl_keluar='" . $tgl . "'")->result();
	}
	public function update($id, $data)
	{
		$this->db->where('id_produk_keluar', $id);
		$this->db->update('produk_keluar', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_produk_keluar', $id);
		$this->db->delete('produk_keluar');
	}
}

/* End of file mProdukKeluar.php */
