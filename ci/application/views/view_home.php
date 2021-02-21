<!-- Home -->
	<section id="home" class="container relative">

		<!-- Ful Screen Home -->

		<div id="fullscreen">

			<!-- Slides -->

			<div class="slides-container relative">

				<!-- Slider Images -->

				<?php foreach($sliders as $slide){ ?>

				<div class="image4 soft-black-bg" style="background-image: url('<?php echo base_url() ; ?>public/uploads/<?php echo $slide["photo"] ; ?>')"></div>

				<?php } ?>

				 <!-- End Slider Images -->	 

			</div>

			<!-- End Slides -->



			<!-- Slider Controls -->

			<nav class="slides-navigation">

				<a href="#" class="next"></a>

				<a href="#" class="prev"></a>

			</nav>



		</div>

		<!-- End Ful Screen Home -->



		<!-- Home Elements v2 -->

		<div class="home-elements">

			<!-- Home Inner -->

			<div class="home-inner v2 t-center">

				

				<!-- Home Text Slider -->

				<div class="home-text-slider relative">

					<div class="text-slider clearfix">

						<!-- Home Text Slides -->

						<ul class="home-texts clearfix t-center semibold">

						<?php foreach($sliders as $slide){ ?>

							<li class="slide white uppercase">

							    

							<iframe width="400" height="250" src="<?php echo $slide['button1_text'] ; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>

							<?php echo $slide['heading'] ; ?></li>

							<?php } ?>

							

						</ul>

						<!-- End Home Text Slides -->

						<!-- Home Fixed Text -->

				

					</div>

				</div>

				<!-- End Home Text Slider -->



				<!-- Home Button -->

				<a href="<?php echo base_url() ; ?>login" target="_blank" class="home-button-1 uppercase oswald semibold gray">

					Login

				</a>



				

			</div><!-- End Home Inner -->

		</div><!-- End Home Elements -->

	</section><!-- End Home Section -->

<!-- About Section -->

	<section id="about" class="container">

		<!-- About Inner -->

		<div class="inner about">

			<!-- Header -->

			<h1 class="header uppercase dark oswald animated" data-animation="fadeIn" data-animation-delay="100">

				<?php echo "WELCOME TO 10-YARDS"; ?>

			</h1>

			<!-- Header Strip(s) -->

			<div class="header-strips-one animated" data-animation="fadeIn" data-animation-delay="100"></div>

			<!-- Header Description -->

			<h2 class="description normal animated" data-animation="fadeIn" data-animation-delay="100">

				<?php echo $page_home['home_welcome_subtitle'] ; ?>

			</h2>



			<!-- About Boxes -->

			<div class="about-boxes clearfix t-center">

				<?php foreach($why_choose as $choose){ ?>

				<!-- About Box -->
				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about-box animated text-center" data-animation="fadeIn" data-animation-delay="300">



					<!-- About Icon -->

					<img src="<?php base_url() ; ?>public/uploads/<?php echo $choose['photo'] ; ?>">



					<!-- About Box Header -->

					<h3 class="uppercase normal oswald">

						<?php echo $choose['name'] ; ?>

					</h3>



					<!-- About Box Description -->

					<p class="normal">

						<?php echo $choose['content'] ; ?>

					</p>



				</div>

				<!-- End About Box -->

				<?php } ?>



			</div><!-- End About Boxes -->

		</div><!-- End About Inner -->

	</section><!-- About Section -->

<!-- Facts -->

	<section id="facts">

		<!-- Inner -->

		<div class="inner">

			<!-- Header -->

			<h1 class="header dark uppercase dark oswald">

				<?php echo $page_home['counter_title']; ?> 

			</h1>

			<!-- Header Strip(s) -->

			<div class="header-strips-one"></div>

			<!-- Facts -->

			<div class="facts colored t-center oswald uppercase">



				<!-- Fact -->

				<div class="fact" data-perc="<?php echo $page_home['counter_1_value']; ?>">

					<!-- Fact Tag -->

					<h1 class="factor"></h1>

					<!-- Fact Name -->

					<h3>

						<?php echo $page_home['counter_1_title']; ?>

					</h3>

				</div>

				<!-- End Fact -->



				<!-- Fact -->

				<div class="fact" data-perc="<?php echo $page_home['counter_2_value']; ?>">

					<!-- Fact Tag -->

					<h1 class="factor"></h1>

					<!-- Fact Name -->

					<h3>

						<?php echo $page_home['counter_2_title']; ?>

					</h3>

				</div>

				<!-- End Fact -->



				<!-- Fact -->

				<div class="fact" data-perc="<?php echo $page_home['counter_3_value']; ?>">

					<!-- Fact Tag -->

					<h1 class="factor"></h1>

					<!-- Fact Name -->

					<h3>

						<?php echo $page_home['counter_3_title']; ?>

					</h3>

				</div>

				<!-- End Fact -->



				<!-- Fact -->

				<div class="fact" data-perc="<?php echo $page_home['counter_4_value']; ?>">

					<!-- Fact Tag -->

					<h1 class="factor"></h1>

					<!-- Fact Name -->

					<h3>

						<?php echo $page_home['counter_4_title']; ?>

					</h3>

				</div>

				<!-- End Fact -->



			</div><!-- End Facts -->

		</div><!-- End Inner -->

	</section><!-- End Facts Section -->

<?php if($page_home['home_why_choose_status'] == 'Show'): ?> 

<!-- Portfolio Section -->

	<section id="portfolio" class="container gray-bg">

		<!-- Portfolio Inner -->

		<div class="inner portfolio">

			<!-- Header -->

			<h1 class="header uppercase dark oswald">

				<?php echo $page_home['home_service_title'] ; ?>

			</h1>

			<!-- Header Strip(s) -->

			<div class="header-strips-one"></div>

			<!-- Header Description -->

			<div class="row">

				<?php foreach($services as $service){ ?>

				<div class="col-xs-4 text-center">

					<img src="<?php echo base_url() ;?>public/uploads/<?php echo $service['photo'] ; ?>" class="img-responsive">

					<h3><?php echo $service['name'] ; ?></h3>

				</div>

				<?php } ?>

			</div>

		</div><!-- End Portfolio Inner -->



		

	</section><!-- End Portfolio Section -->

<?php endif ; ?>	

<!-- Team Section -->

	<section id="team" class="container">

		<!-- Team Inner -->

		<div class="inner team">

			<!-- Header -->

			<h1 class="header uppercase dark oswald">

				<?php echo $page_home['home_testimonial_title']; ?>

			</h1>

			<!-- Header Strip(s) -->

			<div class="header-strips-one"></div>

			<!-- Header Description -->

			<h2 class="description">

				<?php echo $page_home['home_testimonial_subtitle']; ?>

			</h2>





			<!-- Team Boxes -->

			<div class="team-boxes t-center">

				<?php 

			      		$i = 0;

			      		foreach ($testimonials as $row) { 

			      		$list = $i++;

			    ?>

				<!-- Team Box -->

				<div class="item">

					<!-- Box Inner -->

					<div class="box-inner">

						<!-- Team Member Image -->

						<div class="member-image">

							<!-- Image -->

							<img src="<?php echo base_url() ; ?>public/uploads/<?php echo $row['photo']; ?>" alt="Testimonial" />

						</div>

						<!-- Team Member Details -->

						<div class="member-details">

							<!-- Name and Position -->

							<div class="member-name">

								<!-- Member Name -->

								<h1 class="name oswald uppercase no-padding no-margin">

									<?php echo $row['name']; ?>

								</h1>

								<!-- Member Position -->

								<h3 class="position oswald uppercase no-padding">

									<?php echo $row['designation']; ?>

								</h3>

							</div>

							<!-- End Team Member Details -->

							<div class="details">

								<!-- Description -->

								<p class="member-description normal">

									<?php echo $row['comment']; ?>

								</p>

								

								<!-- Button trigger modal -->

							</div><!-- End Member Details -->



						</div><!-- End Team Member Details -->

					</div><!-- End Team Box Inner -->

				</div><!-- End Team Box -->

				<?php } ?>

				<!-- Ended Boxes -->

			</div><!-- End Team Boxes -->

		</div><!-- End Team Inner -->



	</section><!-- End Team Section -->



<!-- Adress Section -->

	<section id="address" class="container soft-bg-1 parallax7">

		<!-- Inner -->

		<div class="inner">

			<!-- Address Soft Area -->

			<h1 class="header uppercase  oswald" style="color:#fff;">

				Contact Us 

			</h1>

			<div class="address-soft t-center">



				<!-- Top Phone Button -->

				

				<!-- Address -->

				<h2 class="phone-text oswald uppercase">

					<?php echo $setting['footer_address'] ; ?>

				</h2>

				<!-- Phone -->

				<h1 class="phone-text oswald white">

					<?php echo $setting['footer_phone'] ; ?>

				</h1>

				<a href="mailto:<?php echo $setting['footer_email'] ; ?>" class="mail-text uppercase oswald">

					<?php echo $setting['footer_email'] ; ?>

				</a>

				

				<?php

	                foreach ($social as $row)

	                {

	                    if($row['social_url']!='')

	                    {

	                    	$socialname = strtolower ($row['social_name']);

	                        echo '<a href="'.$row['social_url'].'" class="social round dark-bg '.$socialname.'" target="_blank">

						            <i class="'.$row['social_icon'].'"></i>

						          </a>';

	                    }

	                }

            	?>

				<!-- E-Mail -->

				

				<br></br>

				<a href="javascript:void()" data-toggle="modal" data-target="#myModal" class="btn btn-primary white btn-lg">

					Write TO Us

				</a>

			</div><!-- End Address Soft Area -->

		</div><!-- End Inner -->

	</section><!-- End Address Section -->



	<div id="myModal" class="modal fade" role="dialog">

  <div class="modal-dialog">



    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">WRITE US</h4>

      </div>

      <div class="modal-body">

        <!-- Keep In Touch -->

	<section id="contact" class="container">



		<!-- Inner -->

		<div class="">

			<!-- Header -->

			



			<!-- Contact -->

			<div class="contact animated" data-animation="fadeIn" data-animation-delay="200">

				<!-- Contact Form -->
			

				<form method="post"  action="<?php echo $this->config->base_url();?>home/send_email">

					<!-- Left Inputs -->

					<div class="col-xs-12 left">



						<!-- Name -->

						<span class="name-missing">Please enter your name</span>

						<input type="text" name="name" id="name" class="form light-form oswald light" placeholder="NAME" />



						<!-- Email -->

						<span class="email-missing">Please enter your E-mail</span>

						<input type="text" name="email" id="email" class="form light-form oswald light" placeholder="E-MAIL" />



						<!-- Subject -->

						<span class="subject-missing">Please enter Subject</span>

						<input type="text" name="subject" id="subject" class="form light-form oswald light" placeholder="SUBJECT" />



					</div>

					<!-- End Left Inputs -->

					<!-- Right Text Area -->

					<div class="col-xs-12 right">



						<!-- Message -->

						<span class="message-missing">Please enter your Message</span>

						<textarea name="message" id="message" class="form light-form textarea oswald light" placeholder="YOUR MESSAGE"></textarea>



					</div>

					<!-- End Right Text Area -->

					<!-- Send Button -->

					<div class="col-xs-12">

						<!-- Button -->

						<button type="submit" id="submit" name="submit" class="form contact-form-button light-form oswald light">SEND EMAIL</button>

					</div>

					<!-- End Send Button -->

				</form>

				<!-- End Form -->



				<!-- Your Mail Message -->

				<!--<div class="mail-message-area">-->

					<!-- Message -->

				<!--	<div class="alert light-form mail-message not-visible-message">-->

				<!--		<strong>Thank You !</strong> Your email has been delivered.-->

				<!--	</div>-->

				<!--</div>-->

				<!-- End Mail Message -->

			</div><!-- End Contact Form -->

		</div><!-- End Inner -->

	</section><!-- End Contact Section -->

      </div>

    </div>



  </div>

</div>

<!-- News Section -->

<?php if($page_home['home_blog_status'] == 'Show'): ?> 

	<section id="news" class="container gray-bg">

		<!-- Portfolio Inner -->

		<div class="inner portfolio">

			<!-- Header -->

			<h1 class="header uppercase dark oswald">

			COLLOQUY 

			</h1>

			<!-- Header Strip(s) -->

			<div class="header-strips-one"></div>

			<!-- Header Description -->

			<div class="row newssection">

			<?php

		        $i=0;

		        foreach ($all_news_category as $news) {

		            $i++;

		            if($i > $page_home['home_blog_item']) {

		                break;

		            }

		       
		      if(!(empty($news['photo'])))
{
     ?>
				<div class="col-xs-3 text-center">

					<img src="<?php echo base_url(); ?>public/uploads/<?php echo $news['photo']; ?>" class="img-responsive">
  <?php   }
    else{
    ?>
   <iframe width="280" height="180"
src="<?php echo $news['video']; ?>">
</iframe>
    
  <?php  } ?>
					<a href="#"><h3><?php echo $news['news_title']; ?></h3>

					<p><?php echo $news['news_content_short']; ?></p>

					</a>

				</div>

			<?php } ?>	

				

			</div>

			

			

		</div><!-- End Portfolio Inner -->



		

	</section><!-- End News Section -->

<?php endif ; ?>