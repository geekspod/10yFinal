<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<section class="sign-up-banner container" style="    background: #333;
    margin: 0px;
    padding: 40px;
    color: white">
			<div class="inner">
				<div class="sg-heading">
					<h1>Employee Data Collection</h1>
				</div>
				<div class="sgn-form" style="font-size: 18px">
				<div class="registerresult"></div>
                <form role="form" method="post" action="<?php echo base_url() ; ?>login/data_collection" class="data_collection" id="data_collection">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

					
						<div class="row">
							<input type="hidden" class="role" name="role" value="<?php echo $this->uri->segment(3) ; ?>">
							<input type="hidden" class="role" name="email" value="<?php echo $email ; ?>">

							<div class="col-md-6" style=" width: 84%">
								<label class="fn">Name</label>
								<input type="text" class="form-control"name="name" id="name" placeholder="Enter Your Full Name" name="name"  style="margin-bottom: 20px">
							</div>
							
							<?php echo "<br>";?>
							
							<label class="col-sm-2 control-label" style="width:51%;margin-bottom: 20px">Select Gender*</label>
								<div class="col-sm-4" style=";margin-bottom: 20px">
								<select class="form-control m-b" name="gender" id="gender" >
								<option value="male" <?php { echo "Selected";} ?> >Male</option>
								<option value="female" <?php { echo "Selected";} ?> >Female</option>
								<option value="Other" <?php { echo "Selected";} ?> >Other</option>
								</select>
							     </div>
							
<?php echo "<br>";echo "<br>";echo "<br>";?>

						<label class="col-sm-2 control-label" style="width:51%;margin-bottom: 20px">Select Department*</label>
								<div class="col-sm-4" style=";margin-bottom: 20px">
								<select class="form-control m-b" name="department" id="department" >
								<option value="Engineering" <?php { echo "Selected";} ?> >Engineering</option>
								<option value="Management" <?php { echo "Selected";} ?> >Management</option>
								<option value="Social Science" <?php { echo "Selected";} ?> >Social Science</option>
								<option value="Natural Science" <?php { echo "Selected";} ?> >Natural Science</option>
								<option value="Other" <?php { echo "Selected";} ?> >Other</option>
								</select>
							     </div>
						<label class="col-sm-2 control-label" style="width:51%">No of Years in Nayatel*</label>
								<div class="col-sm-4" style=";margin-bottom: 20px">
								<select class="form-control m-b" name="tenure" id="tenure" >
								<option value="1" <?php { echo "Selected";} ?> >1</option>
								<option value="2" <?php { echo "Selected";} ?> >2</option>
								<option value="3" <?php { echo "Selected";} ?> >3</option>
								<option value="4" <?php { echo "Selected";} ?> >4</option>
								<option value="5" <?php { echo "Selected";} ?> >5</option>
								<option value="5+" <?php { echo "Selected";} ?> >5+</option>
								<option value="Other" <?php { echo "Selected";} ?> >Other</option>
								</select>
							     </div>
                        
								 <?php echo "<br>";echo "<br>";echo "<br>";?>

                       
							<label class="col-sm-2 control-label" style="width:51%;margin-bottom: 20px">Select Location*</label>
								<div class="col-sm-4" style=";margin-bottom: 20px">
								<select class="form-control m-b" name="location" id="location" >
								<option value="Faisalabad" <?php { echo "Selected";} ?> >Faisalabad</option>
								<option value="Sahiwal" <?php { echo "Selected";} ?> >Sahiwal</option>
								<option value="Sialkot" <?php { echo "Selected";} ?> >Sialkot</option>
								<option value="Islamabad" <?php { echo "Selected";} ?> >Islamabad</option>
								<option value="Rawalpindi" <?php { echo "Selected";} ?> >Rawalpindi</option>
								<option value="Other" <?php { echo "Selected";} ?> >Other</option>
								</select>
							     </div>
							

								 <label class="col-sm-2 control-label" style="width:51%;margin-bottom: 20px">Select Age*</label>
								<div class="col-sm-4">
								<select class="form-control m-b" name="age" id="age" >
								<option value="Faisalabad" <?php { echo "Selected";} ?> >15</option>
								<option value="Sahiwal" <?php { echo "Selected";} ?> >16</option>
								<option value="Sialkot" <?php { echo "Selected";} ?> >17</option>
								<option value="Islamabad" <?php { echo "Selected";} ?> >18</option>
								<option value="Rawalpindi" <?php { echo "Selected";} ?> >19</option>
								<option value="Faisalabad" <?php { echo "Selected";} ?> >20</option>
								<option value="Sahiwal" <?php { echo "Selected";} ?> >21</option>
								<option value="Sialkot" <?php { echo "Selected";} ?> >22</option>
								<option value="Islamabad" <?php { echo "Selected";} ?> >23</option>
								<option value="Rawalpindi" <?php { echo "Selected";} ?> >24</option>
								<option value="Faisalabad" <?php { echo "Selected";} ?> >25</option>
								<option value="Sahiwal" <?php { echo "Selected";} ?> >26</option>
								<option value="Sialkot" <?php { echo "Selected";} ?> >27</option>
								<option value="Islamabad" <?php { echo "Selected";} ?> >28</option>
								<option value="Rawalpindi" <?php { echo "Selected";} ?> >29</option>
								<option value="Faisalabad" <?php { echo "Selected";} ?> >30</option>
								<option value="Sahiwal" <?php { echo "Selected";} ?> >31</option>
								<option value="Sialkot" <?php { echo "Selected";} ?> >32</option>
								<option value="Islamabad" <?php { echo "Selected";} ?> >33</option>
								<option value="Rawalpindi" <?php { echo "Selected";} ?> >34</option>
								<option value="Faisalabad" <?php { echo "Selected";} ?> >35</option>
								<option value="Sahiwal" <?php { echo "Selected";} ?> >36</option>
								<option value="Sialkot" <?php { echo "Selected";} ?> >37</option>
								<option value="Islamabad" <?php { echo "Selected";} ?> >38</option>
								<option value="Rawalpindi" <?php { echo "Selected";} ?> >39</option>
								<option value="Faisalabad" <?php { echo "Selected";} ?> >40</option>
								<option value="Sahiwal" <?php { echo "Selected";} ?> >41</option>
								<option value="Sialkot" <?php { echo "Selected";} ?> >42</option>
								<option value="Islamabad" <?php { echo "Selected";} ?> >43</option>
								<option value="Rawalpindi" <?php { echo "Selected";} ?> >44</option>
								<option value="Faisalabad" <?php { echo "Selected";} ?> >45</option>
								<option value="Sahiwal" <?php { echo "Selected";} ?> >46</option>
								<option value="Sialkot" <?php { echo "Selected";} ?> >47</option>
								<option value="Islamabad" <?php { echo "Selected";} ?> >48</option>
								<option value="Rawalpindi" <?php { echo "Selected";} ?> >49</option>
								<option value="Faisalabad" <?php { echo "Selected";} ?> >50</option>
								<option value="Sahiwal" <?php { echo "Selected";} ?> >51</option>
								<option value="Sialkot" <?php { echo "Selected";} ?> >52</option>
								<option value="Islamabad" <?php { echo "Selected";} ?> >53</option>
								<option value="Rawalpindi" <?php { echo "Selected";} ?> >54</option>
								<option value="Faisalabad" <?php { echo "Selected";} ?> >55</option>
								<option value="Sahiwal" <?php { echo "Selected";} ?> >56</option>
								<option value="Sialkot" <?php { echo "Selected";} ?> >57</option>
								<option value="Islamabad" <?php { echo "Selected";} ?> >58</option>
								<option value="Rawalpindi" <?php { echo "Selected";} ?> >59</option>
								<option value="Faisalabad" <?php { echo "Selected";} ?> >60</option>
								<option value="Sahiwal" <?php { echo "Selected";} ?> >61</option>
								<option value="Sialkot" <?php { echo "Selected";} ?> >62</option>
								<option value="Islamabad" <?php { echo "Selected";} ?> >63</option>
								<option value="Rawalpindi" <?php { echo "Selected";} ?> >64</option>
								<option value="Faisalabad" <?php { echo "Selected";} ?> >65</option>
								<option value="Sahiwal" <?php { echo "Selected";} ?> >66</option>
								<option value="Sialkot" <?php { echo "Selected";} ?> >67</option>
								<option value="Islamabad" <?php { echo "Selected";} ?> >68</option>
								<option value="Rawalpindi" <?php { echo "Selected";} ?> >69</option>
								<option value="Faisalabad" <?php { echo "Selected";} ?> >70</option>
								<option value="Other" <?php { echo "Selected";} ?> >Other</option>
							
								</select>
							     </div>

								 <?php echo "<br>";echo "<br>";echo "<br>";?> 
								 <div class="form-group" style="margin-left: 15px">
							<label  class="fn" style="width:51%">Job Title</label>
							<input type="text" class="form-control"  id="job_title" name="job_title" placeholder="Please Enter Your Job Title" style="width: 80%">
						</div>
						
                        <div class="form-group" style="margin-left: 15px">
							<label  class="fn">Reporting To</label>
							<input type="text" class="form-control" id="reporting" name="reporting" placeholder="Reporting" style="width: 80%">
						</div>
						
                        <button name="form2" type="submit" class="btn btn-primary sb-btn loginbtn" style="margin-left: 105px">Submit</button>
                       
					</form>
					
				</div>
			</div>
		</section>
		
		<script src="<?php echo base_url() ; ?>assets/js/jquery-3.5.0.min.js"> </script>
		<script src="<?php echo base_url() ; ?>assets/js/bootstrap.bundle.min.js"> </script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript">
  if (confirm('Purpose of data collection, number of test to be taken and their names, and a disclaimer that his or her personal identity will not be revealed.')) 
  {
  // Save it!
  //console.log('Thing was saved to the database.');
} else {
  alert('Kindly press ok button.');
  if (confirm('Purpose of data collection, number of test to be taken and their names, and a disclaimer that his or her personal identity will not be revealed.')) 
  {
  }
  else{
	alert('Failure');
	(confirm('Purpose of data collection, number of test to be taken and their names, and a disclaimer that his or her personal identity will not be revealed.')) 
	
}
}
</script>
		
	</body>
</html>
