<link href="<?php echo base_url() ;?>assets/css/uploadifive.css" rel="stylesheet" type="text/css"></link>
<section class="pro-view">
	<div class="container">
		<div class="row">
		  <div class="col-md-8">
			<div class="se-pr">
				<i class="fa fa-angle-left" aria-hidden="true"><a href="#">see pros</a></i>
				<ul>
					<li><a href="#about">about</a></li>
					<li><a href="#photos">photos</a></li>
					<li><a href="#reviews">review</a></li>
					<li><a href="#credintials">credentials</a></li>	
				</ul>
			</div>
			<div class="chef-de cu" >
			<?php $checkbio = $this->db->get_where('tbl_customer_details',array('customer_id' => $chef->customer_id))->row(); ; ?>
				<img src="<?php if($chef->photo == ''){ echo base_url().'assets/images/chef2.png';}else{ echo base_url().'public/uploads/'.$chef->photo ; }?>">
				<h5><?php echo $chef->fullname ; ?></h5>
				<span>0.0 <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <span class="rev">0 reviews</span></span>
				<div class="sh">
					<a href="#"><i class="fa fa-download" aria-hidden="true"></i>share</a>
				</div>
			</div>
			<div class="ch-intro" id="about">
			
				<h6>Introduction:<span> <?php echo $checkbio->about ; ?></h6></span>
<p style="visibility: hidden">Our facility is in Conway, Arkansas and we are always looking for great people to train, so just come by and check us out.</p>
			 	<div class="overview">
			 		<h6>overview</h6>
					<i class="fa fa-trophy" aria-hidden="true"><span>Hired 2 times</span></i><br>
					<i class="fa fa-map-marker" aria-hidden="true"><span>1 similar job done near you</span></i><br>
					<i class="fa fa-user" aria-hidden="true"><span>Background checked</span></i><br>
					<i class="fa fa-users" aria-hidden="true"><span>2 employees</span></i><br>
					<i class="fa fa-clock-o" aria-hidden="true"><span>6 years in business</span></i>
			 		
			 	</div>
			 	<div class="ms-ch">
			 		<a href="#" data-toggle="modal" data-target="#chatmyModal"><i class="fa fa-comments-o" aria-hidden="true"></i>message</a>
			 		<a href="#" data-toggle="modal" data-target="#calendarmodal"><i class="fa fa-calendar-o" aria-hidden="true"></i>check availability</a>
			 		<!--<a href="#"><i class="fa fa-phone" aria-hidden="true"></i>request a call back</a>-->
			 	</div>
			</div>
		  </div>
			<div class="col-md-4">
				<div class="chk-ava">
					<h6>$40</h6>
					<p>estimated cost</p>
					<span><i class="fa fa-usd" aria-hidden="true"></i>View price details</span>
					<form class="es-fr">
						<label class="fn"> location</label>
					    <input type="text" name="loca" placeholder="72217">
						<label class="fn">client age</label>
						  <select class="form-control sell">
    						<option>1</option>
    						<option>2</option>
    						<option>3</option>
    						<option>4</option>
  						  </select>
  						<label class="fn">service location</label>  
  						<select class="form-control sell">
    						<option>1</option>
    						<option>2</option>
    						<option>3</option>
    						<option>4</option>
  						</select>
  						<label class="fn">frequency</label>
  						<select class="form-control sell">
    						<option>1</option>
    						<option>2</option>
    						<option>3</option>
    						<option>4</option>
  						</select>
  						<input type="submit" name="submit" value="Check Availability" class="av-btn">
					</form>
				</div>
			</div>
	   </div>	
	   <div class="fp-he">
	   		<h6>featured projects</h6>
	   </div>
	   <div class="row">
	   		<?php 
	   			$getfeatureprojects = $this->db->get_where('tbl_feature_project',array('user_id' => $chef->customer_id,'category' => 1)); 
	   			foreach($getfeatureprojects->result() as $projects){
	   		?>		
	   		<div class="col-md-4">
	   			<div class="feat-prod">
	   				<img src="<?php if($projects->feature_image == ''){ echo base_url().'assets/images/indian.jpg';}else{ echo base_url().'public/uploads/'.$projects->feature_image ; }?>">
	   				<h6><?php echo $projects->feature_name ; ?></h6>
					<p>Approx. $<?php echo $projects->feature_price ; ?></p>
					<br>
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $projects->feature_id ; ?>">Book Now</a>
	   			</div>
	   		</div>
	   		<div id="myModal<?php echo $projects->feature_id ; ?>" class="modal fade" role="dialog">
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
								<form class="submitfeatureproject payment-forms" action="<?php echo base_url() ; ?>search/submitorder" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>" id="payment-form">
								<div class="payment-errors"></div>
								<div class="row">
									<div class="col-md-6">
										<h6><?php echo $projects->feature_name ; ?></h6>
										<p style="color:red"><?php echo $projects->feature_price ; ?></p>
										<div class="form-group en" style="display:none">
										  <label class="fn">Available In:</label>
										  <input type="date" class="form-control" name="availablein">
										</div>
									</div>
									<div class="col-md-6">
										<img src="<?php if($projects->feature_image == ''){ echo base_url().'assets/images/indian.jpg';}else{ echo base_url().'public/uploads/'.$projects->feature_image ; }?>" class="img-fluid">
									</div>
								</div>
								
								 <div class="row">
									 
									  <div class="col-md-12">
										<div class="form-group en">
										  <label class="fn">Descrition:</label>
										  <textarea  class="form-control" name="description"  required></textarea>
										</div>
									 </div>
								  </div>
								  
		      
		                      
								 
								<div class="text-center">
									<input type="button" name="button" value="cancel" class="c-btn">
									<input type="submit" name="button" value="Order" id="payBtn" class="c-btn payBtn">
								</div>
								<input type="hidden" name="chef_id" value="<?php echo $chef->customer_id ; ?>">
								<input type="hidden" name="feature_id" value="<?php echo $projects->feature_id ; ?>">
								<input type="hidden" name="feature_price" value="<?php echo $projects->feature_price ; ?>">
								<input type="hidden" class="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							  </form>
							</div>
						</div>
					</section>
			      </div>
			      
			    </div>

			  </div>
			</div>
	   		<?php } ?>
	   		
	   </div>
	   <div class="fp-he">
	   		<h6>Signature Dish</h6>
	   </div>
	   <div class="row">
	   		<?php 
	   			$getfeatureprojects = $this->db->get_where('tbl_feature_project',array('user_id' => $chef->customer_id,'category' => 2)); 
	   			foreach($getfeatureprojects->result() as $projects){
	   		?>		
	   		<div class="col-md-4">
	   			<div class="feat-prod">
	   				<img src="<?php if($projects->feature_image == ''){ echo base_url().'assets/images/indian.jpg';}else{ echo base_url().'public/uploads/'.$projects->feature_image ; }?>">
	   				<h6><?php echo $projects->feature_name ; ?></h6>
					<p>Approx. $<?php echo $projects->feature_price ; ?></p>
					<br>
					
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $projects->feature_id ; ?>">Book Now</a>
	   			</div>
	   		</div>
	   		<div id="myModal<?php echo $projects->feature_id ; ?>" class="modal fade" role="dialog">
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
								<form class="submitfeatureproject payment-forms" action="<?php echo base_url() ; ?>search/submitorder" method="post" class="require-validation"  id="payment-form">
								<div class="payment-errors"></div>
								<div class="row">
									<div class="col-md-6">
										<h6><?php echo $projects->feature_name ; ?></h6>
										<p style="color:red"><?php echo $projects->feature_price ; ?></p>
										<div class="form-group en">
										  <label class="fn">Available In:</label>
										  <input type="date" class="form-control" name="availablein" required>
										</div>
									</div>
									<div class="col-md-6">
										<img src="<?php if($projects->feature_image == ''){ echo base_url().'assets/images/indian.jpg';}else{ echo base_url().'public/uploads/'.$projects->feature_image ; }?>" class="img-fluid">
									</div>
								</div>
								
								 <div class="row">
									 
									  <div class="col-md-12">
										<div class="form-group en">
										  <label class="fn">Descrition:</label>
										  <textarea  class="form-control" name="description"  required></textarea>
										</div>
									 </div>
								  </div>
								  
								 
								<div class="text-center">
									<input type="button" name="button" value="cancel" class="c-btn">
									<input type="submit" name="button" value="Order" id="payBtn" class="c-btn payBtn">
								</div>
								<input type="hidden" name="chef_id" value="<?php echo $chef->customer_id ; ?>">
								<input type="hidden" name="feature_id" value="<?php echo $projects->feature_id ; ?>">
								<input type="hidden" name="feature_price" value="<?php echo $projects->feature_price ; ?>">
								<input type="hidden" class="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							  </form>
							</div>
						</div>
					</section>
			      </div>
			      
			    </div>

			  </div>
			</div>
	   		<?php } ?>
	   		
	   </div>
	    <div class="fp-he" id="photos">
	   		<?php $tbl_chef_iages = $this->db->get_where('tbl_chef_iages',array('user_id' => $chef->customer_id));  ; ?>
	   		<h6>photos and videos</h6>
	   		<p><?php echo $tbl_chef_iages->num_rows() ; ?> photos</p>
	   </div>
	   <div class="row">
	   		<?php 
	   			
	   			foreach($tbl_chef_iages->result() as $images){
	   		?>	
	   		<div class="col-md-4">
	   			<div class="feat-prod">
	   				<img src="<?php if($images->image == ''){ echo base_url().'assets/images/slide1.png';}else{ echo base_url().'uploads/'.$images->image ; }?>">
	   			</div>
	   		</div>
	   		<?php } ?>
	   		
	  </div>
	  <div class="fp-he spc">
	  	<h6>Specialties</h6>
	  	<p>Fitness goals</p>
	  	<span><i class="fa fa-check-circle-o" aria-hidden="true"></i><?php echo $checkbio->fitness ; ?></span>
	  	<p>Event to prep for</p>
	  	<span><i class="fa fa-check-circle-o" aria-hidden="true"></i><?php echo $checkbio->eventfor ; ?></span>
	  	<p>Medical concerns</p>
	  	<span><i class="fa fa-check-circle-o" aria-hidden="true"></i><?php echo $checkbio->medical ; ?></span>
	  </div>
	  
    </div>
</section>



<div id="chatmyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title">Send a Message</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body popup-first-message">
        <div class="popup-main message row">
		  <aside class="col-md-3">
		    <figure>
		      <?= $chef->photo ? '<img alt="" src="' . base_url() . 'public/uploads/' . $chef->photo . '" class="avatar">' :
              '<img alt="" src="' . base_url() . 'resources/img/male.png" class="avatar">'; ?>
		      <figcaption>
		        <?php echo $chef->fullname; ?><span class="user-away"><?php if($chef->is_login == 1){ echo 'Online';}else{ echo 'Away' ; } ?></span>
		      </figcaption>
		    </figure>
		  </aside>
		  <form class="col-md-8 messageform" enctype="multipart/form-data">
		    
		  
		    <div class="type_msg">
            
            <div class="row" data-emojiarea data-type="image" data-global-picker="false">
            	<div class="col-md-12">
            		<div class="input_msg_write ta-container">
		              <textarea  class="write_msg" name="message" placeholder="Type a message" onkeyup="countChar(this)"></textarea>
		              <ul class="attachments js-attachments-stop" id="queuess"></ul>
		              <div class="controls">
				          <span class="char-count">
				            <strong>0</strong><!-- react-text: 34 --> / <!-- /react-text --><!-- react-text: 35 -->2500<!-- /react-text -->
				          </span>
				          <div class="message-action-bar">
					  <ul>
					    
					    
					    <li><span class="tooltips hint--top" data-hint="Max 1GB"><input type="file" name="message-attachment[]" class="image_file" id="first-message-attachments" multiple=""></span></li>
					    
					  </ul>
					</div>
				      </div>
		            </div>
		            
            	</div>
            	<div class="col-md-12">
            		
            	</div>
            </div>
          </div>
          <input type="submit" class="btn-standard btn-green-grad btn-send" value="Send"></input>
		      <input type="hidden" name="reciever_id" value="<?php echo $chef->customer_id ?>"></input>
		      <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('id') ?>"></input>
		      <input type="hidden" name="postchat" value="1"></input>
		      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		  </form>
		  <!-- react-empty: 40 -->
		</div>
		<div class="successmessage row">
			<div class="col-md-12 text-center">
				<div class="progress-indicator"><div class="back-layer"></div><svg width="30" height="30" viewBox="-1 -1 71 71"></svg></div>
				<h3>Message Sent Successfully</h3>
				<br></br>
			</div>
		</div>
      </div>
    </div>

  </div>
</div>

<div id="calendarmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title">Check Availabilty</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body popup-first-message">
        <div class="calendar"></div>
      </div>
    </div>

  </div>
</div>
<?php $timestamp = time();?>
<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/jquery.uploadifive.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/datepicker/css/custom.css" />
<script src="<?php echo base_url() ; ?>assets/datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url() ; ?>assets/datepicker/locales/bootstrap-datepicker.de.min.js"></script>
<script type="text/javascript">

 $.get("<?php echo base_url() ; ?>search/getdate?chef_id=<?php echo $chef->customer_id ; ?>", function(data){
    disabledDates = data.split(',');
    $('.calendar').datepicker({
        format: 'yyyy-mm-dd',
        datesDisabled: disabledDates,
        firstDay:1,
        language: 'en',
        updateViewDate: true
    });
});

		function countChar(val) 
		{
	        var len = val.value.length;
	        
	        $('.controls strong').text(len);
	        if (len >= 2500) {
	          $('.controls').addClass('max-length')
	        } else {
	          $('.controls').removeClass('max-length')
	        }
      };
      
      
      
      $('.messageform').submit(function(e){
      	event.preventDefault();
	    var formData = new FormData($(this)[0]);            

	    var request = $.ajax({
	        type: 'POST',
	        url: '<?php echo base_url() ; ?>chat/create',
	        mimeType:'application/json',
	        dataType:'json',
	        data: formData,
	        contentType: false,
	        processData: false,
	        success: function(data){                            
	            if(data.success)
	            {
					$('.successmessage').show('slow');
					$('.popup-main').hide();
					$(".messageform")[0].reset();
					$('.maintextareadiv').removeClass('has-attachments');
		            $('.attachments').html('');
		            
					setTimeout(function(){
						//$('.successmessage').hide();
						$('#chatmyModal').modal('hide');
						//$('.popup-main').show('slow');
						
					},3000)
				}else
				{
					$('.successmessage').hide();
					$('.popup-main').show('slow');
				}
	        },
	        error: function(msg){
	            alert(JSON.stringify(msg,null,4));
	        }
	    });
      })


 $(function() {
			$('#first-message-attachments').uploadifive({
				'onSelect'		   : function(file,data){ $('.input_msg_write').addClass('has-attachments') },
				'auto'             : true,
				//'checkScript'      : 'check-exists.php',
				'formData'         : {
									   'timestamp' : '<?php echo $timestamp;?>',
									   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                     },
				'queueID'          : 'queuess',
				'uploadScript'     : '<?php echo base_url() ; ?>chat/uploadimage',
				'onUploadComplete' : function(file, data) { console.log(data); }
			});
		}); 
</script>
