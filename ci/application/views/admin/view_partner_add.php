<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Add Partner</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/customer" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if($error): ?>
			<div class="callout callout-danger">
				<p>
					<?php echo $error; ?>
				</p>
			</div>
			<?php endif; ?>

			<?php if($success): ?>
			<div class="callout callout-success">
				<p><?php echo $success; ?></p>
			</div>
			<?php endif; ?>

			<?php echo form_open_multipart(base_url().'admin/customer/add_manager_data',array('class' => 'form-horizontal','id'=>'second_form')); ?>
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for=""  class="col-sm-2 control-label">First Name <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" placeholder="Enter Your First Name" autocomplete="off" class="form-control" name="first_name" id="first_name" value="<?php if(isset($_POST['first_name'])){echo $_POST['first_name'];} ?>">
							</div>
						</div>	
						
					<div class="box box-info">
					<div class="box-body">
					<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Last Name <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" placeholder="Enter Your Last Name" autocomplete="off" class="form-control" name="last_name" id="last_name" value="<?php if(isset($_POST['last_name'])){echo $_POST['last_name'];} ?>">
							</div>
						</div>
						
						
						<div class="box box-info">
					<div class="box-body">
					<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Mobile <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" placeholder="Enter Your Mobile#" autocomplete="off" class="form-control" name="mobile" id="mobile" value="<?php if(isset($_POST['mobile'])){echo $_POST['mobile'];} ?>">
							</div>
						</div>
						
					<!--	<div class="box box-info">-->
					<!--<div class="box-body">-->
					<!--<div class="form-group">-->
					<!--		<label for=""  class="col-sm-2 control-label">Job Title <span>*</span></label>-->
					<!--		<div class="col-sm-4">-->
					<!--			<input type="text" placeholder="Enter Your Job Title" autocomplete="off" class="form-control" name="job_title" id="job_title" value="<?php if(isset($_POST['job_title'])){echo $_POST['job_title'];} ?>">-->
					<!--		</div>-->
					<!--	</div>-->
						
						

						<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Email<span>*</span></label>
							<div class="col-sm-4">
								<input type="email" placeholder="Enter Your Email" autocomplete="off" class="form-control" name="email" id="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">
							</div>
						</div>	

						<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Password<span>*</span></label>
							<div class="col-sm-4">
								<input type="password" placeholder="Enter Your Password" autocomplete="off" class="form-control" name="password" id="password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>">
							</div>
						</div>	

						<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Confirm Password<span>*</span></label>
							<div class="col-sm-4">
								<input type="password" placeholder="Enter Your Confirm Password" autocomplete="off" class="form-control" name="confirm_password" id="confirm_password" value="<?php if(isset($_POST['confirm_password'])){echo $_POST['confirm_password'];} ?>">
							</div>
						</div>	
						
				
						<div class="box box-info">
					<div class="box-body">
					<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Department <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" placeholder="Enter department" autocomplete="off" class="form-control" name="department" id="department" value="<?php if(isset($_POST['department'])){echo $_POST['department'];} ?>">
							</div>
						</div>
						
						
						<div class="box box-info">
					<div class="box-body">
					<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Location <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" placeholder="Enter location" autocomplete="off" class="form-control" name="location" id="location" value="<?php if(isset($_POST['location'])){echo $_POST['location'];} ?>">
							</div>
						</div>
						
						<div class="box box-info">
					<div class="box-body">
					<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Age <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" placeholder="Enter age" autocomplete="off" class="form-control" name="age" id="age" value="<?php if(isset($_POST['age'])){echo $_POST['age'];} ?>">
							</div>
						</div>
						
						
						
						<div class="box box-info">
					<div class="box-body">
					<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Select Gender<span>*</span></label>
							<div class="col-sm-4">
                            <select class="form-control m-b" name="gender" id="gender" onchange='check_gender(this.value)'>
								<option value="male" <?php { echo "Selected";} ?> >Male</option>
								<option value="female" <?php { echo "Selected";} ?> >Female</option>
								<option value="Other" <?php { echo "Selected";} ?> >Other</option>
								</select>							</div>
						</div>
                            
                            
                            <div class="box box-info">
					<div class="box-body">
					<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Reporting <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" placeholder="Enter reporting" autocomplete="off" class="form-control" name="reporting" id="reporting" value="<?php if(isset($_POST['reporting'])){echo $_POST['reporting'];} ?>">
							</div>
						</div>
						
						
						<div class="box box-info">
					<div class="box-body">
					<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Landline <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" placeholder="Enter landline" autocomplete="off" class="form-control" name="landline" id="landline" value="<?php if(isset($_POST['landline'])){echo $_POST['landline'];} ?>">
							</div>
						</div>
						
						<div class="box box-info">
					<div class="box-body">
					<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Cnic <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" placeholder="Enter cnic" autocomplete="off" class="form-control" name="cnic" id="cnic" value="<?php if(isset($_POST['cnic'])){echo $_POST['cnic'];} ?>">
							</div>
						</div>
						
						<div class="box box-info">
					<div class="box-body">
					<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Designation <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" placeholder="Enter designation" autocomplete="off" class="form-control" name="designation" id="designation" value="<?php if(isset($_POST['designation'])){echo $_POST['designation'];} ?>">
							</div>
						</div>
						
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>


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
    designation: 'required',
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
    department:'Kinldy enter one department.',
    job_title:'Kinldy select one Job Title.',
    designation:'Kinldy enter yours designation.',
    age:'Kinldy enter yours age.',
     location:'Kinldy select one Location.',
      gender:'Kinldy select one Field.',
       reporting:'Kinldy enter one Field.',
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