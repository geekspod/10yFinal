<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
		<span style="display:inline-block; width: YOURWIDTH;">
	<div class="content-header-left">
		
		<h1>Test Name</h1>
		
		
	</div>
	</span>
	<?php echo "<br>";?>
	
	<span style="display:inline-block; width: YOURWIDTH;">

	<div class="content-header-right">
		<a  href="<?php echo base_url(); ?>admin/roles" class="btn btn-primary btn-sm">View All</a>
	</div>
	</span>
	<span style="display:inline-block; width: YOURWIDTH;">

	<div class="content-header-right">
		<a  href="<?php echo base_url(); ?>admin/customer/add" class="btn btn-primary btn-sm">Create Users</a>
	</div>
	</span>
	
		<span style="display:inline-block; width: YOURWIDTH;">

		<div class="content-header-right">
		<a  href="<?php echo base_url(); ?>admin/customer" class="btn btn-primary btn-sm">Edit/Update Users</a>
	    </div>
	    </span>
	   
		<span style="display:inline-block; width: YOURWIDTH;">

		<div class="content-header-right">
		<a  href="<?php echo base_url(); ?>admin/customer" class="btn btn-primary btn-sm">Remove Users</a>
	    </div>
	    </span>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php
			if($this->session->flashdata('error')) {
				?>
				<div class="callout callout-danger">
					<p><?php echo $this->session->flashdata('error'); ?></p>
				</div>
				<?php
			}
			if($this->session->flashdata('success')) {
				?>
				<div class="callout callout-success">
					<p><?php echo $this->session->flashdata('success'); ?></p>
				</div>
				<?php
			}
			?>
 <?php echo form_open_multipart(base_url().'admin/roles/edit_roles_data/'.$roles['roles_id'],array('class' => 'form-horizontal')); ?>
 
			
				
				                <?php if(!empty($organization)){
								 ?>  
									 
								<label class="col-sm-2 control-label">Select Organization Name*</label>
								<div class="col-sm-4">
                             	<select class="form-control m-b" name="organization_name" id="organization_name" >
								<?php 
								foreach ($organization as $key) {
								echo '<option value="'.$key['organization_name'].'">'.$key['organization_name'].'</option>';
								}?>
								
                                </select>
							    </div>
 								
								<?php } ?>


								<?php if(!empty($department)){
								 ?>  
									 
								<label class="col-sm-2 control-label">Select Department Name*</label>
								<div class="col-sm-4">
                             	<select class="form-control m-b" name="department_name" id="department_name" >
								<?php 
								foreach ($department as $key) {
								echo '<option value="'.$key['department_name'].'">'.$key['department_name'].'</option>';
								}?>
								
                                </select>
							    </div>
 								
								<?php } ?>

								

				<?php echo "<br>";echo "<br>";echo "<br>";echo "<br>";?>	

	
	     	<?php if(!empty($position)){
								 ?>  
									 
								<label class="col-sm-2 control-label">Select Position Name*</label>
								<div class="col-sm-4">
                             	<select class="form-control m-b" name="position_name" id="position_name" >
								<?php 
								foreach ($position as $key) {
								echo '<option value="'.$key['position_name'].'">'.$key['position_name'].'</option>';
								}?>
								
                                </select>
							    </div>
 								
								<?php } ?>


								<?php if(!empty($cities)){
								 ?>  
									 
								<label class="col-sm-2 control-label">Select Cities Name*</label>
								<div class="col-sm-4">
                             	<select class="form-control m-b" name="cities_name" id="cities_name" >
								<?php 
								foreach ($cities as $key) {
								echo '<option value="'.$key['cities_name'].'">'.$key['cities_name'].'</option>';
								}?>
								
                                </select>
							    </div>
 								
								<?php } ?>

								

				<?php echo "<br>";echo "<br>";echo "<br>";echo "<br>";?>	

		
	
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form2">Submit</button>
							</div>
						</div>
					</div>
				</div>

			<?php echo form_close(); ?>


		</div>
	</div>

</section>