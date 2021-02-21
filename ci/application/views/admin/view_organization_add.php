<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Add Categories</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/organization" class="btn btn-primary btn-sm">View All</a>
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

	


			<?php echo form_open_multipart(base_url().'admin/organization/add',array('class' => 'form-horizontal')); ?>
			
			

<?php echo "<br>";?>
            <div class="form-group">
			<label class="col-sm-2 control-label">Add Organization*</label>
              <div class="col-sm-10">
              	<textarea class="ckeditor" placeholder="Enter Html Body" name="organization_name" id="organization_name">
              	
              	</textarea>
              	</div>
                      </div>
						
						
						
						
						</div>
                        <?php echo "<br>";echo "<br>";echo "<br>";echo "<br>";?>

						<div class="form-group">
			<label class="col-sm-2 control-label">Add Department*</label>
              <div class="col-sm-10">
              	<textarea class="ckeditor" placeholder="Enter Html Body" name="department_name" id="department_name">
              	
              	</textarea>
              	</div>
                      </div>
						
						
						
						
						</div>

						<div class="form-group" >
							<label for="" class="col-sm-2 control-label"></label>
							
							<div class="col-sm-6" style="text-align:center;">
								<button type="submit" class="btn btn-success pull-left" name="form3">Submit</button>
							</div>
						</div>
					</div>
				</div>

			<?php echo form_close(); ?>


		</div>
	</div>

</section>