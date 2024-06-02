<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPeramalan');
	}

	public function index()
	{
		$data = array(
			'barang' => $this->mPeramalan->barang()
		);
		$this->load->view('Gudang/Layout/head');
		$this->load->view('Gudang/Layout/aside');
		$this->load->view('Gudang/Analisis/vPeramalan', $data);
		$this->load->view('Gudang/Layout/footer');
	}
	public function detail_peramalan($id_bb)
	{
		$data = array(
			'periode' => $this->mPeramalan->periode($id_bb),
			'id_jenis' => $id_bb
		);
		$this->load->view('Gudang/Layout/head');
		$this->load->view('Gudang/Layout/aside');
		$this->load->view('Gudang/Analisis/vDetailPeramalan', $data);
		$this->load->view('Gudang/Layout/footer');
	}
}

/* End of file cAnalisis.php */
