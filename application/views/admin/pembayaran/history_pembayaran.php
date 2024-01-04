<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h2 class="m-0 text-dark">History Pembayaran</h2><br />
				</div>
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">

				<div class="card">
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>NO</th>
									<th>Nama Siswa</th>
									<th>Nama Petugas</th>
									<th>Bulan</th>
									<th>Tahun</th>
									<!-- <th>Opsi</th> -->
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($data_history as $history) { ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $history->nama ?></td>
										<td><?php echo $history->nama_petugas ?></td>
										<td><?php echo $history->bulan_dibayar ?></td>
										<td><?php echo $history->tahun_dibayar ?></td>
										<!-- <td> -->
										<!-- <a href="<?php echo base_url('edit-history/' . $history->id_history) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a> -->
										<!-- <a onclick="return confirm('Hapus Data?')" href="<?php echo base_url('hapus-history/' . $history->id_pembayaran) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a> -->
										<!-- </td> -->
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