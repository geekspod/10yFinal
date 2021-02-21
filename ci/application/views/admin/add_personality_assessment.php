<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<style>
.checkbox label:after,
.radio label:after {
  content: '';
  display: table;
  clear: both;
}

.checkbox .cr,
.radio .cr {
  position: relative;
  display: inline-block;
  border: 1px solid #a9a9a9;
  border-radius: .25em;
  width: 1.3em;
  height: 1.3em;
  float: left;
  margin-right: .5em;
}

.radio .cr {
  border-radius: 50%;
}

.checkbox .cr .cr-icon,
.radio .cr .cr-icon {
  position: absolute;
  font-size: .8em;
  line-height: 0;
  top: 50%;
  left: 13%;
}

.radio .cr .cr-icon {
  margin-left: 0.04em;
}

.checkbox label input[type="checkbox"],
.radio label input[type="radio"] {
  display: none;
}

.checkbox label input[type="checkbox"]+.cr>.cr-icon,
.radio label input[type="radio"]+.cr>.cr-icon {
  opacity: 0;
}

.checkbox label input[type="checkbox"]:checked+.cr>.cr-icon,
.radio label input[type="radio"]:checked+.cr>.cr-icon {
  opacity: 1;
}

.checkbox label input[type="checkbox"]:disabled+.cr,
.radio label input[type="radio"]:disabled+.cr {
  opacity: .5;
}
</style>
<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Personality Assessment</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/categories/view_all_personality_assessment" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>
<?php echo form_open_multipart(base_url().'admin/categories/add_personality_assessment',array('class' => 'form-horizontal')); ?>
<?php if(!empty($categories)){
								 ?>  
									 
								<label class="col-sm-2 control-label">Select Categories Name*</label>
								<div class="col-sm-4">
                             	<select class="form-control m-b" name="dimensions_name" id="dimensions_name" >
								<?php 
								foreach ($categories as $key) {
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
							<label for="" class="col-sm-2 control-label">1 <span>*</span></label>
							<div class="col-sm-4">
							    <textarea id="textarea" type="text" class="form-control" name="name1" placeholder="Kindly enter personality assessment question 1."></textarea>
								<!--<input type="text" class="form-control" name="name1">-->
							</div>
						</div>
						</div>


<!-- 2nd -->
                    <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">2 <span>*</span></label>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name2" placeholder="Kindly enter personality assessment question 2."></textarea>
							</div>
						</div>
						</div>
                       

      <!-- 3 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">3 <span>*</span></label>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name3" placeholder="Kindly enter personality assessment question 3."></textarea>
							</div>
						</div>
						</div>
                       

                        <!-- 4 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">4 <span>*</span></label>
							<div class="col-sm-4">
							<textarea id="textarea" type="text" class="form-control" name="name4" placeholder="Kindly enter personality assessment question 4."></textarea>
							</div>
						</div>
						</div>
                      

                        <!-- 5 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">5 <span>*</span></label>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name5" placeholder="Kindly enter personality assessment question 5."></textarea>
							</div>
						</div>
						</div>
                      

                        <!-- 6 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">6 <span></span></label>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name6" placeholder="Kindly enter personality assessment question 6."></textarea>
							</div>
						</div>
						</div>
                     

                        <!-- 7 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">7 <span></span></label>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name7" placeholder="Kindly enter personality assessment question 7."></textarea>
							</div>
						</div>
						</div>
                   

                        <!-- 8 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">8 <span></span></label>
							<div class="col-sm-4">
							<textarea id="textarea" type="text" class="form-control" name="name8" placeholder="Kindly enter personality assessment question 8."></textarea>
							</div>
						</div>
						</div>
                     
                        <!-- 9 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">9 <span></span></label>
							<div class="col-sm-4">
							<textarea id="textarea" type="text" class="form-control" name="name9" placeholder="Kindly enter personality assessment question 9."></textarea>
							</div>
						</div>
						</div>
                      
                        <!-- 10 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">10 <span></span></label>
							<div class="col-sm-4">
							<textarea id="textarea" type="text" class="form-control" name="name10" placeholder="Kindly enter personality assessment question 10."></textarea>
							</div>
						</div>
						</div>
                      

                        <!-- 11 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">11 <span></span></label>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name11" placeholder="Kindly enter personality assessment question 11."></textarea>
							</div>
						</div>
						</div>
                     

                        <!-- 12 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">12 <span></span></label>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name12" placeholder="Kindly enter personality assessment question 12."></textarea>
							</div>
						</div>
						</div>
                      

                        <!-- 13 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">13 <span></span></label>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name13" placeholder="Kindly enter personality assessment question 13."></textarea>
							</div>
						</div>
						</div>
                    

                        <!-- 14 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">14 <span></span></label>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name14" placeholder="Kindly enter personality assessment question 14."></textarea>
							</div>
						</div>
						</div>
                     

                        <!-- 15 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">15 <span></span></label>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name15" placeholder="Kindly enter personality assessment question 15."></textarea>
							</div>
						</div>
						</div>
                   

                       
                        <!-- end -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" onclick="spell_btn()" class="btn btn-success pull-left" name="form2">Submit</button>
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