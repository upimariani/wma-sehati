<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Produk Masuk</h1>

				</div>

				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Produk Masuk</li>
					</ol>
				</div>

			</div>

		</div><!-- /.container-fluid -->
		<button type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-default">
			<i class="fas fa-plus"></i> Tambah Data Produk Masuk
		</button>
		<div class="modal fade" id="modal-default">
			<div class="modal-dialog">
				<form action="<?= base_url('Gudang/cProdukMasuk/create') ?>" method="POST">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Masukkan Produk Masuk</h4>
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
									foreach ($produk as $key => $value) {
									?>
										<option value="<?= $value->id_produk ?>"><?= $value->nama_produk ?></option>
									<?php
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Tanggal Masuk</label>
								<input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama user" required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Quantity</label>
								<input type="number" name="qty" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Quantity Produk" required>
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
							<h3 class="card-title">Informasi Produk Masuk</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Produk</th>
										<th>Tanggal Masuk</th>
										<th>Quantity</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($produk_masuk as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_produk ?></td>
											<td><?= $value->tgl_masuk ?></td>
											<td><?= $value->quantity ?></td>
											<td class="text-center"> <a href="<?= base_url('Gudang/cProdukMasuk/delete/' . $value->id_produk_masuk) ?>" class="btn btn-app">
													<i class="fas fa-trash"></i> Hapus Produk Masuk
												</a>
												<button type="button" class="btn btn-app" data-toggle="modal" data-target="#edit<?= $value->id_produk_masuk ?>">
													<i class=" fas fa-edit"></i> Edit Produk Masuk
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
										<th>Nama Produk</th>
										<th>Tanggal Masuk</th>
										<th>Quantity</th>
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
foreach ($produk_masuk as $key => $value) {
?>
	<div class="modal fade" id="edit<?= $value->id_produk_masuk ?>">
		<div class="modal-dialog">
			<form action="<?= base_url('Gudang/cProdukMasuk/update/' . $value->id_produk_masuk) ?>" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Masukkan Produk Masuk</h4>
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
									<option value="<?= $item->id_produk ?>" <?php if ($value->id_produk == $item->id_produk) {
																				echo 'selected';
																			} ?>><?= $item->nama_produk ?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tanggal Masuk</label>
							<input type="date" value="<?= $value->tgl_masuk ?>" name="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama user" required>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Quantity</label>
							<input type="number" name="qty" value="<?= $value->quantity ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Quantity Produk" required>
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
