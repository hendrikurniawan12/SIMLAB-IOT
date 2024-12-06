<!DOCTYPE html>
<html lang="en">

<head>

	<title>Login AAL</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">




</head>

<!-- [ signin-img ] start -->
<div class="auth-wrapper align-items-stretch aut-bg-img">
	<div class="flex-grow-1">
		<div class="h-100 d-md-flex align-items-center auth-side-img">
			<!-- <div class="col-sm-10 auth-content w-auto">
				<img src="assets/images/auth/auth-logo.png" alt="" class="img-fluid">
				<h1 class="text-white my-4">Selamat datang di AAL!</h1>
				<h4 class="text-white font-weight-normal">Signup to your account and made member of the Able pro Dashboard Template.<br />Do not forget to play with live customizer</h4>
			</div> -->
		</div>
		<div class="auth-side-form">
			<div class=" auth-content">
				<img src="assets/images/auth/auth-logo-dark.png" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
				<?php
				if (session()->getFlashdata('error')) {
				?>
					<div class="alert alert-danger" role="alert">
						<?= session()->getFlashdata('error') ?>
					</div>
				<?php
				}
				?>
				<h4 class="mb-3 f-w-400">Login</h4>
				<form method="post" action="<?= base_url('auth/login') ?>">
					<div class="form-group mb-6">
						<label class="floating-label" for="Username">Username</label>
						<input type="text" name="username" id="username" class="form-control" id="Username" placeholder="" value="<?= old('username') ?>">
					</div>
					<div class="form-group mb-6">
						<label class="floating-label" for="Password">Password</label>
						<input type="password" name="password" id="password" class="form-control" id="Password" placeholder="">
					</div>
					<div class="custom-control custom-checkbox  text-left mb-4 mt-2">
						<input type="checkbox" class="custom-control-input" id="customCheck1">
					</div>
					<button type="submit" class="btn btn-primary btn-block mb-4" onclick="">login</button>
				</form>
				<!-- <div class="text-center">
					<div class="saprator my-4"><span>OR</span></div>

					<p class="mt-4">Already have an account? <a href="auth-signin-img-side.html" class="f-w-400" >Signin</a></p>
				</div> -->
			</div>
		</div>
	</div>
</div>
<!-- [ signin-img ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>