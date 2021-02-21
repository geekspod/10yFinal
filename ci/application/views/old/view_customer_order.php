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
			    	<div class="act">
			    		<p>active order <span>-0($<?php echo $totalamount->totalamount ; ?>)</span></p>
			    	</div>
			    	<?php
			    		$this->db->order_by('order_id','DESC'); 
			    		$checkorder = $this->db->get_where('tbl_order',array('customer_id' => $this->session->userdata('id')));
			    		if($checkorder->num_rows() > 0){
			    			foreach($checkorder->result() as $ord){
			    				$getseller = $this->db->get_where('tbl_customer',array('customer_id' => $ord->chef_id))->row();
	 							$feature  = $this->db->get_where('tbl_feature_project',array('feature_id' => $ord->feature_id))->row();
			    	?>		
			    	<div class="twx">
			    		<div class="red-circle"><img src="<?php if($getseller->photo == ''){ echo base_url().'assets/images/chef2.png';}else{ echo base_url().'public/uploads/'.$getseller->photo ; }?>" class="img-fluid"></div>
			    		<h6><?php echo $getseller->fullname ; ?></h6>
			    		<p>price <span>$<?php echo $ord->total_amount ; ?></span></p>
			    		<?php if($ord->seller_comlete== 0){ ?>
			    		<?php if($ord->order_status== 0 || $ord->order_status== 1){ ?>
			    		<a href="<?php echo base_url() ; ?>Order/index?order_id=<?php echo $ord->order_id ; ?>">View Details</a>
			    		<?php }else if($ord->order_status== 2){ ?>
			    		<a href="javascript:void()" >declined</a>
			    		<?php }else if($ord->order_status== 3){ ?>
			    			<a href="<?php echo base_url() ; ?>Order/index?order_id=<?php echo $ord->order_id ; ?>" >Delivered</a>
			    		<?php } ?>
			    		<?php }else{ ?>
			    		<a href="javascript:void()" >Completed</a>
			    		<?php } ?>
			    	</div>
			    	<?php } }else{ ?>
			    	<div class="twx">
			    		<div class="red-circle"></div>
			    		<h6>No Order Found</h6>
			    	</div>
			    	<?php } ?>
			    </div>
			</div>
		</div>
</section>

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
</script>	