<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Add </h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/categories/view_questions_score_description" class="btn btn-primary btn-sm">View All</a>
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

	


			<?php echo form_open_multipart(base_url().'admin/categories/add_description',array('class' => 'form-horizontal')); ?>
			
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

<?php echo "<br>";?>
					<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Add Score <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder= "add score" name="score">
							</div>
						</div></div></div>

            <div class="form-group">
			<label class="col-sm-2 control-label">Add Description*</label>
              <div class="col-sm-10">
              	<textarea class="ckeditor" placeholder="Enter Html Body" name="name" id="name">
              	
              	</textarea>
              	</div>
                      </div>
						
						
						
						
						</div>

						

						<div class="form-group" >
							<label for="" class="col-sm-2 control-label"></label>
							
							<div class="col-sm-6" style="text-align:center;">
								<button type="submit" class="btn btn-success pull-left" name="form4">Submit</button>
							</div>
						</div>
					</div>
				</div>

			<?php echo form_close(); ?>


		</div>
	</div>

</section>