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
   	<h1 style="text-align: center;">Work Personality Index</h1>

<div class="container" style="margin-top:20px;">

<div class="someTimer" data-timer="<?php echo $remaining_test_time_slot['test_time_slot']*60;?>" style="width: 300px; height: 100px; "></div>
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
	                    <td class="q_name"><?php echo $get_all_personal_values_save_for_later[0]['name']; ?></td>
                        <input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[0]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
                        <td><input type="checkbox" id="checkbox[0]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[0]['value']==0 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" required="required"/></td>
                        <td><input type="checkbox" id="checkbox[0]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[0]['value']==1 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" required="required"/></td>
                        <td><input type="checkbox" id="checkbox[0]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[0]['value']==2 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" required="required"/></td>
                        <td><input type="checkbox" id="checkbox[0]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[0]['value']==3 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" required="required"/></td>
                        <td><input type="checkbox" id="checkbox[0]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[0]['value']==5 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" required="required"/></td>
                                            </tr>
                                            <!--2nd row-->


                                            <tr>
<td><?php echo "2"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[1]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[1]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[1]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[1]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[1]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[1]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[1]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[1]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[1]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[1]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[1]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[1]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

 <!--3-->
      <tr>
<td><?php echo "3"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[2]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[2]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[2]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[2]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[2]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[2]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[2]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[2]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[2]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[2]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[2]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[2]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--4-->

      <tr>
<td><?php echo "4"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[3]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[3]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[3]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[3]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[3]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[3]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[3]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[3]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[3]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[3]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[3]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[3]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--5-->


<tr>
<td><?php echo "5"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[4]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[4]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[4]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[4]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[4]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[4]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[4]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[4]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[4]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[4]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[4]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[4]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--6-->
     <tr>
<td><?php echo "6"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[5]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[5]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[5]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[5]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[5]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[5]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[5]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[5]['value']==2 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[5]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[5]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[5]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[5]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>
<!--7-->

<tr>
<td><?php echo "7"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[6]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[6]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[6]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[6]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[6]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[6]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[6]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[6]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[6]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[6]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[6]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[6]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--8-->
<tr>
<td><?php echo "8"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[7]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[7]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[7]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[7]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[7]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[7]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[7]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[7]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[7]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[7]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[7]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[7]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--9-->
<tr>
<td><?php echo "9"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[8]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[8]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[8]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[8]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[8]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[8]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[8]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[8]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[8]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[8]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[8]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[8]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>
<!--10-->
<tr>
<td><?php echo "10"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[9]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[9]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[9]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[9]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[9]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[9]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[9]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[9]['value']==2 ? 'checked' : '');?>
data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[9]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[9]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[9]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[9]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "11"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[10]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[10]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[10]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[10]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[10]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[10]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[10]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[10]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[10]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[10]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[10]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[10]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "12"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[11]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[11]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[11]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[11]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[11]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[11]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[11]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[11]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[11]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[11]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[11]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[11]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "13"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[12]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[12]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[12]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[12]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[12]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[12]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[12]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[12]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[12]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[12]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[12]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[12]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "14"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[13]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[13]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[13]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[13]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[13]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[13]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[13]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[13]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[13]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[13]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[13]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[13]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "15"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[14]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[14]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[14]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[14]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[14]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[14]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[14]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[14]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[14]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[14]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[14]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[14]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "16"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[15]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[15]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[15]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[15]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[15]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[15]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[15]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[15]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[15]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[15]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[15]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[15]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "17"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[16]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[16]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[16]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[16]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[16]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[16]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[16]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[16]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[16]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[16]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[16]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[16]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "18"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[17]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[17]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[17]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[17]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[17]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[17]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[17]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[17]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[17]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[17]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[17]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[17]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "19"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[18]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[18]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[18]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[18]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[18]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[18]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[18]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[18]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[18]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[18]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[18]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[18]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "20"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[19]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[19]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[19]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[19]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[19]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[19]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[19]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[19]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[19]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[19]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[19]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[19]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>
<!--21-->
<tr>
<td><?php echo "21"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[20]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[20]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[20]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[20]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[20]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[20]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[20]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[20]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[20]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[20]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[20]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[20]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "22"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[21]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[21]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[21]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[21]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[21]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[21]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[21]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[21]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[21]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[21]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[21]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[21]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "23"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[22]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[22]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[22]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[22]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" required="required"/></td>
<td><input type="checkbox" id="checkbox[22]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[22]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" required="required"/></td>
<td><input type="checkbox" id="checkbox[22]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[22]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" required="required"/></td>
<td><input type="checkbox" id="checkbox[22]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[22]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" required="required"/></td>
<td><input type="checkbox" id="checkbox[22]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[22]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" required="required"/></td>
</tr>



<tr>
<td><?php echo "24"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[23]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[23]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[23]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[23]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[23]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[23]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[23]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[23]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[23]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[23]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[23]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[23]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "25"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[24]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[24]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[24]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[24]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[24]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[24]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[24]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[24]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[24]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[24]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[24]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[24]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "26"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[25]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[25]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[25]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[25]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[25]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[25]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[25]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[25]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[25]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[25]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[25]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[25]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "27"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[26]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[26]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[26]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[26]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[26]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[26]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[26]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[26]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[26]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[26]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[26]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[26]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "28"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[27]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[27]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[27]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[27]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[27]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[27]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[27]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[27]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[27]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[27]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[27]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[27]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "29"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[28]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[28]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[28]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[28]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[28]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[28]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[28]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[28]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[28]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[28]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[28]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[28]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "30"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[29]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[29]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[29]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[29]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[29]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[29]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[29]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[29]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[29]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[29]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[29]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[29]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "31"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[30]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[30]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[30]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[30]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[30]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[30]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[30]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[30]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[30]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[30]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[30]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[30]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "32"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[31]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[31]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[31]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[31]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[31]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[31]['value']==1 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[31]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[31]['value']==2 ? 'checked' : '');?>
  data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[31]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[31]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[31]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[31]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "33"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[32]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[32]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[32]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[32]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[32]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[32]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[32]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[32]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[32]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[32]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[32]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[32]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "34"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[33]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[33]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[33]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[33]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[33]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[33]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[33]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[33]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[33]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[33]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[33]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[33]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "35"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[34]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[34]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[34]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[34]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[34]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[34]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[34]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[34]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[34]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[34]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[34]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[34]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "36"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[35]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[35]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[35]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[35]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[35]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[35]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[35]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[35]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[35]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[35]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[35]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[35]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "37"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[36]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[36]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[36]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[36]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[36]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[36]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[36]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[36]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[36]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[36]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[36]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[36]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "38"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[37]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[37]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[37]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[37]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[37]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[37]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[37]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[37]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[37]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[37]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[37]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[37]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "39"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[38]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[38]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[38]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[38]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[38]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[38]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[38]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[38]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[38]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[38]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[38]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[38]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "40"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[39]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[39]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[39]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[39]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[39]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[39]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[39]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[39]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[39]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[39]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[39]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[39]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "41"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[40]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[40]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[40]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[40]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[40]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[40]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[40]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[40]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[40]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[40]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[40]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[40]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "42"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[41]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[41]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[41]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[41]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[41]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[41]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[41]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[41]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[41]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[41]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[41]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[41]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "43"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[42]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[42]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[42]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[42]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[42]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[42]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[42]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[42]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[42]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[42]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[42]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[42]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "44"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[43]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[43]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[43]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[43]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[43]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[43]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[43]" class="checkbox" name="checkbox[]" "value="2" <?php if($get_all_personal_values_save_for_later[43]['value']=="2"){echo "checked";} ?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[43]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[43]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[43]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[43]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "45"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[44]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[44]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[44]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[44]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[44]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[44]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[44]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[44]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[44]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[44]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[44]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[44]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "46"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[45]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[45]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[45]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[45]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[45]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[45]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[45]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[45]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[45]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[45]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[45]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[45]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "47"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[46]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[46]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[46]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[46]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[46]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[46]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[46]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[46]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[46]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[46]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[46]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[46]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "48"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[47]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[47]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[47]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[47]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[47]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[47]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[47]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[47]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[47]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[47]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[47]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[47]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "49"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[48]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[48]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[48]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[48]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[48]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[48]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[48]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[48]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[48]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[48]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[48]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[48]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "50"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[49]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[49]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[49]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[49]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[49]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[49]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[49]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[49]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[49]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[49]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[49]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[49]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->
<tr>
<td><?php echo "51"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[50]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[50]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[50]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[50]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[50]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[50]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[50]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[50]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[50]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[50]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[50]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[50]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "52"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[51]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[51]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[51]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[51]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[51]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[51]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[51]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[51]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[51]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[51]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[51]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[51]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "53"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[52]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[52]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[52]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[52]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[52]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[52]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[52]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[52]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[52]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[52]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[52]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[52]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "54"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[53]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[53]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[53]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[53]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[53]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[53]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[53]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[53]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[53]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[53]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[53]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[53]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "55"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[54]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[54]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[54]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[54]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[54]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[54]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[54]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[54]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[54]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[54]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[54]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[54]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "56"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[55]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[55]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[55]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[55]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[55]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[55]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[55]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[55]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[55]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[55]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[55]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[55]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "57"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[56]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[56]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[56]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[56]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[56]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[56]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[56]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[56]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[56]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[56]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[56]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[56]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "58"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[57]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[57]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[57]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[57]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[57]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[57]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[57]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[57]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[57]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[57]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[57]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[57]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "59"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[58]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[58]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[58]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[58]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[58]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[58]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[58]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[58]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[58]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[58]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[58]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[58]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "60"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[59]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[59]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[59]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[59]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[59]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[59]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[59]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[59]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[59]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[59]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[59]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[59]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "61"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[60]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[60]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[60]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[60]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[60]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[60]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[60]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[60]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[60]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[60]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[60]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[60]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "62"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[61]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[61]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[61]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[61]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[61]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[61]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[61]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[61]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[61]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[61]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[61]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[61]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "63"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[62]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[62]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[62]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[62]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[62]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[62]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[62]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[62]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[62]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[62]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[62]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[62]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->

<tr>
<td><?php echo "64"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[63]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[63]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[63]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[63]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[63]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[63]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[63]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[63]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[63]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[63]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[63]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[63]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "65"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[64]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[64]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[64]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[64]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[64]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[64]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[64]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[64]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[64]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[64]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[64]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[64]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "66"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[65]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[65]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[65]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[65]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[65]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[65]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[65]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[65]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[65]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[65]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[65]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[65]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "67"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[66]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[66]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[66]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[66]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[66]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[66]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[66]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[66]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[66]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[66]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[66]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[66]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "68"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[67]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[67]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[67]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[67]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[67]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[67]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[67]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[67]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[67]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[67]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[67]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[67]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "69"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[68]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[68]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[68]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[68]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[68]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[68]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[68]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[68]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[68]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[68]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[68]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[68]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "70"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[69]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[69]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[69]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[69]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[69]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[69]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[69]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[69]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[69]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[69]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[69]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[69]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "71"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[70]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[70]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[70]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[70]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[70]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[70]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[70]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[70]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[70]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[70]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[70]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[70]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "72"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[71]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[71]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[71]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[71]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[71]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[71]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[71]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[71]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[71]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[71]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[71]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[71]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "73"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[72]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[72]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[72]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[72]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[72]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[72]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[72]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[72]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[72]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[72]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[72]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[72]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "74"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[73]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[73]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[73]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[73]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[73]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[73]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[73]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[73]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[73]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[73]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[73]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[73]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "75"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[74]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[74]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[74]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[74]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[74]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[74]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[74]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[74]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[74]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[74]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[74]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[74]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "76"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[75]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[75]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[75]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[75]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[75]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[75]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[75]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[75]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[75]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[75]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[75]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[75]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "77"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[76]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[76]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[76]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[76]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[76]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[76]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[76]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[76]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[76]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[76]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[76]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[76]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "78"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[77]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[77]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[77]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[77]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[77]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[77]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[77]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[77]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[77]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[77]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[77]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[77]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "79"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[78]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[78]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[78]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[78]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[78]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[78]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[78]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[78]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[78]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[78]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[78]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[78]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "80"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[79]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[79]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[79]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[79]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[79]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[79]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[79]" class="checkbox" name="checkbox[]" "value="2" <?php if($get_all_personal_values_save_for_later[79]['value']=="2"){echo "checked";} ?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[79]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[79]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[79]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[79]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "81"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[80]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[80]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[80]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[80]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[80]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[80]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[80]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[80]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[80]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[80]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[80]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[80]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "82"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[81]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[81]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[81]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[81]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[81]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[81]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[81]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[81]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[81]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[81]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[81]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[81]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "83"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[82]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[82]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[82]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[82]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[82]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[82]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[82]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[82]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[82]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[82]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[82]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[82]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "84"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[83]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[83]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[83]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[83]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[83]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[83]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[83]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[83]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[83]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[83]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[83]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[83]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "85"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[84]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[84]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[84]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[84]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[84]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[84]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[84]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[84]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[84]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[84]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[84]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[84]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "86"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[85]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[85]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[85]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[85]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[85]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[85]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[85]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[85]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[85]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[85]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[85]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[85]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->
<tr>
<td><?php echo "87"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[86]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[86]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[86]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[86]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[86]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[86]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[86]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[86]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[86]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[86]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[86]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[86]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "88"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[87]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[87]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[87]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[87]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[87]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[87]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[87]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[87]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[87]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[87]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[87]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[87]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "89"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[88]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[88]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[88]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[88]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[88]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[88]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[88]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[88]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[88]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[88]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[88]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[88]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "90"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[89]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[89]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[89]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[89]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[89]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[89]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[89]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[89]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[89]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[89]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[89]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[89]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "91"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[90]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[90]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[90]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[90]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[90]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[90]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[90]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[90]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[90]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[90]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[90]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[90]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "92"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[91]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[91]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[91]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[91]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[91]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[91]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[91]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[91]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[91]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[91]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[91]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[91]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "93"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[92]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[92]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[92]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[92]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[92]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[92]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[92]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[92]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[92]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[92]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[92]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[92]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "94"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[93]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[93]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[93]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[93]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[93]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[93]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[93]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[93]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[93]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[93]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[93]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[93]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "95"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[94]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[94]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[94]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[94]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[94]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[94]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[94]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[94]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[94]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[94]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[94]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[94]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "96"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[95]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[95]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[95]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[95]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[95]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[95]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[95]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[95]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[95]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[95]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[95]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[95]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "97"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[96]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[96]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[96]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[96]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[96]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[96]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[96]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[96]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[96]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[96]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[96]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[96]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "98"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[97]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[97]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[97]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[97]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[97]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[97]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[97]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[97]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[97]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[97]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[97]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[97]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "99"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[98]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[98]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[98]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[98]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[98]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[98]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[98]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[98]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[98]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[98]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[98]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[98]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->

<tr>
<td><?php echo "100"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[99]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[99]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[99]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[99]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[99]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[99]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[99]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[99]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[99]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[99]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[99]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[99]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "101"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[100]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[100]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[100]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[100]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[100]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[100]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[100]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[100]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[100]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[100]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[100]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[100]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "102"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[101]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[101]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[101]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[101]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[101]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[101]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[101]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[101]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[101]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[101]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[101]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[101]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "103"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[102]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[102]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[102]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[102]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[102]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[102]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[102]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[102]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[102]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[102]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[102]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[102]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "104"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[103]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[103]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[103]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[103]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[103]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[103]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[103]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[103]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[103]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[103]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[103]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[103]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "105"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[104]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[104]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[104]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[104]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[104]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[104]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[104]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[104]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[104]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[104]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[104]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[104]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<td><?php echo "106"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[105]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[105]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[105]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[105]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[105]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[105]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[105]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[105]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[105]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[105]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[105]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[105]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "107"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[106]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[106]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[106]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[106]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[106]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[106]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[106]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[106]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[106]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[106]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[106]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[106]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "108"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[107]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[107]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[107]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[107]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[107]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[107]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[107]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[107]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[107]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[107]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[107]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[107]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "109"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[108]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[108]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[108]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[108]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[108]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[108]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[108]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[108]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[108]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[108]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[108]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[108]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "110"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[109]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[109]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[109]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[109]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[109]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[109]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[109]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[109]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[109]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[109]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[109]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[109]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "111"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[110]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[110]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[110]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[110]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[110]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[110]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[110]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[110]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[110]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[110]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[110]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[110]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "112"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[111]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[111]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[111]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[111]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[111]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[111]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[111]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[111]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[111]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[111]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[111]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[111]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr>
<td><?php echo "113"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[112]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[112]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[112]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[112]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[112]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[112]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[112]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[112]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[112]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[112]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[112]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[112]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "114"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[113]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[113]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[113]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[113]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[113]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[113]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[113]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[113]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[113]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[113]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[113]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[113]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "115"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[114]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[114]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[114]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[114]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[114]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[114]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[114]" class="checkbox" name="checkbox[]" "value="2" <?php if($get_all_personal_values_save_for_later[114]['value']=="2"){echo "checked";} ?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[114]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[114]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[114]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[114]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "116"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[115]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[115]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[115]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[115]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[115]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[115]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[115]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[115]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[115]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[115]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[115]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[115]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "117"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[116]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[116]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[116]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[116]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[116]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[116]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[116]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[116]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[116]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[116]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[116]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[116]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "118"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[117]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[117]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[117]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[117]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[117]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[117]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[117]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[117]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[117]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[117]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[117]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[117]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "119"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[118]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[118]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[118]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[118]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[118]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[118]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[118]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[118]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[118]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[118]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[118]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[118]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "120"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[119]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[119]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[119]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[119]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[119]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[119]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[119]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[119]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[119]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[119]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[119]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[119]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "121"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[120]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[120]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[120]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[120]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[120]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[120]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[120]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[120]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[120]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[120]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[120]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[120]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->
<tr>
<td><?php echo "122"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[121]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[121]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[121]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[121]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[121]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[121]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[121]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[121]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[121]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[121]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[121]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[121]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "123"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[122]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[122]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[122]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[122]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[122]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[122]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[122]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[122]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[122]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[122]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[122]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[122]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "124"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[123]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[123]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[123]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[123]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[123]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[123]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[123]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[123]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[123]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[123]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[123]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[123]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "125"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[124]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[124]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[124]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[124]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[124]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[124]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[124]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[124]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[124]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[124]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[124]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[124]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "126"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[125]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[125]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[125]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[125]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[125]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[125]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[125]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[125]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[125]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[125]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[125]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[125]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "127"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[126]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[126]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[126]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[126]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[126]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[126]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[126]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[126]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[126]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[126]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[126]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[126]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "128"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[127]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[127]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[127]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[127]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[127]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[127]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[127]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[127]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[127]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[127]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[127]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[127]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "129"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[128]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[128]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[128]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[128]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[128]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[128]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[128]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[128]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[128]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[128]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[128]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[128]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "130"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[129]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[129]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[129]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[129]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[129]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[129]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[129]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[129]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[129]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[129]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[129]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[129]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "131"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[130]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[130]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[130]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[130]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[130]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[130]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[130]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[130]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[130]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[130]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[130]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[130]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "132"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[131]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[131]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[131]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[131]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[131]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[131]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[131]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[131]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[131]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[131]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[131]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[131]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "133"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[132]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[132]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[132]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[132]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[132]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[132]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[132]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[132]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[132]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[132]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[132]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[132]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "134"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[133]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[133]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[133]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[133]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[133]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[133]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[133]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[133]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[133]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[133]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[133]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[133]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->

<tr>
<td><?php echo "135"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[134]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[134]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[134]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[134]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[134]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[134]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[134]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[134]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[134]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[134]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[134]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[134]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "136"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[135]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[135]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[135]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[135]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[135]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[135]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[135]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[135]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[135]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[135]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[135]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[135]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "137"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[136]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[136]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[136]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[136]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[136]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[136]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[136]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[136]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[136]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[136]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[136]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[136]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "138"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[137]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[137]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[137]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[137]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[137]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[137]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[137]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[137]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[137]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[137]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[137]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[137]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr>
<td><?php echo "139"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[138]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[138]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[138]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[138]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[138]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[138]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[138]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[138]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[138]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[138]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[138]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[138]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr>
<td><?php echo "105"; ?></td>
<td class="q_name"><?php echo $get_all_personal_values_save_for_later[139]['name']; ?></td>
<input type="hidden" value="<?php echo $get_all_personal_values_save_for_later[139]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<td><input type="checkbox" id="checkbox[139]" class="checkbox" name="checkbox[]" value="0" <?php echo ($get_all_personal_values_save_for_later[139]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[139]" class="checkbox" name="checkbox[]" value="1" <?php echo ($get_all_personal_values_save_for_later[139]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[139]" class="checkbox" name="checkbox[]" value="2" <?php echo ($get_all_personal_values_save_for_later[139]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[139]" class="checkbox" name="checkbox[]" value="3" <?php echo ($get_all_personal_values_save_for_later[139]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox[139]" class="checkbox" name="checkbox[]" value="5" <?php echo ($get_all_personal_values_save_for_later[139]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>







            </tbody>
          </table>
          <?php
          $i=70;
           if($i == '70'){


                    ?>
                    <button  id="submit" type="submit" name="submit" value="Submit" onclick="return submitForm()" class="btn btn-primary sb-btn loginbtn" style="width:16%; margin-left: 430px;
    margin-top: 25px">Submit</button>

    <!--<button type="button" class="btn btn-primary"  id="Next"  name="Next" value="Next" onclick="return save_data()"  style="width:9%; margin-left:0px;-->
    <!--margin-top: 25px">Next</button>-->



    <button  id="save" type="submit" name="save" value="Save For Later"  onclick="return save_for_later()" class="btn btn-primary sb-btn loginbtn" style="width:16%; margin-left:0px;
    margin-top: 25px">Save For Later</button>
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

<script src="https://momentjs.com/downloads/moment-with-locales.js"></script>

<script src="<?php echo base_url(); ?>public/js/TimeCircles.js" type="text/javascript"></script>


<!--<script src="<?php echo base_url(); ?>public/js/app.js" type="text/javascript"></script>-->

<script>
          var time22=[];
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
            $(".fadeIn").click(function() {
                timeCircles.elements.last().fadeIn();
            });
            $(".fadeOut").click(function() {
                timeCircles.elements.last().fadeOut();
            });

            // Start and stop are methods applied on the public TimeCircles instance
            $(".startTimer").click(function() {
                $(".someTimer").eq(1).TimeCircles().start();
            });
            $(".stopTimer").click(function() {
                $(".someTimer").eq(1).TimeCircles().stop();

            });



$(".start").click(function(){ $(".someTimer").TimeCircles().start(); });
$(".stop").click(function(){ $(".someTimer").TimeCircles().stop(); });

setTimeout(function () {
       window.location.href = "http://10-yards.us-east-2.elasticbeanstalk.com/ci/login/dashboard"; //will redirect to your blog page (an ex: blog.html)
    }, 900000); //will call the function after 2 secs.
 $(".someTimer2").TimeCircles().destroy();

time = $(".someTimer").TimeCircles().getTime();
//alert(time);
$('.someTimer').TimeCircles({ time: { Days: { show: false }, Hours: { show: false } }});

$('.someTimer').TimeCircles().addListener(function() {
   time22 = $('.someTimer').TimeCircles().getTime()

});

//alert(time22);

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
 var values=[];
var values1=[];
var values3=[];
var values2=[];
var values5=[];
var currentRows=[];
var arr_length=[];
var selected = [];
var arr = [];
var final_length=[];
var info=[];
var current=[];


$('input.checkbox:checkbox:checked').each(function () {
    arr.push($(this).val());
});
//alert(arr.length);
var length_value=[];
length_value=arr.length;
 //alert(length_value);


$('#checkboxes input[name="dimensions_name[]"]').each(function() {
    selected.push($(this).attr('value'));
});
//alert(selected);
//alert(selected.length);
//alert('exit');
// alert(selected.length);
//alert('selected');

var dimensions_name2=[];
$('#checkboxes input[name="dimensions_name[]"]').each(function() {
    dimensions_name2.push($(this).attr('value'));
});


$( "#checkboxes tbody tr" ).on( "click", function() {
 //alert(dimensions_name2.length);

//var table = $('#checkboxes').DataTable();

//info = table.page.info();



var table = $ ('#checkboxes'). DataTable ();
 info = table.page.info ();
 info=info.page + 1;
//alert(info);

 current=$( "#checkbox[10]" ).prop( "checked", false );


 counter++;
  var oDate = new Date();
    var nHrs = oDate.getHours();
    var nMin = oDate.getMinutes();
    var nDate = oDate.getDate();
    var nMnth = oDate.getMonth();
    var nYear = oDate.getFullYear();


var values20=nHrs + ':' + nMin;


var now = new Date(Date.now());
var formatted = now.getHours() + ":" + now.getMinutes();


     //alert(formatted);//5:31 9:58//10:0
      // alert(values20);
      //alert(travelTime);//05:41 10:13
    // rows which are clicked

 //alert(current_time_value);

  //values= moment().format("H:S");
     var travelTime = moment().add(15, 'minutes').format('h:mm');

     // alert(travelTime);//05:41 10:13//10:15



// var dt = new Date();
// var time = dt.getHours() + ":" + dt.getMinutes();
// alert((time));







currentRows = $(this).closest('tr').find('input[type="checkbox"]:checked').val();
//alert(currentRows);
//         arr.push(currentRows);
//   alert(arr);
// var arr = [];
// $('input.checkbox:checkbox:checked').each(function () {
//     arr.push($(this).val());
// });


//   var selected = [];
// $('#checkboxes input[type="hidden"]').each(function() {
//     selected.push($(this).attr('value'));
// });







var name = $(this).closest('tr').find('.q_name').text();
//arr_length=name.length;
//alert(arr_length);
var dimensions_name = $(this).closest('tr').find('input[type="hidden"]').val();
//alert(dimensions_name.length);
//alert('before');
//alert(sub_categories_names);
//alert(dimensions_name2);

values=arr;
if(!(values.length==105)){

  values.push(currentRows);
}

// alert(values);
values1.push(name);
//alert(values1);
//alert(dimensions_name2.length);
values3=dimensions_name2;
//alert(values3);
//alert('after');
 //values3.push(dimensions_name);
 //alert(values3);
//values5=sub_categories_names;
//values5.push(sub_categories_names2);
//alert(values2);

length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
    arr_length= values.length;
// alert(values);//checkbox
// alert(values1);// name
// alert(values2);// sub_categories_names
// alert(values3);//dimensions_name


});



 function submitForm() {

     var length1 = $("#checkboxes input[id='checkbox[1]']:checked").length;

    if(length1 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 1 is required.');
    }

    var length2 = $("#checkboxes input[id='checkbox[2]']:checked").length;

    if(length2 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 2 is required.');
    }



    var length3 = $("#checkboxes input[id='checkbox[3]']:checked").length;

    if(length3 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 10 is required.');
    }


    var length4 = $("#checkboxes input[id='checkbox[4]']:checked").length;

    if(length4 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 4 is required.');
    }


    var length5 = $("#checkboxes input[id='checkbox[5]']:checked").length;

    if(length5 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 5 is required.');
    }


    var length6 = $("#checkboxes input[id='checkbox[6]']:checked").length;

    if(length6 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 6 is required.');
    }


    var length7 = $("#checkboxes input[id='checkbox[7]']:checked").length;

    if(length7 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 7 is required.');
    }


    var length8 = $("#checkboxes input[id='checkbox[8]']:checked").length;

    if(length8 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 8 is required.');
    }


    var length9 = $("#checkboxes input[id='checkbox[9]']:checked").length;

    if(length9 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 9 is required.');
    }

    var length10 = $("#checkboxes input[id='checkbox[10]']:checked").length;

    if(length10 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 10 is required.');
    }


    // 11


    var length11 = $("#checkboxes input[id='checkbox[11]']:checked").length;

    if(length11 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 11 is required.');
    }

    var length12 = $("#checkboxes input[id='checkbox[12]']:checked").length;

    if(length12 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 12 is required.');
    }



    var length13 = $("#checkboxes input[id='checkbox[13]']:checked").length;

    if(length13 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 13 is required.');
    }


    var length14 = $("#checkboxes input[id='checkbox[14]']:checked").length;

    if(length14 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 14 is required.');
    }


    var length15 = $("#checkboxes input[id='checkbox[15]']:checked").length;

    if(length15 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 15 is required.');
    }


    var length16 = $("#checkboxes input[id='checkbox[16]']:checked").length;

    if(length16 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 16 is required.');
    }


    var length17 = $("#checkboxes input[id='checkbox[17]']:checked").length;

    if(length17 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 17 is required.');
    }


    var length18 = $("#checkboxes input[id='checkbox[18]']:checked").length;

    if(length18 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 18 is required.');
    }


    var length19 = $("#checkboxes input[id='checkbox[19]']:checked").length;

    if(length19 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 19 is required.');
    }

    var length20 = $("#checkboxes input[id='checkbox[20]']:checked").length;

    if(length20 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 20 is required.');
    }

    // 21
    var length21 = $("#checkboxes input[id='checkbox[21]']:checked").length;

    if(length21 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 21 is required.');
    }

    var length22 = $("#checkboxes input[id='checkbox[22]']:checked").length;

    if(length22 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 22 is required.');
    }



    var length23 = $("#checkboxes input[id='checkbox[23]']:checked").length;

    if(length23 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 23 is required.');
    }


    var length24 = $("#checkboxes input[id='checkbox[24]']:checked").length;

    if(length24 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 24 is required.');
    }


    var length25 = $("#checkboxes input[id='checkbox[25]']:checked").length;

    if(length25 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 25 is required.');
    }


    var length26 = $("#checkboxes input[id='checkbox[26]']:checked").length;

    if(length26 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 26 is required.');
    }


    var length27 = $("#checkboxes input[id='checkbox[27]']:checked").length;

    if(length27 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 27 is required.');
    }


    var length28 = $("#checkboxes input[id='checkbox[28]']:checked").length;

    if(length28 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 28 is required.');
    }


    var length29 = $("#checkboxes input[id='checkbox[29]']:checked").length;

    if(length29 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 29 is required.');
    }

    var length30 = $("#checkboxes input[id='checkbox[30]']:checked").length;

    if(length30 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 30 is required.');
    }

// 31

var length31 = $("#checkboxes input[id='checkbox[31]']:checked").length;

    if(length31 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 31 is required.');
    }

    var length32 = $("#checkboxes input[id='checkbox[32]']:checked").length;

    if(length32 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 32 is required.');
    }



    var length33 = $("#checkboxes input[id='checkbox[33]']:checked").length;

    if(length33 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 33 is required.');
    }


    var length34 = $("#checkboxes input[id='checkbox[34]']:checked").length;

    if(length34 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 34 is required.');
    }


    var length35 = $("#checkboxes input[id='checkbox[35]']:checked").length;

    if(length35 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 35 is required.');
    }


    var length36 = $("#checkboxes input[id='checkbox[36]']:checked").length;

    if(length36 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 36 is required.');
    }


    var length37 = $("#checkboxes input[id='checkbox[37]']:checked").length;

    if(length37 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 37 is required.');
    }


    var length38 = $("#checkboxes input[id='checkbox[38]']:checked").length;

    if(length38 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 38 is required.');
    }


    var length39 = $("#checkboxes input[id='checkbox[39]']:checked").length;

    if(length39 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 39 is required.');
    }

    var length40 = $("#checkboxes input[id='checkbox[40]']:checked").length;

    if(length40 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 40 is required.');
    }

//   41

var length41 = $("#checkboxes input[id='checkbox[41]']:checked").length;

    if(length41 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 41 is required.');
    }

    var length42 = $("#checkboxes input[id='checkbox[42]']:checked").length;

    if(length42 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 42 is required.');
    }



    var length43 = $("#checkboxes input[id='checkbox[43]']:checked").length;

    if(length43 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 43 is required.');
    }


    var length44 = $("#checkboxes input[id='checkbox[44]']:checked").length;

    if(length44 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 44 is required.');
    }


    var length45 = $("#checkboxes input[id='checkbox[45]']:checked").length;

    if(length45 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 45 is required.');
    }


    var length46 = $("#checkboxes input[id='checkbox[46]']:checked").length;

    if(length46 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 46 is required.');
    }


    var length47 = $("#checkboxes input[id='checkbox[47]']:checked").length;

    if(length47 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 47 is required.');
    }


    var length48 = $("#checkboxes input[id='checkbox[48]']:checked").length;

    if(length48 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 48 is required.');
    }


    var length49 = $("#checkboxes input[id='checkbox[49]']:checked").length;

    if(length49 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 49 is required.');
    }

    var length50 = $("#checkboxes input[id='checkbox[50]']:checked").length;

    if(length50 > 0){
       console.log('success');
    } else{
        window.FlashMessage.error('Question # 50 is required.');
    }

    // 51

   //debugger;
     var time=[];
    var time2=[];
    time = $(".someTimer").TimeCircles().getTime();
    if(time <= 0){
         time2 = $(".someTimer2").TimeCircles().getTime();
        time=time2;
    }

     //alert(time);
     //alert(values3);//dimensions_name
         //alert(values5);//sub_categories_names
    //  alert('break');
    //  values.length;
    //  alert(values);//name
    //  values5.length;
    //   alert(values5);//name

    //  values3.length;
    //   alert(values3);//name

     final_length=length_value+counter;

// var form = document.myform;

// var dataString = $(form).serialize();
// alert(dataString);
// alert(values);
//alert(time);
// alert(values);//checkbox
// alert(values1);// name
// alert(values2);// sub_categories_names
// alert(values3);//dimensions_name
$.ajax({
    type:'POST',
    url:'personal_values_assessment_questions_data',
   data: {"checkbox": values,"dimensions_name":selected,"time":time},

        success: function(data){
            //alert('success');


       // var len = data.length;
        // var length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;

      //alert(length);//5
        //alert(len);
       //alert(counter);
        // counter=105
       if(final_length >= 105){
        //   alert(final_length);
        //   alert('before');
            window.location.href="<?php echo base_url();?>login/dashboard";
        //   alert(length);
         // Read values
         //alert('Are you sure to submit?');
       // console.log(data);
        //window.location.href="<?php echo base_url();?>login/dashboard";


       }
       else{
           // alert('else');
           //alert(counter);
          //console.log(err);
         //  $('#myResponse').html(data);
        //   alert(final_length);
         window.FlashMessage.error('All Questions Are Mandatory.');
        //   alert("All Questions Are Mandatory.");
       }
      // $('#myResponse').html(data);
          //window.location.href="<?php echo base_url();?>login/dashboard";

//window.location.href = 'ci/login/dashboard';exit;

    }
});
//$('#myResponse').html(data);
 //alert(final_length);

       if(final_length >= 105){

     window.location.href="<?php echo base_url();?>login/dashboard";

           //alert('equal');

      // return true;
     // break;

       }
       else{
           //window.FlashMessage.error('all Questions Are Mandatory.');
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
var counter=[];
 counter=0;
time = $(".someTimer").TimeCircles().getTime();
var currentRows2=[];
//alert(time);
var values=[];
var save_for_later_values=[];
var values1=[];
var values2=[];
var values3=[];
var checkboxes_length=[];
var questions_name=[];
var dimensions_name3=[];



$( "#checkboxes tbody tr" ).on( "click", function() {

        var currentRows2 = $(this).closest('tr').find('input[type="checkbox"]:checked').val();
   // alert(currentRows2);
    save_for_later_values.push(currentRows2);
    //alert(save_for_later_values);
        // timer
        // first time
        time1 = $(".someTimer").TimeCircles().getTime();

//alert(time);
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
 var dimensions_name = $(this).closest('tr').find('input[type="hidden"]').val();
 //var sub_categories_names = $(this).closest('tr').find('input[name="sub_categories_names[]"]').val();



questions_name.push(name);
//values2.push(sub_categories_names);
dimensions_name3.push(dimensions_name);

});


//alert(values.length);
//alert(save_for_later_values.length);

 //alert(save_for_later_values);

function save_for_later(){
  // alert(questions_name);
   // save_for_later_values=arr;
    // alert(currentRows2);
    // alert(dimensions_name3);

    // alert(save_for_later_values);
      counter++;
  // alert(values.length);
   //alert(currentRows);
    // alert(values);//checkboxes
    //  alert(values1);//name
    // alert(values3);//dimensions_name
    //alert(values2);//sub_categories_names
    //"dimensions_name":values2,
    // ajax
    var time=[];
    var time2=[];
    time = $(".someTimer").TimeCircles().getTime();
    if(time <= 0){
         time2 = $(".someTimer2").TimeCircles().getTime();
        time=time2;
    }
    //alert(time);
    // time=899.95-time;
    // alert(time);
    // time=time/60;
    // time= Math.ceil(time);
//alert(time);
    var length=[];
       length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
      //alert(length);
      //alert(time);


    $.ajax({
    type:'POST',
    url:'work_save_for_later',
    data: {"checkbox": save_for_later_values,"name":questions_name,"dimensions_name":dimensions_name3,"length":length,"time":time},
     dataType: 'json',


        success: function(data){
//      alert(counter);
// alert('before');
        var length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
        alert('success');
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
//  alert(save_for_later_values.length-1);
//  alert('exit1');
//  alert(save_for_later_values);
//  alert('exit2');
// alert("neechay");
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
