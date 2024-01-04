<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h2 class="m-0 text-dark">Pembayaran</h2><br />
				</div>
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-6">
				<?php if ($this->session->flashdata('sukses')) { ?>
					<div class="alert alert-info">
						<?php echo $this->session->flashdata('sukses'); ?>
					</div>
				<?php } ?>
				<div class="grid-margin stretch-card">
					<div class="card">
						<!-- /.card-header -->
						<div class="card-body">
							<!-- <a href="<?php echo base_url('tambah-pembayaran') ?>" class="btn btn-sm btn-primary">Tambah Data</a> -->
							<form class="form-inline">
								<div class="row ">
									<div class="col-md-12">
										<div class="form-group">
											<h4 class="m-0 text-dark">Cari Siswa</h4>
											<input type="text" name="cari" placeholder="Masukkan NISN" class=" ml-md-3 ml-sm-3 ml-lg-3 form-control">
											<button type="submit" class="btn btn-inverse-info btn-fw ml-4">Cari</button>
										</div>
									</div>
								</div>
							</form>


						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>

				<?php if ($siswa) { ?>
					<div class=" grid-margin stretch-card">
						<div class="card">
							<!-- /.card-header -->
							<div class="card-body">
								<h4 class="card-title">Data Siswa</h4>
								<table class="table table-condensed">
									<thead>
										<tr>
											<th>NISN</th>
											<th>Nama</th>
											<th>Kelas</th>
											<th>Progress</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php echo $siswa->nisn ?></td>
											<td><?php echo $siswa->nama ?></td>
											<td><?php echo $siswa->nama_kelas ?></td>
											<td>
												<a href="<?php echo base_url('pembayaran-detail/' . $siswa->nisn) ?>" class="btn btn-success btn-sm">Bayar</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
					</div>
				<?php } ?>
				<!-- /.card -->

			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>