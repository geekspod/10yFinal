<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Organization</h1>
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

	        <?php echo form_open_multipart(base_url().'admin/organization/edit/'.$organization['organization_id'],array('class' => 'form-horizontal')); ?>



            <!-- <div class="form-group">
			<label class="col-sm-2 control-label">Organization Name*</label>
            <input type="hidden" id="categories_id" name="categories_id" 
            value="<?php echo $organization['organization_name']; ?>"/>
              <div class="col-sm-10"><textarea class="ckeditor" placeholder="Enter Tempelate Html Body" class="form-control"  name="organization_name" id="organization_name"  >
              <?php echo $organization['department_name']; ?>
              </textarea></div>
                      </div> -->


                      <div class="box-body">
	                <div class="form-group">
	                    <label for="" class="col-sm-2 control-label">Organization Name<span>*</span></label>
	                    <div class="col-sm-8">
	                        <textarea id="textarea" type="text" class="ckeditor" name="organization_name" placeholder="Kindly enter organization name"><?php echo $organization['organization_name']; ?></textarea>
	                        
	                        
	                    </div>
	                </div>


                      <div class="box-body">
	                <div class="form-group">
	                    <label for="" class="col-sm-2 control-label">department_name <span>*</span></label>
	                    <div class="col-sm-8">
	                        
	                        <textarea id="textarea" type="text" class="ckeditor" name="department_name" placeholder="Kindly enter department name"><?php echo $organization['department_name']; ?></textarea>
	                        
	                        
	                    </div>
	                </div>

                    <div class="box-body">
	                <div class="form-group">
	                    <label for="" class="col-sm-2 control-label">Status <span>*</span></label>
	                    <div class="col-sm-4">
	                        <input type="text" class="form-control" name="status" value="<?php echo $organization['status']; ?>">
	                    </div>
	                </div>
            
	              
					
	                
					
	                <div class="form-group">
	                	<label for="" class="col-sm-2 control-label"></label>
	                    <div class="col-sm-6">
	                      <button type="submit" onclick="spell_btn()" class="btn btn-success pull-left" name="form3">Update</button>
	                    </div>
	                </div>

	            </div>

	        </div>

	        <?php echo form_close(); ?>

	    </div>
  	</div>

</section>
<script>
    $("#spell_btn").on('click', function () {
    $("#textarea").attr("spellcheck", "true");
});
</script>