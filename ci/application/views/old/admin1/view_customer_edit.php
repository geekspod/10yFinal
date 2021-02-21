<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Customer</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/customer" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if($error): ?>
			<div class="callout callout-danger">
				<p>
					<?php echo $error; ?>
				</p>
			</div>
			<?php endif; ?>

			<?php if($success): ?>
			<div class="callout callout-success">
				<p><?php echo $success; ?></p>
			</div>
			<?php endif; ?>

			<?php echo form_open_multipart(base_url().'admin/customer/edit/'.$partner['customer_id'],array('class' => 'form-horizontal')); ?>
				<input type="hidden" name="current_photo" value="<?php echo $partner['photo']; ?>">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">First Name <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="firstname" value="<?php echo $partner['firstname']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Last Name <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="lastname" value="<?php echo $partner['lastname']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Email <span></span></label>
							<div class="col-sm-6">
								<input type="email" autocomplete="off" class="form-control" name="email" value="<?php echo $partner['email']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Phone Number <span></span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="phonenumber" value="<?php echo $partner['phonenumber']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Password <span></span></label>
							<div class="col-sm-6">
								<input type="password" autocomplete="off" class="form-control" name="password" >
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Address <span></span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="addressone" value="<?php echo $partner['addressone']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">City <span></span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="city" value="<?php echo $partner['city']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Country <span></span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="country" value="<?php echo $partner['country']; ?>">
							</div>
						</div>
						
						<div class="form-group">
			            <label for="" class="col-sm-2 control-label">Status *</label>
			            <div class="col-sm-6">
			            	<select name="status" class="form-control select2">
			            		<option value="1" <?php if($partner['status']=='1') {echo 'selected';} ?>>Active</option>
			            		<option value="0" <?php if($partner['status']=='0') {echo 'selected';} ?>>Inactive</option>
			            	</select>
			            </div>
			        </div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>



</section>