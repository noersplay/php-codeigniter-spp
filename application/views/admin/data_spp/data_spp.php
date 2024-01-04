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
					<div class=" card-body">
						<a href="<?php echo base_url('tambah-spp') ?>" class="btn btn-outline-primary btn-fw" style="margin-bottom: 12px;">Tambah Data</a>
						<br />
						<div class=" table-responsive">
							<table id=" example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>NO</th>
										<th>Tahun</th>
										<th>Nominal</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($data_spp as $spp) { ?>
										<tr>
											<td><?php echo $no++ ?></td>
											<td><?php echo $spp->tahun ?></td>
											<td><?php echo $spp->nominal ?></td>
											<td>
												<a href="<?php echo base_url('edit-spp/' . $spp->id_spp) ?>" class="btn btn-inverse-warning btn-fw">Edit</a>
												<a onclick="return confirm('Anda yakin akan menghapus?')" href="<?php echo base_url('hapus-spp/' . $spp->id_spp) ?>" class="btn btn-inverse-danger btn-fw">Hapus</a>
											</td>
										</tr>
									<?php } ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</section>
</div>