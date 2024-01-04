<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">
				<?php if ($this->session->flashdata('sukses')) { ?>
					<div class="alert alert-info">
						<?php echo $this->session->flashdata('sukses'); ?>
					</div>
				<?php } ?>
				<div class="card">
					<div class="card-body">
						<a href="<?php echo base_url('tambah-petugas') ?>" class="btn btn-outline-primary btn-fw">Tambah Data</a>
						<br /><br />
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>NO</th>
									<th>Nama petugas</th>
									<th>Username</th>
									<th>Level</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($data_petugas as $petugas) { ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $petugas->nama_petugas ?></td>
										<td><?php echo $petugas->username ?></td>
										<td><?php echo $petugas->level ?></td>
										<td>
											<a href="<?php echo base_url('edit-petugas/' . $petugas->id_petugas) ?>" class="btn btn-inverse-warning btn-fw">Edit</a>
											<a onclick="return confirm('Anda yakin akan menghapus?')" href="<?php echo base_url('hapus-petugas/' . $petugas->id_petugas) ?>" class="btn btn-inverse-danger btn-fw">Hapus</a>
										</td>
									</tr>
								<?php } ?>

							</tbody>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
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