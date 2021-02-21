
<?php echo $page_about['about_content'] ; ?>

<section class="testimonials wow fadeIn" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $page_home['home_testimonial_photo']; ?>)">
         <div class="container">
            <div class="testimonials-head wow fadeInUp">
               <h5><?php echo $page_home['home_testimonial_title']; ?>  </h5>
            </div>
            <div class="testimonials-data">
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                  <?php 
                  		$i = 0;
                  		foreach ($testimonials as $row) { 
                  		$list = $i++;
                  ?>
                    	
                     <div class="item <?php if($list == 0){ echo 'active';} ?>">
                        <div class="review-box">
                           <h5><?php echo $row['title']; ?>.</h5>
                           <p><?php echo $row['comment']; ?></p>
                           <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>">
                           <h3> <?php echo $row['name']; ?> - <?php echo $row['designation']; ?>
                              <span>
                              <i class="fa fa-star star-active"> </i>
                              <i class="fa fa-star star-active"> </i>
                              <i class="fa fa-star star-active"> </i>
                              <i class="fa fa-star star-active"> </i>
                              <i class="fa fa-star"> </i>
                              </span>
                           </h3>
                        </div>
                     </div>
				  <?php } ?>
                  </div>
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
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
      
      
<!-- Team Section Starts Here -->
<section class="team">
	<div class="container">

<div class="testimonials-head wow fadeInUp"  >
               <h5>Meet the Team</h5>
            </div>


	<div class="team-data">
	<div class="row">
	<?php
	    foreach ($team_members as $row) {
	?>
	<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
		<div class="team-box wow fadeInUp">
			<img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>">
			<h5><?php echo $row['name']; ?></h5>
			<h6>
				<?php if($row['facebook'] != ''): ?>
                    <a href="<?php echo $row['facebook']; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                <?php endif; ?>
                <?php if($row['twitter'] != ''): ?>
                    <a href="<?php echo $row['twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                <?php endif; ?>
                <?php if($row['linkedin'] != ''): ?>
                    <a href="<?php echo $row['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                <?php endif; ?>
                <?php if($row['youtube'] != ''): ?>
                    <a href="<?php echo $row['youtube']; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                <?php endif; ?>
                <?php if($row['google_plus'] != ''): ?>
                    <a href="<?php echo $row['google_plus']; ?>" target="_blank"><i class="fab fa-google-plus"></i></a>
                <?php endif; ?>
                <?php if($row['instagram'] != ''): ?>
                    <a href="<?php echo $row['instagram']; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                <?php endif; ?>
                <?php if($row['flickr'] != ''): ?>
                    <a href="<?php echo $row['flickr']; ?>" target="_blank"><i class="fab fa-flickr"></i></a>
                <?php endif; ?>
			</h6>
		</div>
	</div>
	<?php  } ?>





	</div>
	</div>

	</div>
</section>
<!-- Team Section Ends Here -->

