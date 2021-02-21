<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/datepicker3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/all.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/style.css">
	<style>
		.login-page {
			background: #333;
		}
		.login-logo {
			color: #fff;
		}
	</style>

</head>
<body class="hold-transition login-page sidebar-mini">

	<div class="login-logo" style="margin:0px; padding-top:55px">
		<b>QHR - Manager-Register-Panel</b>
	</div>
		<section class="sign-up-banner container" style="margin-top:0px">
			<div class="inner" style="padding:0px">
            <div class="login-logo">
		<b><h2>Create Your Account</h2></b>
	    </div>
					
				
				<?php echo form_open_multipart(base_url().'manager/login/save',array('class' => 'form-horizontal')); ?>
				<div class="sgn-form" style=" width: 50%">
				<div class="registerresult"></div>
				<input type="hidden" class="role_id" name="role_id" value="<?php echo $this->uri->segment(3) ; ?>">

						    <div class="row">
							<div class="col-md-6">
                            <div class="login-logo" style="font-size: 38px;     text-align: unset; margin-bottom:0px">
		                    <b style="font-size: 20px">First Name</b>
	                         </div>
							<input type="text" class="form-control" id="first_name" placeholder="Enter firstname" name="first_name">
							</div>
							<div class="col-md-6">
                            <div class="login-logo" style="font-size: 38px;     text-align: unset; margin-bottom:0px">
	                    	<b style="font-size: 20px">Middle Name</b>
	                         </div>
							<input type="text" class="form-control"  name="middle_name" placeholder="Enter Middle Name" >
							</div>
						    </div>

                            <div class="row">
							<div class="col-md-6">
                            <div class="login-logo" style="font-size: 38px;     text-align: unset; margin-bottom:0px">
		                    <b style="font-size: 20px">Last Name</b>
	                         </div>
							<input type="text" class="form-control" id="last_name" placeholder="Enter firstname" name="last_name">
							</div>
							<div class="col-md-6">
                            <div class="login-logo" style="font-size: 38px;     text-align: unset; margin-bottom:0px">
	                    	<b style="font-size: 20px">Email</b>
	                         </div>
							<input type="text" class="form-control" id="email" name="email" placeholder="Enter Your email." >
							</div>
						    </div>

                            <div class="row">
							<div class="col-md-6">
                            <div class="login-logo" style="font-size: 38px;     text-align: unset; margin-bottom:0px">
		                    <b style="font-size: 20px">Organization</b>
	                         </div>
							<input type="text" class="form-control" id="first_name" placeholder="Select Your Organization" name="organization">
							</div>
							<div class="col-md-6">
                            <div class="login-logo" style="font-size: 38px;     text-align: unset; margin-bottom:0px">
	                    	<b style="font-size: 20px">Title</b>
	                         </div>
							<input type="text" class="form-control" name="title" placeholder="Enter title of the organization" >
							</div>
						    </div>

                            <div class="row">
							<div class="col-md-6">
                            <div class="login-logo" style="font-size: 38px;     text-align: unset; margin-bottom:0px">
		                    <b style="font-size: 20px">Landline</b>
	                         </div>
							<input type="text" class="form-control" id="landline" placeholder="Enter landline number" name="landline">
							</div>
							<div class="col-md-6">
                            <div class="login-logo" style="font-size: 38px;     text-align: unset; margin-bottom:0px">
	                    	<b style="font-size: 20px">Mobile Number 1</b>
	                         </div>
							<input type="text" class="form-control" id="number1" name="number1" placeholder="Enter Mobile Number 1" >
							</div>
						    </div>

                            <div class="row">
							<div class="col-md-6">
                            <div class="login-logo" style="font-size: 38px;     text-align: unset; margin-bottom:0px">
		                    <b style="font-size: 20px">Mobile Number 2</b>
	                         </div>
							<input type="text" class="form-control" id="number2" placeholder="Enter Mobile Number 2" name="number2">
							</div>
							<div class="col-md-6">
                            <div class="login-logo" style="font-size: 38px;     text-align: unset; margin-bottom:0px">
	                    	<b style="font-size: 20px">CNIC</b>
	                         </div>
							<input type="text" class="form-control" id="cnic" name="cnic" placeholder="Enter CNIC" >
							</div>
						    </div>

                            <div class="row">
							<div class="col-md-6">
                            <div class="login-logo" style="font-size: 38px;     text-align: unset; margin-bottom:0px">
		                    <b style="font-size: 20px">Password</b>
	                         </div>
							<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
							</div>
							<div class="col-md-6">
                            <div class="login-logo" style="font-size: 38px;     text-align: unset; margin-bottom:0px">
	                    	<b style="font-size: 19px">Confirm Password</b>
	                         </div>
							<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter Confirm Password" >
							</div>
						    </div>
                            <div class="login-logo" style="font-size: 38px;     text-align: unset; margin-bottom:0px">
						<div class="click">
							<h5>By clicking Create Account, you agree to the
								<span>Terms of Use </span>and
								<span>Privacy Policy.</span></h5>
						</div>
                        </div>
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						<button type="submit" class="btn btn-primary sb-btn registerbtn" style="padding: 12px">Create Account</button>
					
				
					<?php echo form_close(); ?>
				</div>
			</div>
		</section>
		
		 <!-- <script src="<?php echo base_url() ; ?>assets/js/jquery-3.5.0.min.js"> </script>
		<script src="<?php echo base_url() ; ?>assets/js/bootstrap.bundle.min.js"> </script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> 
		 -->
	
<script src="<?php echo base_url(); ?>public/admin/js/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/jquery.inputmask.extensions.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/moment.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/fastclick.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/app.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/demo.js"></script>

</body>
</html>
