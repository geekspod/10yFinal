<?php
if(!$this->session->userdata('manager_id')) {
    redirect(base_url().'manager');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>View Customers</h1>
	</div>
	<!--<div class="content-header-right">-->
	<!--	<a href="<?php echo base_url(); ?>admin/customer/add" class="btn btn-primary btn-sm">Add Customer</a>-->
	<!--</div>-->
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="30">SL</th>
								<th width="100">Name</th>
								<th width="100">Email</th>
								<th width="100">Status</th>
								<!-- <th width="80">Action</th> -->
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							foreach ($partner as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									
									<td><?php echo $row['first_name'].''.$row['last_name']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td><?php echo $row['status']; ?></td>
									<!-- <td>										
										<a href="<?php echo base_url(); ?>admin/customer/edit/<?php echo $row['customer_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="#" class="btn btn-danger btn-xs" data-href="<?php echo base_url(); ?>admin/customer/delete/<?php echo $row['customer_id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
									</td> -->
								</tr>
								<?php
							}
							?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


</section>


<!-- <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete this item?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div> -->