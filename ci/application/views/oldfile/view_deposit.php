<section class="account-page">
<div class="container">
	
	<div class="row">
				<div class="main-content col-lg-8">
					<div class="row">
						<div class="col-md-12">
							<?php
							if($this->session->flashdata('error')) {
								?>
								<div class="label label-danger" style="display:grid">
									<p><?php echo $this->session->flashdata('error'); ?></p>
								</div>
								<?php
							}
							if($this->session->flashdata('success')) {
								?>
								<div class="label label-success" style="display:grid">
									<p><?php echo $this->session->flashdata('success'); ?></p>
								</div>
								<?php
							}
							?>
						</div>
					</div>
					<div class="content-area card">
						<div class="card-innr">
							<div class="card-head"><span class="card-sub-title text-primary font-mid">Deposit</span>
								<h4 class="card-title">How much do you want to invest?</h4>
							</div>
							<div class="card-text">
								<p>Enter the amount you want to deposit</p>
							</div>
							<form action="" method="post" class="paymentform">
							<div class="token-contribute">
								<div class="token-calc">
									<div class="token-pay-amount">
										<input style="width: 430px;" name="amount" id="token-base-amount" placeholder="Enter amount you would like to deposit" class="input-bordered input-with-hint" required>
								  </div>
								</div>
								<div class="token-calc">
									<div class="token-pay-amount">
									<select style="width: 430px;" name="plan" id="token-base-amount" class="input-bordered input-with-hint">
																		<option value="1">BASIC PLANS - 12 days - 0.01 BTC - 0.1 BTC</option>
																		<option value="2">SILVER PLAN - 10 days - 0.11 BTC - 0.5 BTC</option>
																		<option value="3">GOLD PLAN - 6 days - 0.51 BTC - 1 BTC</option>
																		<option value="4">DIAMOND PLAN - 3 days - 1 BTC - 100 BTC</option>
																		</select>
									</div>
								</div>
								<div class="token-calc-note note note-plane"><em class="fas fa-times-circle text-danger"></em><span class="note-text text-light">Don't deposit less than the minimum required amount in each plan</span><br>
								</div>
								
								<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
								<ul class="paymentmethod-list">
									<li><input type="radio" name="payer" class="paymentmethod" value="payeer"></input> Payeer</li>
									<li><input type="radio" name="payer" class="paymentmethod" value="perfectmoney"></input> Perfect Money</li>
									<li><input type="radio" name="payer" class="paymentmethod" value="bitcoin"></input> Bitcoin</li>
								</ul>
								<?php 
								





	// ...
	// Also you need to use IPN function cryptobox_new_payment($paymentID = 0, $payment_details = array(), $box_status = "") 
	// for send confirmation email, update database, update user membership, etc.
	// You need to modify file - cryptobox.newpayment.php, read more - https://gourl.io/api-php.html#ipn
	// ...

?>

								<button class="btn btn-primary btn-block" type="submit" name="submit"><li class="fab fa-btc "></li> Deposit</button>
							</div>
							</form>
							
						</div>
						<!-- .card-innr -->
					</div>
					<!-- .content-area -->
				</div>
				<!-- .col -->
				
				<!-- .col -->
			</div>

</div>

</div>

</div>
</section>