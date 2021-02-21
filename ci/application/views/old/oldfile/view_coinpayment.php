<section class="account-page">
<div class="container">
	
	<div class="row">
				<div class="main-content col-lg-8">
					<div class="row">
						<div class="col-md-12">
							<?php
							if($this->session->flashdata('error')) {
								?>
								<div class="label label-danger" style="display:grid">
									<p><?php echo $this->session->flashdata('error'); ?></p>
								</div>
								<?php
							}
							if($this->session->flashdata('success')) {
								?>
								<div class="label label-success" style="display:grid">
									<p><?php echo $this->session->flashdata('success'); ?></p>
								</div>
								<?php
							}
							?>
						</div>
					</div>
					<div class="content-area card">
						<div class="card-innr">
							</div>
							<?php echo $coin ; ?>
						</div>
						<!-- .card-innr -->
					</div>
					<!-- .content-area -->
				</div>
				<!-- .col -->
				
				<!-- .col -->
			</div>

</div>

</div>

</div>
</section>