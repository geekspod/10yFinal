		<section class="sign-up-banner container" style="background: #333; color:white; margin:0px">
			<div class="inner">
				<div class="sg-heading">
					<h3 style="    font-size: 27px;
    font-weight: bold; margin-top:50px">Create Your Account</h3>
				</div>
				<?php echo form_open_multipart(base_url().'register/save',array('class' => 'form-horizontal')); ?>
				<div class="sgn-form">
				<div class="registerresult"></div>
				<input type="hidden" class="role_id" name="role_id" value="<?php echo $this->uri->segment(3) ; ?>">


	                    <div class="row">
							<div class="col-md-6" style="width: 100%; padding: 0px; padding-bottom: 12px;">
								<label class="fn">First Name</label>
								<input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name" style="width:97%">
							</div>
							<div class="col-md-6" style="width: 100%; padding: 0px; padding-bottom: 12px;">
								<label class="fn">Last Name</label>
								<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" style="width:97%">
							</div>
						</div>
					
						<div class="form-group">
							<label for="exampleInputEmail1" class="fn">Email</label>
							<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email"  style="width:97%">
						</div>
						
						
						
							     
							     
						<label class="col-sm-2 control-label" style="width:51%;margin-bottom: 20px">No Of Functional Departments*</label>
								<div class="col-sm-4" style=";margin-bottom: 20px;width:49%;padding: 0px">
								<select class="form-control m-b" name="department" id="department" >
							<?php	    if(!empty($department_data)){
								    foreach($department_data as $row){
								    ?>
								  	<option value="<?php echo $row['name'];?>" <?php { echo "Selected";} ?> ><?php echo $row['name'];?></option>  
								    
								    <?php }} ?>

								<option value="Other" <?php { echo "Selected";} ?> >Request New Department</option>
								</select>
							     </div>
						<?php echo "<br>";?>
						
							<label class="col-sm-2 control-label" style="width:51%;margin-bottom: 20px">Job Title*</label>
								<div class="col-sm-4" style=";margin-bottom: 20px;width:49%;padding: 0px">
								<select class="form-control m-b" name="job_title" id="job_title" >
							<?php	    if(!empty($job_title_data)){
								    foreach($job_title_data as $row){
								    ?>
								  	<option value="<?php echo $row['name'];?>" <?php { echo "Selected";} ?> ><?php echo $row['name'];?></option>  
								    
								    <?php }} ?>

								<option value="Other" <?php { echo "Selected";} ?> >Other</option>
								</select>
							     </div>
				<!--Date picker-->
        <div class="col-md-6">
           <div class="form-group">
         <label for="dob">Date of Birth:</label>
         <div class="input-group datepicker" data-provide="datepicker">
               <input type="text" name="dob" id="dob" onclick="date()" class="form-control">
               <div class="input-group-addon">
                   <span class="glyphicon glyphicon-th"></span>
               </div>
         </div>
    </div>
</div>

<!--end-->
			

					<div class="form-group">
							<!--<label  class="fn">Landline Number*</label>-->
							<input type="text" class="form-control" id="landline" name="landline" aria-describedby="emailHelp" placeholder="Enter Landline Number" style="width:97%">
							<span id="landline_number"> </span>
						</div>
						<!--Country Code-->
						   <label class="col-sm-2 control-label" style="width:51%;margin-bottom: 20px">Select Country*</label>
<div class="col-sm-4" style=";margin-bottom: 20px;width:49%;padding: 0px">
<select class="form-control m-b" name="country_code" id="country_code" >
   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="+92">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
</select>
</div>
							<!-- mobile # -->
							
							<!--select location-->
							 <label class="col-sm-2 control-label" style="width:51%;margin-bottom: 20px">Select Location*</label>
								<div class="col-sm-4" style=";margin-bottom: 20px;width:49%;padding: 0px">
								<select class="form-control m-b" name="location" id="location" >
								<option value="Faisalabad" <?php { echo "Selected";} ?> >Faisalabad</option>
								<option value="Sahiwal" <?php { echo "Selected";} ?> >Sahiwal</option>
								<option value="Sialkot" <?php { echo "Selected";} ?> >Sialkot</option>
								<option value="Islamabad" <?php { echo "Selected";} ?> >Islamabad</option>
								<option value="Rawalpindi" <?php { echo "Selected";} ?> >Rawalpindi</option>
								
								</select>
							     </div>
							     <!--end-->
						<div class="form-group">
							<label  class="fn">Mobile*</label>
							<input type="text" class="form-control" id="mobile" name="mobile" aria-describedby="emailHelp" placeholder="+923451234567" style="width:97%">
							<span id="message"> </span>
						</div>
						
						<div class="form-group">
							<label  class="fn">Cnic*</label>
							<input type="text" class="form-control" id="cnic" name="cnic" aria-describedby="emailHelp" placeholder="42212-1234567-1" style="width:97%">
							<span id="cninc_msg"> </span>
						</div>
						
						<div class="form-group">
							<label  class="fn">Passport Number*</label>
							<input type="text" class="form-control" id="passport_number" name="passport_number" aria-describedby="emailHelp" placeholder="Enter Passport Number Like PA1234567" style="width:97%">
							<span id="passport"> </span>
							
						</div>
				
				
				<label class="col-sm-2 control-label" style="width:51%;margin-bottom: 20px">Select Gender*</label>
								<div class="col-sm-4" style=";margin-bottom: 20px;width:49%;padding: 0px">
								<select class="form-control m-b" name="gender" id="gender" >
								<option value="male" <?php { echo "Selected";} ?> >Male</option>
								<option value="female" <?php { echo "Selected";} ?> >Female</option>
								<option value="Other" <?php { echo "Selected";} ?> >Other</option>
								</select>
							     </div>		
						
             
							     
						
						
					
							<label class="col-sm-2 control-label" style="width:51%;margin-bottom: 20px">Reporting To*</label>
								<div class="col-sm-4" style=";margin-bottom: 20px;width:49%;padding: 0px">
								<select class="form-control m-b" name="reporting" id="reporting" >
							<?php	    if(!empty($reporting_data)){
								    foreach($reporting_data as $row){
								    ?>
								  	<option value="<?php echo $row['name'];?>" <?php { echo "Selected";} ?> ><?php echo $row['name'];?></option>  
								    
								    <?php }} ?>

								<option value="Other" <?php { echo "Selected";} ?> >Other</option>
								</select>
							     </div>
						<?php echo "<br>";?>
						
						
						
					
						<div class="form-group">
							<label  class="fn">Password*</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" style="width:97%" onkeyup="checkPass(); return false;" />
							<span id="pass"> </span>

						</div>
						<!--	<div class="click">-->
						<!--	<h5>Password must contain -->
						<!--		<span>One alphabetic character, at least one special character, one number </span>and-->
						<!--		<span> one small alphabetic.</span></h5>-->
						<!--</div>-->
						<div class="form-group">
							<label  class="fn">Confirm Password*</label>
							<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" style="width:97%"onkeyup="Validate(); return false;" />
								<span id="confirm"> </span>
						</div>
						<div class="click">
							<h5>By clicking Create Account, you agree to the
								<span>Terms of Use </span>and
								<span>Privacy Policy.</span></h5>
						</div>
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
						<button type="submit" class="btn btn-primary sb-btn registerbtn" style="padding: 10px 12px;">Create Account</button>
					
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
		
		<!--date picker-->
		

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet" />



		<!--end-->
		<script>
		   function checkPass()
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
 	 jQuery('#mobile').blur(function(){
  var input_text = jQuery(this).val(),
  myRegExp = new RegExp(/^[0-9]{10}$/);

  if(myRegExp.test(input_text) ) {
      //if true
      jQuery('#message').text('Correct');
 
  }
  else {
      //if false
      jQuery('#message').text('Enter mobile number in correct format. And required format is: 3451234567');
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
		<!--landline-->
			<script>
 	 jQuery('#landline').blur(function(){
  var input_text = jQuery(this).val(),
  myRegExp = new RegExp(/^[0-9]{10}$/);

  if(myRegExp.test(input_text) ) {
      //if true
      jQuery('#landline_number').text('Correct');
 
  }
  else {
      //if false
      jQuery('#landline_number').text('Enter landline number in correct format. And required format is: 0511234567');
  }
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
   
  changeYear: true,
  maxDate: "+0D"
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
      jQuery('#pass').text('Correct');
      return true;
 
  }
  else {
      //if false
    
      jQuery('#pass').text('Password must contain One alphabetic character, at least one special character, one number and one small alphabetic.');
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
           
             jQuery('#confirm').text('Password and confirm password must match.');
             // alert("Passwords do not match.");
             return false;
           
        }
         else {
      //if false
      
      jQuery('#confirm').text('Correct');
       return true;
  }
        
    }
</script>
	</body>
</html>
