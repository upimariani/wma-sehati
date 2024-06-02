<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProdukMasuk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mProdukMasuk');
		$this->load->model('mBarang');
	}

	public function index()
	{
		$data = array(
			'produk' => $this->mBarang->select(),
			'produk_masuk' => $this->mProdukMasuk->select()
		);
		$this->load->view('Gudang/Layout/head');
		$this->load->view('Gudang/Layout/aside');
		$this->load->view('Gudang/ProdukMasuk/vProdukMasuk', $data);
		$this->load->view('Gudang/Layout/footer');
	}
	public function create()
	{
		$data = array(
			'id_produk' => $this->input->post('produk'),
			'tgl_masuk' => $this->input->post('tanggal'),
			'quantity' => $this->input->post('qty')
		);
		$this->mProdukMasuk->insert($data);
		$this->session->set_flashdata('success', 'Data Produk Masuk Berhasil Disimpan!');
		redirect('Gudang/cProdukMasuk');
	}
	public function update($id)
	{
		$data = array(
			'id_produk' => $this->input->post('produk'),
			'tgl_masuk' => $this->input->post('tanggal'),
			'quantity' => $this->input->post('qty')
		);
		$this->mProdukMasuk->update($id, $data);
		$this->session->set_flashdata('success', 'Data Produk Masuk Berhasil Disimpan!');
		redirect('Gudang/cProdukMasuk');
	}
	public function delete($id)
	{
		$this->mProdukMasuk->delete($id);
		$this->session->set_flashdata('success', 'Data Produk Masuk Berhasil Dihapus!');
		redirect('Gudang/cProdukMasuk');
	}
}

/* End of file cProdukMasuk.php */
