
<section class="personal-sec">
	  <div class="container">
		 <div class="info-sec">
			<h1>create your account</h1>
			 
			  <form action="#" class="per-in-form">
			  <input type="hidden" name="user_id" value="<?php echo $this->uri->segment(3) ; ?>"/>
			  	<div>
			  		<h3>Personal Info</h3>
			  		<section>
			  		<?php 
			  		$getuser = $this->db->get_where('tbl_customer',array('customer_id' => $this->uri->segment(3)))->result() ; 
			  		foreach($getuser as $user){
			  		?>
			  			<div class="row">
						   <div class="col-md-6">
		  						<div class="form-group">
		    						<label class="fn">first name</label>
		    						<input type="text" class="form-control" name="firstname" id="first" required="">
		 				 		</div>
		 				 	</div>
		 				 	<div class="col-md-6">
		 					 	<div class="form-group">
		    						<label class="fn">last name</label>
		    						<input type="text" class="form-control" name="lastname" id="last" required="">
		 				 		</div>
		 				 	</div>	
		 				</div>
		 				<div class="row">
						   <div class="col-md-6">
		  						<div class="form-group">
		    						<label class="fn">phone</label>
		    						<input type="number" class="form-control phn" name="phone" id="phone" required="">
		 				 		</div>
		 				 	</div>
		 				 	<div class="col-md-6">
		 					 	<div class="form-group">
		    						<label class="fn">address</label>
		    						<input type="text" class="form-control" name="address" id="address" required="">
		 				 		</div>
		 				 	</div>	
		 				</div>
		 				<div class="row">
						   <div class="col-md-6">
		  						<div class="form-group">
		    						<label class="fn">email</label>
		    						<input type="email" class="form-control" id="email" required=""  value="<?php echo $user->email ;?>">
		 				 		</div>
		 				 	</div>
		 				 	<div class="col-md-6">
		 					 	<div class="form-group">
		    						<label class="fn">site</label>
		    						<input type="text" class="form-control" name="site" id="site" required="">
		 				 		</div>
		 				 	</div>	
		 				</div>
		 				<div class="row">
		 					<div class="col-md-6">
		 						<div class="form-group">
		    						<label class="fn">Zip Code</label>
		    						<input type="text" class="form-control" name="userzip" id="userzip" required="">
		 				 		</div>
		 					</div>
		 					<div class="col-md-6">
		 						<div class="form-group">
		    						<label class="fn">Job Type </label>
		    						<select name="jobtype" class="form-control" required="">
		    							<option value="">Select Type</option>
		    							<option value="In Home">In Home</option>
		    							<option value="Remote">Remote</option>
		    						</select>
		 				 		</div>
		 					</div>
		 				</div>
		 				<div class="row">
		 					<div class="col-md-12">
		 						<div class="form-group">
		  							<label class="fn">bio</label>
		  							<textarea class="form-control" rows="5" name="about" id="comment" required=""></textarea>
								</div>
		 					</div>
		 				</div>
		 				<?php } ?>
			  		</section>
			  		
			  		<h3> Bank Details</h3>
			  		<section>
			  		<h5>Bank Details</h5>
				  	 <div class="row py-row">
				  		<div class="col-md-3">
				  			<div class="form-group">
	    						<input type="text" class="form-control cst" id="cash" name="cash" placeholder="Bank Name" >
	    						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
	 				 		</div>
				  		</div>
				  		<div class="col-md-3">
				  			<div class="form-group">
	    						<input type="text" class="form-control cst" id="accounttitle" name="accounttitle" placeholder="Account title" >
	    						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
	 				 		</div>
				  		</div>
				  		<div class="col-md-6">
				  			<div class="form-group">
	    						<input type="text" class="form-control cst" id="credit" name="credit" placeholder="routing Number" >
	    						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
	 				 		</div>
				  		</div>
				  	 </div>
				  	 <div class="row py-row">
				  		<div class="col-md-6">
				  			<div class="form-group">
	    						<input type="text" class="form-control cst" id="cardnumber" name="cardnumber" placeholder="Card Number" >
	    						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
	 				 		</div>
				  		</div>
				  		<div class="col-md-6">
				  			<div class="form-group">
	    						<input type="text" class="form-control cst" id="expirydate" name="expirydate" placeholder="Expiry Date" >
	    						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
	 				 		</div>
				  		</div>
				  	 </div>
				  	 
				  	 <h6>billing address</h6>
				  	 <div class="row">
				  	 	<div class="col-md-6">
				  	 		<div class="form-group">
	    						<label class="fn">street</label>
	    						<input type="text" class="form-control cst" name="street" id="street" required>
	 				 		</div>
				  	 	</div>
				  	 	<div class="col-md-6">
				  	 		<div class="form-group">
	    						<label class="fn">city</label>
	    						<input type="text" class="form-control cst" name="city" id="city" required>
	 				 		</div>
				  	 	</div>
				  	 </div>
				  	 <div class="row">
				  	 	<div class="col-md-6">
				  	 		<div class="form-group">
	    						<label class="fn">zip code</label>
	    						<input type="text" class="form-control cst" id="zip" name="zip" required>
	 				 		</div>
				  	 	</div>
				  	 	<div class="col-md-6">
				  	 		<div class="form-group">
	    						<label class="fn">state</label>
	    						<input type="text" class="form-control cst" id="state" name="state" required>
	 				 		</div>
				  	 	</div>
				  	 </div>
				  	 <div class="row">
				  	 	<div class="col-md-12">
				  	 		<div class="form-group">
	    					    <label class="fn">country</label>
	    						<select class="form-control cst" name="country" required="">
	    							<option>country</option>
	    							<option value="USA">USA</option>
	    							<option value="Canada">Canada</option>
	  							</select>
	 				 		</div>
				  	 	</div>
				  	 </div>	
			  		</section>
			  		<h3> Upload Photos</h3>
			  		<section>
			  		<h5>Upload Photos</h5>
				  	<div class="row">
				  		<div class="col-md-4">
				  			<div class="category_image">
								<label for="file-upload4" class="custom-file-upload ">
									<div class="brw-pho data-uploaded4">
						  				<p>browse photo <br> to <span>upload</span></p>
						  			</div>
								</label>
								<input id="file-upload4" name="comodity_image[]" class="file-upload" type="file" data-ids="4" >
							</div>
				  		</div>
				  		<div class="col-md-4">
				  			<div class="category_image">
								<label for="file-upload5" class="custom-file-upload ">
									<div class="brw-pho data-uploaded5">
						  				<p>browse photo <br> to <span>upload</span></p>
						  			</div>
								</label>
								<input id="file-upload5" name="comodity_image[]" class="file-upload" type="file" data-ids="5" >
							</div>
				  		</div>
				  		<div class="col-md-4">
				  			<div class="category_image">
								<label for="file-upload6" class="custom-file-upload ">
									<div class="brw-pho data-uploaded6">
						  				<p>browse photo <br> to <span>upload</span></p>
						  			</div>
								</label>
								<input id="file-upload6" name="comodity_image[]" class="file-upload" type="file" data-ids="6" >
							</div>
				  		</div>
				  		
				  	</div>
			  		</section>
			  		
			  	</div>
			  	<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
			  		<input type="submit" name="submit" class="submitform" style="display:none">
		     </form>
		</div>		
	</div>
</section>
<script type="text/javascript" src="<?php echo base_url() ; ?>assets/js/jquery.steps.min.js"></script>

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"> </script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"> </script>

<script type="text/javascript">
$('.per-in-form').submit(function(e){
		e.preventDefault();
			var form  = $('.per-in-form');
			if(form.valid())
			{
				$.ajax({
				url: "<?php echo base_url() ; ?>register/completeregistration",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
				dataType : 'json',
				cache: false,
				processData:false,
				beforeSend : function() {
					$('#loadingDiv').show();
					$("html, body").animate({ scrollTop: 0 }, "slow");
				},
				success: function(data) {
					$('#loadingDiv').hide();
					if (data.success) {
						//$('.resultbox').html('<div class="label label-success">'+data.message+'</div>')
						Swal.fire({
							icon: 'success',
							text: data.message,
							showConfirmButton: true,
							confirmButtonText:'Close',
							confirmButtonClass: 'completeboxclose',

						})
						setTimeout(function() {window.location = '<?php echo base_url() ; ?>login'},2000)
						$('#booking_form')[0].reset();
					} else {
						Swal.fire({
							icon: 'error',
							text: data.message,
							showConfirmButton: true,
							confirmButtonText:'Close',
							confirmButtonClass: 'completeboxclose',

						})
					}
					console.log(data)
				},
				error: function(e) {
					$('#loadingDiv').hide();
				}
			});
			}
			
		
		})
	var forms = $(".per-in-form");
	
	forms.validate({
		errorPlacement: function errorPlacement(error, element)
		{ 
			element.after(error);
		},
		rules: {
			companypassword: {
				selectnic : true,
			},
			companyrepassword: {
				equalTo: "#companypassword",
			},
			
			companyntn: {
				minlength : 7,
				maxlength : 7,
			},
			companyphone: {
				minlength : 7,
				maxlength : 12,
			},
		}
	});
	var lastStep = 1;
	forms.children("div").steps({
		headerTag: "h3",
		bodyTag: "section",
		transitionEffect: "slideLeft",
		onStepChanging: function (event, currentIndex, newIndex) {
				
			forms.validate().settings.ignore = ":disabled,:hidden";
			if (forms.valid()) {
				if (currentIndex == lastStep) {
					document.querySelector("[href='#finish").style.visibility = 'hidden';
					$('.submitform').show();
				} else {
					$('.submitform').hide();
				}
			}
			return forms.valid();
			
			
			
		},
		onFinishing: function (event, currentIndex) {
			forms.validate().settings.ignore = ":disabled";
			return forms.valid();
		},
		onFinished: function (event, currentIndex) {
			
		}
	});
	
	
	
	
	function readURL(input) {
	
	if (input.files && input.files[0]) {
	var reader = new FileReader();
	var div_id  = $(input).attr('data-ids');
	var name = input.files[0].name;
	
	var oFReader = new FileReader();
	oFReader.readAsDataURL(input.files[0]);
	var f = input.files[0];
	var fsize = f.size||f.fileSize;
	
	
	reader.onload = function (e) {
		$('.data-uploaded'+div_id).html('');
		$('.data-uploaded'+div_id).html('<img src="'+e.target.result+'" class="img-fluid">');
		//$('.blah'+div_id).attr('src', e.target.result);
	}

	reader.readAsDataURL(input.files[0]);
	}
	}

	$(".file-upload").change(function() {
		readURL(this);
	});
</script>