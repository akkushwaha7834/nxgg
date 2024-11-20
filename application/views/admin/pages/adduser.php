<!doctype html>
<html lang="en" class="semi-dark">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="NXG Market, Trading Company">
	<!-- Bootstrap Select Css -->
	<link rel="stylesheet" href="<?php echo base_url();?>admintheme/assets/plugins/bootstrap-select/css/bootstrap-select.css" />
	<!-- Custom Css -->
	<link rel="stylesheet" href="<?php echo base_url();?>admintheme/assets/css/main.css">
	<title><?php echo $page_title ?></title>
</head>

<body>
<section class="content">
  <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Add User
                <small class="text-muted">Only Admin can add users by its role</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>" style="color:#B92D64"><i class="zmdi zmdi-home"></i> NXGMarkets</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin"style="color:#B92D64">Admin</a></li>
                    <li class="breadcrumb-item active">Add User</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Container fluid  -->
    <div class="container-fluid">
      <!-- Color Pickers -->
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="body"> 

			<form action="" method="post" enctype="multipart/form-data">
				<input type='hidden' name="id" id="id" value="<?php echo $profile[0]['id']; ?>" name='id' />
				<input type='hidden' name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-8">
								<div class="card">
								<div class="col-sm-6">
									<h4 class="mb-0">
										<?php if ($message){
											echo $message;
										}?>
									</h4>
								</div>
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
												<input type="email" id="email_id" name="email_id" class="form-control" value="<?php echo $profile[0]['email_id'];?>" />
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
												<div><span> if you don't want to change password leave it blank</span></div>
											</div>
											<div class="col-sm-3">
												<h6 class="mb-0">Match Password</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" id="password1" name="password1" class="form-control" value="" />
											</div>
										</div>
									<!-- <div class="row clearfix"> -->
										<div class="row mb-3">
										<div class="col-lg-3 col-md-6">
											<h6 class="mb-0">Role</h6>
										</div>
										<div class="col-sm-4 text-secondary">
											<select class="form-control show-tick" id="role" name="role">
												<option selected> <?php echo $profile[0]['role'];?></option>
												<option>User</option>
												<option>Admin</option>
											</select>
									</div></div></br>

										<div class="row">
											<div class="col-sm-3"></div>
											<!-- <div class="col-sm-9 text-secondary"> -->
												<input type="submit" class="theme-btn theme-btn2" value=" Save " />&nbsp;
												<a href='<?php echo base_url('admin/paneluser/view/');?>'> <input type='button' name='cancel' class='theme-btn theme-btn2' value='Cancel' /></a>
											<!-- </div> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h6> Note: Any change made here will be affected from next time login</h6>
				</div>
			</form>
			</div>
		</div>

	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>