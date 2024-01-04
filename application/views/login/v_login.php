<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log In</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('asset/template/') ?>plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url('asset/template/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('asset/template/') ?>dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Toastr -->
	<link rel="stylesheet" href="<?= base_url('asset/template/') ?>plugins/toastr/toastr.min.css">
	<!-- favicon-->
	<link rel="shortcut icon" href="<?= base_url('asset/template/') ?>dist/img/favicon.ico">

	<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('asset/template/') ?>dist/css/login.css">
</head>

<body style="background-image: url(<?= base_url('asset/template/') ?>dist/img/1.jpg);">
	<script>
		window.setTimeout(function() {
			$(".alert-info").fadeTo(500, 0).slideUp(500, function() {
				$(this).remove();
			});
		}, 2000);
	</script>
	<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
		<div class="container">
			<div class="card login-card">
				<div class="row no-gutters">
					<div class="col-md-5">
						<img src="<?= base_url('asset/template/') ?>dist/img/avatar04.png" alt="login" class="login-card-img">
					</div>
					<div class="col-md-7">
						<div class="card-body">
							<?php if ($this->session->flashdata('login_gagal')) { ?>
								<div class="alert alert-info">
									<?php echo $this->session->flashdata('login_gagal'); ?>
								</div>
							<?php } ?>
							<div class="brand-wrapper">
								<h1 style="color: #80b1ff;">Aplikasi Pembayaran <b>SPP</b></h1></br>
							</div>
							<form action="<?= base_url('login/proses_login') ?>" method="post">
								<div class="form-group">
									<label for="email" class="sr-only">Username</label>
									<input type="text" name="username" required="" class="form-control" placeholder="Username">
								</div>
								<div class="form-group mb-4">
									<label for="password" class="sr-only">Password</label>
									<input type="password" name="password" required="" class="form-control" placeholder="Password">
								</div>
								<input type="submit" name="login" id="login" class="btn btn-primary  mb-4" type="button" value="Login">
							</form>
							<nav class="login-card-footer-nav">
								<a href="#!">Terms of use.</a>
								<a href="#!">Privacy policy</a>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>