<section class="per-details">
	<div class="container">
		<div class="pe-head">
			<h4>Text Notification</h4>
		</div>
		<div class="per-form">
			<form class="updateprofile">
				
				<div class="row">
					<div class="col-md-2">
						 <label class="container">Yes
						  <input type="radio" name="notification" value="0" <?php if($userdata->textnotify == 0){ echo 'checked';} ?>>
						  <span class="checkmark"></span>
						</label>
						
					</div>
					<div class="col-md-2">
						<label class="container">No
						  <input type="radio" name="notification" value="1" <?php if($userdata->textnotify == 1){ echo 'checked';} ?>>
						  <span class="checkmark"></span>
						</label>
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
			url  	: '<?php echo base_url() ; ?>profile/updatetextnotification',
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