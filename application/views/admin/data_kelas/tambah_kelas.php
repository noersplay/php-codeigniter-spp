	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h2 class="m-0 text-dark">Tambah Kelas</h2><br />
					</div>
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<!-- left column -->
					<div class="col-md-12">
						<!-- general form elements -->
						<div class="card">
							<!-- form start -->
							<form role="form" action="<?php echo base_url('datakelas/store') ?>" method="POST">
								<div class="card-body">


									<div class="form-group">
										<label for="exampleInputEmail1">Nama Kelas</label>
										<input type="text" required="" name="nama_kelas" class="form-control" id="exampleInputEmail1" placeholder="Nama Kelas">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Kompetensi Keahlian</label>
										<input type="text" required="" name="kompetensi_keahlian" class="form-control" id="exampleInputEmail1" placeholder="Kompetensi Keahlian">
									</div>

									<button type="submit" class="btn btn-primary mr-2">Tambah</button>
								</div>
								<!-- /.card-body -->
							</form>
						</div>
						<!-- //card -->
					</div>
					<!--/.col (left) -->
				</div>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	</div>