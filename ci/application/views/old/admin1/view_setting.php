<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Settings Section</h1>
	</div>
</section>

<section class="content" style="min-height:auto;margin-bottom: -30px;">
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

		</div>
	</div>
</section>

<section class="content">

	<div class="row">
		<div class="col-md-12">
							
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_logo" data-toggle="tab">Logo</a></li>
						<li><a href="#tab_favicon" data-toggle="tab">Favicon</a></li>
					<li>
						<a href="#tab_footer" data-toggle="tab">Footer</a></li>
					<li>
						<a href="#tab_email" data-toggle="tab">Email</a></li>
					</ul>

					<div class="tab-content">

          				<div class="tab-pane active" id="tab_logo">
          					<?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
          					<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
							            <label for="" class="col-sm-2 control-label">Existing Photo</label>
							            <div class="col-sm-6" style="padding-top:6px;">
							                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" class="existing-photo" style="height:80px;">
							            </div>
							        </div>
									<div class="form-group">
							            <label for="" class="col-sm-2 control-label">New Photo</label>
							            <div class="col-sm-6" style="padding-top:6px;">
							                <input type="file" name="photo_logo">
							            </div>
							        </div>
							        <div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form_logo">Update Logo</button>
										</div>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>
          				</div>


          				<div class="tab-pane" id="tab_favicon">

          					<?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
							            <label for="" class="col-sm-2 control-label">Existing Photo</label>
							            <div class="col-sm-6" style="padding-top:6px;">
							                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>" class="existing-photo" style="height:40px;">
							            </div>
							        </div>
									<div class="form-group">
							            <label for="" class="col-sm-2 control-label">New Photo</label>
							            <div class="col-sm-6" style="padding-top:6px;">
							                <input type="file" name="photo_favicon">
							            </div>
							        </div>
							        <div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form_favicon">Update Favicon</button>
										</div>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>
          				</div>
					<div class="tab-pane" id="tab_footer">


						<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
						<h3 class="sec_title" style="margin-top:0px;">General Section</h3>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Column 1 Title </label>
							<div class="col-sm-6">
								<input class="form-control" type="text" name="footer_col1_title" value="<?php echo $setting['footer_col1_title']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Column 2 Title </label>
							<div class="col-sm-6">
								<input class="form-control" type="text" name="footer_col2_title" value="<?php echo $setting['footer_col2_title']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Column 3 Title </label>
							<div class="col-sm-6">
								<input class="form-control" type="text" name="footer_col3_title" value="<?php echo $setting['footer_col3_title']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Footer Address </label>
							<div class="col-sm-6">
								<input class="form-control" type="text" name="footer_address" value="<?php echo $setting['footer_address']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Footer Email </label>
							<div class="col-sm-6">
								<input class="form-control" type="text" name="footer_email" value="<?php echo $setting['footer_email']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Footer Phone </label>
							<div class="col-sm-6">
								<input class="form-control" type="text" name="footer_phone" value="<?php echo $setting['footer_phone']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Designed by</label>
							<div class="col-sm-6">
								<input class="form-control" type="text" name="footer_col4_title" value="<?php echo $setting['footer_col4_title']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Footer - Copyright </label>
							<div class="col-sm-6">
								<input class="form-control" type="text" name="footer_copyright" value="<?php echo $setting['footer_copyright']; ?>">
							</div>
						</div>


						<div class="form-group">
							<label for="" class="col-sm-3 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form_footer_general">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>



						<?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
						<h3 class="sec_title">Newsletter Section</h3>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Newsletter Text </label>
							<div class="col-sm-6">
								<textarea class="form-control" name="newsletter_text" style="height:70px;"><?php echo $setting['newsletter_text']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form_footer_newsletter">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>







						<?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
						<h3 class="sec_title" style="margin-top:0px;">Footer Main Background Photo</h3>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Existing Photo </label>
							<div class="col-sm-6">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['cta_background']; ?>" alt="" style="width:300px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">New Photo </label>
							<div class="col-sm-6">
								<input type="file" name="photo" style="padding-top:5px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form_footer_cta_background">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>



					</div>
					<div class="tab-pane" id="tab_email">
						<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
						<div class="box box-info">
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Send Email From
										<span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="send_email_from" maxlength="255" autocomplete="off" value="<?php echo $setting['send_email_from']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Receive Email To
										<span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="receive_email_to" maxlength="255" autocomplete="off" value="<?php echo $setting['receive_email_to']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_email">Update</button>
									</div>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>












          			</div>
				</div>

			
		</div>
	</div>

</section>