<!doctype html>
<html lang="en" class="semi-dark">

<head>

	<title><?php echo $page_title ?></title>
</head>

<body>
<section class="content">
  <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Profile Editing
                <small class="text-muted">You can edit your profile</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>"><i class="zmdi zmdi-home"></i> NXGMarkets</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin">Admin</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="body"> 
			<form action="" method="post" enctype="multipart/form-data">
				<input type='hidden' name="id" id="id" value="<?php echo $profile[0]['id']; ?>" name='id' />
				<input type='hidden' name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
					<div class="col-lg-8">
						<div class="card">
							<div class="card-body">
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">First Name</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo $profile[0]['first_name'];?>" />
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Last Name</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo $profile[0]['last_name'];?>" />
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Email</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" id="email_id" readonly name="email_id" class="form-control" value="<?php echo $profile[0]['email_id'];?>" />
									</div>
								</div>
								
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Mobile</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" id="mobile" name="mobile" class="form-control" value="<?php echo $profile[0]['mobile'];?>" />
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Password</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" id="password" name="password" class="form-control" value="" />
										<div id="message1"> Leave blank if you don't want to change password.</div>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Confirm Password</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" id="password1" name="password1" class="form-control" value="" />
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3"></div>
									<div class="col-sm-9 text-secondary">
										<input type="submit" class="btn btn-raised btn-primary btn-round waves-effect" value="Save Changes" />
									</div>
								</div>
							</div>
						</div>
						<h6> Note: Any change made will be affected from next time login</h6>
					</div>
				</form>
			</div>
		</div>
	</div></div></div>
	<!--end wrapper-->
	<script>
        $(document).ready(function () {
            $("#password1").focusout(function () {
                var password=document.getElementById('password').value;
                var passwordverify=document.getElementById('password1').value;
                if (password == passwordverify){}
                else {
                    document.getElementById("message1").innerHTML = " Paswwrod not matched";
                    document.getElementById("password").value = "";
					document.getElementById("password1").value = "";
                }
            });
			$("#password").focus(function () {
				document.getElementById("message1").innerHTML = " Leave blank if you don't want to change password.";
            });
		});
	</script>

	
	<!-- <script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/js/app.js"></script> -->
</body>

</html>