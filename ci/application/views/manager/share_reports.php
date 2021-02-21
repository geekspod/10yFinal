	<script src="<?php echo base_url() ; ?>assets/js/jquery-3.5.0.min.js"> </script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
		<script src="<?php echo base_url() ; ?>assets/js/bootstrap.bundle.min.js"> </script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
						<!-- end:: Subheader -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div class="col-md-6" style="margin:0 auto">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Share Reports
												</h3>
											</div>
										</div>
                        <?php echo form_open_multipart(base_url().'manager/login/share_pdf_reports',array('class' => 'form-horizontal','id'=>'second_form')); ?>

										<!--begin::Form-->
										<form class="kt-form">
											<div class="kt-portlet__body">
												<div class="form-group form-group-last">
													<div class="alert alert-secondary" role="alert">
													
													</div>
												</div>
												<?php
                $i=0;
                if (!empty($users)){
            
            		?>



                    <div class="form-group">
                    <label>Select User Email</label>
                    <select class="form-control" name="email" id="email" required>
                        <!--<option value="">No Selected</option>-->
                        <?php foreach($users as $row):?>
                        <option value="<?php echo $row->email;?>"><?php echo $row->email;?></option>
                        <?php endforeach;?>
                    </select>
                  </div>
                  
                  

											
												<?php
  $count_total_uploads=$count;
 
                }
            
            	?>	
												<!--email-->
												<div class="form-group">
													<label>Manager Email Address</label>
													<input type="email" id="sending_email" name="sending_email" class="form-control" aria-describedby="emailHelp" placeholder="Enter manager email">
													<span class="form-text text-muted">We'll never share your email with anyone else.</span>
												</div>
											
												<div class="form-group form-group-last">
													<label for="exampleTextarea">Message</label>
													<textarea placeholder="Enter Message" class="form-control" name="message" id="message" rows="3"></textarea>
												</div>
											</div>
										 
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<button type="submit" name="form2" class="btn btn-primary">Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
											</div>
										</form>
 <?php echo form_close(); ?>
										<!--end::Form-->
									</div>

	
		
		<script>
$.validator.addMethod("EqualPassword", function(value, element) {
			if(value != $("#password").val()){
		   		return false;
		   	}else{
		   		return true;
		   		
		   	}
	});
	 $.validator.addMethod("Email", function(value, element) {
                return this.optional(element) |/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
            }, "Email Address is invalid: Please enter a valid email address.");
jQuery.validator.addMethod("alpha", function(value, element) {
      	  return this.optional(element) || /^[a-zA-Z]+$/.test(value);
		});
		
  $('form[id="second_form"]').validate({
  rules: {
    
    message: {minlength:5,
       required:true,
       alpha:true,
   },
    last_name: {minlength:5,
       required:true,
       alpha:true,
   },
    
     mobile: {minlength:10,
     maxlength:10,
       required:true,
   },
   landline: {minlength:10,
   maxlength:11,
       required:true,
   },
    cnic: {minlength:15,
    maxlength:15,
       required:true,
   },
   passport_number: {minlength:9,
   maxlength:9,
       required:true,
   },
     
   
   dob: 'required',
   department: 'required',
    job_title: 'required',
     location: 'required',
      gender: 'required',
       reporting: 'required',
      confirm_password: {
        required: true,
          EqualPassword:true,
          minlength: 8,
      },
    email: {
      required: true,
      email: true,
      maxlength:255,
      
    },
     sending_email: {
      required: true,
      email: true,
      maxlength:255,
      
    },
    password: {
      required: true,
      minlength: 8,
    }
  },
  messages: {
    message: 'Message is required and minimum characters are five',
    department:'Kinldy select one department.',
    job_title:'Kinldy select one Job Title.',
     location:'Kinldy select one Location.',
      gender:'Kinldy select one Field.',
       reporting:'Kinldy select one Field.',
    last_name: 'Last Name is required and minimum characters are five',
     mobile: 'Mobile is required and minimum characters are ten',
    landline: 'Landline Number is required and minimum characters are ten',
     cnic: 'CNIC is required and minimum characters are thirteen',
    passport_number: 'Passport Number is required and minimum characters are nine.',
     dob: 'Date Of Birth is required and required format is 00-00-0000',
    email: 'Enter a valid email that contain @ and .com',
    sending_email:  'Enter a valid email that contain @ and .com',,
     confirm_password:'Password and Confirm Password must be same',
    
  },
  
});
</script>
<script>
    jQuery.validator.addMethod("passwordCheck",
        function(value, element, param) {
            if (this.optional(element)) {
                return true;
            } else if (!/[A-Z]/.test(value)) {
                return false;
            } else if (!/[a-z]/.test(value)) {
                return false;
            } else if (!/[0-9]/.test(value)) {
                return false;
            }
            
            else if (!/[!@#$%^&*()\-_=+{};:,<.>§~]/.test(value)) {
                return false;
            }

            return true;
        },
        "Password must contain one uppercase letter, one lower case and one special character");
</script>
<script>
    function checkvalue(val)
{
    if(val==="Request New Department")
       document.getElementById('color').style.display='block';
    else
       document.getElementById('color').style.display='none'; 
}
</script>
<script>
    function check_job_title(val)
{
    if(val==="Others")
       document.getElementById('color1').style.display='block';
    else
       document.getElementById('color1').style.display='none'; 
}
</script>

<script>
    function check_location(val)
{
    if(val==="Others")
       document.getElementById('color2').style.display='block';
    else
       document.getElementById('color2').style.display='none'; 
}
</script>

<script>
    function check_gender(val)
{
    if(val==="Other")
       document.getElementById('color3').style.display='block';
    else
       document.getElementById('color3').style.display='none'; 
}
</script>

<script>
    function check_reporting(val)
{
    if(val==="Other")
       document.getElementById('color4').style.display='block';
    else
       document.getElementById('color4').style.display='none'; 
}
</script>
