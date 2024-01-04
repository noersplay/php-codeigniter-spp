<!-- Sidebar -->
<div class="sidebar">
	<!-- Sidebar Menu -->
	<nav class="sidebar sidebar-offcanvas">
		<ul class="nav" role="menu">
			<!-- admin -->
			<?php if ($this->session->userdata('level') == 'admin') { ?>
				<li class="nav-item">
					<a href="<?php echo base_url('dashboard-admin') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'dashboard-admin' ? 'active' : ''; ?>">
						<i class="icon-grid menu-icon""></i>
							<span class=" menu-title">Dashboard</span>
					</a>
				</li>
			<?php } ?>
			<!-- petugas -->
			<?php if ($this->session->userdata('level') == 'petugas') { ?>
				<li class=" nav-item">
					<a href="<?php echo base_url('dashboard-petugas') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'dashboard-petugas' ? 'active' : ''; ?>">
						<i class="icon-grid menu-icon"></i>
						<span class="menu-title">Dashboard</span>
					</a>
				</li>

			<?php } ?>
			<!-- admin -->
			<?php if ($this->session->userdata('level') == 'admin') { ?>
				<li class="nav-item">
					<a href="<?php echo base_url('data-siswa') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'data-siswa' ? 'active' : ''; ?>">
						<i class="icon-head menu-icon"></i>
						<span class="menu-title">Data Siswa</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('data-spp') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'data-spp' ? 'active' : ''; ?>">
						<i class="icon-paper menu-icon"></i>
						<span class="menu-title">Data SPP</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('data-kelas') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'data-kelas' ? 'active' : ''; ?>">
						<i class="ti-blackboard menu-icon"></i>
						<span class="menu-title">Data Kelas</span>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?php echo base_url('data-petugas') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'data-petugas' ? 'active' : ''; ?>">
						<i class="mdi mdi-account-multiple-outline menu-icon"></i>
						<span class="menu-title">Data Petugas</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('pembayaran') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'pembayaran' ? 'active' : ''; ?>">
						<i class="ti-receipt menu-icon"></i>
						<span class="menu-title">Pembayaran</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('history-pembayaran') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'history-pembayaran' ? 'active' : ''; ?>">
						<i class="ti-time menu-icon"></i>
						<span class="menu-title">History Pembayaran</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('laporan') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'laporan' ? 'active' : ''; ?>">
						<i class="ti-printer menu-icon"></i>
						<span class="menu-title">Laporan</span>
					</a>
				</li>
			<?php } ?>
			<!-- petugas -->
			<?php if ($this->session->userdata('level') == 'petugas') { ?>
				<li class="nav-item">
					<a href="<?php echo base_url('pembayaran') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'pembayaran' ? 'active' : ''; ?>">
						<i class="ti-receipt menu-icon"></i>
						<span class="menu-title">Pembayaran</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('history-pembayaran') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'history-pembayaran' ? 'active' : ''; ?>">
						<i class="ti-time menu-icon"></i>
						<span class="menu-title">History Pembayaran</span>
					</a>
				</li>
			<?php } ?>
			<!-- siswa -->
			<?php if ($this->session->userdata('level') == 'siswa') { ?>
				<li class="nav-item">
					<a href="<?php echo base_url('history-pembayaran-siswa') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'history-pembayaran-siswa' ? 'active' : ''; ?>">
						<i class="ti-time menu-icon"></i>
						<span class="menu-title">History Pembayaran</span>
					</a>
				</li>
			<?php } ?>
		</ul>
	</nav>
	<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->