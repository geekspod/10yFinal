<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<html lang="en">
    <head>

</head>
<body>
<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Categories</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/categories" class="btn btn-primary btn-sm">View All</a>
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

	        <?php echo form_open_multipart(base_url().'admin/categories/edit/'.$categories['categories_id'],array('class' => 'form-horizontal')); ?>

	        <div class="box box-info">

	            <div class="box-body">
	                <div class="form-group">
	                    <label for="" class="col-sm-2 control-label">Categories Name <span>*</span></label>
	                    <div class="col-sm-4">
	                        <textarea id="textarea" type="text" class="form-control" name="name" placeholder="Kindly enter categories/test name" ><?php echo $categories['name']; ?></textarea>
	                        
	                        
	                    </div>
	                </div>
	                <div class="box box-info">
                     <div class="box-body">
	                <div class="form-group">
	                    <label for="" class="col-sm-2 control-label">Test Time <span>*</span></label>
	                    <div class="col-sm-4">
	                        <input type="text" class="form-control" name="test_time_slot" id="test_time_slot" placeholder="Kindly enter test time in minutes.">
	                    </div>
	                </div>
	               
	                
					
					
	                <div class="form-group">
	                	<label for="" class="col-sm-2 control-label"></label>
	                    <div class="col-sm-6">
	                      <button type="submit" onclick="spell_btn()"   class="btn btn-success pull-left" name="form2">Update</button>
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
        
        
        <script type="text/javascript">
            function checkspell()
            {
                $Spelling.SpellCheckInWindow('textarea');
                
            }
        </script>
        </body>
        </html>