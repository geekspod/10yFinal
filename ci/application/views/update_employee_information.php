<!-- begin:: Content -->
<div class="container kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid" style="padding: 40px">
    <div class="row container-margin">
        <div>


            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Update Profile
                        </h3>
                    </div>
                </div>
                <?php echo form_open_multipart(base_url() . 'login/update_profile', array('class' => 'form-horizontal', 'id'=> 'second_form','method'=>'post')); ?>

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
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>First Name*</label>
                                        <input type="text" name="first_name" class="form-control" placeholder="Enter First Name"
                                               value="<?php echo $row['first_name']; ?>">
                                        <!--<span class="form-text text-muted">Please enter your First Name</span>-->
                                    </div>


                                    <div class="form-group">
                                        <label>Last Name*</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name"
                                               value="<?php echo $row['last_name']; ?>">
                                        <!--<span class="form-text text-muted">Please enter your Last Name</span>-->
                                    </div>
                                    
                                   
                                    
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email"
                                               value="<?php echo  $row["email"]; ?>" 
 <?php if(trim($row["email"]) !="") echo "Readonly"; else echo "required"; ?>>
                                        <!--<span class="form-text text-muted">Please enter your Email</span>-->
                                    </div>
                                    <div class="form-group">
                                        <label>Password*</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter Password"
                                               value="<?php echo  $row["password"]; ?>" 
 <?php if(trim($row["password"]) !="") echo "Readonly"; else echo "required"; ?>>
                                        <!--<span class="form-text text-muted">Enter Password</span>-->
                                    </div>


                                    <div class="form-group">
                                        <label>Mobile Number*</label>
                                        <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number"
                                               value="<?php echo $row['mobile']; ?>">
                                        <!--<span class="form-text text-muted">Enter Mobile Number</span>-->
                                    </div>
                                    <div class="form-group">
                                        <label>Job Title*</label>
                                        <input type="text" name="job_title" class="form-control" placeholder="Enter Job Title"
                                               value="<?php echo $row['job_title']; ?>">
                                        <!--<span class="form-text text-muted">Enter Job Title</span>-->
                                    </div>



                                    <div class="form-group">
                                        <label>Department*</label>
                                        <input type="text" name="department" class="form-control" placeholder="Enter Department"
                                               value="<?php echo $row['department']; ?>">
                                        <!--<span class="form-text text-muted">Enter Department</span>-->
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Location*</label>
                                        <input type="text" name="location" class="form-control" placeholder="Enter Location"
                                               value="<?php echo $row['location']; ?>">
                                        <!--<span class="form-text text-muted">Enter Location</span>-->
                                    </div>
                                    <div class="form-group">
                                        <label>Age*</label>
                                        <input type="number" name="age" class="form-control" placeholder="Enter Age"
                                               value="<?php echo $row['age']; ?>">
                                        <!--<span class="form-text text-muted">Enter Age</span>-->
                                    </div>

                                    <div class="form-group">
                                        <label>Gender*</label>
                                        <input type="text" name="gender" class="form-control" placeholder="Enter Gender"
                                               value="<?php echo $row['gender']; ?>">
                                        <!--<span class="form-text text-muted">Enter Gender</span>-->
                                    </div>

                                    <!--                                       <div class="form-group">-->
                                    <!--	<label>Organization*</label>-->
                                    <!--	<input type="text" name="organization" class="form-control" placeholder="Enter organization" value="<?php echo $row['organization']; ?>">-->
                                    <!--	<span class="form-text text-muted">Enter organization</span>-->
                                    <!--</div>-->
                                    <div class="form-group">
                                        <label>Reporting*</label>
                                        <input type="text" name="reporting" class="form-control" placeholder="Enter Reporting"
                                               value="<?php echo $row['reporting']; ?>">
                                        <!--<span class="form-text text-muted">Enter Reporting</span>-->
                                    </div>
                                    <div class="form-group">
                                        <label>Landline*</label>
                                        <input type="text" name="landline" class="form-control" placeholder="Enter Landline"
                                               value="<?php echo $row['landline']; ?>">
                                        <!--<span class="form-text text-muted">Enter Landline</span>-->
                                    </div>
                                    <div class="form-group">
                                        <label>Cnic*</label>
                                        <input type="text" name="cnic" class="form-control" placeholder="Enter cnic"
                                               value="<?php echo $row['cnic']; ?>">
                                        <!--<span class="form-text text-muted">Enter cnic</span>-->
                                    </div>
                                </div>
                            </div>
                            <?php

                            }
                            }
                            ?>

                        </div>
                    </div>
                    
                    
                    <div class="kt-portlet__foot">
                        <div class="text-center d-flex align-items-center justify-content-center kt-form__actions">
                            <button type="submit" class="btn btn-primary" name="form1">Submit</button>
                            <!--<button type="submit" class="btn btn-secondary" name="form1">Cancel</button>-->
                        </div>
                    </div>
                </form>
                <?php echo form_close(); ?>

            </div>

<script src="<?php echo base_url() ; ?>assets/js/jquery-3.5.0.min.js"> </script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
		<script src="<?php echo base_url() ; ?>assets/js/bootstrap.bundle.min.js"> </script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		
		<!--date picker-->
		

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet" />



		<!--end-->
		<script>
		   function checkPassff()
{
    var password = document.getElementById('password');
    var confirm_password = document.getElementById('confirm_password');
    var message = document.getElementById('error-nwl');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
 	
    if(password.value.length >= 8 && password.value.length <= 15 )
    {
        password.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "character number ok!";
    }
    else
    {
        password.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = " you have to enter at least 8 digit!"
        return;
    }
  
  
  
    if(password.value == confirm_password.value)
    {
        confirm_password.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "ok!"
    }
	else
    {
        confirm_password.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = " These passwords don't match"
    }
}   
		</script>
		
		<script>
		 jQuery('#cnic').blur(function(){
  var input_text = jQuery(this).val(),
  myRegExp = new RegExp(/\d{5}-\d{7}-\d/);

  if(myRegExp.test(input_text)) {
      //if true
      jQuery('#cninc_msg').text('Correct');
 
  }
  else {
      //if false
      jQuery('#cninc_msg').text('Enter CNIC in correct format. 12345-1234567-1');
  }
  });
		</script>
		
	
		<script>
		 jQuery('#passport_number').blur(function(){
  var input_text = jQuery(this).val(),
  myRegExp = new RegExp(/^[A-Z0-9]+$/);

  if(myRegExp.test(input_text) && (input_text).length ==9) {
      //if true
      jQuery('#passport').text('Correct');
 
  }
  else {
      //if false
      jQuery('#passport').text('Enter passport number in correct format. And required format is: AB1234567');
  }
  });  
		</script>
		<!--mobile-->
			<script>
 	 jQuery('#mobile').blur(function(){
  var input_text = jQuery(this).val(),
  myRegExp = new RegExp(/^[0-9]{10}$/);

  if(myRegExp.test(input_text) ) {
      //if true
       return true;
      //jQuery('#message').text('Correct');
 
  }
  else {
      //if false
     // alert('Enter mobile number in correct format. And required format is: 3451234567');
     // jQuery('#message').text('Enter mobile number in correct format. And required format is: 3451234567');
  }
  return false;
  });
		</script>
		<!--landline-->
			<script>
 	 jQuery('#landline').blur(function(){
  var input_text = jQuery(this).val(),
  myRegExp = new RegExp(/^[0-9]{10}$/);

  if(myRegExp.test(input_text) ) {
      //if true
     // jQuery('#landline_number').text('Correct');
  return true;
  }
  else {
      //if false
     //alert('Enter landline number in correct format. And required format is: 0511234567');
     // jQuery('#landline_number').text('Enter landline number in correct format. And required format is: 0511234567');
  }
   return false;
  });
		</script>
		
		
		
	 <script>  
	 function date(){
  $.noConflict();  //Not to conflict with other scripts
jQuery(document).ready(function($) {
$( ".datepicker" ).datepicker({
  dateFormat:"dd-mm-yyyy",
  changeMonth: true,
   autoclose: true,  
   autoHide: true,
   
  changeYear: true,
  maxDate: "+0D",
});

});
}
</script>	
		<script>
 	 jQuery('#password').blur(function(){
  var input_text = jQuery(this).val(),
  myRegExp = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/);

  if(myRegExp.test(input_text) ) {
      //if true
      jQuery('#password').text('Correct');
      return true;
 
  }
  else {
      //if false
    
      jQuery('#password').text('Password must contain One alphabetic character, at least one special character, one number and one small alphabetic.');
       // alert('Password must contain One alphabetic character, at least one special character, one number and one small alphabetic.');
      return false;
  }
  });
		</script>
		
	<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        if (password != confirmPassword) {
           
             jQuery('#confirm_password').text('Password and confirm password must match.');
             // alert("Passwords do not match.");
             return false;
           
        }
         else {
      //if false
      
      jQuery('#confirm_password').text('Correct');
       return true;
  }
        
    }
</script>

<!--check email-->


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
    
    first_name: {minlength:5,
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
    password: {
      required: true,
      minlength: 8,
    }
  },
  messages: {
    first_name: 'First Name is required and minimum characters are five',
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
