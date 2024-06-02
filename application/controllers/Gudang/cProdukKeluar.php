<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProdukKeluar extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mProdukKeluar');
		$this->load->model('mBarang');
	}

	public function index()
	{
		$data = array(
			'periode' => $this->mProdukKeluar->periode(),
			'produk' => $this->mBarang->select()
		);
		$this->load->view('Gudang/Layout/head');
		$this->load->view('Gudang/Layout/aside');
		$this->load->view('Gudang/ProdukKeluar/vPeriode', $data);
		$this->load->view('Gudang/Layout/footer');
	}
	public function create()
	{
		$data = array(
			'id_produk_masuk' => $this->input->post('produk'),
			'tgl_keluar' => $this->input->post('tanggal'),
			'qty_keluar' => $this->input->post('qty')
		);
		$this->mProdukKeluar->insert($data);
		$this->session->set_flashdata('success', 'Produk Keluar Berhasil Disimpan!');
		redirect('Gudang/cProdukKeluar');
	}
	public function detail($tgl)
	{
		$data = array(
			'view' => $this->mProdukKeluar->view($tgl),
			'produk' => $this->mBarang->select()
		);
		$this->load->view('Gudang/Layout/head');
		$this->load->view('Gudang/Layout/aside');
		$this->load->view('Gudang/ProdukKeluar/vProdukKeluar', $data);
		$this->load->view('Gudang/Layout/footer');
	}
	public function update($id)
	{
		$data = array(
			'id_produk_masuk' => $this->input->post('produk'),
			'tgl_keluar' => $this->input->post('tanggal'),
			'qty_keluar' => $this->input->post('qty')
		);
		$this->mProdukKeluar->update($id, $data);
		$this->session->set_flashdata('success', 'Produk Keluar Berhasil Diperbaharui!');
		redirect('Gudang/cProdukKeluar');
	}
	public function delete($id)
	{
		$this->mProdukKeluar->delete($id);
		$this->session->set_flashdata('success', 'Produk Keluar Berhasil Dihapus!');
		redirect('Gudang/cProdukKeluar');
	}
}

/* End of file cProdukKeluar.php */
