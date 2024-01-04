<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aplikasi Pembayaran SPP | <?php echo $title; ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url('asset/template2/') ?>vendors/mdi/css/materialdesignicons.min.css">
	<!-- favicon-->
	<link rel="shortcut icon" href="<?= base_url('asset/template2/') ?>images/logo-mini.png">
	<link rel="stylesheet" href="<?= base_url('asset/template2/') ?>vendors/feather/feather.css">
	<link rel="stylesheet" href="<?= base_url('asset/template2/') ?>vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('asset/template2/') ?>vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="<?= base_url('asset/template2/') ?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="<?= base_url('asset/template2/') ?>vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/template2/') ?>js/select.dataTables.min.css">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url('asset/template2/') ?>css/vertical-layout-light/style.css">
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper">
			<script>
				window.setTimeout(function() {
					$(".alert-info").fadeTo(500, 0).slideUp(500, function() {
						$(this).remove();
					});
				}, 2000);
			</script>
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
				<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
					<a class="navbar-brand brand-logo mr-5" href="#"><img src="<?= base_url('asset/template2/') ?>images/logo.png" alt="logo" /></a>
					<a class="navbar-brand brand-logo-mini" href="#"><img src="<?= base_url('asset/template2/') ?>images/logo-mini.png" alt="logo" /></a>
				</div>
				<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
					<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
						<span class="icon-menu"></span>
					</button>
					<ul class="navbar-nav mr-lg-2">
						<li class="nav-item nav-search d-none d-lg-block">
							<div class="input-group">
								<div class="input-group-prepend hover-cursor" id="navbar-search-icon">
									<span class="input-group-text" id="search">
										<i class="icon-search"></i>
									</span>
								</div>
								<input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
							</div>
						</li>
					</ul>
					<ul class="navbar-nav navbar-nav-right">
						<li class="nav-item nav-profile dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
								<img src="<?= base_url('asset/template2/') ?>images/images.png" alt="profile" />
							</a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
								<a class="dropdown-item">
									<i class="ti-pin-alt text-primary"></i>
									Hi, <?php echo $this->session->userdata('username'); ?>
								</a>
								<a class="dropdown-item" onclick="return confirm('Logout');" href="<?php echo base_url('welcome/loggof') ?>">
									<i class="ti-power-off text-primary"></i>
									Logout
								</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->