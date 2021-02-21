<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<div style="display:none" id="loadingDiv">
	<div class="loader">Loading...</div></div>
<section class="page-buil-sec">
	<div class="container">
	   <div class="se-pr">
		    <i class="fa fa-angle-left" aria-hidden="true"><a href="#">see pros</a></i>
			<ul>
				<li><a href="#">about</a></li>
				<li><a href="#">photos</a></li>
				<li><a href="#">reviews</a></li>
				<li><a href="#">credetianls</a></li>
			</ul>
		 </div>	
		 <div class="row">
			<div class="col-md-12">
				<?php
					if ($this->session->flashdata('error')) {
					?>
							<div class="label label-danger" style="display:grid">
								<p><?php echo $this->session->flashdata('error'); ?></p>
							</div>
							<?php
					}
					if ($this->session->flashdata('success')) {
						?>
								<div class="label label-success" style="display:grid">
									<p><?php echo $this->session->flashdata('success'); ?></p>
								</div>
								<?php
					}
					?>
			</div>
		</div>
		 <div class="prof-sec">
				<label class="custom-file-upload" style="display: grid;">
						<input type="file" name="myfile" class="myfile" id="imgInp"/>
						<img src=" <?php echo base_url() ; ?>public/uploads/<?php if ($this->session->userdata('photo') == '') {echo 'pagebuild.png';} else {echo $this->session->userdata('photo');} ?>" id="blah">
						
				</label>
				
				<p>upload photos</p>
		  <form class="pag-bu-for" action="<?php echo base_url() ; ?>profile/updatechecfprofile" method="post">
		  <div class="ed-pr">
		 		<a href="#"><i class="fa fa-pencil" aria-hidden="true"><span>edit profile</span></i></a><br>
		 		<input type="text" name="name" placeholder="username" class="us-tx" value="<?php echo $profile_details->username ; ?>">
		  	</div>
		 </div>
		 <div class="form-group abo-you">
  			<textarea class="form-control" rows="8" id="comment" placeholder="about yourself"><?php echo $profile_details->about ; ?></textarea>
  			<span>500 characters only</span>
		</div>
		
		   <h5>payment methods</h5>	
		    <div class="form-group frm">
				<input type="text" name="cash" placeholder="Bank Name" value="<?php echo $profile_details->cash ; ?>">
				<input type="text" name="credit" placeholder="IBAN Number" value="<?php echo $profile_details->credit ; ?>">
			</div>
			
			<div class="form-group frm">
			<?php $explode = explode(',',$profile_details->cusine); ?> 
			
				<select class="js-example-basic-multiple" name="cusine[]" multiple="multiple" class="form-control" required>
				  <option value="american" <?php if(in_array("american", $explode)) { echo "selected";} ?>>American</option>
				  <option value="chinese" <?php if (in_array("chinese", $explode)) { echo "selected";} ?>>Chinese</option>
				  <option value="creole" <?php if (in_array("creole", $explode)) { echo "selected";} ?>>Creole</option>
				  <option value="french" <?php if (in_array("french", $explode)) { echo "selected";} ?>>French</option>
				  <option value="greek" <?php if (in_array("greek", $explode)) { echo "selected";} ?>>Greek</option>
				  <option value="indian" <?php if (in_array("indian", $explode)) { echo "selected";} ?>>Indian</option>
				  <option value="italian" <?php if (in_array("italian", $explode)) { echo "selected";} ?>>Italian</option>
				  <option value="japanese" <?php if (in_array("japanese", $explode)) { echo "selected";} ?>>Japanese</option>
				  <option value="mexican" <?php if (in_array("mexican", $explode)) { echo "selected";} ?>>Mexican</option>
				  <option value="spanish" <?php if (in_array("spanish", $explode)) { echo "selected";} ?>>Spanish</option>
				  <option value="sushi" <?php if (in_array("sushi", $explode)) { echo "selected";} ?>>Sushi</option>
				  <option value="thai" <?php if (in_array("thai", $explode)) { echo "selected";} ?>>thai</option>
				  <option value="mediterranean" <?php if (in_array("mediterranean", $explode)) { echo "selected";} ?>>Mediterranean</option>
				</select>
			</div>
			<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" class="<?php echo $this->security->get_csrf_token_name(); ?>" id="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
			<input type="submit" name="update" class="btn btn-primary updateprofile" value="Update Profile">
		</form>	
	  <!-- <div class="row">
		 <div class="col-md-12">
		    <div class="soc-med">
		    	<h5>social media</h5>
		      <img src="assets/images/tw.png"> <span>twitter</span><a href="#">add account</a>
		      <img src="assets/images/fb.png"> <span>facebook</span><a href="#">add account</a>
		       </div>
		    </div>
		 </div> 
	   <div class="row">
		 <div class="col-md-12">
		  <div class="ins-med">	
			 <img src="assets/images/go.png"> <span>google</span><a href="#">add account</a>
			  <img src="assets/images/ins.png"> <span>instagram</span><a href="#">add account</a>
		  </div>	
		</div> 
	 </div>-->
	 <div class="fp-rw">
	   <div class="row">
	   	<div class="col-md-6">
	   		<h5>Featured Projects</h5>
	   	</div>
	   	<div class="col-md-6">
	   		<div class="text-right">
			   <a href="javascript:void()" class="btn btn-primary ctn-btn-project" data-toggle="modal" data-target="#myModal">Add Feature Project</a>
			</div>
	   	</div>
	   </div>
	   
	   
	  </div>
	 <div class="row featureproject">
 		<?php 
 			$featureprject = $this->db->get_where('tbl_feature_project',array('user_id' => $this->session->userdata('id'),'category' => 1));
 			foreach($featureprject->result() as $feature){
 		?>	
 		<div class="col-md-4 prd-nam">
 			<div class="fp-box" >
 				   <img src="<?php echo base_url() ; ?>public/uploads/<?php echo $feature->feature_image ; ?>" class="img-fluid">
 			</div>
 			<p><?php echo $feature->feature_name ; ?></p>
 		</div>
 		<?php } ?>
	 </div>	
	 <div class="fp-rw">
	   <div class="row">
	   	<div class="col-md-6">
	   		<h5>Signature Dish</h5>
	   	</div>
	   	<div class="col-md-6">
	   		<div class="text-right">
			   <a href="javascript:void()" class="btn btn-primary ctn-btn-project" data-toggle="modal" data-target="#myModalsignature">Add Signature Dish</a>
			</div>
	   	</div>
	   </div>
	   
	   
	  </div>
	 <div class="row signatureproject">
 		<?php 
 			$featureprject = $this->db->get_where('tbl_feature_project',array('user_id' => $this->session->userdata('id'),'category' => 2));
 			foreach($featureprject->result() as $feature){
 		?>	
 		<div class="col-md-4 prd-nam">
 			<div class="fp-box" >
 				   <img src="<?php echo base_url() ; ?>public/uploads/<?php echo $feature->feature_image ; ?>" class="img-fluid">
 			</div>
 			<p><?php echo $feature->feature_name ; ?></p>
 		</div>
 		<?php } ?>
	 </div>	
	  <div class="fp-rw">
	   <h5>photos & videos</h5>
	  </div>
	  <div class="row">
		<?php 
			$tbl_chef_iages = $this->db->get_where('tbl_chef_iages',array('user_id' => $this->session->userdata('id')))->result();
			foreach($tbl_chef_iages as $images){
		?>		
		<div class="col-md-4">
			<div class="fp-box">
 				 <img src="<?php echo base_url() ; ?>uploads/<?php echo $images->image ; ?>" class="img-fluid">
 			</div>
		</div>
		<?php } ?>
		<div class="col-md-4">
			<div class="fp-box">
	 			<div class="category_image">
					<label for="file-upload5" class="custom-file-upload ">
						<div class="data-uploaded5">
			  				 <p>browse photos to <br>
			 				 <span>upload</span></p>
			 				 <img src="<?php echo base_url() ; ?>assets/images/brow.png" class="img-fluid">
			  			</div>
					</label>
					<input id="file-upload5" name="product_image" class="file-upload" type="file" data-ids="5" >
				</div>
			</div>
		</div>
		
	</div>
	 <div class="fp-rw">
	   <h5>Specialties<span>Please Choose Any three Option Atleast</span></h5>
	  </div>
	  <form class="" action="<?php echo base_url() ; ?>profile/specialitiesupdate" method="post">
	  <?php $fitness = explode(',',$profile_details->fitness); ?>
	  <?php $eventfor = explode(',',$profile_details->eventfor); ?>
	  <?php $medical = explode(',',$profile_details->medical); ?>
	  <div class="row">
		<div class="col-md-4">
			<div class="fit-gol">
				<h6>Fitness Goals</h6>
				<input name="fitness[]" type="checkbox" value="Lose weight" <?php if (in_array("Lose weight", $fitness)) { echo "checked";} ?>><span>Lose weight</span><br>
				<input name="fitness[]" type="checkbox" value="Get toned" <?php if (in_array("Get toned", $fitness)) { echo "checked";} ?>><span>Get toned</span><br>
				<input name="fitness[]" type="checkbox" value="Build muscle" <?php if (in_array("Build muscle", $fitness)) { echo "checked";} ?>><span>Build muscle</span><br>
				<input name="fitness[]" type="checkbox" value="Gain flexibility" <?php if (in_array("Gain flexibility", $fitness)) { echo "checked";} ?>><span>Gain flexibility</span><br>
				<input name="fitness[]" type="checkbox" value="Boost stamina" <?php if (in_array("Boost stamina", $fitness)) { echo "checked";} ?>><span>Boost stamina</span><br>
				<input name="fitness[]" type="checkbox" value="Lose fat" <?php if (in_array("Lose fat", $fitness)) { echo "checked";} ?>><span>Lose fat</span><br>
				<input name="fitness[]" type="checkbox" value="Improve athletic skills" <?php if (in_array("Improve athletic skills", $fitness)) { echo "checked";} ?>><span>Improve athletic skills</span><br>
				<input name="fitness[]" type="checkbox" value="Build muscle" <?php if (in_array("Build muscle", $fitness)) { echo "checked";} ?>><span>Build muscle</span><br>
			</div>
		</div>
		<div class="col-md-4">
			<div class="fit-gol">
				<h6>Event To Prep For</h6>
				<input type="checkbox" name="eventfor[]" value="Athletic event" <?php if (in_array("Athletic event", $eventfor)) { echo "checked";} ?>><span>Athletic event</span><br>
				<input type="checkbox" name="eventfor[]" value="Competition" <?php if (in_array("Competition", $eventfor)) { echo "checked";} ?>><span>Competition</span><br>
				<input type="checkbox" name="eventfor[]" value="Vacation" <?php if (in_array("Vacation", $eventfor)) { echo "checked";} ?>><span>Vacation</span><br>
				<input type="checkbox" name="eventfor[]" value="Wedding" <?php if (in_array("Wedding", $eventfor)) { echo "checked";} ?>><span>Wedding</span><br>
				<input type="checkbox" name="eventfor[]" value="Decide on a theme" <?php if (in_array("Decide on a theme", $eventfor)) { echo "checked";} ?>><span>Decide on a theme</span><br>
				<input type="checkbox" name="eventfor[]" value="Research catering" <?php if (in_array("Research catering", $eventfor)) { echo "checked";} ?>><span>Research catering</span><br>
				<input type="checkbox" name="eventfor[]" value="Research venues" <?php if (in_array("Research venues", $eventfor)) { echo "checked";} ?>><span>Research venues</span><br>
				<input type="checkbox" name="eventfor[]" value="Create a budget" <?php if (in_array("Create a budget", $eventfor)) { echo "checked";} ?>><span>Create a budget</span><br>
			</div>
		</div>
		<div class="col-md-4">
			<div class="fit-gol">
				<h6>Medical Concerns</h6>
				<input type="checkbox" name="medical[]" value="Back Problems" <?php if (in_array("Back Problems", $medical)) { echo "checked";} ?>><span>Back Problems</span><br>
				<input type="checkbox" name="medical[]" value="Joint Pain" <?php if (in_array("Joint Pain", $medical)) { echo "checked";} ?>><span>Joint Pain</span><br>
				<input type="checkbox" name="medical[]" value="Asthma" <?php if (in_array("Asthma", $medical)) { echo "checked";} ?>><span>Asthma</span><br>
				<input type="checkbox" name="medical[]" value="Other Injuries" <?php if (in_array("Other Injuries", $medical)) { echo "checked";} ?>><span>Other Injuries</span><br>
				<input type="checkbox" name="medical[]" value="Medical Condition" <?php if (in_array("Medical Condition", $medical)) { echo "checked";} ?>><span>Medical Condition</span><br>
				<input type="checkbox" name="medical[]" value="Cardiovascular Concerns" <?php if (in_array("Cardiovascular Concerns", $medical)) { echo "checked";} ?>><span>Cardiovascular Concerns</span><br>
				<input type="checkbox" name="medical[]" value="Neurological Concerns" <?php if (in_array("Neurological Concerns", $medical)) { echo "checked";} ?>><span>Neurological Concerns</span><br>
				<input type="checkbox" name="medical[]" value="Teeth Pain" <?php if (in_array("Teeth Pain", $medical)) { echo "checked";} ?>><span>Teeth Pain</span><br>
			</div>
		</div>
		
	 </div>
	 <div class="row">
		<div class="col-md-4">
		<input type="submit" name="" class="btn btn-primary" value="Update" style="margin-top: 30px;"/>
		</div>
	 </div>
	 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" class="<?php echo $this->security->get_csrf_token_name(); ?>" id="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
	 </form>
	 <div class="fp-rw">
	 	<h5>Licenses Or Certifications</h5>
	 </div>
	 <div class="row">
	 	<?php 
			$tbl_license_chef = $this->db->get_where('tbl_license_chef',array('user_id' => $this->session->userdata('id')))->result();
			foreach($tbl_license_chef as $imageslice){
		?>		
		<div class="col-md-4">
			<div class="fp-box">
 				 <img src="<?php echo base_url() ; ?>uploads/<?php echo $imageslice->image ; ?>" class="img-fluid">
 			</div>
		</div>
		<?php } ?>
	 	<div class="col-md-4">
	 		<div class="fp-box">
 				<div class="category_image">
					<label for="file-upload7" class="custom-file-upload ">
						<div class="data-uploaded7">
			  				<p>browse photo <br> to <span>upload</span></p>
			  				<img src="<?php echo base_url() ;?>assets/images/brow.png">
			  			</div>
					</label>
					<input id="file-upload7" name="comodity_image" class="file-uploadss" type="file" data-ids="7" >
				</div>
 			</div>
	 	</div>
	 	<div class="col-md-4">
	 		<div class="fp-box">
 				<div class="category_image">
					<label for="file-upload8" class="custom-file-upload ">
						<div class="data-uploaded8">
			  				<p>browse photo <br> to <span>upload</span></p>
			  				<img src="<?php echo base_url() ;?>assets/images/brow.png">
			  			</div>
					</label>
					<input id="file-upload8" name="comodity_image" class="file-uploadss" type="file" data-ids="8" >
				</div>
 			</div>
	 	</div>
	</div>
  </div>
</section>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">featured project</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <section class="fet-pro">
			<div class="container">
				<div class="f-prog">
					<form class="submitfeatureproject">
					<div class="ty-pro">
						<div class="category_image">
							<label for="file-upload2" class="custom-file-upload ">
								<div class="data-uploaded2">
									<p>browse project to <span>upload</span></p>
									<img src="assets/images/brow.png">
								</div>
							</label>
							<input id="file-upload2" name="comodity_image" class="file-upload" type="file"  data-ids="2">
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group en">
							  <label class="fn">Event Type:</label>
							  <select name="event_type" class="form-control">
							  	<option value="Meal Prepping">Meal Prepping</option>
							  	<option value="Dinner Party">Dinner Party</option>
							  	<option value="Catering Services">Catering Services</option>
							  	<option value="Grocery Shopping">Grocery Shopping</option>
							  	<option value="Cooking Lessons">Cooking Lessons</option>
							  	<option value="Knife Sharpening">Knife Sharpening</option>
							  	<option value="Daily Meals">Daily Meals</option>
							  </select>
							</div>
						</div>
					</div>
					 <div class="row">
						 <div class="col-md-6">
							<div class="form-group en">
							  <label class="fn">Enter name:</label>
							  <input type="text" class="form-control" name="name" required>
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group en">
							  <label class="fn">price:</label>
							  <input type="text" class="form-control" name="price"  required>
							</div>
						 </div>
					  </div>
					 <div class="form-group en">
						<label class="fn">when it is available:</label>
						    <select class="form-control" name="available"  required>
						    <option name="">Select</option>
						    <option name="Summer">Summer</option>
						    <option name="Winter">Winter</option>
						    <option name="Autum">Autum</option>
						    <option name="Spring">Spring</option>
					    </select>
					</div>
					<div class="">
						<input type="button" name="button" value="cancel" class="c-btn">
						<input type="submit" name="button" value="submit" class="c-btn  featuredish">
					</div>
					<input type="hidden" class="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
					<input type="hidden" name="category_id" value="1"></input>
				  </form>
				</div>
			</div>
		</section>
      </div>
      
    </div>

  </div>
</div>


<div id="myModalsignature" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Signature Dish</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <section class="fet-pro">
			<div class="container">
				<div class="f-prog">
					<form class="submitfeatureproject">
					<div class="ty-pro">
						<div class="category_image">
							<label for="file-upload9" class="custom-file-upload ">
								<div class="data-uploaded9">
									<p>browse project to <span>upload</span></p>
									<img src="assets/images/brow.png">
								</div>
							</label>
							<input id="file-upload9" name="comodity_image" class="file-upload" type="file"  data-ids="9">
						</div>
						
					</div>
					
					 <div class="row">
						 <div class="col-md-6">
							<div class="form-group en">
							  <label class="fn">Enter Title:</label>
							  <input type="text" class="form-control" name="name" required>
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group en">
							  <label class="fn">price:</label>
							  <input type="text" class="form-control" name="price"  required>
							</div>
						 </div>
						 <div class="col-md-12">
							<div class="form-group en">
							  <label class="fn">Description:</label>
							  <textarea name="description" class="form-control" required=""></textarea>
							</div>
						 </div>
					  </div>
					 
					<div class="">
						<input type="button" name="button" value="cancel" class="c-btn">
						<input type="submit" name="button" value="submit" class="c-btn featuredish">
					</div>
					<input type="hidden" class="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
					<input type="hidden" name="category_id" value="2"></input>
				  </form>
				</div>
			</div>
		</section>
      </div>
      
    </div>

  </div>
</div>


<script type="text/javascript">
	$('.submitfeatureproject').submit(function(e){
		e.preventDefault();
		$('.featuredish').attr('disabled','disabled');
		$('#loadingDiv').show();
		$.ajax({
				url: "<?php echo base_url() ; ?>profile/addfeatureprject",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
				dataType : 'json',
				cache: false,
				processData:false,
				success: function(data) {
					$('#loadingDiv').hide();
					if (data.success) {
						//$('.resultbox').html('<div class="label label-success">'+data.message+'</div>')
						if(data.category == 1)
						{
							$('#myModal').modal('hide');
							$('.featureproject').append('<div class="col-md-4 prd-nam"><div class="fp-box" ><img src="'+data.image+'" class="img-fluid"></div><p>'+data.name+'</p></div>');
							$('.submitfeatureproject')[0].reset();
						}else
						{
							$('#myModalsignature').modal('hide');
						$('.signatureproject').append('<div class="col-md-4 prd-nam"><div class="fp-box" ><img src="'+data.image+'" class="img-fluid"></div><p>'+data.name+'</p></div>');
						$('.submitfeatureproject')[0].reset();
						
						}
						$('.featuredish').removeAttr('disabled');
						
					} else {
						Swal.fire({
							icon: 'error',
							text: data.message,
							showConfirmButton: true,
							confirmButtonText:'Close',
							confirmButtonClass: 'completeboxclose',

						})
						$('.featuredish').removeAttr('disabled');
					}
					console.log(data)
				},
				error: function(e) {
					$('#loadingDiv').hide();
				}
			});
	})
	
	
	
	function readURL(input) 
	{
	
		if (input.files && input.files[0]) 
		{
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
	
	
	
	function readURLss(input)
	{
		var csrf_test_name = $('.csrf_test_name').val();
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			var name = input.files[0].name;

			var form_data = new FormData();
			var ext = name.split('.').pop().toLowerCase();
			if (jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
				alert("Invalid Image File");
			}
			var oFReader = new FileReader();
			oFReader.readAsDataURL(input.files[0]);
			var f = input.files[0];
			var fsize = f.size||f.fileSize;
			if (fsize > 2000000) {
				alert("Image File Size is very big");
			} else {
				form_data.append("document", input.files[0]);
				form_data.append("csrf_test_name", csrf_test_name);
				$.ajax({
					url:"<?php echo base_url() ; ?>profile/uploadphotobanner",
					method:"POST",
					data: form_data,
					contentType: false,
					cache: false,
					dataType : 'json',
					processData: false,
					beforeSend:function() {
						$('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
					},
					success:function(data) {
						
					}
				});
			}

			reader.onload = function (e) {
				$('#data-uploaded5 img').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#file-upload5").change(function() {
		readURLss(this);
	});
	
	
	
	function readURLlicnese(input)
	{
		
		var div_id  = $(input).attr('data-ids');
		var csrf_test_name = $('.csrf_test_name').val();
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			var name = input.files[0].name;

			var form_data = new FormData();
			var ext = name.split('.').pop().toLowerCase();
			if (jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
				alert("Invalid Image File");
			}
			var oFReader = new FileReader();
			oFReader.readAsDataURL(input.files[0]);
			var f = input.files[0];
			var fsize = f.size||f.fileSize;
			if (fsize > 2000000) {
				alert("Image File Size is very big");
			} else {
				form_data.append("document", input.files[0]);
				form_data.append("csrf_test_name", csrf_test_name);
				$.ajax({
					url:"<?php echo base_url() ; ?>profile/uploadphotolicense",
					method:"POST",
					data: form_data,
					contentType: false,
					cache: false,
					dataType : 'json',
					processData: false,
					beforeSend:function() {
						$('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
					},
					success:function(data) {
						
					}
				});
			}

			reader.onload = function (e) {
				$('#data-uploaded'+div_id+' img').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$(".file-uploadss").change(function() {
		readURLlicnese(this);
	});
	
	
	
	
	function readURLprofle(input)
	{
		var csrf_test_name = $('.csrf_test_name').val();
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			var name = input.files[0].name;

			var form_data = new FormData();
			var ext = name.split('.').pop().toLowerCase();
			if (jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
				alert("Invalid Image File");
			}
			var oFReader = new FileReader();
			oFReader.readAsDataURL(input.files[0]);
			var f = input.files[0];
			var fsize = f.size||f.fileSize;
			if (fsize > 2000000) {
				alert("Image File Size is very big");
			} else {
				form_data.append("document", input.files[0]);
				form_data.append("csrf_test_name", csrf_test_name);
				$.ajax({
					url:"<?php echo base_url() ; ?>profile/uploadimage",
					method:"POST",
					data: form_data,
					contentType: false,
					cache: false,
					dataType : 'json',
					processData: false,
					beforeSend:function() {
						$('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
					},
					success:function(data) {
						
					}
				});
			}

			reader.onload = function (e) {
				$('#blah').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#imgInp").change(function() {
		readURLprofle(this);
	});
	
	$(document).ready(function() {
	    $('.js-example-basic-multiple').select2({
	    	placeholder: "Select Cuisine*",
	    });
	});
</script>