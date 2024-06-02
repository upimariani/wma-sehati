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
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-6">
					<!-- general form elements -->
					<div class="card card-info">
						<div class="card-header">
							<h3 class="card-title">Tambah Data Produk</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<?php echo form_open_multipart('Admin/cBarang/create'); ?>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label for="exampleInputEmail1">Kategori Produk</label>
										<select class="form-control" name="kategori">
											<option value="">---Pilih Kategori Produk---</option>
											<?php
											foreach ($kategori as $key => $value) {
											?>
												<option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
											<?php
											}
											?>

										</select>
										<?= form_error('kategori', '<small class="text-danger">', '</small>') ?>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<label for="exampleInputEmail1">Nama Supplier</label>
										<input type="text" name="supplier" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Supplier">
										<?= form_error('supplier', '<small class="text-danger">', '</small>') ?>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Nama Produk</label>
										<input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Produk">
										<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Harga Produk</label>
										<input type="number" name="harga" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Harga Produk">
										<?= form_error('harga', '<small class="text-danger">', '</small>') ?>
									</div>
								</div>
							</div>
							<div class="row">

								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Keterangan Barang</label>
										<input type="text" name="satuan" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Satuan Barang">
										<?= form_error('satuan', '<small class="text-danger">', '</small>') ?>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Gambar</label>
										<input type="file" name="gambar" class="form-control" id="exampleInputEmail1" required>
									</div>
								</div>
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Save</button>
							<a href="<?= base_url('Admin/cBarang') ?>" class="btn btn-danger">Kembali</a>
						</div>
						</form>
					</div>
					<!-- /.card -->
				</div>
				<!--/.col (right) -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
