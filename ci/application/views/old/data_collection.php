<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<section class="sign-up-banner container">
			<div class="inner">
				<div class="sg-heading">
					<h1>Employer Data Collection</h1>
				</div>
				<div class="sgn-form">
				<div class="registerresult"></div>
                <form role="form" method="post" action="<?php echo base_url() ; ?>login/data_collection" class="data_collection" id="data_collection">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

					
						<div class="row">
							<input type="hidden" class="role" name="role" value="<?php echo $this->uri->segment(3) ; ?>">
							<div class="col-md-6">
								<label class="fn">Name</label>
								<input type="text" class="form-control"name="name" id="name" placeholder="Enter Your Full Name" name="name">
							</div>
							<div class="col-md-6">
								<label class="fn">Gender</label>
								<input type="text" class="form-control" id="gender" name="gender" placeholder="Enter your gender">
							</div>
						</div>
						<div class="form-group">
							<label  class="fn">Department</label>
							<input type="text" class="form-control" id="department" name="department" aria-describedby="emailHelp" placeholder="Enter Your Department">
						</div>
						<div class="form-group">
							<label  class="fn">Tenure</label>
							<input type="text" class="form-control" id="tenure" name="tenure" placeholder="Tenure">
						</div>
                        <div class="form-group">
							<label  class="fn">job Title</label>
							<input type="text" class="form-control" id="job_title" name="job_title" placeholder="Tenure">
						</div>

                        <div class="form-group">
							<label  class="fn">Location</label>
							<input type="text" class="form-control" id="location" name="location" placeholder="Location">
						</div>

                        <div class="form-group">
							<label  class="fn">Age</label>
							<input type="text" class="form-control" id="age" name="age" placeholder="Age">
						</div>

                        <div class="form-group">
							<label  class="fn">Reporting To</label>
							<input type="text" class="form-control" id="reporting" name="reporting" placeholder="Reporting">
						</div>
						
                        <button name="form2" type="submit" class="btn btn-primary sb-btn loginbtn">Submit</button>
                       
					</form>
					
				</div>
			</div>
		</section>
		
		<script src="<?php echo base_url() ; ?>assets/js/jquery-3.5.0.min.js"> </script>
		<script src="<?php echo base_url() ; ?>assets/js/bootstrap.bundle.min.js"> </script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript">
  if (confirm('Purpose of data collection, number of test to be taken and their names, and a disclaimer that his or her personal identity will not be revealed.')) {
  // Save it!
  //console.log('Thing was saved to the database.');
} else {
  // Do nothing!
  //console.log('Thing was not saved to the database.');
}
</script>
		
	</body>
</html>
