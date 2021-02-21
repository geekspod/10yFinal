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
					<li><a href="#faq">fAQs</a></li>	
				</ul>
			</div>
			<div class="chef-de cu" >
			<?php $checkbio = $this->db->get_where('tbl_customer_details',array('customer_id' => $chef->customer_id))->row(); ; ?>
				<img src="<?php if($chef->photo == ''){ echo base_url().'assets/images/chef2.png';}else{ echo base_url().'public/uploads/'.$chef->photo ; }?>">
				<h5><?php echo $chef->fullname ; ?></h5>
				<span>0.0 <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <span class="rev">0 reviews</span></span>
				<div class="sh">
					<a href="#"><i class="fa fa-download" aria-hidden="true"></i>share</a> <a href="<?php echo base_url() ; ?>profile"><i class="fa fa-pencil" aria-hidden="true"></i>Edit Profile</a><a href="<?php echo base_url() ; ?>Availabilty"><i class="fa fa-calendar" aria-hidden="true"></i>Availabilty</a>
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
			 		<div class="pay-meth">
			 			<h6>Billig Details</h6>
			 			<p>Bank Name: <?php echo $checkbio->cash ;?><br>IBAN Number: <?php echo $checkbio->credit ;?></p>
			 			<p></p>
			 			<!--<h6>social media</h6>
			 			<a href="#">facebook</a>-->
			 		</div>
			 	</div>
			 	<!--<div class="ms-ch">
			 		<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>message</a>
			 		<a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i>check availability</a>
			 		<a href="#"><i class="fa fa-phone" aria-hidden="true"></i>request a call back</a>
			 	</div>-->
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
