
						<!-- end:: Subheader -->
						
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
		<script src="<?php echo base_url() ; ?>assets/js/bootstrap.bundle.min.js"> </script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>						
		<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div class="col-md-6" style="margin:0 auto">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Add Employees
												</h3>
											</div>
										</div>
						<form class="kt-form" id="second_form" method="post" action="<?php echo base_url();?>manager/login/add_employees_data">


										<!--begin::Form-->
									
											<div class="kt-portlet__body">
												<div class="form-group form-group-last">
													<div class="alert alert-secondary" role="alert">
													
													</div>
												</div>
									
									
											<!--username-->
                
                <div class="form-group">
									<label>First Name</label>
													<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter First Name" name="first_name" id="first_name">
													<span class="form-text text-muted"></span>
												</div>
												
												
												<div class="form-group">
									<label>Last Name</label>
													<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Last Name" name="last_name" id="last_name">
													<span class="form-text text-muted"></span>
												</div>
												
												
												<!--designation-->
                
                 <div class="form-group">
									<label>Designation</label>
													<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Designation" name="designation" id="designation">
													<span class="form-text text-muted"></span>
												</div>
                
                
                
                            <div class="form-group">
									<label>Email address</label>
													<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" name="email" id="email">
													<span class="form-text text-muted"></span>
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1">Password</label>
													<input type="password" class="form-control" id="password" name="password" placeholder="Password">
												</div>


                    
                  
                  

											
												
											
										 
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<button type="submit" name="form2" class="btn btn-primary">Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
											</div>
										</form>
 
										<!--end::Form-->
									</div>

			<script>

	 $.validator.addMethod("Email", function(value, element) {
                return this.optional(element) |/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
            }, "Email Address is invalid: Please enter a valid email address.");
jQuery.validator.addMethod("alpha", function(value, element) {
      	  return this.optional(element) || /^[a-zA-Z]+$/.test(value);
		});
		
  $('form[id="second_form"]').validate({
  rules: {
    
    first_name: {minlength:5,
       required:true,
       alpha:true,
   },
   
   designation: {
       required:true,
       
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
    password: {
      required: true,
      minlength: 8,
    }
  },
  messages: {
    first_name: 'First Name is required and minimum characters are five',
    designation: 'designation is required.',
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
    password:  'Password must contain one uppercase letter, one lower case, one special character and minimum length should be 8 characters.',
     confirm_password:'Password and Confirm Password must be same',
    
  },
  
});
</script>
						