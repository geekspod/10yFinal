<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

         <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/TimeCircles.css">
         <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/readme.css">




</head>
<body>
	<h1 style="text-align: center;">Organizational Values Assessment</h1>

<div class="container" style="margin-top:20px;">
<h1 style="text-align: center;">Remaining Time</h1>
<div class="someTimer" data-timer="<?php echo $time['test_time_slot']*60;?>" style="width: 300px; height: 100px; "></div>
<hr>

<!--<button class="btn btn-success start">Start</button>-->
<!--<button class="btn btn-danger stop">Stop</button>-->

</div>


<!--extra three minutes-->
<div class="container" style="margin-top:20px;">

<div class="someTimer2" data-timer="180" style="width: 300px; height: 100px; "></div>
<hr>


</div>
<!--end-->





<section class="content-header" style="display:none">
	<div class="content-header-left">
    <?php echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>";?>
		<h1>Nayatel’s Value Statements</h1>
	</div>
	<!--<div class="content-header-right">-->
	<!--	<a href="<?php echo base_url(); ?>admin/categories/personal_values_assessment_questions_data" class="btn btn-primary btn-sm">Add New</a>-->
	<!--</div>-->
</section>
<form id="myform" class="myform" method="post" name="myform">

<div id="message"></div>
 <input type="hidden" class="email" name="email" value="<?php echo $dashboard_data['email'];?>"
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">


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

      <div class="box box-info">

        <div class="box-body table-responsive" style="width: 80%;
    margin: 0 auto">
            <!--<h1 style="    color: #4172a5">Questions</h1>-->
          <table id="checkboxes" class="table table-bordered table-striped">
			<thead>
			    <tr>
			        <th>SL</th>
			        <th>Statements</th>
                    <th>Never</th>
                    <th>Rarely</th>
                    <th>Sometimes</th>
                    <th>Often</th>
                    <th>Always</th>

                    <!-- <th>Add Score</th> -->
			    </tr>
			</thead>
            <tbody>
            	<?php
                $i=0;

            	$i++;
            		?>
					<tr>
	                    <td><?php echo "1"; ?></td>
	                    <td class="q_name"><?php echo $personal_values_assessment[0]['name']; ?></td>
                        <input type="hidden" value="<?php echo $personal_values_assessment[0]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
	                     <!--<input type="hidden" value="<?php echo $personal_values_assessment[0]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
                        <td><input type="checkbox" id="checkbox1" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[0]['value']==0 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox1" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[0]['value']==1 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox1" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[0]['value']==2 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox1" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[0]['value']==3 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox1" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[0]['value']==5 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                                            </tr>
                                            <!--2nd row-->


                                            <tr>
<td><?php echo "2"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[1]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[1]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[1]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox2" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[1]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox2" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[1]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox2" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[1]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox2" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[1]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox2" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[1]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

 <!--3-->
      <tr>
<td><?php echo "3"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[2]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[2]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[2]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox3" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[2]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox3" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[2]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox3" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[2]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox3" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[2]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox3" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[2]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--4-->

      <tr>
<td><?php echo "4"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[3]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[3]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[3]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox4" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[3]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox4" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[3]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox4" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[3]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox4" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[3]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox4" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[3]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--5-->


<tr>
<td><?php echo "5"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[4]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[4]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[4]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox5" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[4]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox5" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[4]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox5" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[4]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox5" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[4]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox5" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[4]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--6-->
     <tr>
<td><?php echo "6"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[5]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[5]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[5]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox6" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[5]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox6" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[5]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox6" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[5]['value']==2 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox6" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[5]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox6" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[5]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>
<!--7-->

<tr>
<td><?php echo "7"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[6]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[6]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[6]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox7" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[6]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox7" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[6]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox7" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[6]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox7" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[6]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox7" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[6]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--8-->
<tr>
<td><?php echo "8"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[7]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[7]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[7]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox8" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[7]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox8" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[7]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox8" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[7]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox8" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[7]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox8" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[7]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--9-->
<tr>
<td><?php echo "9"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[8]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[8]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[8]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox9" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[8]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox9" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[8]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox9" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[8]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox9" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[8]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox9" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[8]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>
<!--10-->
<tr>
<td><?php echo "10"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[9]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[9]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[9]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox10" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[9]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox10" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[9]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox10" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[9]['value']==2 ? 'checked' : '');?>
data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox10" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[9]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox10" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[9]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "11"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[10]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[10]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[10]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox11" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[10]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox11" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[10]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox11" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[10]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox11" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[10]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox11" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[10]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "12"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[11]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[11]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[11]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox12" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[11]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox12" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[11]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox12" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[11]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox12" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[11]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox12" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[11]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "13"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[12]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[12]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[12]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox13" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[12]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox13" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[12]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox13" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[12]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox13" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[12]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox13" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[12]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "14"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[13]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[13]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[13]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox14" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[13]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox14" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[13]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox14" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[13]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox14" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[13]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox14" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[13]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "15"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[14]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[14]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[14]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox15" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[14]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox15" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[14]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox15" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[14]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox15" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[14]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox15" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[14]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "16"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[15]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[15]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[15]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox16" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[15]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox16" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[15]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox16" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[15]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox16" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[15]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox16" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[15]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "17"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[16]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[16]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[16]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox17" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[16]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox17" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[16]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox17" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[16]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox17" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[16]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox17" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[16]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "18"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[17]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[17]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[17]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox18" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[17]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox18" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[17]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox18" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[17]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox18" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[17]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox18" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[17]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "19"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[18]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[18]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[18]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox19" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[18]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox19" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[18]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox19" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[18]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox19" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[18]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox19" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[18]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "20"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[19]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[19]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[19]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox20" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[19]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox20" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[19]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox20" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[19]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox20" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[19]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox20" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[19]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>
<!--21-->
<tr>
<td><?php echo "21"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[20]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[20]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[20]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox21" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[20]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox21" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[20]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox21" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[20]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox21" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[20]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox21" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[20]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "22"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[21]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[21]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[21]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox22" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[21]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox22" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[21]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox22" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[21]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox22" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[21]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox22" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[21]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "23"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[22]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[22]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[22]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox23" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[22]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox23" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[22]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox23" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[22]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox23" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[22]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox23" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[22]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "24"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[23]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[23]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[23]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox24" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[23]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox24" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[23]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox24" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[23]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox24" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[23]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox24" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[23]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "25"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[24]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[24]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[24]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox25" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[24]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox25" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[24]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox25" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[24]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox25" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[24]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox25" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[24]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "26"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[25]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[25]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[25]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox26" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[25]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox26" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[25]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox26" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[25]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox26" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[25]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox26" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[25]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "27"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[26]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[26]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[26]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox27" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[26]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox27" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[26]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox27" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[26]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox27" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[26]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox27" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[26]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "28"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[27]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[27]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[27]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox28" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[27]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox28" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[27]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox28" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[27]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox28" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[27]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox28" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[27]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "29"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[28]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[28]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[28]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox29" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[28]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox29" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[28]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox29" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[28]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox29" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[28]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox29" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[28]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "30"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[29]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[29]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[29]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox30" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[29]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox30" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[29]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox30" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[29]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox30" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[29]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox30" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[29]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "31"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[30]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[30]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[30]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox31" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[30]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox31" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[30]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox31" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[30]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox31" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[30]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox31" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[30]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "32"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[31]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[31]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[31]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox32" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[31]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox32" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[31]['value']==1 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox32" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[31]['value']==2 ? 'checked' : '');?>
  data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox32" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[31]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox32" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[31]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "33"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[32]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[32]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[32]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox33" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[32]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox33" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[32]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox33" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[32]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox33" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[32]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox33" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[32]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "34"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[33]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[33]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[33]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox34" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[33]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox34" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[33]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox34" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[33]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox34" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[33]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox34" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[33]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "35"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[34]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[34]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[34]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox35" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[34]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox35" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[34]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox35" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[34]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox35" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[34]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox35" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[34]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "36"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[35]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[35]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[35]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox36" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[35]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox36" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[35]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox36" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[35]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox36" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[35]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox36" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[35]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "37"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[36]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[36]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[36]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox37" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[36]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox37" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[36]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox37" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[36]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox37" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[36]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox37" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[36]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "38"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[37]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[37]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[37]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox38" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[37]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox38" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[37]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox38" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[37]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox38" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[37]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox38" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[37]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "39"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[38]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[38]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[38]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox39" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[38]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox39" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[38]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox39" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[38]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox39" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[38]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox39" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[38]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "40"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[39]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[39]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[39]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox40" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[39]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox40" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[39]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox40" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[39]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox40" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[39]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox40" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[39]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "41"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[40]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[40]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[40]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox41" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[40]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox41" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[40]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox41" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[40]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox41" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[40]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox41" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[40]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "42"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[41]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[41]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[41]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox42" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[41]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox42" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[41]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox42" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[41]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox42" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[41]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox42" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[41]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "43"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[42]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[42]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[42]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox43" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[42]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox43" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[42]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox43" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[42]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox43" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[42]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox43" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[42]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "44"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[43]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[43]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[43]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox44" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[43]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox44" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[43]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox44" class="checkbox" name="checkbox[]" "value="2" <?php if($personal_values_assessment[43]['value']=="2"){echo "checked";} ?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox44" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[43]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox44" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[43]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "45"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[44]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[44]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[44]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox45" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[44]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox45" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[44]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox45" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[44]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox45" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[44]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox45" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[44]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "46"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[45]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[45]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[45]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox46" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[45]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox46" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[45]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox46" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[45]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox46" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[45]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox46" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[45]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "47"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[46]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[46]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[46]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox47" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[46]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox47" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[46]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox47" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[46]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox47" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[46]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox47" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[46]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "48"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[47]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[47]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[47]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox48" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[47]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox48" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[47]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox48" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[47]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox48" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[47]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox48" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[47]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "49"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[48]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[48]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[48]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox49" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[48]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox49" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[48]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox49" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[48]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox49" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[48]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox49" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[48]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "50"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[49]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[49]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[49]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox50" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[49]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox50" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[49]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox50" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[49]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox50" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[49]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox50" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[49]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->
<tr>
<td><?php echo "51"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[50]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[50]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[50]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox51" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[50]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox51" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[50]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox51" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[50]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox51" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[50]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox51" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[50]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "52"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[51]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[51]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[51]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox52" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[51]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox52" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[51]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox52" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[51]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox52" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[51]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox52" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[51]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "53"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[52]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[52]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[52]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox53" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[52]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox53" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[52]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox53" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[52]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox53" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[52]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox53" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[52]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "54"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[53]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[53]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[53]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox54" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[53]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox54" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[53]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox54" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[53]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox54" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[53]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox54" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[53]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "55"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[54]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[54]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[54]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox55" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[54]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox55" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[54]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox55" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[54]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox55" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[54]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox55" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[54]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "56"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[55]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[55]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[55]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox56" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[55]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox56" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[55]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox56" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[55]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox56" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[55]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox56" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[55]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "57"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[56]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[56]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[56]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox57" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[56]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox57" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[56]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox57" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[56]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox57" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[56]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox57" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[56]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "58"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[57]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[57]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[57]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox58" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[57]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox58" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[57]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox58" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[57]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox58" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[57]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox58" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[57]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "59"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[58]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[58]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[58]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox59" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[58]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox59" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[58]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox59" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[58]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox59" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[58]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox59" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[58]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "60"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[59]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[59]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[59]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox60" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[59]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox60" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[59]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox60" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[59]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox60" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[59]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox60" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[59]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "61"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[60]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[60]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[60]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox61" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[60]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox61" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[60]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox61" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[60]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox61" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[60]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox61" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[60]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "62"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[61]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[61]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[61]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox62" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[61]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox62" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[61]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox62" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[61]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox62" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[61]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox62" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[61]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "63"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[62]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[62]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[62]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox63" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[62]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox63" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[62]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox63" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[62]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox63" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[62]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox63" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[62]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->

<tr>
<td><?php echo "64"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[63]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[63]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[63]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox64" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[63]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox64" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[63]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox64" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[63]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox64" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[63]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox64" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[63]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "65"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[64]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[64]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[64]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox65" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[64]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox65" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[64]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox65" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[64]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox65" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[64]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox65" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[64]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "66"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[65]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[65]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[65]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox66" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[65]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox66" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[65]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox66" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[65]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox66" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[65]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox66" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[65]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "67"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[66]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[66]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[66]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox67" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[66]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox67" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[66]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox67" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[66]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox67" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[66]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox67" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[66]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "68"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[67]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[67]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[67]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox68" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[67]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox68" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[67]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox68" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[67]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox68" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[67]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox68" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[67]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "69"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[68]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[68]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[68]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox69" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[68]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox69" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[68]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox69" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[68]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox69" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[68]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox69" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[68]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "70"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[69]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[69]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $personal_values_assessment[69]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox70" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[69]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox70" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[69]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox70" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[69]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox70" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[69]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox70" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[69]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


//71
<tr>
<td><?php echo "71"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[70]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[70]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox71" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[70]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox71" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[70]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox71" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[70]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox71" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[70]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox71" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[70]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "72"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[71]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[71]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox72" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[71]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox72" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[71]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox72" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[71]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox72" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[71]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox72" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[71]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "73"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[72]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[72]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox73" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[72]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox73" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[72]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox73" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[72]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox73" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[72]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox73" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[72]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "74"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[73]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[73]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox74" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[73]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox74" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[73]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox74" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[73]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox74" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[73]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox74" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[73]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "75"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[74]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[74]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox75" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[74]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox75" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[74]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox75" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[74]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox75" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[74]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox75" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[74]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "76"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[75]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[75]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox76" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[75]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox76" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[75]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox76" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[75]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox76" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[75]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox76" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[75]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "77"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[76]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[76]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox77" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[76]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox77" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[76]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox77" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[76]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox77" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[76]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox77" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[76]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "78"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[77]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[77]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox78" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[77]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox78" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[77]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox78" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[77]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox78" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[77]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox78" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[77]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "79"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[78]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[78]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox79" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[78]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox79" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[78]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox79" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[78]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox79" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[78]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox79" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[78]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "80"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[79]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[79]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox80" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[79]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox80" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[79]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox80" class="checkbox" name="checkbox[]" "value="2" <?php if($personal_values_assessment[79]['value']=="2"){echo "checked";} ?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox80" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[79]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox80" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[79]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "81"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[80]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[80]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox81" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[80]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox81" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[80]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox81" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[80]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox81" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[80]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox81" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[80]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "82"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[81]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[81]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox82" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[81]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox82" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[81]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox82" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[81]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox82" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[81]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox82" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[81]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "83"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[82]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[82]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox83" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[82]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox83" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[82]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox83" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[82]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox83" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[82]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox83" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[82]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "84"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[83]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[83]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox84" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[83]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox84" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[83]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox84" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[83]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox84" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[83]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox84" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[83]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "85"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[84]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[84]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox85" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[84]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox85" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[84]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox85" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[84]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox85" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[84]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox85" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[84]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "86"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[85]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[85]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox86" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[85]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox86" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[85]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox86" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[85]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox86" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[85]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox86" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[85]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->
<tr>
<td><?php echo "87"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[86]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[86]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox87" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[86]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox87" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[86]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox87" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[86]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox87" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[86]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox87" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[86]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "88"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[87]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[87]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox88" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[87]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox88" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[87]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox88" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[87]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox88" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[87]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox88" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[87]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "89"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[88]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[88]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox89" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[88]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox89" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[88]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox89" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[88]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox89" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[88]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox89" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[88]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "90"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[89]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[89]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox90" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[89]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox90" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[89]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox90" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[89]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox90" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[89]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox90" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[89]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "91"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[90]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[90]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox91" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[90]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox91" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[90]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox91" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[90]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox91" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[90]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox91" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[90]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "92"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[91]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[91]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox92" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[91]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox92" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[91]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox92" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[91]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox92" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[91]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox92" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[91]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "93"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[92]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[92]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox93" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[92]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox93" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[92]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox93" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[92]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox93" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[92]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox93" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[92]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "94"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[93]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[93]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox94" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[93]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox94" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[93]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox94" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[93]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox94" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[93]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox94" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[93]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "95"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[94]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[94]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox95" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[94]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox95" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[94]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox95" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[94]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox95" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[94]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox95" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[94]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "96"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[95]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[95]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox96" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[95]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox96" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[95]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox96" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[95]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox96" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[95]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox96" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[95]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "97"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[96]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[96]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox97" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[96]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox97" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[96]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox97" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[96]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox97" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[96]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox97" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[96]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "98"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[97]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[97]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox98" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[97]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox98" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[97]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox98" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[97]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox98" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[97]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox98" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[97]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "99"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[98]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[98]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox99" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[98]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox99" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[98]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox99" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[98]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox99" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[98]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox99" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[98]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->

<tr>
<td><?php echo "100"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[99]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[99]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox100" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[99]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox100" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[99]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox100" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[99]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox100" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[99]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox100" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[99]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "101"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[100]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[100]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox101" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[100]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox101" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[100]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox101" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[100]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox101" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[100]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox101" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[100]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "102"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[101]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[101]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox102" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[101]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox102" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[101]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox102" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[101]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox102" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[101]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox102" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[101]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "103"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[102]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[102]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox103" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[102]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox103" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[102]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox103" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[102]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox103" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[102]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox103" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[102]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "104"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[103]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[103]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox104" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[103]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox104" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[103]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox104" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[103]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox104" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[103]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox104" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[103]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "105"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[104]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[104]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox105" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[104]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox105" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[104]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox105" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[104]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox105" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[104]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox105" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[104]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "106"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[105]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[105]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox106" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[105]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox106" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[105]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox106" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[105]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox106" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[105]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox106" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[105]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "107"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[106]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[106]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox107" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[106]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox107" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[106]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox107" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[106]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox107" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[106]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox107" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[106]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "108"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[107]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[107]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox108" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[107]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox108" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[107]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox108" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[107]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox108" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[107]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox108" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[107]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "109"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[108]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[108]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox109" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[108]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox109" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[108]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox109" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[108]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox109" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[108]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox109" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[108]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "110"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[109]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[109]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox110" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[109]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox110" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[109]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox110" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[109]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox110" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[109]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox110" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[109]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "111"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[110]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[110]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox111" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[110]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox111" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[110]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox111" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[110]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox111" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[110]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox111" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[110]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "112"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[111]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[111]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox112" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[111]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox112" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[111]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox112" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[111]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox112" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[111]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox112" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[111]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "113"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[112]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[112]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox113" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[112]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox113" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[112]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox113" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[112]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox113" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[112]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox113" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[112]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "114"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[113]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[113]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox114" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[113]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox114" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[113]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox114" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[113]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox114" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[113]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox114" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[113]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "115"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[114]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[114]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox115" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[114]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox115" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[114]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox115" class="checkbox" name="checkbox[]" "value="2" <?php if($personal_values_assessment[114]['value']=="2"){echo "checked";} ?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox115" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[114]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox115" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[114]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "116"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[115]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[115]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox116" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[115]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox116" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[115]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox116" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[115]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox116" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[115]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox116" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[115]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "117"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[116]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[116]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox117" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[116]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox117" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[116]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox117" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[116]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox117" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[116]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox117" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[116]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "118"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[117]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[117]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox118" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[117]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox118" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[117]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox118" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[117]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox118" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[117]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox118" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[117]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "119"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[118]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[118]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox119" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[118]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox119" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[118]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox119" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[118]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox119" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[118]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox119" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[118]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "120"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[119]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[119]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox120" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[119]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox120" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[119]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox120" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[119]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox120" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[119]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox120" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[119]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "121"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[120]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[120]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox121" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[120]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox121" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[120]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox121" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[120]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox121" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[120]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox121" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[120]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->
<tr>
<td><?php echo "122"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[121]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[121]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox122" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[121]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox122" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[121]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox122" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[121]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox122" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[121]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox122" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[121]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "123"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[122]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[122]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox123" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[122]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox123" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[122]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox123" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[122]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox123" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[122]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox123" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[122]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "124"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[123]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[123]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox124" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[123]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox124" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[123]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox124" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[123]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox124" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[123]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox124" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[123]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "125"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[124]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[124]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox125" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[124]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox125" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[124]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox125" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[124]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox125" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[124]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox125" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[124]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "126"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[125]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[125]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox126" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[125]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox126" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[125]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox126" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[125]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox126" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[125]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox126" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[125]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "127"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[126]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[126]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox127" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[126]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox127" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[126]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox127" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[126]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox127" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[126]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox127" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[126]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "128"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[127]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[127]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox128" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[127]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox128" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[127]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox128" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[127]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox128" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[127]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox128" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[127]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "129"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[128]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[128]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox129" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[128]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox129" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[128]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox129" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[128]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox129" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[128]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox129" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[128]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "130"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[129]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[129]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox130" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[129]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox130" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[129]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox130" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[129]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox130" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[129]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox130" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[129]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "131"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[130]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[130]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox131" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[130]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox131" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[130]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox131" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[130]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox131" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[130]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox131" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[130]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "132"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[131]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[131]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox132" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[131]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox132" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[131]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox132" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[131]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox132" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[131]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox132" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[131]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "133"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[132]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[132]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox133" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[132]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox133" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[132]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox133" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[132]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox133" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[132]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox133" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[132]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "134"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[133]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[133]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox134" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[133]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox134" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[133]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox134" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[133]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox134" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[133]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox134" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[133]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->

<tr>
<td><?php echo "135"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[134]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[134]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox135" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[134]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox135" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[134]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox135" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[134]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox135" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[134]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox135" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[134]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "136"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[135]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[135]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox136" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[135]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox136" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[135]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox136" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[135]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox136" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[135]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox136" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[135]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "137"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[136]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[136]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox137" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[136]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox137" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[136]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox137" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[136]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox137" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[136]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox137" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[136]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "138"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[137]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[137]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox138" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[137]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox138" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[137]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox138" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[137]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox138" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[137]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox138" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[137]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "139"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[138]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[138]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox139" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[138]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox139" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[138]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox139" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[138]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox139" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[138]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox139" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[138]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "140"; ?></td>
<td class="q_name"><?php echo $personal_values_assessment[139]['name']; ?></td>
<input type="hidden" value="<?php echo $personal_values_assessment[139]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox140" class="checkbox" name="checkbox[]" value="0" <?php echo ($personal_values_assessment[139]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox140" class="checkbox" name="checkbox[]" value="1" <?php echo ($personal_values_assessment[139]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox140" class="checkbox" name="checkbox[]" value="2" <?php echo ($personal_values_assessment[139]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox140" class="checkbox" name="checkbox[]" value="3" <?php echo ($personal_values_assessment[139]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox140" class="checkbox" name="checkbox[]" value="5" <?php echo ($personal_values_assessment[139]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>






            </tbody>
          </table>
          <?php
          $i=70;
           if($i == '70'){


                    ?>
                    <div id="submit">
                    <button  id="submit" type="submit" name="submit" value="Submit" onclick="return submitForm()" class="btn btn-primary sb-btn loginbtn" style="width:16%; margin-left: 430px;
    margin-top: 25px">Submit</button>
    </div>
    <!--<button type="button" class="btn btn-primary"  id="Next"  name="Next" value="Next" onclick="return save_data()"  style="width:9%; margin-left:0px;-->
    <!--margin-top: 25px">Next</button>-->


   <div id="save_for_later" align="center">
    <button  id="save" type="submit" name="save" value="Save For Later"  onclick="return save_for_later()" class="btn btn-primary sb-btn loginbtn" style="width:16%; margin-left:0px;
    margin-top: 25px">Save For Later</button>
    </div>
    <!--                <input id="submit" type="submit" name="submit" value="Submit" onclick="return submitForm()" style="width:16%; margin-left: 430px;-->
    <!--margin-top: 25px" />-->
    </form>
 <div id="myResponse">

 </div>


<?php
}
?>






        </div>
      </div>
</section>

<!--<a href="#Modal2" class="btn btn-info btn-lg">Open modal</a>-->
<!-- Modal -->
<div id="Modal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
    <!--<h4 class="modal-title">Modal Header</h4>-->
  </div>
  <div class="modal-body">
    <p>Extra three minutes are given, kindly complete the test in require time.</p>
  </div>
  <div class="modal-footer">
      <a href="<?php echo base_url();?>login/nayatel_save_for_later_extra_time">
    <button type="button" value="OK" class="btn btn-success start" data-dismiss="modal">OK</button>
    </a>
  </div>
</div>

  </div>
</div>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                Are you sure want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Modal -->
<div class="bs-example">

    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn btn-primary">Instructions</button>
                    <!--<h5 class="modal-title">Instructions</h5>-->
                    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum id metus ac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet sagittis. In tincidunt orci sit amet.</p>
                </div>
                <div class="modal-footer">
                 <a href="<?php echo base_url();?>login/dashboard">   <button type="button" class="btn btn-secondary" >Save For Later</button></a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Proceed</button>
                </div>
            </div>
        </div>
    </div>
<!--end-->
<!--06-01-2020-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>-->
<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!--end-->

<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<script src="<?php echo base_url(); ?>public/js/TimeCircles.js" type="text/javascript"></script>
<script>
 var time22=[];
  var info=[];
   var checkbox1=[];
        var checkbox2=[];
        var checkbox3=[];

        var checkbox4=[];
        var checkbox5=[];
        var checkbox6=[];

        var checkbox7=[];
        var checkbox8=[];
        var checkbox9=[];

        var checkbox10=[];
        var checkbox11=[];
        var checkbox12=[];
        var checkbox13=[];

        var checkbox14=[];
        var checkbox15=[];
        var checkbox16=[];

        var checkbox17=[];
        var checkbox18=[];
        var checkbox19=[];

        var checkbox20=[];


        var checkbox21=[];
        var checkbox22=[];
        var checkbox23=[];

        var checkbox24=[];
        var checkbox25=[];
        var checkbox26=[];

        var checkbox27=[];
        var checkbox28=[];
        var checkbox29=[];

        var checkbox30=[];

        var checkbox31=[];
        var checkbox32=[];
        var checkbox33=[];

        var checkbox34=[];
        var checkbox35=[];
        var checkbox36=[];

        var checkbox37=[];
        var checkbox38=[];
        var checkbox39=[];

        var checkbox40=[];


         var checkbox51=[];
        var checkbox52=[];
        var checkbox53=[];

        var checkbox54=[];
        var checkbox55=[];
        var checkbox56=[];

        var checkbox57=[];
        var checkbox58=[];
        var checkbox59=[];

        var checkbox60=[];


        var checkbox61=[];
        var checkbox62=[];
        var checkbox63=[];

        var checkbox64=[];
        var checkbox65=[];
        var checkbox66=[];

        var checkbox67=[];
        var checkbox68=[];
        var checkbox69=[];

        var checkbox70=[];


  $("#submit").hide();
            var timeCircles = $(".someTimer").TimeCircles({

    "time": {
        "Days": {
            "text": "Days",
            "color": "#FFCC66",
            "show": false
        },
        "Hours": {
            "text": "Hours",
            "color": "#99CCFF",
            "show": false
        },
        "Minutes": {
            "text": "Minutes",
            "color": "#BBFFBB",
            "show": true
        },
        "Seconds": {
            "text": "Seconds",
            "color": "#FF9999",
            "show": true,

        }
    }

  });

            // Fade in and fade out are examples of how chaining can be done with TimeCircles
            // $(".fadeIn").click(function() {
            //     timeCircles.elements.last().fadeIn();
            // });
            // $(".fadeOut").click(function() {
            //     timeCircles.elements.last().fadeOut();
            // });

            // // Start and stop are methods applied on the public TimeCircles instance
            // $(".startTimer").click(function() {
            //     $(".someTimer").eq(1).TimeCircles().start();
            // });
            // $(".stopTimer").click(function() {
            //     $(".someTimer").eq(1).TimeCircles().stop();

            // });

// $(".start").click(function(){ $(".someTimer").TimeCircles().start(); });
// $(".stop").click(function(){ $(".someTimer").TimeCircles().stop(); });

setTimeout(function () {
       window.location.href = "http://10-yards.us-east-2.elasticbeanstalk.com/ci/login/dashboard"; //will redirect to your blog page (an ex: blog.html)
    }, 900000); //will call the function after 2 secs.


 time = $(".someTimer").TimeCircles().getTime();
//alert(time);
$('.someTimer').TimeCircles({ time: { Days: { show: false }, Hours: { show: false } }});

$('.someTimer').TimeCircles().addListener(function() {
   time22 = $('.someTimer').TimeCircles().getTime()

});

//alert(time22);
//899.995
				if(time < 01)
				{
				     //$('#myModal2').modal('show');
				   // alert("vdgdg") ;
					 $(".someTimer").TimeCircles().destroy();
					 // window.location.replace("ci/login/dashboard");


				}
</script>
<script>
function QueryViewModel(){

var self = this;
self.queuedValues=ko.observableArray([]);
}
</script>


<script>
$( document ).ready(function() {
    $('input[type="checkbox"]').on('change', function() {
      var checkedValue = $(this).prop('checked');
        $(this).closest('tr').find('input[type="checkbox"]').each(function(){
           $(this).prop('checked',false);
        });
        $(this).prop("checked",checkedValue);

    });
});
</script>
<script>
     function save_data() {

      if (!$("#checkSurfaceEnvironment-1").is(":checked")) {
    // do something if the checkbox is NOT checked
}
//alert(checkSurfaceEnvironment);
 }

</script>
<script>

 function submitForm2() {
var atLeastOneIsChecked = $('input[name="checkbox[]"]:checked').length == 10;
//alert(atLeastOneIsChecked);
}
</script>

<script type="text/javascript">
 var counter=[];
 counter=0;
 var save_for_later_values=[];
var checkboxes_length=[];
var length_value=[];

var arr = [];
$('input.checkbox:checkbox:checked').each(function () {
    arr.push($(this).val());
});
//alert(arr);
// var length_value=[];
 length_value=arr.length;
 //alert(length_value);

   var selected = [];
$('#checkboxes input[type="hidden"]').each(function() {
    selected.push($(this).attr('value'));
});
     //alert(selected);
     //questions_id

var values=[];
var values1=[];
var values2=[];
var values3=[];
 var currentRows=[];
 var arr_length=[];

 var table = [];

$( "#checkboxes tbody tr" ).on( "click", function() {
    counter++;
 currentRows = $(this).closest('tr').find('input[type="checkbox"]:checked').val();
 //alert(currentRows);
 arr.push(currentRows);
 arr_length=arr.length;

    var form = document.myform;
var dataString=[];
dataString = $(form).serialize();

var name = $(this).closest('tr').find('.q_name').text();
var dimensions_name = $(this).closest('tr').find('input[type="hidden"]').val();
 //var questions_id = $(this).closest('tr').find('input[type="hidden"]').val();
//alert(currentRows);
values.push(currentRows);
values1.push(name);
values2.push(dimensions_name);
//values3.push(questions_id);
 table = $ ('#checkboxes'). DataTable ();
 info = table.page.info ();
 info=info.page + 1;
//alert(info);

 if(info == 1){

$("#submit").hide();
$("#save_for_later").show();

checkbox1 = jQuery("#checkbox1:checked").length;
checkbox2 = jQuery("#checkbox2:checked").length;
checkbox3 = jQuery("#checkbox3:checked").length;
checkbox4 = jQuery("#checkbox4:checked").length;
checkbox5 = jQuery("#checkbox5:checked").length;
checkbox6 = jQuery("#checkbox6:checked").length;
checkbox7 = jQuery("#checkbox7:checked").length;
checkbox8 = jQuery("#checkbox8:checked").length;
checkbox9 = jQuery("#checkbox9:checked").length;
checkbox10 = jQuery("#checkbox10:checked").length;
 //alert(checkbox1);
}

// page 2
if(info == 2){
         $("#submit").hide();
          $("#save_for_later").show();

checkbox11 = jQuery("#checkbox11:checked").length;
checkbox12 = jQuery("#checkbox12:checked").length;
checkbox13 = jQuery("#checkbox13:checked").length;
checkbox14 = jQuery("#checkbox14:checked").length;
checkbox15 = jQuery("#checkbox15:checked").length;
checkbox16 = jQuery("#checkbox16:checked").length;
checkbox17 = jQuery("#checkbox17:checked").length;
checkbox18 = jQuery("#checkbox18:checked").length;
checkbox19 = jQuery("#checkbox19:checked").length;
checkbox20 = jQuery("#checkbox20:checked").length;

   // alert(checkbox1);

if(checkbox1 == 0){

    window.FlashMessage.error('Question # 1 is required.');

}

if(checkbox2 == 0){

    window.FlashMessage.error('Question # 2 is required.');

}
if(checkbox3 == 0){

    window.FlashMessage.error('Question # 3 is required.');

}
if(checkbox4 == 0){

    window.FlashMessage.error('Question # 4 is required.');

}
if(checkbox5 == 0){

    window.FlashMessage.error('Question # 5 is required.');

}
if(checkbox6 == 0){

    window.FlashMessage.error('Question # 6 is required.');

}
if(checkbox7 == 0){
        window.FlashMessage.error('Question # 7 is required.');
}
if(checkbox8 == 0){

    window.FlashMessage.error('Question # 8 is required.');

}
if(checkbox9 == 0){

    window.FlashMessage.error('Question # 9 is required.');

}
if(checkbox10 == 0){

    window.FlashMessage.error('Question # 10 is required.');
}
}

// page 3
if(info == 3){
          $("#submit").hide();
           $("#save_for_later").show();

checkbox21 = jQuery("#checkbox21:checked").length;
checkbox22 = jQuery("#checkbox22:checked").length;
checkbox23 = jQuery("#checkbox23:checked").length;
checkbox24 = jQuery("#checkbox24:checked").length;
checkbox25 = jQuery("#checkbox25:checked").length;
checkbox26 = jQuery("#checkbox26:checked").length;
checkbox27 = jQuery("#checkbox27:checked").length;
checkbox28 = jQuery("#checkbox28:checked").length;
checkbox29 = jQuery("#checkbox29:checked").length;
checkbox30 = jQuery("#checkbox30:checked").length;
if(checkbox11 == 0){

    window.FlashMessage.error('Question # 11 is required.');

}
if(checkbox12 == 0){

    window.FlashMessage.error('Question # 12 is required.');

}
if(checkbox13 == 0){

    window.FlashMessage.error('Question # 13 is required.');

}
if(checkbox14 == 0){

    window.FlashMessage.error('Question # 14 is required.');

}

if(checkbox15 == 0){

    window.FlashMessage.error('Question # 15 is required.');

}
if(checkbox16 == 0){

    window.FlashMessage.error('Question # 16 is required.');

}
if(checkbox17 == 0){

    window.FlashMessage.error('Question # 17 is required.');

}
if(checkbox18 == 0){

    window.FlashMessage.error('Question # 18 is required.');

}

if(checkbox19 == 0){

    window.FlashMessage.error('Question # 19 is required.');

}

if(checkbox20 == 0){

    window.FlashMessage.error('Question # 20 is required.');

}
}

// page 4
if(info == 4){
        $("#submit").hide();
         $("#save_for_later").show();

checkbox31 = jQuery("#checkbox31:checked").length;
checkbox32 = jQuery("#checkbox32:checked").length;
checkbox33 = jQuery("#checkbox33:checked").length;
checkbox34 = jQuery("#checkbox34:checked").length;
checkbox35 = jQuery("#checkbox35:checked").length;
checkbox36 = jQuery("#checkbox36:checked").length;
checkbox37 = jQuery("#checkbox37:checked").length;
checkbox38 = jQuery("#checkbox38:checked").length;
checkbox39 = jQuery("#checkbox39:checked").length;
checkbox40 = jQuery("#checkbox40:checked").length;

if(checkbox21 == 0){

    window.FlashMessage.error('Question # 21 is required.');

}
  if(checkbox22 == 0){

    window.FlashMessage.error('Question # 22 is required.');

}

if(checkbox23 == 0){

    window.FlashMessage.error('Question # 23 is required.');

}
if(checkbox24 == 0){

    window.FlashMessage.error('Question # 24 is required.');

}
 if(checkbox25 == 0){

    window.FlashMessage.error('Question # 25 is required.');

}
if(checkbox26 == 0){

    window.FlashMessage.error('Question # 26 is required.');

}
if(checkbox27 == 0){

    window.FlashMessage.error('Question # 27 is required.');

}
if(checkbox28 == 0){

    window.FlashMessage.error('Question # 28 is required.');

}
if(checkbox29 == 0){

    window.FlashMessage.error('Question # 29 is required.');

}
if(checkbox30 == 0){

    window.FlashMessage.error('Question # 30 is required.');

}
}
// page 5

 if(info == 5){
         $("#submit").hide();
          $("#save_for_later").show();

          checkbox41 = jQuery("#checkbox41:checked").length;
checkbox42 = jQuery("#checkbox42:checked").length;
checkbox43 = jQuery("#checkbox43:checked").length;
checkbox44 = jQuery("#checkbox44:checked").length;
checkbox45 = jQuery("#checkbox45:checked").length;
checkbox46 = jQuery("#checkbox46:checked").length;
checkbox47 = jQuery("#checkbox47:checked").length;
checkbox48 = jQuery("#checkbox48:checked").length;
checkbox49 = jQuery("#checkbox49:checked").length;
checkbox50 = jQuery("#checkbox50:checked").length;

if(checkbox31 == 0){

    window.FlashMessage.error('Question # 31 is required.');

}
if(checkbox32 == 0){

    window.FlashMessage.error('Question # 32 is required.');

}
if(checkbox33 == 0){

    window.FlashMessage.error('Question # 33 is required.');

}
if(checkbox34 == 0){

    window.FlashMessage.error('Question # 34 is required.');

}
if(checkbox35 == 0){

    window.FlashMessage.error('Question # 35 is required.');

}
if(checkbox36 == 0){

    window.FlashMessage.error('Question # 36 is required.');

}
if(checkbox37 == 0){

    window.FlashMessage.error('Question # 37 is required.');

}
if(checkbox38 == 0){

    window.FlashMessage.error('Question # 38 is required.');

}
if(checkbox39 == 0){

    window.FlashMessage.error('Question # 39 is required.');

}
if(checkbox40 == 0){

    window.FlashMessage.error('Question # 40 is required.');
}
}
// page 6
 if(info == 6){
        $("#submit").hide();
         $("#save_for_later").show();


checkbox51 = jQuery("#checkbox51:checked").length;
checkbox52 = jQuery("#checkbox52:checked").length;
checkbox53 = jQuery("#checkbox53:checked").length;
checkbox54 = jQuery("#checkbox54:checked").length;
checkbox55 = jQuery("#checkbox55:checked").length;
checkbox56 = jQuery("#checkbox56:checked").length;
checkbox57 = jQuery("#checkbox57:checked").length;
checkbox58 = jQuery("#checkbox58:checked").length;
checkbox59 = jQuery("#checkbox59:checked").length;
checkbox60 = jQuery("#checkbox60:checked").length;

       if(checkbox41 == 0){

    window.FlashMessage.error('Question # 41 is required.');

}
if(checkbox42 == 0){

    window.FlashMessage.error('Question # 42 is required.');

}
if(checkbox43 == 0){

    window.FlashMessage.error('Question # 43 is required.');

}
if(checkbox44 == 0){

    window.FlashMessage.error('Question # 44 is required.');

}
if(checkbox45 == 0){

    window.FlashMessage.error('Question # 45 is required.');

}
if(checkbox46 == 0){

    window.FlashMessage.error('Question # 46 is required.');

}
if(checkbox47 == 0){

    window.FlashMessage.error('Question # 47 is required.');

}
if(checkbox48 == 0){

    window.FlashMessage.error('Question # 48 is required.');

}
if(checkbox49 == 0){

    window.FlashMessage.error('Question # 49 is required.');

}
if(checkbox50 == 0){

    window.FlashMessage.error('Question # 50 is required.');

}
}
if(info == 7){
         $("#submit").show();
         $("#save_for_later").hide();
checkbox61 = jQuery("#checkbox61:checked").length;
checkbox62 = jQuery("#checkbox62:checked").length;
checkbox63 = jQuery("#checkbox63:checked").length;
checkbox64 = jQuery("#checkbox64:checked").length;
checkbox65 = jQuery("#checkbox65:checked").length;
checkbox66 = jQuery("#checkbox66:checked").length;
checkbox67 = jQuery("#checkbox67:checked").length;
checkbox68 = jQuery("#checkbox68:checked").length;
checkbox69 = jQuery("#checkbox69:checked").length;
checkbox70 = jQuery("#checkbox70:checked").length;
if(checkbox51 == 0){

    window.FlashMessage.error('Question # 51 is required.');

}
if(checkbox52 == 0){

    window.FlashMessage.error('Question # 52 is required.');

}
if(checkbox53 == 0){

    window.FlashMessage.error('Question # 53 is required.');

}
if(checkbox54 == 0){

    window.FlashMessage.error('Question # 54 is required.');

}
if(checkbox55 == 0){

    window.FlashMessage.error('Question # 55 is required.');

}
if(checkbox56 == 0){

    window.FlashMessage.error('Question # 56 is required.');

}
if(checkbox57 == 0){

    window.FlashMessage.error('Question # 57 is required.');

}
if(checkbox58 == 0){

    window.FlashMessage.error('Question # 58 is required.');

}
if(checkbox59 == 0){

    window.FlashMessage.error('Question # 59 is required.');

}
if(checkbox60 == 0){

    window.FlashMessage.error('Question # 60 is required.');

}
}



});

 function submitForm() {
//      alert(arr);
// alert(arr.length);
     // final_length=length_value+counter;
     //alert(arr_length);
  // alert(arr);

//var form = document.myform;
//alert(arr);

// page #7



 if(info == 7){
if(checkbox61 == 0){

    window.FlashMessage.error('Question # 61 is required.');

}
if(checkbox62 == 0){

    window.FlashMessage.error('Question # 62 is required.');

}
if(checkbox63 == 0){

    window.FlashMessage.error('Question # 63 is required.');

}
if(checkbox64 == 0){

    window.FlashMessage.error('Question # 64 is required.');

}
if(checkbox65 == 0){

    window.FlashMessage.error('Question # 65 is required.');

}
if(checkbox66 == 0){

    window.FlashMessage.error('Question # 66 is required.');

}
if(checkbox67 == 0){

    window.FlashMessage.error('Question # 67 is required.');

}
if(checkbox68 == 0){

    window.FlashMessage.error('Question # 68 is required.');

}
if(checkbox69 == 0){

    window.FlashMessage.error('Question # 69 is required.');

}

if(checkbox70 == 0){

    window.FlashMessage.error('Question # 70 is required.');

}

 }


var dataString = dataString;
//alert(dataString);
 var length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
        // alert(length);
$.ajax({
    type:'POST',
    url:'personal_values_assessment_data',
   data: {"checkbox": arr,"dimensions_name":selected},
     dataType: 'json',

        success: function(data){
            window.location.replace("http://10-yards.us-east-2.elasticbeanstalk.com/ci/login/dashboard");
      //  var len = data.length;
        //showChecked();
        var length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
         //alert(length);
      // alert(len);
      arr_length=arr.length;
       if(arr_length== 70){
          // alert(arr_length);
         // Read values

         //console.log(data);
        window.location.href="<?php echo base_url();?>login/dashboard";

       }
       else{
           //alert(len);
         //  $('#myResponse').html(data);
          window.FlashMessage.error('all Questions Are Mandatory.');
          // alert("All Questions Are Mandatory.");
       }

    }
});
 arr_length=arr.length;
 if(arr_length >= 70){

     window.location.href="<?php echo base_url();?>login/dashboard";

           //alert('equal');

      // return true;
     // break;

       }
       else{
         window.FlashMessage.error('All Questions Are Mandatory.');
//alert("all Questions Are Mandatory.");
}

return false;
}
     </script>

<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>

<script type="text/javascript">

time = $(".someTimer").TimeCircles().getTime();

//alert(time);
var values=[];
var values1=[];
var values2=[];
var values3=[];

$( "#checkboxes tbody tr" ).on( "click", function() {
        var currentRows = $(this).closest('tr').find('input[type="checkbox"]:checked').val();
        //alert(currentRows);
        // timer
        // first time
        // time1 = $(".someTimer").TimeCircles().getTime();

//alert(time22);
//899.995
				if(time22 < 01)
				{
				     $(".someTimer").TimeCircles().destroy();



// second time
var timeCircles = $(".someTimer2").TimeCircles({

    "time": {
        "Days": {
            "text": "Days",
            "color": "#FFCC66",
            "show": false
        },
        "Hours": {
            "text": "Hours",
            "color": "#99CCFF",
            "show": false
        },
        "Minutes": {
            "text": "Minutes",
            "color": "#BBFFBB",
            "show": true
        },
        "Seconds": {
            "text": "Seconds",
            "color": "#FF9999",
            "show": true,

        }
    }

  });
  $(".someTimer2").eq(1).TimeCircles().start();
  $(".start").click(function(){ $(".someTimer2").TimeCircles().start(); });
time2 = $(".someTimer2").TimeCircles().getTime();
//alert(time);
//01
if(time2 < 01)
				{
			//	alert("vdgdg") ;
				     $(".someTimer").TimeCircles().destroy();
				      $(".someTimer2").TimeCircles().destroy();
				    window.location.replace("http://10-yards.us-east-2.elasticbeanstalk.com/ci/login/dashboard");
				    }



				}
				// end



 var name = $(this).closest('tr').find('.q_name').text();

//  var dimensions_name = $(this).closest('tr').find('input[type="hidden"]').val();
 var questions_id = $(this).closest('tr').find('input[type="hidden"]').val();
 //alert(currentRows);


// values2.push(dimensions_name);
values3.push(questions_id);

});

function save_for_later(){
    // alert(values);
    //  alert(values1);
    // alert(values3);
    values1.push(name);
values.push(currentRows);
//alert(values);

    //"dimensions_name":values2,
    // ajax
    // var time=[];
    // time = $(".someTimer").TimeCircles().getTime();
    // //alert(time);
    // // time=899.95-time;
    // // alert(time);
    // time=time/60;
    // time= Math.ceil(time);

    var first_time=[];
    var second_time=[];
    first_time = $(".someTimer").TimeCircles().getTime();
    if(first_time <= 0){
         second_time = $(".someTimer2").TimeCircles().getTime();
        first_time=second_time;
    }

//alert(time);
    var length=[];
       length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
    //  alert(length);


    $.ajax({
    type:'POST',
    url:'save_for_later',
    data: {"checkbox": values,"name":values1,"dimensions_name":values3,"length":length,"time":first_time},
     dataType: 'json',


        success: function(data){

        var length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
          counter=counter-1;
         if(counter >= 0){
          window.location.href="<?php echo base_url();?>login/dashboard";
    //     var checkbox = data[0].values;
    //   //  var dimensions_name = data[0].values1;
    //      var name = data[0].values2;
         //alert(checkbox);

        //  $('#values').text(values);
        //  $('#dimensions_name').text(values1);
        //  $('#name').text(values2);
        }
         //alert(length);
}
});

 checkboxes_length=arr.length;
 checkboxes_length=checkboxes_length+counter;
 checkboxes_length=checkboxes_length-1;
//alert(arr.length-1);
//alert(checkboxes_length);
counter=counter-1;
      //alert(counter);
       if(counter >= 0){
          // alert('below');
           window.location.href="<?php echo base_url();?>login/dashboard";
      // return true;
                        }

return false;
}


</script>

</body>
</html>
