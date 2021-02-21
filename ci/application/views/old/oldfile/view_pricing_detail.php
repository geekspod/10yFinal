
<!-- Investment Plan Section Starts Here -->
    <section class="investment-plan">
    	<div class="container">
    	<div class="invest-head">
    	<h5><?php echo $page_pricing['faq_heading']; ?></h5>
    	<p><?php echo $page_pricing['mt_faq']; ?> </p>
    	</div>

    	<div class="invest-data">

    	<div class="row">
 <?php
    foreach ($pricing as $row) {
 ?>
    	<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
	    	<div class="investplan-box">
		    	<img src="<?php echo base_url() ; ?>images/plan1.png">
		    	<h5><?php echo $row['title']; ?></h5>
		    	<p><?php echo $row['price']; ?>/<?php echo $row['subtitle']; ?></p>
		    	<?php echo $row['text']; ?>
		    	<a  href="<?php echo $row['button_url']; ?>"><?php echo $row['button_text']; ?></a>
	    	</div>
    	</div>
<?php } ?>




    	</div>

    	</div>



    	</div>
    </section>
    <!-- Investment Plan Section Ends Here -->










<!-- Latest Trasaction Starts Here -->
<section class="latest-transaction">
	<div class="container">
	<div class="latest-transaction-head">
	<h5>Our Latest Transaction</h5>
	</div>

	<div class="latest-transaction-data">
	<table>
		<thead>
			<tr>
				<td> NAME </td>
				<td> DATE </td>
				<td> AMOUNT </td>
				<td> CURRENCY </td>
				<td>DEPOSIT</td>
			</tr>
		</thead>


		<tbody>
		<tr>
			<td> <i class="fa fa-play"> </i> OLYMPIA RIPPLE </td>
			<td> JUNE 24,2019 </td>
			<td> $6,00,000.00</td>
			<td> DOLLAR </td>
			<td> 03 MINUTES AGO </td>
		</tr>

		<tr>
			<td> <i class="fa fa-play"> </i> OLYMPIA RIPPLE </td>
			<td> JUNE 24,2019 </td>
			<td> $6,00,000.00</td>
			<td> DOLLAR </td>
			<td> 03 MINUTES AGO </td>
		</tr>		

		<tr>
			<td> <i class="fa fa-play"> </i> OLYMPIA RIPPLE </td>
			<td> JUNE 24,2019 </td>
			<td> $6,00,000.00</td>
			<td> DOLLAR </td>
			<td> 03 MINUTES AGO </td>
		</tr>



		<tr>
			<td> <i class="fa fa-play"> </i> OLYMPIA RIPPLE </td>
			<td> JUNE 24,2019 </td>
			<td> $6,00,000.00</td>
			<td> DOLLAR </td>
			<td> 03 MINUTES AGO </td>
		</tr>

		<tr>
			<td> <i class="fa fa-play"> </i> OLYMPIA RIPPLE </td>
			<td> JUNE 24,2019 </td>
			<td> $6,00,000.00</td>
			<td> DOLLAR </td>
			<td> 03 MINUTES AGO </td>
		</tr>


		<tr>
			<td> <i class="fa fa-play"> </i> OLYMPIA RIPPLE </td>
			<td> JUNE 24,2019 </td>
			<td> $6,00,000.00</td>
			<td> DOLLAR </td>
			<td> 03 MINUTES AGO </td>
		</tr>
		</tbody>
	


	</table>
	</div>


	<div class="transaction-buttons">
	<a href=""> DEPOSITS </a>
	<a href=""> WITHDRAW </a>
	</div>


	</div>
</section>
<!-- Latest Transaction Ends Here -->






<!-- Plans Calculator Section Starts Here -->
<section class="plans-calculator">
	<div class="container">

	
	<div class="calculator-head">
	<h5> PLANS CALCULATOR  </h5>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="calculator-data">
				<form>
					<div class="form-field4">
					<p>DEPOSIT AMOUNT : </p>
					<span class="dollar-sign">$</span>
					<input type="number"  name="" class="amountprice">
					</div>

					<div class="form-field4">
					<p>SELECT PACKAGE : </p>
					<select class="form-control package" name="package">
						<option value="">Select Package</option>
						<?php foreach ($pricing as $row) { ?>
							<option value="<?php echo  $row['title'] ; ?>"><?php echo  $row['title'] ; ?></option>
						<?php } ?>
					</select>
					</div>

					<div class="form-field4 formdays">
					<p>INVESTMENT : </p>
					<input type="number" value="25" class="amountduration" name="" style="padding-left: 20px;">
					</div>
					
					<div class="form-field4">
					<p>DURATION : </p>
					<select class="form-control duration" name="package">
						<option value="">Select Duration</option>
						<option value="Daily">Daily</option>
						<option value="Weekly">Weekly</option>
						<option value="Monthly">Monthly</option>
						<option value="yearly">Yearly</option>
						
					</select>
					</div>


					<div class="form-field4">
					<p> CALCULATE PROFIT : </p>
					<input type="button" value="SUBMIT" name="" class="submitbutton" onclick="CalCommission(); return false;">
					</div>

				</form>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="calculator-image">
				<div class="mutualfunds-calculator">
		                        <div class="calculator">
		                            <div class="graph-area">
		                                <span class="mf-yAxis">Investment Value</span>
		                                <svg width="480" height="350" id="graph" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 480 355" class="mf-chart">

		                                    <defs>
		                                        <pattern id="grid" x="10" y="10" width="480" height="88" patternUnits="userSpaceOnUse">
		                                            <line x1="0" y1="0" x2="100%" y2="0" stroke-width="1" shape-rendering="crispEdges" stroke="#bdbdbd"></line>
		                                        </pattern>
		                                    </defs>
		                                    <rect width="480" height="355" style="fill:transparent;"></rect>
		                                    <g>
		                                        <path d="M 5,330
		            C 5,330
		            300,257.5
		            475,170" id="path1" fill="none" stroke="#bdbdbd" stroke-width="5px" stroke-linecap="round" class="anim-path" style="transition: stroke-dashoffset 2s ease-in-out; stroke-dasharray: 522.957, 522.957; stroke-dashoffset: 0px; display: inline;"></path>
		                                        <path d="M 5,330
		            C 5,330
		            300,257.5
		            475,20" fill="none" id="path2" stroke="#01a75d" stroke-width="5px" stroke-linecap="round" class="anim-path" style="transition: stroke-dashoffset 2s ease-in-out; stroke-dasharray: 572.872, 572.872; stroke-dashoffset: 0px; display: inline;"></path>
		                                    </g>
		                                    <g class="mf-circles" style="">
		                                        <circle cx="472" cy="22" r="8" fill="#01a75d" stroke="#f9f9f7" stroke-width="3px"></circle>
		                                        <circle cx="472" cy="170" r="8" fill="#bdbdbd" stroke="#f9f9f7" stroke-width="3px"></circle>
		                                    </g>
		                                </svg>
		                                <div class="mf-xAxis">

		                                    <span class="mf-xAxis-end" id="years_selected">25 Years</span>
		                                </div>
		                                <div class="labels funds_label" style="display: block;">
		                                    <div class="chart-label">
		                                        <span class="amt" id="directFund"><i class="fa fa-usd">$</i>1.98 Cr</span>
		                                        <span class="sub">total returns</span>
		                                    </div>
		                                    <div class="chart-label label-regular">
		                                        <span class="amt" id="regularFund"><i class="fa fa-usd">$</i>1.64 Cr</span>
		                                        <span class="sub">investment amounts</span>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="calc-amt">
		                        <p class="calc-price" id="returnAmount">$. 34.06 L</p>
		                        <p>extra returns for you </p>
		                    </div>
			</div>
		</div>
	</div>
	

	</div>
</section>
<!-- Plans Calculator Section Ends Here -->
