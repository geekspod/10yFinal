
		<section class="sing-in-banner container">
			<div class="inner">
				<div class="sg-heading">
					<h3>Forget Password</h3>
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
					<form action="<?php echo base_url().'forget-password' ; ?>" class="loginform" id="loginresult">
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						</div>
						<div class="form-check">
							<span class="rem">
								<a href="<?php echo base_url() ; ?>login">Back To Login</a>
							</span>
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
		


