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
								echo '<option value="'.$key['name'].'">'.$key['name'].'</option>';
								}?>
								
                                </select>
							    </div>
 								</div>
								<!-- </div> -->
								<?php } ?>




		
				<!-- </div> -->
						

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
								<!-- </div> -->
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
 								
								<!-- </div> -->
								<?php } ?>
<?php echo "<br>";?><?php echo "<br>";?><?php echo "<br>";?>
								

					

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
								<option value="10" <?php { echo "Selected";} ?> >10</option>
								<option value="20" <?php { echo "Selected";} ?> >20</option>
								<option value="30" <?php { echo "Selected";} ?> >30</option>
								<option value="40" <?php { echo "Selected";} ?> >40</option>
								<option value="50" <?php { echo "Selected";} ?> >50</option>
								<option value="60" <?php { echo "Selected";} ?> >60</option>
								<option value="70" <?php { echo "Selected";} ?> >70</option>
								<option value="80" <?php { echo "Selected";} ?> >80</option>
								<option value="90" <?php { echo "Selected";} ?> >90</option>
								<option value="100" <?php { echo "Selected";} ?> >100</option>
								
								</select>
							     </div>
							     <?php echo "<br>";?><?php echo "<br>";?><?php echo "<br>";?><?php echo "<br>";?><?php echo "<br>";?>
				<div class="box box-info">
					<div class="box-body">
					<div class="form-group">
			<label class="col-sm-2 control-label">Add Description Of Categories *</label>
              <div class="col-sm-10">
              	<textarea class="ckeditor" placeholder="Add Description Of Categories" name="description_test" id="description_test">
              	
              	</textarea>
              	</div>
                      </div>
</div></div>
 		<!--	<div class="form-group">-->
			<!--<label class="col-sm-4 control-label">Add Description Of Test*</label>-->
   <!--           <div class="col-sm-10">-->
   <!--           	<textarea class="ckeditor" placeholder="Enter Html Body" name="description_test" id="description_test">-->
   <!--           	</textarea>-->
   <!--           	</div>-->
   <!--         	</div>-->
								 <?php echo "<br>";?>
								 <?php echo "<br>";?>
								 <?php echo "<br>";?>
					<!--<div class="box box-info">-->
					<!--<div class="box-body">-->
					<!--	<div class="form-group">-->
					<!--		<label for="" class="col-sm-2 control-label">Add Score <span>*</span></label>-->
					<!--		<div class="col-sm-4">-->
					<!--			<input type="text" class="form-control" placeholder= "add score" name="score">-->
					<!--		</div>-->
					<!--	</div></div></div>-->

           

						

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