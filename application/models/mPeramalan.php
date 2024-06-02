<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPeramalan extends CI_Model
{

	//data dummy
	public function barang()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
		return $this->db->get()->result();
	}

	public function periode($id_bb)
	{
		return $this->db->query("SELECT SUM(qty_keluar) as qty, produk.id_produk, MONTH(tgl_keluar) as bulan, keterangan FROM produk_keluar JOIN produk ON produk_keluar.id_produk_masuk=produk.id_produk  WHERE produk.id_produk='" . $id_bb . "' GROUP BY produk.id_produk, MONTH(tgl_keluar)")->result();
	}
}

/* End of file mPeramalan.php */
