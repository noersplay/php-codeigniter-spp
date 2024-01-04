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
            <a href="<?php echo base_url('tambah-siswa') ?>" class="btn btn-outline-primary btn-fw" style="margin-bottom: 12px;">Tambah Data</a>
            <br />
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>NISN</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($data_siswa as $siswa) { ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $siswa->nisn ?></td>
                      <td><?php echo $siswa->nis ?></td>
                      <td><?php echo $siswa->nama ?></td>
                      <td><?php echo $siswa->nama_kelas ?></td>
                      <td><?php echo $siswa->alamat ?></td>
                      <td><?php echo $siswa->no_telp ?></td>
                      <td>
                        <a href="<?php echo base_url('edit-siswa/' . $siswa->nisn) ?>" class="btn btn-inverse-warning btn-fw">Edit</a>
                        <a onclick="return confirm('Anda yakin akan menghapus?')" href="<?php echo base_url('hapus-siswa/' . $siswa->nisn) ?>" class="btn btn-inverse-danger btn-fw">Hapus</a>
                      </td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>
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