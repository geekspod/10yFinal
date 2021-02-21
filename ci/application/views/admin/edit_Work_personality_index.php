<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Work Personality Index</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/categories/view_Work_personality_index" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


<?php echo form_open_multipart(base_url().'admin/categories/edit_Work_personality_index/'.$questions_assessment['questions_assessment_id'],array('class' => 'form-horizontal')); ?>

<?php if(!empty($dimensions)){
								 ?>  
									 
								<label class="col-sm-2 control-label">Select Categories Name*</label>
								<div class="col-sm-4">
                             	<select class="form-control m-b" name="dimensions_name" id="dimensions_name" >
								<?php 
								foreach ($dimensions as $key) {
								echo '<option value="'.$key['name'].'">'.$key['name'].'</option>';
								}?>
								
                                </select>
							    </div>
 								
								<?php } ?>
								
									<?php if(!empty($sub_categories_names)){
								 ?>  
									 
								<label class="col-sm-2 control-label">Select Sub Categories Name*</label>
								<div class="col-sm-4">
                             	<select class="form-control m-b" name="sub_categories_names" id="sub_categories_names" >
								<?php 
								foreach ($sub_categories_names as $key) {
								echo '<option value="'.$key['name'].'">'.$key['name'].'</option>';
								}?>
								
                                </select>
							    </div>
 								
								<?php } ?>
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


	        <div class="box box-info">

	            <div class="box-body">
	                <div class="form-group">
	                    <label for="" class="col-sm-2 control-label">Questions Name <span>*</span></label>
	                    <div class="col-sm-8">
	                        
	                        <textarea id="textarea" type="text" class="ckeditor" name="name" placeholder="Kindly enter work personality index question ."><?php echo $questions_assessment['name']; ?></textarea>
	                        
	                        <!--<input type="text" class="form-control" name="name" value="<?php echo $questions_assessment['name']; ?>">-->
	                    </div>
	                </div>
	               
	                <!-- score -->
                    <!-- <?php echo "<br>";?>
					
                                <?php if(!empty($personality_assessment)){
								 ?>  

                                
                                	 
								<label class="col-sm-2 control-label">Select Value*</label>
								<div class="col-sm-4">
                             	<select class="form-control m-b" name="value" id="value" >
								<?php 
								foreach ($personality_assessment as $key) {
								echo '<option value="'.$key['Work_personality_index'].'">'.$key['Work_personality_index'].'</option>';
								}?>
								
                                </select>
							    </div>
 								</div>
								</div>
								<?php } ?> -->

							

<?php echo "<br>";?>
					
	                <div class="form-group">
	                	<label for="" class="col-sm-2 control-label"></label>
	                    <div class="col-sm-6">
	                      <button type="submit" onclick="spell_btn()" class="btn btn-success pull-left" name="form2">Update</button>
	                    </div>
	                </div>

	            </div>

	        </div>

	        <?php echo form_close(); ?>

	    </div>
  	</div>
<script>
    $("#spell_btn").on('click', function () {
    $("#textarea").attr("spellcheck", "true");
});
</script>
</section>