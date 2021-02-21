<section class="order-baner">
	 <div class="container">
	 	<?php 
	 		foreach($order->result() as $ord){
	 			if($this->session->userdata('role_id') == 1)
	 			{
	 				$getbuyer = $this->db->get_where('tbl_customer',array('customer_id' => $ord->chef_id))->row();
	 			}else
	 			{
	 				$getbuyer = $this->db->get_where('tbl_customer',array('customer_id' => $ord->customer_id))->row();
	 			}
	 			
	 			
	 			$feature  = $this->db->get_where('tbl_feature_project',array('feature_id' => $ord->feature_id))->row();
	 	?>
	 	<div class="o-prog">
	 		<div class="row">
	 			<div class="col-md-6">
	 				<p style="color:red">
	 				<?php 
		 				if($this->session->userdata('role_id') == 1)
		 				{
		 					echo 'Seller';
						}else
						{
							echo 'Buyer';
						}		
					?>
	 				</p>
			 		<h5><?php echo $getbuyer->fullname ; ?> <br>
			 		 <span><?php echo date('M d,Y',strtotime($ord->available_in)) ; ?></span></h5>
			 		<br></br>
			 		<p class="loi"><?php echo $ord->description ; ?></p>
	 			</div>
	 			<div class="col-md-6">
	 				<img src="<?php if($feature->feature_image == ''){ echo base_url().'assets/images/indian.jpg';}else{ echo base_url().'public/uploads/'.$feature->feature_image ; }?>" class="img-fluid">
	 				<br></br>
	 				<p style="color:red;text-align: center">$<?php echo $ord->total_amount ; ?></p>
	 			</div>
	 		</div>
	 		<div class="row">
	 			<div class="col-md-12">
	 				<div class="text-center">
	 					<?php 
		 					if($this->session->userdata('role_id') == 1)
		 					{
		 						
		 						if($ord->payment_status == 1)
		 						{
		 							if($ord->order_status == 3 && $ord->seller_comlete == 0)
			 						{
			 							echo '<a   class="delivernowbutton markascompleted" data-status="3" data-ids="'.$ord->order_id.'">Mark As Completed</a>';
			 						}else if($ord->seller_comlete == 1)
			 						{
			 							echo '<a  href="javascript:void()" class="delivernowbutton" data-toggle="modal" data-target="#reviewformform'.$ord->order_id.'">Completed</a>';
			 						}else if($ord->order_status == 2)
			 						{
			 							echo '<a  href="javascript:void()" class="delivernowbutton">Declined</a>';
			 						}
		 						}else
		 						{
		 							if($ord->order_status == 1)
		 							{
		 								
		 								echo '<a   class="delivernowbutton paynoe" data-status="3" data-ids="'.$ord->order_id.'" data-toggle="modal" data-target="#paymentform'.$ord->order_id.'">Pay Now</a>';
		 							}
		 							
		 						}
		 						
		 					}else
		 					{
		 						 if($ord->order_status== 0){
						    			echo '<a href="javascript:void()" class="delivernowbutton order-status" data-status="2" data-ids="'.$ord->order_id.'">decline</a>';
						    			echo '<a href="javascript:void()" class="delivernowbutton order-status" data-status="1" data-ids="'.$ord->order_id.'">accept</a>';
						    		 }else{
						    		 	if($ord->payment_status == 1)
						    		 	{
						    		 		echo '<a href="javascript:void()" class="delivernowbutton deliveredbutton" data-status="3" data-ids="'.$ord->order_id.'">Deliver Now</a>';				
						    		 	}
					 					
					 				}
		 					}
						?>
						<?php $getconversation = $this->db->get_where('conversations',array('user_id' =>$ord->customer_id,'driver_id'=> $ord->chef_id ))->row(); ?>
						<a  href="<?php echo base_url(); ?>chat/index/?chat_id=<?php echo $getconversation->id ;?>" class="contactseller">
						Contact 
						<?php 
			 				if($this->session->userdata('role_id') == 1)
			 				{
			 					echo 'Seller';
							}else
							{
								echo 'Buyer';
							}		
						?>
						</a>
					</div>
	 			</div>
	 		</div>
	 		
	 	</div>
	 	
<div id="paymentform<?php echo $ord->order_id ; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Pay Now</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <div class="row">
			<div class="col-md-6">
				<h6><?php echo $feature->feature_name ; ?></h6>
				<p style="color:red"><?php echo $feature->feature_price ; ?></p>
				
			</div>
			<div class="col-md-6">
				<img src="<?php if($feature->feature_image == ''){ echo base_url().'assets/images/indian.jpg';}else{ echo base_url().'public/uploads/'.$feature->feature_image ; }?>" class="img-fluid">
			</div>
		</div>
		<form role="form"  action="<?php echo base_url() ; ?>search/stripePost" method="post" id="paymentFrm" class="require-validation payment-form" data-cc-on-file="false" data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>">
             <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
     
                <div class="form-row row">
                    <div class="col-md-12 form-group required">
                        <label class="control-label">Name on Card</label> <input class="form-control"  type="text" style="width:100%">
                    </div>
                </div>

                <div class="form-row row">
                    <div class="col-md-12 form-group card required">
                        <label class="control-label">Card Number</label> <input autocomplete="off" class="form-control card-number" size="20" type="text"  style="width:100%">
                    </div>
                </div>

                <div class="form-row row">
                    <div class="col-xs-12 col-md-4 form-group cvc required">
                        <label class="control-label">CVC</label> <input autocomplete="off" class="form-control card-cvc" placeholder="ex. 311" size="4" type="text">
                    </div>
                    <div class="col-xs-12 col-md-4 form-group expiration required">
                        <label class="control-label">Expiration Month</label> <input class="form-control card-expiry-month" placeholder="MM" size="2" type="text">
                    </div>
                    <div class="col-xs-12 col-md-4 form-group expiration required">
                        <label class="control-label">Expiration Year</label> <input class="form-control card-expiry-year" placeholder="YYYY" size="4" type="text">
                    </div>
                </div>

                <div class="form-row row">
                    <div class="col-md-12 error form-group hide">
                        <div class="alert-danger alert">Please correct the errors and try
                            again.</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" id="payBtn">Pay Now ($<?php echo $feature->feature_price ; ?>)</button>
                        <input type="hidden" name="feature_price" value="<?php echo $feature->feature_price ; ?>">
                        <input type="hidden" name="order_id" value="<?php echo $ord->order_id; ?>">
                        <input type="hidden" name="chef_id" value="<?php echo $ord->chef_id; ?>">
                        
                    </div>
                </div>
                     
            </form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	 	
	 	
	 	<?php } ?>
	 	
	 </div>
</section>

<!-- Modal -->



<script type="text/javascript">
	jQuery('.deliveredbutton').click(function() {
		var order_id = $(this).data('ids');
		var status	 = $(this).data('status');

		jQuery.ajax({
			url  	: '<?php echo base_url() ; ?>order/acceptorder',
			data 	: {order_id:order_id,status:status},
			type 	: 'GET',
			dataType : 'Json',
			success	: function(data) {
				if (data.success) {
					Swal.fire({
							icon: 'success',
							text: data.message,
							showConfirmButton: true,
							confirmButtonText:'Close',
							confirmButtonClass: 'completeboxclose',

						})
					setTimeout(function() { window.location = '<?php echo base_url() ; ?>dashboard'},3000)
				} else {
					Swal.fire({
							icon: 'error',
							text: data.message,
							showConfirmButton: true,
							confirmButtonText:'Close',
							confirmButtonClass: 'completeboxclose',

						})
					
				}

			},error : function() {
				alert('failure')
			}
		})
	})
	
	jQuery('.markascompleted').click(function() {
		var order_id = $(this).data('ids');
		var status	 = $(this).data('status');

		jQuery.ajax({
			url  	: '<?php echo base_url() ; ?>order/completeorder',
			data 	: {order_id:order_id,status:status},
			type 	: 'GET',
			dataType : 'Json',
			success	: function(data) {
				if (data.success) {
					Swal.fire({
							icon: 'success',
							text: data.message,
							showConfirmButton: true,
							confirmButtonText:'Close',
							confirmButtonClass: 'completeboxclose',

						})
					setTimeout(function() { window.location = '<?php echo base_url() ; ?>profile'},3000)
				} else {
					Swal.fire({
							icon: 'error',
							text: data.message,
							showConfirmButton: true,
							confirmButtonText:'Close',
							confirmButtonClass: 'completeboxclose',

						})
					
				}

			},error : function() {
				alert('failure')
			}
		})
	})
</script>