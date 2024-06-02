<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Produk</h1>

				</div>

				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Produk</li>
					</ol>
				</div>

			</div>

		</div><!-- /.container-fluid -->
		<a href="<?= base_url('Admin/cBarang/create') ?>" class="btn btn-app">
			<i class="fas fa-plus"></i> Tambah Produk
		</a>
		<?php
		if ($this->session->userdata('success')) {
		?>
			<div class="callout callout-success">
				<h5>Sukses!</h5>
				<p><?= $this->session->userdata('success') ?></p>
			</div>
		<?php
		}
		?>

	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Produk</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Gambar</th>
										<th>Kategori</th>
										<th>Nama Barang</th>
										<th>Nama Supplier</th>
										<th>Keterangan</th>
										<th>Harga</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($barang as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td>
												<img style="width: 100px;" src="<?= base_url('asset/foto-produk/' . $value->gambar) ?>">

											</td>
											<td><?= $value->nama_kategori ?></td>
											<td><?= $value->nama_produk ?></td>
											<td><?= $value->nama_supplier ?></td>
											<td><?= $value->keterangan ?></td>
											<td>Rp. <?= number_format($value->harga)  ?> / <?= $value->keterangan ?></td>
											<td class="text-center"> <a href="<?= base_url('Admin/cBarang/delete/' . $value->id_produk) ?>" class="btn btn-app">
													<i class="fas fa-trash"></i> Hapus Barang
												</a> <a href="<?= base_url('Admin/cBarang/update/' . $value->id_produk) ?>" class="btn btn-app">
													<i class="fas fa-edit"></i> Edit Barang
												</a></td>
										</tr>
									<?php
									}
									?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Gambar</th>
										<th>Kategori</th>
										<th>Nama Barang</th>
										<th>Nama Supplier</th>
										<th>Keterangan</th>
										<th>Harga</th>
										<th class="text-center">Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
