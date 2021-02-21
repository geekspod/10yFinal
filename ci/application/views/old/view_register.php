
		<section class="sign-up-banner container">
			<div class="inner">
				<div class="sg-heading">
					<h3>create your account</h3>
				</div>
				<?php echo form_open_multipart(base_url().'register/save',array('class' => 'form-horizontal')); ?>
				<div class="sgn-form">
				<div class="registerresult"></div>
				<input type="hidden" class="role_id" name="role_id" value="<?php echo $this->uri->segment(3) ; ?>">

						<div class="row">
							<div class="col-md-6">
								<label class="fn">First Name</label>
								<input type="text" class="form-control" id="first_name" placeholder="Enter firstname" name="first_name">
							</div>
							<div class="col-md-6">
								<label class="fn">Last Name</label>
								<input type="text" class="form-control" id="lname" name="last_name" placeholder="Enter lastname" >
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="fn">Email</label>
							<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="fn">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword2" class="fn">Confirm Password</label>
							<input type="password" class="form-control" id="exampleInputPassword2" name="confirm_password" placeholder="Confirm Password">
						</div>
						<div class="click">
							<h5>By clicking Create Account, you agree to the
								<span>Terms of Use </span>and
								<span>Privacy Policy.</span></h5>
						</div>
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						<button type="submit" class="btn btn-primary sb-btn registerbtn">create account</button>
					
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
							<a href="<?php echo base_url() ; ?>login">already have an account
								<span>log in?</span></a>
						</div>
					</div>-->
					<?php echo form_close(); ?>
				</div>
			</div>
		</section>
		
		<script src="<?php echo base_url() ; ?>assets/js/jquery-3.5.0.min.js"> </script>
		<script src="<?php echo base_url() ; ?>assets/js/bootstrap.bundle.min.js"> </script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		
	</body>
</html>
