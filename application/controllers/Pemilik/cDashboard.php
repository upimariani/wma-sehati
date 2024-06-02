<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array();
		$this->load->view('Pimpinan/Layout/head');
		$this->load->view('Pimpinan/Layout/aside');
		$this->load->view('Pimpinan/vDashboard', $data);
		$this->load->view('Pimpinan/Layout/footer');
	}
	public function cetak()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		// memanggil library FPDF
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);

		$pdf->Cell(200, 40, 'LAPORAN PRODUK KELUAR PER BULAN', 0, 0, 'C');
		$pdf->SetLineWidth(0);
		$pdf->Cell(10, 30, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(30, 7, 'No', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Tanggal Keluar', 1, 0, 'C');
		$pdf->Cell(60, 7, 'Nama Produk', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Quantity', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;


		$no = 1;
		$data = $this->db->query("SELECT * FROM `produk_keluar` JOIN produk ON produk.id_produk=produk_keluar.id_produk_masuk WHERE MONTH(tgl_keluar)='" . $bulan . "' AND YEAR(tgl_keluar)='" . $tahun . "'")->result();
		foreach ($data as $key => $value) {


			$pdf->Cell(30, 6, $no++, 1, 0, 'C');
			$pdf->Cell(40, 6, $value->tgl_keluar, 1, 0);
			$pdf->Cell(60, 6, $value->nama_produk, 1, 0);
			$pdf->Cell(40, 6, $value->qty_keluar, 1, 1);
		}

		$pdf->SetFont('Times', 'B', 10);
		$pdf->Cell(20, 7, '', 0, 1);
		$pdf->Cell(130, 6, '', 0, 0, 'C');
		$pdf->Cell(40, 6, 'Mengetahui', 0, 1);
		$pdf->Cell(130, 6, '', 0, 0, 'C');
		$pdf->Cell(40, 6, 'Pemilik Toko Sehati Dua', 0, 1);
		$pdf->Cell(60, 10, '', 0, 1);
		$pdf->Cell(130, 6, '', 0, 0, 'C');
		$pdf->Cell(40, 6, '(..............................)', 0, 1);
		$pdf->Output();

		// $data = array(
		// 	'bulan' => $bulan,
		// 	'tahun' => $tahun,
		// 	'laporan' => $this->mLaporan->lap_bulanan_transaksi($bulan, $tahun)
		// );
		// $this->load->view('Pemilik/Layouts/head');
		// $this->load->view('Pemilik/LaporanTransaksi/bulanan', $data);
		// $this->load->view('Pemilik/Layouts/footer');
	}
}

/* End of file cDashboard.php */
