<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Add Sub Categories</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/dimensions/view_sub_categories" class="btn btn-primary btn-sm">View All</a>
	</div>
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

	


			<?php echo form_open_multipart(base_url().'admin/dimensions/add_sub_categories_data',array('class' => 'form-horizontal')); ?>
			
			<?php if(!empty($dimensions)){
								 ?>  
									 
								<label class="col-sm-2 control-label">Select Test Name*</label>
								<div class="col-sm-4">
                             	<select class="form-control m-b" name="categories_id" id="categories_id" >
								<?php 
								foreach ($dimensions as $key) {
								echo '<option value="'.$key['categories_id'].'">'.$key['name'].'</option>';
								}?>
								
                                </select>
							    </div>
 								</div>
								</div>
								<?php } ?>

								

					<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Add Name <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="Enter sub categories name." name="name">
							</div>
						</div>
						</div>
						</div>

						<?php echo "<br>";?>
						<!-- <?php if(!empty($sub_categories)){
								 ?>  
									 
								<label class="col-sm-2 control-label">Select Category Name*</label>
								<div class="col-sm-4">
                             	<select class="form-control m-b" name="categories_id" id="categories_id" >
								<?php 
								foreach ($sub_categories as $key) {
								echo '<option value="'.$key['categories_id'].'">'.$key['name'].'</option>';
								}?>
								
                                </select>
							    </div>
 								</div>
								</div>
								<?php } ?> -->



            <!-- <div class="form-group">
			<label class="col-sm-2 control-label">Add Categories*</label>
              <div class="col-sm-10">
              	<textarea class="ckeditor" placeholder="Enter Html Body" name="name" id="name">
              	
              	</textarea>
              	</div>
                      </div> -->
						
						
						
						
						

						

						<div class="form-group" >
							<label for="" class="col-sm-2 control-label"></label>
							
							<div class="col-sm-6" style="text-align:center;">
								<button type="submit" class="btn btn-success pull-left" name="form3">Submit</button>
							</div>
						</div>
					<!-- </div>
				</div> -->

			<?php echo form_close(); ?>


		</div>
	</div>

</section>