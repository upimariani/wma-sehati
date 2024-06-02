<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Produk Keluar</h1>

				</div>

				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Produk Keluar</li>
					</ol>
				</div>

			</div>

		</div><!-- /.container-fluid -->


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
							<h3 class="card-title">Informasi Periode Produk Keluar</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal Keluar</th>
										<th>Nama Produk</th>
										<th>Quantity Keluar</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($view as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->tgl_keluar ?></td>
											<td><?= $value->nama_produk ?></td>
											<td><?= $value->qty_keluar ?> <?= $value->keterangan ?></td>
											<td class="text-center"> <a href="<?= base_url('Gudang/cProdukKeluar/delete/' . $value->id_produk_keluar) ?>" class="btn btn-app">
													<i class="fas fa-trash"></i> Hapus Produk Keluar
												</a>
												<button type="button" class="btn btn-app" data-toggle="modal" data-target="#edit<?= $value->id_produk_keluar ?>">
													<i class=" fas fa-edit"></i> Edit Produk Keluar
												</button>
											</td>
										</tr>
									<?php
									}
									?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Tanggal Keluar</th>
										<th>Nama Produk</th>
										<th>Quantity Keluar</th>
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

<?php
foreach ($view as $key => $value) {
?>
	<div class="modal fade" id="edit<?= $value->id_produk_keluar ?>">
		<div class="modal-dialog">
			<form action="<?= base_url('Gudang/cProdukKeluar/update/' . $value->id_produk_keluar) ?>" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Masukkan Produk Keluar</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Nama Produk</label>
							<select class="form-control" name="produk" required>
								<option value="">---Pilih Produk---</option>
								<?php
								foreach ($produk as $key => $item) {
								?>
									<option value="<?= $item->id_produk ?>" <?php if ($value->id_produk_masuk == $item->id_produk) {
																				echo 'selected';
																			} ?>><?= $item->nama_produk ?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tanggal Keluar</label>
							<input type="date" value="<?= $value->tgl_keluar ?>" name="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama user" required>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Quantity</label>
							<input type="number" name="qty" value="<?= $value->qty_keluar ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Quantity Produk" required>
						</div>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</form>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
<?php
}
?>
