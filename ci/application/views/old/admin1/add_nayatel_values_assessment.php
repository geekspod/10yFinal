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
		<a href="<?php echo base_url(); ?>admin/categories/view_all_nayatel_values_assessment" class="btn btn-primary btn-sm">View All</a>
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

			<?php echo form_open_multipart(base_url().'admin/categories/add_nayatel_values_assessment_data',array('class' => 'form-horizontal')); ?>

				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">1 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name1">
							</div>
						</div>
						</div>

                        <div class="d-flex justify-content-center my-4">
                        <input id="value1" name="value1" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>

<!-- 2nd -->
                    <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">2 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name2">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value2" name="value2" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 3 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">3 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name3">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value3" name="value3" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 4 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">4 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name4">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value4" name="value4" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 5 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">5 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name5">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value5" name="value5" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 6 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">6 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name6">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value6" name="value6" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 7 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">7 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name7">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value7" name="value7" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 8 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">8 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name8">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value8" name="value8" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 9 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">9 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name9">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value9" name="value9" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 10 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">10 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name10">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value10" name="value10" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 11 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">11 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name11">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value11" name="value11" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 12 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">12 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name12">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value12" name="value12" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 13 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">13 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name13">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value13" name="value13" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 14 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">14 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name14">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value14" name="value14" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 15 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">15 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name15">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value15" name="value15" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 16 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">16 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name16">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value16" name="value16" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>

  <!-- 17 -->
  <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">17 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name17">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value17" name="value17" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 18 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">18 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name18">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value18" name="value18" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 19 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">19 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name19">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value19" name="value19" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>
                        <!-- 20 -->
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">20 <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="name20">
							</div>
						</div>
						</div>
                            <div class="d-flex justify-content-center my-4">
                        <input id="value20" name="value20" class="border-0" type="range" min="0" max="100" />
                        <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
                        </div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form2">Submit</button>
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
  <!-- 9 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value9');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 10 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value10');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 11 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value11');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 12 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value12');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 13 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value13');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 14 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value14');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 15 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value15');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 16 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value16');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>