<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Add Game</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/games" class="btn btn-primary btn-sm">View All</a>
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

			<?php echo form_open_multipart(base_url().'admin/games/add',array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">		
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Game Name *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Entry Fee *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="entry_fees">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Category *</label>
							<div class="col-sm-6">
								<select class="form-control" name="game_category">
									<option value="">Select Category</option>
									<option value="origin-tab">Origin</option>
									<option value="playstation-tab">Playstation</option>
									<option value="steam-tab">Steam</option>
									<option value="uplay-tab">Uplay</option>
									<option value="xbox-tab">Xbox</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Content *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="content" id="editor1"><?php if(isset($_POST['content'])){echo $_POST['content'];} ?></textarea>
							</div>
						</div>
						
						<h3 class="seo-info">Featured Photo</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Featuerd Photo *</label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>
						<h3 class="seo-info">Other Photos</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Other Photos</label>
							<div class="col-sm-6" style="padding-top:5px">
								<table id="PhotosTable" style="width:100%;">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="upload-btn">
                                                    <input type="file" name="photos[]">
                                                </div>
                                            </td>
                                            <td style="width:28px;"><a href="javascript:void()" class="Delete btn btn-danger btn-xs">X</a></td>
                                        </tr>
                                    </tbody>
                                </table>
							</div>
							<div class="col-sm-2" style="padding-top:5px">
                                <input type="button" id="btnAddNew" value="Add Item" style="margin-bottom:10px;border:0;color: #fff;font-size: 14px;border-radius:3px;" class="btn btn-warning btn-xs">
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
			<?php echo form_close(); ?>
		</div>
	</div>
</section>