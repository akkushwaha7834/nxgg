<!doctype html>
<html lang="en" class="semi-dark">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--plugins-->
	<link rel="icon" href="<?php echo base_url(); ?>images/nxg-logo.png" type="image/x-icon"> <!-- Logo icon-->

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admintheme/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admintheme/assets/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admintheme/assets/css/authentication.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admintheme/assets/css/color_skins.css">
	<title><?php echo $page_title; ?></title>

	<style>
		.btn-primary {
			color: #fff;
			background-color: #B92D64;
		}

		.btn-primary:hover {
			color: #fff;
			background-color: #B92D64;
		}

		.btn-primary:focus {
			color: #fff;
			background-color: #B92D64;
		}
	</style>
	<script src="https://smtpjs.com/v3/smtp.js"></script>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">
					<div
						class="col-12 col-xl-8 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">
						<div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
								<img src="<?php echo base_url(); ?>images/affiliiate.webp"
									class="img-fluid auth-img-cover-login" width="1350" alt="" />
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-3 col-xxl-4 auth-cover-right align-items-center justify-content-center">
						<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
							<div class="card-body p-sm-5">
								<div class="">
									<div class="mb-3 text-center">
										<img src="<?php echo base_url(); ?>images/nxg-logo.png" width="320" alt="" />
									</div></br>
									<div class="text-center mb-4">
										<h4 class="">Authentication</h4></br>
										<!-- <p class="mb-0">Log in to your account with credentials</p> -->
									</div>
									<div class="form-body">
										<form class="row g-3" action="" method="post" enctype="multipart/form-data">
											<!-- <input type='hidden' value="<?php echo $team_data[0]['id']; ?>" name='id' /> -->
											<input type='hidden'
												name="<?php echo $this->security->get_csrf_token_name(); ?>"
												value="<?php echo $this->security->get_csrf_hash(); ?>" />

											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<div class="input-group input-sm">
													<input type="email" class="form-control" id="email_id"
														name="email_id" placeholder="Enter User Name">
												</div>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group input-sm">
													<input type="password" class="form-control" id="Password"
														name="Password">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<!-- <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label> -->
												</div>
											</div>
											<div class="col-md-12 text-end"><a href="#">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<!-- <div class="d-grid"> -->
												<button type="submit" class="btn btn-primary">Sign in</button>
												<a href="<?php echo base_url(); ?>"><button type="button"
														class="btn btn-primary">Cancel</button></a>
												<!-- </div> -->
											</div>
											<div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Don't have an account yet? <a
															href="<?php echo base_url() ?>admin/paneluser/add">Sign up
															here</a>
													</p>
												</div>
											</div></br></br></br></br></br></br>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<!-- Jquery Core Js -->
	<script src="<?php echo base_url(); ?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url(); ?>assets/bundles/vendorscripts.bundle.js"></script>
	<!-- Lib Scripts Plugin Js -->

	<script>
		$(".navbar-toggler").on('click', function () {
			$("html").toggleClass("nav-open");
		});
		//=============================================================================
		$('.form-control').on("focus", function () {
			$(this).parent('.input-group').addClass("input-group-focus");
		}).on("blur", function () {
			$(this).parent(".input-group").removeClass("input-group-focus");
		});
	</script>

	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>