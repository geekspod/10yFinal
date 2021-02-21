<!DOCTYPE html>
<html>
	<head>
		<title>Reset Password</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>assets/css/responsive.css">
	</head>
	<body>
		<section class="sing-in-header">
			<div class="container">
				<div class="sav-logo">
					<a href="#"><img src="<?php echo base_url(); ?>assets/images/001.jpg"></a>
					<div class="singn-up-sec">
						<a href="#">explore</a>
						<a href="<?php echo base_url() ; ?>register/selection">sign up</a>
						<a href="<?php echo base_url() ; ?>login">log in</a>
					</div>
				</div>
			</div>
		</section>
		<section class="sing-in-banner">
			<div class="container">
				<div class="sg-heading">
					<h3>Reset Password</h3>
				</div>
				<div class="sgn-form">
					<?php
				        if($this->session->flashdata('error')) {
				            echo '<div class="label label-danger">'.$this->session->flashdata('error').'</div>';
				        }
				        if($this->session->flashdata('success')) {
				            echo '<div class="label label-success">'.$this->session->flashdata('success').'</div>';
				        }
				        ?>
					<?php echo form_open();?>
					<form action="<?php echo base_url().'reset-password/index/'.$var1.'/'.$var2 ; ?>" class="loginform" id="loginresult">
						<div class="form-group">
							<label for="exampleInputEmail1">New Password</label>
							<input class="form-control" placeholder="New Password" name="new_password" type="password" autocomplete="off" autofocus>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Confirm Password</label>
							<input class="form-control" placeholder="Confirm Password" name="re_password" type="password" autocomplete="off" autofocus>
						</div>
						
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						<button type="submit" class="btn btn-primary sb-btn loginbtn" name="form1">Submit</button>
					</form>
					<!--<div class="or">
						<p>or</p>
						<h6>By clicking Continue with Facebook, Google, or Apple,
							you agree to the
							<span>Terms of Use</span> and
							<span>Privacy Policy.</span></h6>
						<div class="fb-links">
							<a href="#" class="fb">
								<i class="fa fa-facebook" aria-hidden="true"></i>continue with facebook</a>
							<a href="#" class="gog">
								<i class="fa fa-google-plus" aria-hidden="true"></i>continue with google</a>
							<a href="#" class="app">
								<i class="fa fa-apple" aria-hidden="true"></i>continue with apple</a>
							<a href="#" class="gog">
								<i class="fa fa-instagram" aria-hidden="true"></i>continue with instagram</a>
							<a href="#" class="gog">
								<i class="fa fa-pinterest-p" aria-hidden="true"></i>continue with pinterest</a>
							<a href="<?php echo base_url() ; ?>register">dont have an account
								<span>sign up?</span></a>
						</div>
					</div>-->
				</div>
			</div>
		</section>
		<section class="copy-rights">
			<div class="container">
				<p><?php echo $setting['footer_copyright']; ?> 
					<span>Designed by: <?php echo $setting['footer_col4_title']; ?> </span></p>
			</div>
		</section>
		<script src="<?php echo base_url() ; ?>assets/js/jquery-3.5.0.min.js"> </script>
		<script src="<?php echo base_url() ; ?>assets/js/bootstrap.bundle.min.js"> </script>
		
	
	</body>
</html>
