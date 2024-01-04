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
						<a href="<?php echo base_url('tambah-kelas') ?>" class="btn btn-outline-primary btn-fw" style="margin-bottom: 12px;">Tambah Data</a>
						<br />
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>NO</th>
									<th>Nama Kelas</th>
									<th>Kompetensi Keahlian</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($data_kelas as $kelas) { ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $kelas->nama_kelas ?></td>
										<td><?php echo $kelas->kompetensi_keahlian ?></td>
										<td>
											<a href="<?php echo base_url('edit-kelas/' . $kelas->id_kelas) ?>" class="btn btn-inverse-warning btn-fw">Edit</a>
											<a onclick="return confirm('Anda yakin akan menghapus?')" href="<?php echo base_url('hapus-kelas/' . $kelas->id_kelas) ?>" class="btn btn-inverse-danger btn-fw">Hapus</a>
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