	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h2 class="m-0 text-dark">Tambah Petugas</h2><br />
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
							<div class="card-body">
								<form role="form" action="<?php echo base_url('datapetugas/store') ?>" method="POST">
									<div class="form-group">
										<label for="exampleInputEmail1">Nama petugas</label>
										<input type="text" required="" name="nama_petugas" class="form-control" id="exampleInputEmail1" placeholder="Nama Petugas">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Username</label>
										<input type="text" required="" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Password</label>
										<input required="" type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
									</div>
									<div class="form-group">
										<label>Level</label>
										<select name="level" class="form-control">
											<option value="admin">Admin</option>
											<option value="petugas">Petugas</option>
										</select>
									</div>
									<button type="submit" class="btn btn-primary mr-2">Tambah</button>
							</div>
							<!-- /.card-body -->
							</form>
						</div>
						<!-- /.card -->

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