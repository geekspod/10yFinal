
<!-- Referral Comission Starts Here -->
<section class="referral-comission">
	<div class="container">

	<div class="row">

	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 pull-right">
	<div class="refer-image wow fadeInRight">
	<img src="images/referrals.jpg">
	</div>
	</div>


	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
	<div class="refer-text wow fadeInLeft">
	<h5> <?php echo $page_service['service_heading']; ?> </h5>
	<h6> <?php echo $page_service['service_subheading']; ?> </h6>
	<?php echo $page_service['service_content']; ?>
	<a href="">Invite Invests & 5% REFERRAL COMMISSION</a>
	</div>
	</div>

	</div>
	</div>
</section>

<!-- Referral Comission Ends Here -->


  <!-- Investment Steps Section Starts Here -->
      <section class="investment">
         <div class="container">
            <div class="investment-head wow fadeInUp">
               <h5>Start Investment in 4 Steps </h5>
            </div>
            <div class="investment-data">
               <div class="row">
                <?php foreach ($services as $row) {  ?>
                  <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                     <div class="invest-box wow zoomIn">
                        <span> <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>"> </span>
                        <h5><?php echo $row['name'] ; ?></h5>
                        <p><?php echo $row['short_description'] ; ?></p>
                     </div>
                  </div>
                <?php } ?>  
                 
               </div>
            </div>
         </div>
      </section>
      <!-- Investment Steps Section Ends Here -->

