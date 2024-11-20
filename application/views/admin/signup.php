<!doctype html>
<html lang="en" class="semi-dark">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?php echo base_url();?>images/nxg-logo.png" type="image/png" />
	<!--plugins-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--plugins-->
	<link rel="stylesheet" href="<?php echo base_url();?>admintheme/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>admintheme/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>admintheme/assets/css/authentication.css">
    <link rel="stylesheet" href="<?php echo base_url();?>admintheme/assets/css/color_skins.css">
	<script src="<?php echo base_url();?>admintheme/assets/js/captcha.js"></script>

	<!-- for Captcha -->
	<link rel="stylesheet" href="<?php echo base_url();?>admintheme/assets/css/captcha.css" />
	<script src="<?php echo base_url();?>admintheme/assets/js/captcha.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"crossorigin="anonymous">

	<title><?php echo $page_title;?></title>

	<script src="https://smtpjs.com/v3/smtp.js"></script>
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
</head>

<body class="bg-login" onload="generate()">
<!-- <body class=""> -->
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">
					<div class="col-12 col-xl-8 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">
                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
                                 <img src="<?php echo base_url();?>images/affiliiate.webp" class="img-fluid auth-img-cover-login" width="1150" alt=""/>
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-4 col-xxl-4 auth-cover-right align-items-center justify-content-center">
						<?php
							if($message){echo "<div class='alert alert-warning'>".$message."</div>";}
						?>
						<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
							<div class="card-body p-sm-1">
								<div class="">
									<div class="mb-3 text-center">
										<img src="<?php echo base_url();?>images/nxg-logo.png" width="320" alt="" />
									</div></br>
									<div class="text-center mb-4">
										<h4 class="">Sign Up</h4></br>
										<p class="mb-0">Please fill the below details to create your account</p>
									</div>
									<div class="form-body">
										<!-- <form class="row g-3"> -->
										<?php echo validation_errors(); ?>
										<?php echo form_open_multipart(base_url().'admin/paneluser/add','class="row g-3"'); ?>
										<!-- <form class="row g-3" action="<?php echo base_url();?>admin/paneluser/add" method="post" id="theForm" name="theForm" enctype="multipart/form-data"> -->
											<input type='hidden' value="<?php echo $team_data[0]['id']; ?>" name='id' />
											<input type='hidden' name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />

											<div class="col-6">
												<label for="inputUsername" class="form-label">First Name</label>
												<input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $this->session->userdata['singup_first_name']; ?>" placeholder="Jhon">
											</div>
											<div class="col-6">
												<label for="inputUsername" class="form-label">Last Name</label>
												<input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $this->session->userdata['singup_last_name']; ?>" placeholder="Jhon">
											</div>
											<div class="col-6">
												<label for="inputUsername" class="form-label">Mobile Number</label>
												<input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $this->session->userdata['singup_mobile']; ?>" placeholder="mobile">
											</div>
											<div class="col-6">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" class="form-control" id="email_id" name="email_id" value="<?php echo $this->session->userdata['singup_email']; ?>" placeholder="example@user.com">
											</div>

											<!-- OTP Block -->
											<?php if ($this->session->userdata['singup_otp']==""){ ?><div class="collapse" id="collapseExample"><?php } ?>
											<div class="col d-flex justify-content-center">
												<div class="card text-center" style="width: 18rem;"  name="OTPx" id="OTPx">
													</br><label> Enter OTP sent via email </label>
													 <div class="col d-flex justify-content-center">
														<input type="text" style="width: 155px;" name="OTP" id="OTP" class="form-control" placeholder="Enter OTP send via email" >
														<input type="hidden" id="OTP1" name="OTP1" value="<?php echo $this->session->userdata['singup_otp']; ?>" />
													</div><div class="card bg-warning text-white" id = "message1"> </div>
												</div>
											</div>
												<?php if ($this->session->userdata['singup_otp']==""){ ?></div><?php } ?>

											<div class="col-6">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="password" name="password" value="<?php echo $this->session->userdata['singup_password']; ?>" placeholder="Enter Password">
												</div>
											</div>
											<div class="col-6">
												<label for="inputChoosePassword" class="form-label">Re Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputMatchPassword" name="inputMatchPassword" value="<?php echo $this->session->userdata['singup_password_match']; ?>" placeholder="Enter Password">
												</div>
											</div>
											<!-- <div class="col-6">
												<label for="inputSelectCountry" class="form-label">Role</label>
												<select class="form-select" id="role" name="role" aria-label="Default select example">
													<option selected> <?php echo $this->session->userdata['singup_role']; ?></option>
													<option selected>User</option>
													<option>Admin</option>
												</select>
											</div> -->
											<div class="col-12">
												<label for="inputSelectCountry" class="form-label">Country</label>
												<select class="form-select input-group form-control" id="inputSelectCountry" name="inputSelectCountry" aria-label="Default select example">
													<option selected><?php echo $this->session->userdata['singup_country']; ?></option>
													<option selected>India</option>
													<option value="1">United Kingdom</option>
													<option value="2">America</option>
													<option value="3">Dubai</option>
												</select>
											</div>
											<!-- <div class="col-12">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
												</div>
											</div> -->
											
											<div class="col-12">
												<div id="user-input" class="inline">
												<input type="text" id="submit" placeholder="Captcha code" onfocusout="printmsg()" />
												</div>

												<div class="inline" onclick="generate()">
												<i class="fas fa-sync"></i>
												</div>
												
												<div id="image" class="inline" selectable="False">
												</div>
												<!-- <input type="button" value="Submit" id="btn" onclick="printmsg()" />  -->
												<p id="key"></p>
												<input type="hidden" id="keycaptcha" name="keycaptcha" readonly/>
											</div>
												<?php 
													if($this->session->userdata['singup_role']){
														$this->session->sess_destroy();
													} 
												?>
											<div class="col-12">
												<!-- <div class="d-grid"> -->
													<button type="submit" class="btn btn-primary">Sign up</button>
													<a href="<?php echo base_url();?>"><button type="button" class="btn btn-primary">Cancel</button></a>
												<!-- </div> -->
											</div>
											<div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Already have an account? <a href="<?php echo base_url() ?>admin">Sign in here</a></p>
												</div>
											</div>
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
	<!--wrapper-->
	
	<!-- Bootstrap JS -->
	<script src="<?php echo base_url();?>admintheme/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="<?php echo base_url();?>admintheme/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>admintheme/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="<?php echo base_url();?>admintheme/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="<?php echo base_url();?>admintheme/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="<?php echo base_url();?>admintheme/assets/plugins/peity/jquery.peity.min.js"></script>
	<script src="<?php echo base_url();?>admintheme/assets/plugins/chartjs/js/chart.js"></script>
	<!--app JS-->
	<script src="<?php echo base_url();?>admintheme/assets/js/app.js"></script>
	<script src="<?php echo base_url();?>admintheme/assets/js/index2.js"></script>
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
	<script>
			
		function ProceedSubmit(){
			document.theForm.submit()
		}
		function showOTP(){
			var emailid=document.getElementById("email_id");
			if (emailid!=""){
				$('#collapseExample').collapse('show');
				
			}
		}
		function hideOTP(){
			$('#collapseExample').collapse('hide');
		}
	</script>
	<!--app JS-->
	<script>
        $(document).ready(function () {
            $("#OTP").focusout(function () {
                var otp=document.getElementById('OTP').value;
                var otpverify=document.getElementById('OTP1').value;
                if (otp==""){
                    // $("#message1").html("Please enter OTP");
					document.getElementById("message1").innerHTML = "&nbsp; Please enter OTP!";
                }
                if (otp == otpverify){
                    //$("#message").html("OTP match");
                }
                else {
                    document.getElementById("message1").innerHTML = " Wrong OTP!";
                    document.getElementById("OTP").value = "";
                }
            });
            // $("#otp").focus(function () {
            //     document.getElementById("OTP").value = "";
            // });
		});
	</script>
</body>

</html>