<section class="per-details">
	<div class="container">
		<div class="pe-head">
			<h4>personal details</h4>
		</div>
		<div class="per-form">
			<form class="updateprofile">
				<div class="row">
					<div class="col-md-12">
						 <div class="form-group">
  							<label class="fn">Full Name</label>
    						<input type="text" class="form-control" name="fullname" placeholder="full name" value="<?php echo $userdata->fullname ; ?>">
						 </div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-6">
						 <div class="form-group">
  							<label class="fn">email address</label>
    						<input type="email" class="form-control" name="email" placeholder="email address" value="<?php echo $userdata->email ; ?>">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
  							<label class="fn">Username</label>
    						<input type="text" class="form-control" name="username" placeholder="username" value="<?php echo $userdata->username ; ?>">
						 </div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						 <div class="form-group">
  							<label class="fn">State / Province</label>
    						<input type="text" class="form-control" name="state" value="<?php echo $userdata->state ; ?>">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
  							<label class="fn">Zip / Postal Code</label>
    						<input type="number" class="form-control phn" name="zipcode" value="<?php echo $userdata->zip ; ?>">
						 </div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						 <div class="form-group">
  							<label class="fn">city / town</label>
    						<input type="text" class="form-control" placeholder="city / town" name="city" value="<?php echo $userdata->city ; ?>">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="fn">country</label>
							<select class="form-control" id="sel1" name="country">
								<option value="">Select Country</option>
								<?php 
									$getcountires = $this->db->get_where('tbl_countries');
									foreach($getcountires->result() as $country){
								?>	
								<option value="<?php echo $country->country_name ; ?>" <?php if($userdata->country == $country->country_name){ echo 'selected';} ?>><?php echo $country->country_name  ; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="fn">gender</label>
							<select class="form-control" id="sel1" name="gender">
								<option value="">Select Gender</option>
								<option value="male" <?php if($userdata->gender == 'male'){ echo 'selected';} ?>>male</option>
								<option value="female" <?php if($userdata->gender == 'female'){ echo 'selected';} ?>>female</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="fn">time zone</label>
							<select class="form-control" name="timezone" id="sel1">
								<option value="">Select Time Zone</option>
								<option value="-12" <?php if($userdata->timezone == '-12'){ echo 'selected';} ?>>(GMT-12:00) International Date Line West</option>
								<option value="-11" <?php if($userdata->timezone == '-11'){ echo 'selected';} ?>>(GMT-11:00) Midway Island, Samoa</option>
								<option value="-10" <?php if($userdata->timezone == '-10'){ echo 'selected';} ?>>(GMT-10:00) Hawaii</option>
								<option value="-9" <?php if($userdata->timezone == '--9'){ echo 'selected';} ?>>(GMT-09:00) Alaska</option>
								<option value="-8" <?php if($userdata->timezone == '--8'){ echo 'selected';} ?>>(GMT-08:00) Pacific Time (US & Canada)</option>
								<option value="-80" <?php if($userdata->timezone == '-80'){ echo 'selected';} ?>>(GMT-08:00) Tijuana, Baja California</option>
								<option value="-7" <?php if($userdata->timezone == '-7'){ echo 'selected';} ?>>(GMT-07:00) Arizona</option>
								<option value="-70" <?php if($userdata->timezone == '-70'){ echo 'selected';} ?>>(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
								<option value="-71" <?php if($userdata->timezone == '-71'){ echo 'selected';} ?>>(GMT-07:00) Mountain Time (US & Canada)</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="fn">phone number</label>
							<input type="text" name="phonenumber" class="form-control" value="<?php echo $userdata->phonenumber ; ?>">
						</div>
					</div>
				</div>
				<div class="sav-ch">
					<input type="button" name="form1" value="save changes" class="sav-btn updatebtn">
				</div>
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
			</form>
		</div>	
	</div>
</section>


<script type="text/javascript">
	jQuery('.updatebtn').click(function() {
		var form  = jQuery('.updateprofile').serialize();

		jQuery.ajax({
			url  	: '<?php echo base_url() ; ?>profile/update',
			data 	: form,
			type 	: 'POST',
			dataType : 'Json',
			success	: function(data) {
				if (data.success) {
					Swal.fire({
							icon: 'success',
							text: data.message,
							showConfirmButton: true,
							confirmButtonText:'Close',
							confirmButtonClass: 'completeboxclose',

						})
					jQuery('.loginform')[0].reset()	;
					setTimeout(function() { window.location = '<?php echo base_url() ; ?>profile'},1000)
				} else {
					
					Swal.fire({
							icon: 'error',
							text: data.message,
							showConfirmButton: true,
							confirmButtonText:'Close',
							confirmButtonClass: 'completeboxclose',

						})
				}

			},error : function() {
				alert('failure')
			}
		})
	})
</script>