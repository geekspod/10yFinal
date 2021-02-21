
		<section class="sing-in-banner container">
			<div class="inner ">
				<div class="sg-heading">
					<h3>welcome back</h3>
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
					<div class="loginresult"></div>

					<form role="form" method="post" action="<?php echo base_url() ; ?>login/access" class="loginform" id="loginform">
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
						</div>
						<div class="form-check">
							<span class="rem">
								<a href="<?php echo base_url() ; ?>register/index/employer">Signup</a>
							</span> | 
							<span class="rem">
								<a href="<?php echo base_url() ; ?>forget_password">forget password?</a>
							</span>
						</div>
						<br>
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						<button type="submit" class="btn btn-primary sb-btn loginbtn">login</button>
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
		
		<script src="<?php echo base_url() ; ?>assets/js/jquery-3.5.0.min.js"> </script>
		<script src="<?php echo base_url() ; ?>assets/js/bootstrap.bundle.min.js"> </script>
		
		
	</body>
</html>
