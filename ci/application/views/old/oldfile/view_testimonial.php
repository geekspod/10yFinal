
<!-- Testimonials Starts Here -->
<section class="testimonials-client">
	<div class="container">

	<div class="testimonial-head wow fadeInUp">
	<h5><?php echo $page_testimonial['testimonial_heading']; ?></h5>
	<p><?php echo $page_testimonial['mt_testimonial']; ?></p>
	</div>

	<div class="testimonial-data">

	    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <?php 
  		$i = 0;
  		foreach ($testimonials as $row) { 
  		$list = $i++;
  ?>
    <div class="item <?php if($list == 0){ echo 'active';} ?>"">
		<div class="testimonial-box">
			<div class="testimonial-quote">
				<img src="images/commas.png">
				<p><?php echo $row['comment']; ?>  </p>
				<img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>">
			</div>
			<div class="testimonial-info">
				<h5><?php echo $row['name']; ?> </h5>
				<p><?php echo $row['designation']; ?></p>
			</div>
		</div>
	</div>
 <?php  } ?>	
   
  </div>



  <!-- Indicators -->
  <ol class="carousel-indicators wow fadeInUp">
    <?php  
  		$li = 0;
  		foreach ($testimonials as $row) { 
  		$lists = $li++;
  ?>
     <li data-target="#carousel-example-generic" data-slide-to="<?php echo $lists ; ?>" class="<?php if($lists == 0){ echo 'active';} ?>"></li>
  <?php } ?> 
  </ol>


 
</div>
            





	

	</div>


	</div>
</section>
<!-- Testimonial Ends Here -->




 	<!-- Questions Section Starts Here -->
 	<section class="questions">
 		<div class="container">

 		<div class="questions-head wow fadeInUp">
 		<h5>GOT ANY QUESTIONS <span> WE'VE GOT ANSWERS </span></h5>
 		</div>

 		<div class="questions-handler wow fadeInUp">
		  <ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active"><a href="#question1" aria-controls="question1" role="tab" data-toggle="tab">Basic Question </a></li>
		    <li role="presentation"><a href="#question2" aria-controls="question2" role="tab" data-toggle="tab">Investing Question</a></li>
		    <li role="presentation"><a href="#question3" aria-controls="question3" role="tab" data-toggle="tab">Withdrawl Question</a></li>
		    <li role="presentation"><a href="#question4" aria-controls="question4" role="tab" data-toggle="tab">Referral Question</a></li>
		  </ul>
 		</div>

 		<div class="questions-data wow fadeInUp">
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="question1">

     <?php 
     		$basic = $this->db->get_where('tbl_faq',array('category' => 'Basic Question'));
     		foreach($basic->result() as $base){
     ?>			
     <div class="set">
	    <a  >
	     <?php echo $base->faq_title ; ?>
	      <i class="fa fa-plus"></i>
	    </a>
	    <div class="content">
	      <p><?php echo $base->faq_content ; ?></p>
	    </div>
	  </div>
	<?php } ?>



    </div>


    <div role="tabpanel" class="tab-pane" id="question2">
    	<?php 
     		$investing = $this->db->get_where('tbl_faq',array('category' => 'Investing Question'));
     		foreach($investing->result() as $inst){
	     ?>			
	     <div class="set">
		    <a  >
		     <?php echo $inst->faq_title ; ?>
		      <i class="fa fa-plus"></i>
		    </a>
		    <div class="content">
		      <p><?php echo $inst->faq_content ; ?></p>
		    </div>
		  </div>
		<?php } ?>
    </div>


    <div role="tabpanel" class="tab-pane" id="question3">
    	<?php 
     		$withdrwal = $this->db->get_where('tbl_faq',array('category' => 'Withdrawl Question'));
     		foreach($withdrwal->result() as $with){
	     ?>			
	     <div class="set">
		    <a  >
		     <?php echo $with->faq_title ; ?>
		      <i class="fa fa-plus"></i>
		    </a>
		    <div class="content">
		      <p><?php echo $with->faq_content ; ?></p>
		    </div>
		  </div>
		<?php } ?>
    </div>


    <div role="tabpanel" class="tab-pane" id="question4">
    	<?php 
     		$referral = $this->db->get_where('tbl_faq',array('category' => 'Referral Question'));
     		foreach($referral->result() as $ref){
	     ?>			
	     <div class="set">
		    <a  >
		     <?php echo $ref->faq_title ; ?>
		      <i class="fa fa-plus"></i>
		    </a>
		    <div class="content">
		      <p><?php echo $ref->faq_content ; ?></p>
		    </div>
		  </div>
		<?php } ?>
    </div>


  </div>
 		</div>

 		</div>
 	</section>
 	<!-- Questions Section Ends Here -->
 
