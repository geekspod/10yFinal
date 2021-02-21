<?php 
	foreach($game_detail as $game)
	{
		$getbannerimage = $this->db->get_where('tbl_portfolio_photo',array('portfolio_id' => $game['id']))->row();
?>
<section class="match-banner" style="background : url('<?php echo base_url() ; ?>public/uploads/portfolio_photos/<?php echo $getbannerimage->photo ; ?>');background-size:cover">							   <!-- banner-section-start-->
	<div class="container">
		<div class="dropdown duty">
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">call of duty
			<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="#">CS</a></li>
				<li><a href="#">CS</a></li>
				<li><a href="#">CS</a></li>
			</ul>
		</div>
		<div class="dropdown xbox">
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Xbox or PS4 with a Controller
			<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="#">CS</a></li>
				<li><a href="#">CS</a></li>
				<li><a href="#">CS</a></li>
			</ul>
		</div>
		<div class="entry">
			<span>$<?php echo $game['entry_fees'] ; ?> Entry</span>
			<span  data-toggle="modal" data-target="#myModal">match setting<i class="fa fa-angle-down" aria-hidden="true"></i>
			</span><br>
			<div class="fnd-mat">
				<a href="#">find a match</a>
			</div>	
			<div class="making">
				<span>matchmaking<span>tournamnet</span><span>2v2</span></span>
			</div>
		</div>
	</div>
</section>													<!-- banner-section-end-->

<section class="duty-sec">									 <!--Duty-Section-start-->
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="mod">
					<span>5 Steps To Your Free $5 <p>167:57:06 <br> Expires In</p></span>
					 <div class="fbdm"></div>
					 <span class="fve-dol">$5</span>
					<div class="opp">
						<p>play a Matchmaking Match</p>
						<a href="#">find an opponent</a>
					</div>	
				</div>
				<h6>instant matches</h6>
				<div class="mat-fg">
					<h6>$5 match</h6>
					<img src="<?php echo base_url() ; ?>assets/images/09.png">
					<p>1v1 Warzone Kill Race</p>
					<span>Battle Royale    No fill    Most Kills wins</span>
					<div class="fgh"></div>
					<img src="<?php echo base_url() ; ?>assets/images/10.png">
					<p>6 Players</p>
					<span>Viewing this match</span>
					<a href="#">playmatch</a>
				</div>
				<div class="mat-fg hji">
					<h6>$5 match</h6>
					<img src="<?php echo base_url() ; ?>assets/images/09.png">
					<p>1v1 Warzone Kill Race</p>
					<span>Battle Royale    No fill    Most Kills wins</span>
					<div class="fgh"></div>
					<img src="<?php echo base_url() ; ?>assets/images/10.png">
					<p>6 Players</p>
					<span>Viewing this match</span>
					<a href="#">playmatch</a>
				</div>
				<h6>tournaments</h6>
				<div class="fikl">
					<p>$100 1v1 WarZone</p>
					<span>Tournament</span><br>
					<a href="#">friday 9pm ET</a>
				</div>
				<div class="rookies">
					<h6>Rookies Friday $100 1v1 Warzone</h6>
					<p>Battle Royale</p>
					<h6>COD: Modern Warfare</h6>
					<p>Xbox or PS4 with a Controller</p>
					<h6 class="pr">$100.00</h6>
					<p class="pr">Total Prizes</p>
					<h6>23 of 128 Players</h6>
					<p>Tomorrow at 3:00PM PKT</p>
					<a href="#">playmatch</a>
				</div>
				<div class="rookies cod">
					<h6>Rookies Friday $100 1v1 Warzone</h6>
					<p>Battle Royale</p>
					<h6>COD: Modern Warfare</h6>
					<p>Xbox or PS4 with a Controller</p>
					<h6 class="pr">$100.00</h6>
					<p class="pr">Total Prizes</p>
					<h6>23 of 128 Players</h6>
					<p>Tomorrow at 3:00PM PKT</p>
					<a href="#">playmatch</a>
				</div>
			</div>
			<div class="col-md-5">
				<div class="refer">
					<h6>Refer A Friend, Get $10</h6>
				</div>
				<div class="war">
					<img src="<?php echo base_url() ; ?>assets/images/06.png">
				 </div>
				 <div class="cal-of-chat">
				 	<h6>Call Of Duty Chat</h6>
				 	<select>
			   			<option>755 online</option>
					</select>
					<div class="fgr"></div>
					<div class="apolo">
					   <img src="<?php echo base_url() ; ?>assets/images/07.png">
					   <p>Apollo <br> Aless you sexy bitch<br>
						you fall asleep lastnight?</p>
					</div>
					<div class="apolo">
					   <img src="<?php echo base_url() ; ?>assets/images/07.png">
					   <p>Apollo <br> Aless you sexy bitch<br>
						you fall asleep lastnight?</p>
					</div>
					<div class="msg">
						<form>
							<input type="text" name="name" placeholder="type your message here">
							<span><input type="button" name="button" value="send" class="sen"></span>
						</form>
					</div>
				 </div>
				 <div class="rec-opp">
				 	<h6>RECENT OPPONENTS</h6>
				 	<p>COD: MODERN WARFARE | XBOX OR PS4 WITH A
						CONTROLLER</p>
					<div class="fgr"></div>
					<p>You don't have any recent opponents for COD:<br>
						Modern Warfare using Xbox or PS4 with a Controller<br>
						Try challenging someone new!</p>	
				 </div>
			</div>
		</div>
	</div>
</section>                                                      <!--Duty-Section-End-->

<section class="ui">
    <div class="container">
    	<div class="table-responsive">
         <table class="table">
  	 	   <tbody>
  	 	 	 <tr>
  	 	 	 <td>Saturday $100 1v1 Warzone -
					Social Media Tournament of the day<br>
					Battle Royale </td>
				<td>0 of 128 Players</td>
				<td>Sun june 21 at 3:00 AM PKT <br>
				    Start Time </td> 
				<td>$100.00 <br>
				Total Prizes </td>
				<td>$1.50 <br>Entry</td>	
  	 	 	 </tr>
  	 	 	 <tr>
  	 	 	 	<td>Saturday $100 1v1 Warzone -
					Social Media Tournament of the day<br>
					Battle Royale </td>
				<td>0 of 128 Players</td>
				<td>Sun june 21 at 3:00 AM PKT <br>
				    Start Time </td> 
				<td>$100.00 <br>
				Total Prizes </td>
				<td>$1.50 <br>Entry</td>		
  	 	 	 </tr>
  	 	 	 <tr>
  	 	 	 	<td>Saturday $100 1v1 Warzone -
					Social Media Tournament of the day<br>
					Battle Royale </td>
				<td>0 of 128 Players</td>
				<td>Sun june 21 at 3:00 AM PKT <br>
				    Start Time </td> 
				<td>$100.00 <br>
				Total Prizes </td>
				<td>$1.50 <br>Entry</td>		
  	 	 	 </tr>
  	 	 	 <tr>
  	 	 	 	<td>Saturday $100 1v1 Warzone -
					Social Media Tournament of the day<br>
					Battle Royale </td>
				<td>0 of 128 Players</td>
				<td>Sun june 21 at 3:00 AM PKT <br>
				    Start Time </td> 
				<td>$100.00 <br>
				Total Prizes </td>
				<td>$1.50 <br>Entry</td>		
  	 	 	 </tr>
  	 	 	 <tr>
  	 	 	 	<td>Saturday $100 1v1 Warzone -
					Social Media Tournament of the day<br>
					Battle Royale </td>
				<td>0 of 128 Players</td>
				<td>Sun june 21 at 3:00 AM PKT <br>
				    Start Time </td> 
				<td>$100.00 <br>
				Total Prizes </td>
				<td>$1.50 <br>Entry</td>		
  	 	 	 </tr>
  	 	   </tbody>
  	     </table>
  	   </div>
  	   <div class="ld-my">
  	     <a href="#">load more</a>
  	   </div>
  	   <h6 class="tm">team play matches</h6>
  	   <div class="row">
  	   	<div class="col-md-6">
  	   		<div class="ty">
  	   			<h6>COD: Modern Warfare</h6>
  	   			<p>2v2 Battle Royale</p>
  	   			<div class="pi"></div>
  	   			<p>Xbox or PS4 with a Controller</p>
  	   			<h6>$2.50</h6>
  	   			<p>Entry</p>
  	   			<div class="pi"></div>
  	   			<h6>$9.00</h6>
  	   			<p>Prize</p>
  	   			<div class="pi"></div>
  	   			<img src="<?php echo base_url() ; ?>assets/images/07.png">
  	   			<h6>excelledmafia</h6>
  	   			<a href="#">playmatch</a>
  	   		</div>
  	   	</div>
  	   	<div class="col-md-6">
  	   		<div class="crm">
  	   			<a href="#">create a team match</a>
  	   		</div>
  	   	</div>
  	   </div>
    </div>	
</section>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <p>search filters</p>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Format
        <?php $getformat = $this->db->get_where('tbl_portfolio',array('game_id' => $game['id'],'category_id' => 'format'))->result(); ?>
        <div class="ki">
        <?php foreach($getformat as $format){ ?>
        	<h6><?php echo $format->name ; ?></h6>
        	<p><?php echo $format->short_content ; ?></p>
        	<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
        	<div class="gun"></div>
        	<?php } ?>
        	
        </div>
        Rules
        <div class="rul">
        <?php $getrule = $this->db->get_where('tbl_portfolio',array('game_id' => $game['id'],'category_id' => 'rule'))->result(); ?>
        	<?php foreach($getrule as $rule){ ?>
	        	<h6><?php echo $rule->name ; ?></h6>
	        	<p><?php echo $rule->short_content ; ?></p>
	        	<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
	        	<div class="gun"></div>
        	<?php } ?>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <button type="button" class="btn btn-default">Done</button>
      </div>

    </div>
  </div>
</div>


<?php } ?>