<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Description</h1>
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

	        <?php echo form_open_multipart(base_url().'admin/categories/edit_questions_score_description/'.$description['description_id'],array('class' => 'form-horizontal')); ?>


	<?php if(!empty($dimensions)){
								 ?>  
									 
								<label class="col-sm-2 control-label">Select Test Name*</label>
								<div class="col-sm-4">
                             	<select class="form-control m-b" name="categories_id" id="categories_id" >
								<?php 
								foreach ($dimensions as $key) {
								echo '<option value="'.$key['name'].'">'.$key['name'].'</option>';
								}?>
								
                                </select>
							    </div>
 							</div>
							
								<?php } ?>




		
			
						

						
								
								
								
							

					
    <?php echo "<br>";?><?php echo "<br>";?><?php echo "<br>";?>
							     
							     	<?php if(!empty($all_categories)){
								 ?>  
									 
								<label class="col-sm-2 control-label">Select Categories Name*</label>
								<div class="col-sm-4">
                             	<select class="form-control m-b" name="dimensions_id" id="dimensions_id" >
                             	    <option value=""></option>
								<?php 
								foreach ($all_categories as $key) {
								echo '<option value="'.$key['name'].'">'.$key['name'].'</option>';
								}?>
								
                                </select>
							    </div>
							    </div>
 							
							
								<?php } ?>
							     
				
						
							<?php if(!empty($sub_categories_names)){
								 ?>  
									 
								<label class="col-sm-2 control-label">Select Sub Categories Name*</label>
								<div class="col-sm-4">
                             	<select class="form-control m-b" name="sub_categories_id" id="sub_categories_id" >
                             	      <option value=""></option>
								<?php 
								foreach ($sub_categories_names as $key) {
								echo '<option value="'.$key['name'].'">'.$key['name'].'</option>';
								}?>
								
                                </select>
							    </div>
 						
							
								<?php } ?>
						
				
						
							<label class="col-sm-2 control-label">Select Minimum Value*</label>
								<div class="col-sm-4">
								<select class="form-control m-b" name="min_value" id="min_value" >
								<option value="1" <?php { echo "Selected";} ?> >1</option>
								<option value="11" <?php { echo "Selected";} ?> >11</option>
								<option value="21" <?php { echo "Selected";} ?> >21</option>
								<option value="31" <?php { echo "Selected";} ?> >31</option>
								<option value="41" <?php { echo "Selected";} ?> >41</option>
								<option value="51" <?php { echo "Selected";} ?> >51</option>
								<option value="61" <?php { echo "Selected";} ?> >61</option>
								<option value="71" <?php { echo "Selected";} ?> >71</option>
								<option value="81" <?php { echo "Selected";} ?> >81</option>
								<option value="91" <?php { echo "Selected";} ?> >91</option>
								
								
								</select>
							     </div>
							     <?php echo "<br>";?><?php echo "<br>";?><?php echo "<br>";?>
							     
								 <label class="col-sm-2 control-label">Select Maximum Value*</label>
								<div class="col-sm-4">
								<select class="form-control m-b" name="max_value" id="max_value" >
								<option value="1" <?php { echo "Selected";} ?> >1</option>
								<option value="2" <?php { echo "Selected";} ?> >10</option>
								<option value="3" <?php { echo "Selected";} ?> >20</option>
								<option value="4" <?php { echo "Selected";} ?> >30</option>
								<option value="5" <?php { echo "Selected";} ?> >40</option>
								<option value="6" <?php { echo "Selected";} ?> >50</option>
								<option value="7" <?php { echo "Selected";} ?> >60</option>
								<option value="8" <?php { echo "Selected";} ?> >70</option>
								<option value="9" <?php { echo "Selected";} ?> >80</option>
								<option value="10" <?php { echo "Selected";} ?> >90</option>
								<option value="11" <?php { echo "Selected";} ?> >100</option>
								
								</select>
							     </div>
							     <?php echo "<br>";?><?php echo "<br>";?><?php echo "<br>";?><?php echo "<br>";?><?php echo "<br>";?>
						
				
					<!--<div class="box-body">-->
					<!--	<div class="form-group">-->
					<!--		<label for="" class="col-sm-2 control-label">Enter Minimum Value <span>*</span></label>-->
					<!--		<div class="col-sm-4">-->
					<!--			<input type="text" class="form-control" placeholder= "Enter Minimum Value" name="min_value" value="<?php echo $description['min_value']; ?>">-->
					<!--		</div>-->
					<!--	</div></div>-->
						
						
					<!--<div class="box-body">-->
					<!--	<div class="form-group">-->
					<!--		<label for="" class="col-sm-2 control-label">Enter Maximum Value <span>*</span></label>-->
					<!--		<div class="col-sm-4">-->
					<!--			<input type="text" class="form-control" placeholder= "Enter Maximum Value" name="max_value" value="<?php echo $description['max_value']; ?>">-->
					<!--		</div>-->
					<!--	</div></div>-->


            <div class="form-group">
			<label class="col-sm-2 control-label">Test Description*</label>
            <input type="hidden" id="description_id" name="description_id" 
            value="<?php echo $description['description_id']; ?>"/>
              <div class="col-sm-10">
                  <textarea class="ckeditor" placeholder="Enter Tempelate Html Body" class="form-control"  name="description_test" id="description_test"  >
              <?php echo $description['description_test']; ?>
              </textarea>
              </div>
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


