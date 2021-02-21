<section class="sear-view">
	<div class="container">
		<div class="row">
			<div class="col-md-4 bd-lc">
				<div class="filter">
					<h5>filters</h5>
					
					<div class="loc-ser">
						
						<div class="frequency">
							<form action="<?php echo base_url() ; ?>search/index" method="get">
							<div class="group">
								<h6>Job Type</h6>
								<input type="radio" name="hiretype" value="In Home">
								<span>In Home</span><br>
								<input type="radio" name="hiretype" value="Remote">
								<span>Remote</span><br>
								<div class="what-cus">
									<h6>what cusine</h6>
									<input type="checkbox" name="cusine" value="american">
									<span>american</span><br>
									<input type="checkbox" name="cusine" value="chinese">
									<span>chinese</span><br>
									<input type="checkbox" name="cusine" value="creole">
									<span>Creole</span>
									<br>
									<input type="checkbox" name="cusine" value="french">
									<span>French</span><br>
									<input type="checkbox" name="cusine" value="greek">
									<span>greek</span>
									<br>
									<input type="checkbox" name="cusine" value="indian">
									<span>indian</span><br>
									<input type="checkbox" name="cusine" value="italian">
									<span>italian</span><br>
									<input type="checkbox" name="cusine" value="Japanese">
									<span>Japanese</span><br>
									<input type="checkbox" name="cusine" value="mexican">
									<span>mexican</span><br>
									<input type="checkbox" name="cusine" value="Spanish">
									<span>Spanish</span><br>
									<input type="checkbox" name="cusine" value="sushi">
									<span>sushi</span>
									<br>
									<input type="checkbox" name="cusine" value="thai">
									<span>thai</span>
									<br>
									<input type="checkbox" name="cusine" value="Mediterranean">
									<span>Mediterranean</span><br>
									
								</div>
								<div class="what-cus">
									<h6>Service type</h6>
									<input type="checkbox" name="servicetype" value="Meal Prepping">
									<span>Meal Prepping</span><br>
									<input type="checkbox" name="servicetype" value="Dinner Party">
									<span>Dinner Party</span><br>
									<input type="checkbox" name="servicetype" value="Catering Services">
									<span>Catering Services</span>
									<br>
									<input type="checkbox" name="servicetype" value="Grocery Shopping">
									<span>Grocery Shopping</span><br>
									<input type="checkbox" name="servicetype" value="Cooking Lessons">
									<span>Cooking Lessons</span>
									<br>
									<input type="checkbox" name="servicetype" value="Knife Sharpening">
									<span>Knife Sharpening</span><br>
									<input type="checkbox" name="servicetype" value="Daily Meals">
									<span>Daily Meals</span><br>
									<br>
									
									<input type="submit" class="btn btn-primary" value="Search">
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="chef-de">
					<?php 
						if($chef->num_rows() > 0){
						foreach($chef->result() as $chefs){ 
							$checkbio = $this->db->get_where('tbl_customer_details',array('customer_id' => $chefs->customer_id))->row();
							$countorder = $this->db->get_where('tbl_order',array('chef_id' => $chefs->customer_id));
					?>
					<div class="sous-chef">
						<img src="<?php if($chefs->photo == ''){ echo base_url().'assets/images/chef2.png';}else{ echo base_url().'public/uploads/'.$chefs->photo ; }?>">
						<h5><?php echo $chefs->fullname ; ?></h5>
						
						<span>5.0
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<span class="rev">2 reviews</span></span><br>
						<div class="prom-sec">
							<span class="prom">
								<i class="fa fa-long-arrow-up" aria-hidden="true"></i>promoted</span>
							<span class="hi-de">
								<i class="fa fa-trophy" aria-hidden="true"></i>in high demand</span><br>
							<span class="hir-on">
								<i class="fa fa-trophy" aria-hidden="true"></i><?php echo $countorder->num_rows() ; ?> hire on savour the passion</span><br>
							<span class="lit-se">
								<i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $checkbio->address ; ?></span><br>
							<span><?php echo $checkbio->about ; ?>
								<a href="#">see more</a></span>
							<div class="vi-pr">
								<a href="<?php echo base_url() ; ?>search/profile/<?php echo $chefs->customer_id ; ?>" class="vi-pr">view profile</a>
							</div>
						</div>
					</div>
					<?php } 
						}else
						{
							echo 'No Record Found';
						}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<section  class="why-hire">
	<div class="container">
		<div class="sav-logo">
			<img src="assets/images/sav-logo.png">
			<h1>Why Hire Professionals On Us?</h1>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="easy-use">
					<img src="assets/images/dollar.png">
					<h5>Easy to use</h5>
					<p>You never pay to use savor your passion: Get cost estimates, contact pros, and even book the job—all for no cost.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="easy-use">
					<img src="assets/images/comp.png">
					<h5>Compare prices side-by-side</h5>
					<p>You’ll know how much your project costs even before booking a pro.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="easy-use">
					<img src="assets/images/hire.png">
					<h5>Hire with confidence</h5>
					<p>With access to 1M+ customer reviews and the pros’ work history, you’ll have all the info you need to make a hire.</p>
				</div>
			</div>
		</div>
	</div>
</section>