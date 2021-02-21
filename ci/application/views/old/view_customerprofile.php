<section class="mid-sec">
	<div class="container">
		<div class="profile">
			<img src="<?php echo base_url() ; ?>public/uploads/<?php if ($this->session->userdata('photo') == '') {echo 'prof.png';} else {echo $this->session->userdata('photo');} ?>">
			<div class="edit-prof">
				<a href="<?php echo base_url() ; ?>profile/edit">edit profile</a>
			</div>
		</div>
	</div>
</section>
<section class="us-sec">
	<div class="container">
		<div class="us-head">
			<h5><?php echo $this->session->userdata('fullname') ; ?></h5>
			<h6>Playing Since <?php echo date('d M,Y',strtotime($profile_details['created_on'])) ; ?></h6>
		   <div class="mat">
				 <span>
					 0 <br><p>matches</p>
				 </span>
				 <span>
					 0 <br><p>followers</p>
				 </span>
				 <span>
					 0 <br><p>following</p>
				 </span>
		   </div>
		</div>
	</div>
	<div class="container">
		<div class="row mt-row">
			<div class="col-md-8">
				<div class="form-group mat-his">
  					<textarea class="form-control" rows="15" id="comment" placeholder="match history"></textarea>
				</div>
			 </div>
			  <div class="col-md-4">
			  	  <div class="steps">
			  	  	<h6>5 Steps To Your Free $5<span>167:57:06<br>Expires In</span></h6>
			  	  	<div class="dol-bor"><span>$5</span></div>
				  	  	<p class="bd-tp">Play a Matchmaking Match</p>
				  	  	<p>Find an Opponent<span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></p></p><br>
				  	  	<p class="bd-tp">Make Your First Deposit</p>
				  	  	<p>Deposit Now<span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></p><br>
				  	  	<p class="bd-tp">Play in a Tournament</p>
				  	  	<p>Browse Tournament<span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></p></p><br>
				  	  	<p class="bd-tp">Win a Matchmaking Match</p>
				  	  	<p>Find an Opponent<span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></p></p><br>
				  	  	<p class="bd-tp">Earn a PLR</p>
				  	  	<p>Find an Opponent<span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></p></p>
			  	  </div>
			  </div>
		 </div>
	</div>
</section>
<!--
<section class="pro-sec">
	<div class="container">
		<div class="row jd-pro">
			<div class="col-md-4">
				<div class="jhon-prof">
					<img src=" <?php echo base_url() ; ?>public/uploads/<?php if ($this->session->userdata('photo') == '') {echo 'profile.png';} else {echo $this->session->userdata('photo');} ?>" id="blah">
					<label class="custom-file-upload">
						<input type="file" name="myfile" class="myfile" id="imgInp"/>
					<i class="fa fa-camera" aria-hidden="true"></i>
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" class="<?php echo $this->security->get_csrf_token_name(); ?>" id="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
					</label>
						
					<h6><?php echo $this->session->userdata('fullname') ; ?></h6>
					<p><?php echo $this->session->userdata('email') ; ?></p>
				</div>
			</div>
			<div class="col-md-8">
				<div class="sett-box">
					<a href="<?php echo base_url() ; ?>profile/account_setting">account settings
						<span>
							<i class="fa fa-angle-right" aria-hidden="true"></i></span>
					</a>
					<?php $checkorder = $this->db->get_where('tbl_order',array('customer_id' => $this->session->userdata('id'))); ?>
					<a href="<?php if($checkorder->num_rows() > 0){ echo base_url().'order/index';}else{ echo 'javascript:void()';} ?>" <?php if($checkorder->num_rows() == 0){ echo 'class="norecordspopup"';}?>>Orders
						<span>
							<i class="fa fa-angle-right" aria-hidden="true"></i></span>
					</a>
					<a href="#">notifications settings
						<span>
							<i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
				</div>
				<div class="logout">
					<a href="<?php echo base_url() ; ?>login/logout">logout</a>
				</div>
			</div>
		</div>
	</div>
</section>
-->

<script type="text/javascript">
	function readURL(input)
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
		readURL(this);
	});
	
	
	$('.norecordspopup').click(function(){
		Swal.fire({
					icon: 'error',
					text: 'No record found',
					showConfirmButton: true,
					confirmButtonText:'Close',
					confirmButtonClass: 'completeboxclose',

				})
	})
</script>