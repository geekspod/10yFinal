<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
		<script src="<?php echo base_url() ; ?>assets/js/bootstrap.bundle.min.js"> </script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>						

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div style="    width: 40%; margin: 0 auto">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Update Profile
												</h3>
											</div>
										</div>
                                        <?php echo form_open_multipart(base_url().'manager/login/update_profile',array('class' => 'form-horizontal','id'=>'second_form')); ?>
										<!--begin::Form-->
										<form class="kt-form">
											<div class="kt-portlet__body">
											    
											    <?php
                        $i = 0;
                        if (!empty($employee_information)){
                        foreach ($employee_information

                        as $row) {
                        $i++;
                        ?>
											    
												    <div class="kt-section kt-section--first">
													<div class="form-group">
														<label>First Name:</label>
														<input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" value="<?php echo $row['first_name']; ?>">
														
													</div>


             
                                                    <div class="form-group">
														<label>Last Name:</label>
														<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" value="<?php echo $row['last_name']; ?>">
														
													</div>
                                                    <div class="form-group">
														<label>Email:</label>
														<input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" value="<?php echo  $row["email"]; ?>" 
 <?php if(trim($row["email"]) !="") echo "Readonly"; else echo "required"; ?>>
														
													</div>
													
													
													
													
                                                    <div class="form-group">
														<label>Job Title:</label>
														<input type="text" name="job_title" id="job_title" class="form-control" placeholder="Enter Title" value="<?php echo $row['job_title']; ?>" >
														
													</div>
                                                    <div class="form-group">
														<label>Landline:</label>
														<input type="text" name="landline" id="landline" class="form-control" placeholder="Enter Landline" value="<?php echo $row['landline']; ?>">
														
													</div>
                                                   
                                                    <div class="form-group">
														<label>Cnic:</label>
														<input type="text" name="cnic" id="cnic" class="form-control" placeholder="Enter cnic" value="<?php echo $row['cnic']; ?>">
														
													</div>
                                                    <div class="form-group">
														<label>Password:</label>
														<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" value="<?php echo  $row["password"]; ?>" 
 <?php if(trim($row["password"]) !="") echo "Readonly"; else echo "required"; ?>>
														
													</div>
                                                    
                                                    
                                                    
                                                    <div class="form-group">
														<label>Mobile:</label>
														<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile#" value="<?php echo $row['mobile']; ?>">
														
													</div>
													
													<div class="form-group">
														<label>Department:</label>
														<input type="text" name="department" id="department" class="form-control" placeholder="Enter Department" value="<?php echo $row['department']; ?>">
														
													</div>
                                                    
                                                    <div class="form-group">
														<label>Location:</label>
														<input type="text" name="location" id="location" class="form-control" placeholder="Enter Location" value="<?php echo $row['location']; ?>">
														
													</div>
												
												
												<div class="form-group">
														<label>Age:</label>
														<input type="text" name="age" id="age" class="form-control" placeholder="Enter Age" value="<?php echo $row['age']; ?>">
														
													</div>
													
													
													
													<div class="form-group">
														<label>Gender:</label>
														<input type="text" name="gender" id="gender" class="form-control" placeholder="Enter Gender" value="<?php echo $row['gender']; ?>">
														
													</div>
													
													
													<div class="form-group">
														<label>Reporting:</label>
														<input type="text" name="reporting" id="reporting" class="form-control" placeholder="Enter Reporting" value="<?php echo $row['reporting']; ?>">
														
													</div>
													
													 <?php

                            }
                            }
                            ?>
												
												</div>
											</div>
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<button type="submit" class="btn btn-primary" name="form1">Submit</button>
													<button type="submit" class="btn btn-secondary" name="form1">Cancel</button>
												</div>
											</div>
										</form>
                                        <?php echo form_close(); ?>
										<!--end::Form-->
									</div>

									<!--end::Portlet-->
									
									
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
    age: 'required',
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
    age:'Kinldy enter yours age.',
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
						
