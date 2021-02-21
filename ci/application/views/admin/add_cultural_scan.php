<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Cultural Scan</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/categories/view_all_cultural_scan" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>
<?php echo form_open_multipart(base_url().'admin/categories/add_cultural_scan_value',array('class' => 'form-horizontal')); ?>

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
							<textarea id="textarea" type="text" class="form-control" name="name1" placeholder="Kindly enter cultural scan question 1."></textarea>
							</div>
							
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name2" placeholder="Kindly enter cultural scan question 1."></textarea>
							
						</div>
						</div>

                       

                        <!-- 3 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">2 <span>*</span></label>
							<div class="col-sm-4">
								<!--<input type="text" class="form-control" name="name3">-->
								<textarea id="textarea" type="text" class="form-control" name="name3" placeholder="Kindly enter cultural scan question 2."></textarea>
							</div>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name4" placeholder="Kindly enter cultural scan question 2."></textarea>
						</div>
						</div>
                           
                        
                        <!-- 5 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">3 <span>*</span></label>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name5" placeholder="Kindly enter cultural scan question 3."></textarea>
							</div>
							<div class="col-sm-4">
							<textarea id="textarea" type="text" class="form-control" name="name6" placeholder="Kindly enter cultural scan question 3."></textarea>

						</div>
						</div>
                            
                        
                        <!-- 7 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">4 <span>*</span></label>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name7" placeholder="Kindly enter cultural scan question 4."></textarea>
							</div>
							<div class="col-sm-4">
							<textarea id="textarea" type="text" class="form-control" name="name8" placeholder="Kindly enter cultural scan question 4."></textarea>
						</div>
						</div>
                           
                       
                        <!-- 9 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">5 <span>*</span></label>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name9" placeholder="Kindly enter cultural scan question 5."></textarea>
							</div>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name10" placeholder="Kindly enter cultural scan question 5."></textarea>

						</div>
						</div>
                            
                        
                        <!-- 11 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">6 <span></span></label>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name11" placeholder="Kindly enter cultural scan question 6."></textarea>
							</div>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name12" placeholder="Kindly enter cultural scan question 6."></textarea>
						</div>
						</div>
                            
                        
                        <!-- 13 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">7 <span></span></label>
							<div class="col-sm-4">
							<textarea id="textarea" type="text" class="form-control" name="name13" placeholder="Kindly enter cultural scan question 7."></textarea>
							</div>
							<div class="col-sm-4">
							<textarea id="textarea" type="text" class="form-control" name="name14" placeholder="Kindly enter cultural scan question 7."></textarea>
						</div>
						</div>
                           
                        
                        <!-- 15 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">8 <span></span></label>
							<div class="col-sm-4">
								<textarea id="textarea" type="text" class="form-control" name="name15" placeholder="Kindly enter cultural scan question 8."></textarea>
							</div>
							<div class="col-sm-4">
							<textarea id="textarea" type="text" class="form-control" name="name16" placeholder="Kindly enter cultural scan question 8."></textarea>
						</div>
						</div>
                            
                        
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" onclick="spell_btn()"  class="btn btn-success pull-left" name="form2">Submit</button>
							</div>
						</div>
					</div>
				</div>

			<?php echo form_close(); ?>


		</div>
	</div>

</section>
<!-- 1 -->
<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value1');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 2 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value2');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 3 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value3');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 4 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value4');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 5 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value5');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 6 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value6');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 7 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value7');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 8 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value8');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
   <script>
    $("#spell_btn").on('click', function () {
    $("#textarea").attr("spellcheck", "true");
});
</script>
