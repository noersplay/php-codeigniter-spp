  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
          <?php if ($this->session->userdata('level') == "admin") { ?>
            <div class="card-people mt-auto">
              <img src="<?= base_url('asset/template2/') ?>images/dashboard/people.svg" alt="people">
              <div class="weather-info">
                <div class="d-flex">
                  <div>
                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>27<sup>C</sup></h2>
                  </div>
                  <div class="ml-2">
                    <h4 class="location font-weight-normal">Bandung</h4>
                    <h6 class="font-weight-normal">Indonesia</h6>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4">Jumlah Siswa</p>
                <p class="fs-30 mb-4">00<?php echo $siswa; ?></p>
                <a href="<?php echo base_url('data-siswa') ?>" class="btn btn-info btn-sm">More info</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">Jumlah Kelas</p>
                <p class="fs-30 mb-4">00<?php echo $kelas; ?></p>
                <a href="<?php echo base_url('data-kelas') ?>" class="btn btn-primary btn-sm">More info</a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
  <!-- /.row -->
  <?php if ($this->session->userdata('level') == "petugas") { ?>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>NISN</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <!-- <th>Username</th> -->
                  <th>Kelas</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <!-- <th>Opsi</th> -->
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
                    <!-- <td><?php echo $siswa->username ?></td> -->
                    <td><?php echo $siswa->nama_kelas ?></td>
                    <td><?php echo $siswa->alamat ?></td>
                    <td><?php echo $siswa->no_telp ?></td>
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

  <?php } ?>

  </section>
  </div><!-- /.container-fluid -->
  <!-- /.content -->
  </div>