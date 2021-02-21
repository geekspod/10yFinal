<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit dimensions</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/dimensions" class="btn btn-primary btn-sm">View All</a>
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

	        <?php echo form_open_multipart(base_url().'admin/dimensions/edit/'.$dimensions['dimensions_id'],array('class' => 'form-horizontal')); ?>



            <div class="form-group">
			<label class="col-sm-2 control-label">Dimensions Name*</label>
            <input type="hidden" id="dimensions_id" name="dimensions_id" 
            value="<?php echo $dimensions['dimensions_id']; ?>"/>
              <div class="col-sm-10"><textarea class="ckeditor" placeholder="Enter Tempelate Html Body" class="form-control"  name="name" id="name"  >
              <?php echo $dimensions['name']; ?>
              </textarea></div>
                      </div>


            
	              
					
	                
					
	                <div class="form-group">
	                	<label for="" class="col-sm-2 control-label"></label>
	                    <div class="col-sm-6">
	                      <button type="submit" class="btn btn-success pull-left" name="form3">Update</button>
	                    </div>
	                </div>

	            </div>

	        </div>

	        <?php echo form_close(); ?>

	    </div>
  	</div>

</section>