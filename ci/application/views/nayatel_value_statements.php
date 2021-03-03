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
    <?php
$email=$this->uri->segment(3);
if($email == '') {
	redirect(base_url().'login');
}
?>
    <h1 style="text-align:center">Organizational Values Assessment</h1>
    <div style="position: fixed; right: 0; left: 0;z-index: 100">
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
    <div>
        <div class="someTimer" data-timer="420" style="position: absolute;right: 5%;width: 200px;height: 100px;margin: auto;background-color: #EEE;border-radius:20px;z-index:200;" data-tc-id="f0da222b-4be7-a421-c703-df55751c8c4b"><div class="time_circles"><canvas width="200" height="100"></canvas><div class="textDiv_Days" style="top: 18px; left: 0px; width: 50px;"><h4 style="font-size: 4px;">Days</h4><span style="font-size: 14px;">0</span></div><div class="textDiv_Hours" style="top: 18px; left: 50px; width: 50px;"><h4 style="font-size: 4px;">Hours</h4><span style="font-size: 14px;">0</span></div><div class="textDiv_Minutes" style="top: 18px; left: 100px; width: 50px;"><h4 style="font-size: 4px;">Minutes</h4><span style="font-size: 14px;">0</span></div><div class="textDiv_Seconds" style="top: 18px; left: 150px; width: 50px;"><h4 style="font-size: 4px;">Seconds</h4><span style="font-size: 14px;">25</span></div></div></div>
        <div class="someTimer2" data-timer="180" style="position: absolute;right: 5%;width: 200px;height: 100px;margin: auto;background-color: #EEE;border-radius:20px;"></div>
    </div>
</div>
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
                    <th style="background-color: red;color: white;">Never</th>
                    <th style="background-color: lightcoral;color: white;">Rarely</th>
                    <th>Sometimes</th>
                    <th style="background-color: lightgreen;color: white;">Often</th>
                    <th style="background-color: green;color: white;">Always</th>

                    <!-- <th>Add Score</th> -->
			    </tr>
			</thead>
            <tbody>
            	<?php
                $i=0;

            	$i++;
            		?>

					<tr id="div1" class="div1" name="div1">
	                    <td><?php echo "1"; ?></td>
	                    <td class="q_name"><?php echo $nayatel_value_statements[0]['name']; ?></td>
                        <input type="hidden" value="<?php echo $nayatel_value_statements[0]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
	                     <!--<input type="hidden" value="<?php echo $nayatel_value_statements[0]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
                        <td><input type="checkbox" id="checkbox1" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[0]['value']==0 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox1" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[0]['value']==1 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox1" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[0]['value']==2 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox1" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[0]['value']==3 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" id="checkbox1" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[0]['value']==5 ? 'checked' : '');?>
                                   data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                    </tr>
                <!--2nd row-->


                <tr id="div1" class="div1" name="div1">
                    <td><?php echo "2"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[1]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[1]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[1]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox2" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[1]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox2" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[1]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox2" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[1]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox2" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[1]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox2" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[1]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

 <!--3-->
      <tr id="div1" class="div1" name="div1">
<td><?php echo "3"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[2]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[2]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[2]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox3" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[2]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox3" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[2]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox3" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[2]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox3" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[2]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox3" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[2]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--4-->

      <tr id="div1" class="div1" name="div1">
<td><?php echo "4"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[3]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[3]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[3]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox4" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[3]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox4" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[3]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox4" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[3]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox4" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[3]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox4" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[3]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--5-->


<tr id="div1" class="div1" name="div1">
<td><?php echo "5"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[4]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[4]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[4]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox5" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[4]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox5" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[4]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox5" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[4]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox5" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[4]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox5" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[4]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--6-->
     <tr id="div1" class="div1" name="div1">
<td><?php echo "6"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[5]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[5]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[5]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox6" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[5]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox6" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[5]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox6" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[5]['value']==2 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox6" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[5]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox6" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[5]['value']==5 ? 'checked' : '');?>
           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
     </tr>
                <!--7-->

                <tr id="div1" class="div1" name="div1">
                    <td><?php echo "7"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[6]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[6]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[6]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox7" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[6]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox7" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[6]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox7" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[6]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox7" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[6]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox7" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[6]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--8-->
<tr id="div1" class="div1" name="div1">
<td><?php echo "8"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[7]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[7]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[7]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox8" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[7]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox8" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[7]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox8" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[7]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox8" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[7]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox8" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[7]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--9-->
<tr id="div1" class="div1" name="div1">
<td><?php echo "9"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[8]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[8]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[8]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox9" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[8]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox9" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[8]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox9" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[8]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox9" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[8]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox9" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[8]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>
<!--10-->
<tr id="div1" class="div1" name="div1">
<td><?php echo "10"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[9]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[9]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[9]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox10" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[9]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox10" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[9]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox10" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[9]['value']==2 ? 'checked' : '');?>
data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox10" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[9]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox10" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[9]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--11-->
<tr id="div2" class="div2" name="div2">
<td><?php echo "11"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[10]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[10]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[10]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox11" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[10]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox11" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[10]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox11" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[10]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox11" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[10]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox11" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[10]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr id="div2" class="div2" name="div2">
<td><?php echo "12"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[11]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[11]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[11]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox12" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[11]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox12" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[11]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox12" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[11]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox12" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[11]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox12" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[11]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div2" class="div2" name="div2">
<td><?php echo "13"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[12]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[12]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[12]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox13" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[12]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox13" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[12]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox13" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[12]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox13" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[12]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox13" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[12]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr id="div2" class="div2" name="div2">
<td><?php echo "14"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[13]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[13]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[13]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox14" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[13]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox14" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[13]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox14" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[13]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox14" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[13]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox14" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[13]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div2" class="div2" name="div2">
<td><?php echo "15"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[14]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[14]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[14]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox15" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[14]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox15" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[14]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox15" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[14]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox15" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[14]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox15" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[14]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div2" class="div2" name="div2">
<td><?php echo "16"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[15]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[15]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[15]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox16" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[15]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox16" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[15]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox16" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[15]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox16" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[15]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox16" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[15]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div2" class="div2" name="div2">
<td><?php echo "17"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[16]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[16]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[16]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox17" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[16]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox17" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[16]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox17" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[16]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox17" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[16]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox17" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[16]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div2" class="div2" name="div2">
<td><?php echo "18"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[17]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[17]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[17]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox18" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[17]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox18" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[17]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox18" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[17]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox18" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[17]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox18" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[17]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div2" class="div2" name="div2">
<td><?php echo "19"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[18]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[18]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[18]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox19" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[18]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox19" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[18]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox19" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[18]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox19" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[18]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox19" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[18]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div2" class="div2" name="div2">
<td><?php echo "20"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[19]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[19]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[19]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox20" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[19]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox20" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[19]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox20" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[19]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox20" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[19]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox20" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[19]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>
</div>
<div class="div3">
<!--21-->
<tr id="div3" class="div3" name="div3">
<td><?php echo "21"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[20]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[20]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[20]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox21" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[20]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox21" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[20]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox21" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[20]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox21" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[20]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox21" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[20]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div3" class="div3" name="div3">
<td><?php echo "22"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[21]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[21]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[21]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox22" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[21]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox22" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[21]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox22" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[21]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox22" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[21]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox22" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[21]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div3" class="div3" name="div3">
<td><?php echo "23"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[22]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[22]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[22]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox23" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[22]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox23" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[22]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox23" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[22]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox23" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[22]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox23" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[22]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div3" class="div3" name="div3">
<td><?php echo "24"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[23]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[23]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[23]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox24" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[23]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox24" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[23]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox24" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[23]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox24" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[23]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox24" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[23]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div3" class="div3" name="div3">
<td><?php echo "25"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[24]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[24]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[24]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox25" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[24]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox25" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[24]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox25" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[24]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox25" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[24]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox25" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[24]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div3" class="div3" name="div3">
<td><?php echo "26"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[25]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[25]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[25]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox26" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[25]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox26" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[25]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox26" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[25]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox26" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[25]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox26" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[25]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr id="div3" class="div3" name="div3">
<td><?php echo "27"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[26]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[26]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[26]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox27" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[26]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox27" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[26]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox27" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[26]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox27" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[26]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox27" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[26]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div3" class="div3" name="div3">
<td><?php echo "28"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[27]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[27]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[27]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox28" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[27]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox28" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[27]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox28" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[27]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox28" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[27]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox28" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[27]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div3" class="div3" name="div3">
<td><?php echo "29"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[28]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[28]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[28]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox29" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[28]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox29" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[28]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox29" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[28]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox29" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[28]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox29" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[28]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div3" class="div3" name="div3">
<td><?php echo "30"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[29]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[29]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[29]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox30" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[29]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox30" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[29]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox30" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[29]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox30" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[29]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox30" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[29]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--4-->
<tr id="div4" class="div4" name="div4">
<td><?php echo "31"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[30]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[30]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[30]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox31" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[30]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox31" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[30]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox31" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[30]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox31" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[30]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox31" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[30]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div4" class="div4" name="div4">
<td><?php echo "32"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[31]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[31]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[31]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox32" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[31]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox32" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[31]['value']==1 ? 'checked' : '');?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox32" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[31]['value']==2 ? 'checked' : '');?>
  data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox32" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[31]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox32" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[31]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div4" class="div4" name="div4">
<td><?php echo "33"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[32]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[32]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[32]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox33" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[32]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox33" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[32]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox33" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[32]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox33" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[32]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox33" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[32]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div4" class="div4" name="div4">
<td><?php echo "34"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[33]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[33]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[33]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox34" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[33]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox34" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[33]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox34" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[33]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox34" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[33]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox34" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[33]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div4" class="div4" name="div4">
<td><?php echo "35"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[34]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[34]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[34]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox35" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[34]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox35" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[34]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox35" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[34]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox35" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[34]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox35" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[34]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div4" class="div4" name="div4">
<td><?php echo "36"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[35]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[35]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[35]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox36" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[35]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox36" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[35]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox36" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[35]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox36" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[35]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox36" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[35]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div4" class="div4" name="div4">
<td><?php echo "37"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[36]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[36]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[36]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox37" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[36]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox37" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[36]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox37" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[36]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox37" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[36]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox37" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[36]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div4" class="div4" name="div4">
<td><?php echo "38"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[37]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[37]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[37]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox38" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[37]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox38" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[37]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox38" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[37]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox38" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[37]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox38" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[37]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div4" class="div4" name="div4">
<td><?php echo "39"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[38]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[38]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[38]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox39" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[38]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox39" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[38]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox39" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[38]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox39" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[38]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox39" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[38]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div4" class="div4" name="div4">
<td><?php echo "40"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[39]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[39]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[39]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox40" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[39]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox40" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[39]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox40" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[39]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox40" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[39]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox40" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[39]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>
</div>
<!--5-->
<tr id="div5" class="div5" name="div5">
<td><?php echo "41"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[40]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[40]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[40]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox41" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[40]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox41" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[40]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox41" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[40]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox41" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[40]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox41" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[40]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<tr id="div5" class="div5" name="div5">
<td><?php echo "42"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[41]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[41]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[41]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox42" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[41]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox42" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[41]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox42" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[41]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox42" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[41]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox42" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[41]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div5" class="div5" name="div5">
<td><?php echo "43"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[42]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[42]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[42]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox43" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[42]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox43" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[42]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox43" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[42]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox43" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[42]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox43" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[42]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div5" class="div5" name="div5">
<td><?php echo "44"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[43]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[43]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[43]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox44" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[43]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox44" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[43]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox44" class="checkbox" name="checkbox[]" "value="2" <?php if($nayatel_value_statements[43]['value']=="2"){echo "checked";} ?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox44" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[43]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox44" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[43]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div5" class="div5" name="div5">
<td><?php echo "45"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[44]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[44]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[44]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox45" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[44]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox45" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[44]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox45" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[44]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox45" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[44]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox45" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[44]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div5" class="div5" name="div5">
<td><?php echo "46"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[45]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[45]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[45]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox46" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[45]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox46" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[45]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox46" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[45]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox46" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[45]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox46" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[45]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div5" class="div5" name="div5">
<td><?php echo "47"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[46]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[46]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[46]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox47" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[46]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox47" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[46]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox47" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[46]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox47" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[46]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox47" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[46]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div5" class="div5" name="div5">
<td><?php echo "48"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[47]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[47]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[47]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox48" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[47]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox48" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[47]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox48" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[47]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox48" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[47]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox48" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[47]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div5" class="div5" name="div5">
<td><?php echo "49"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[48]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[48]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[48]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox49" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[48]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox49" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[48]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox49" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[48]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox49" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[48]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox49" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[48]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div5" class="div5" name="div5">
<td><?php echo "50"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[49]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[49]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[49]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox50" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[49]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox50" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[49]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox50" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[49]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox50" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[49]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox50" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[49]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->
<!--6-->
<tr id="div6" class="div6" name="div6">
<td><?php echo "51"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[50]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[50]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[50]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox51" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[50]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox51" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[50]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox51" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[50]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox51" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[50]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox51" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[50]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div6" class="div6" name="div6">
<td><?php echo "52"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[51]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[51]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[51]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox52" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[51]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox52" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[51]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox52" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[51]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox52" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[51]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox52" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[51]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div6" class="div6" name="div6">
<td><?php echo "53"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[52]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[52]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[52]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox53" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[52]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox53" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[52]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox53" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[52]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox53" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[52]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox53" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[52]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div6" class="div6" name="div6">
<td><?php echo "54"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[53]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[53]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[53]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox54" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[53]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox54" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[53]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox54" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[53]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox54" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[53]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox54" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[53]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div6" class="div6" name="div6">
<td><?php echo "55"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[54]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[54]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[54]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox55" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[54]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox55" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[54]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox55" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[54]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox55" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[54]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox55" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[54]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div6" class="div6" name="div6">
<td><?php echo "56"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[55]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[55]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[55]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox56" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[55]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox56" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[55]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox56" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[55]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox56" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[55]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox56" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[55]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div6" class="div6" name="div6">
<td><?php echo "57"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[56]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[56]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[56]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox57" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[56]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox57" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[56]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox57" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[56]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox57" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[56]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox57" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[56]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div6" class="div6" name="div6">
<td><?php echo "58"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[57]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[57]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[57]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox58" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[57]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox58" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[57]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox58" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[57]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox58" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[57]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox58" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[57]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div6" class="div6" name="div6">
<td><?php echo "59"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[58]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[58]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[58]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox59" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[58]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox59" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[58]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox59" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[58]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox59" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[58]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox59" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[58]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div6" class="div6" name="div6">
<td><?php echo "60"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[59]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[59]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[59]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox60" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[59]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox60" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[59]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox60" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[59]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox60" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[59]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox60" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[59]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--7-->
<tr id="div7" class="div7" name="div7">
<td><?php echo "61"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[60]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[60]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[60]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox61" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[60]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox61" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[60]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox61" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[60]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox61" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[60]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox61" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[60]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div7" class="div7" name="div7">
<td><?php echo "62"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[61]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[61]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[61]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox62" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[61]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox62" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[61]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox62" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[61]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox62" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[61]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox62" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[61]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div7" class="div7" name="div7">
<td><?php echo "63"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[62]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[62]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[62]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox63" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[62]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox63" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[62]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox63" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[62]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox63" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[62]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox63" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[62]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>

<!--now-->

<tr id="div7" class="div7" name="div7">
<td><?php echo "64"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[63]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[63]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[63]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox64" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[63]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox64" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[63]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox64" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[63]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox64" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[63]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox64" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[63]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div7" class="div7" name="div7">
<td><?php echo "65"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[64]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[64]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[64]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox65" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[64]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox65" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[64]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox65" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[64]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox65" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[64]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox65" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[64]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div7" class="div7" name="div7">
<td><?php echo "66"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[65]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[65]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[65]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox66" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[65]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox66" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[65]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox66" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[65]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox66" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[65]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox66" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[65]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div7" class="div7" name="div7">
<td><?php echo "67"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[66]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[66]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[66]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox67" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[66]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox67" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[66]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox67" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[66]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox67" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[66]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox67" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[66]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>


<tr id="div7" class="div7" name="div7">
<td><?php echo "68"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[67]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[67]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[67]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox68" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[67]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox68" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[67]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox68" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[67]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox68" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[67]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox68" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[67]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div7" class="div7" name="div7">
<td><?php echo "69"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[68]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[68]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[68]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox69" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[68]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox69" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[68]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox69" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[68]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox69" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[68]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox69" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[68]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>



<tr id="div7" class="div7" name="div7">
<td><?php echo "70"; ?></td>
<td class="q_name"><?php echo $nayatel_value_statements[69]['name']; ?></td>
<input type="hidden" value="<?php echo $nayatel_value_statements[69]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
<!--<input type="hidden" value="<?php echo $nayatel_value_statements[69]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">-->
<td><input type="checkbox" id="checkbox70" class="checkbox" name="checkbox[]" value="0" <?php echo ($nayatel_value_statements[69]['value']==0 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox70" class="checkbox" name="checkbox[]" value="1" <?php echo ($nayatel_value_statements[69]['value']==1 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox70" class="checkbox" name="checkbox[]" value="2" <?php echo ($nayatel_value_statements[69]['value']==2 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox70" class="checkbox" name="checkbox[]" value="3" <?php echo ($nayatel_value_statements[69]['value']==3 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
<td><input type="checkbox" id="checkbox70" class="checkbox" name="checkbox[]" value="5" <?php echo ($nayatel_value_statements[69]['value']==5 ? 'checked' : '');?>
 data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
</tr>






            </tbody>
          </table>
          <?php
          $i=70;
           if($i == '70'){


                    ?>
      </div>
    </div>
  </div>
    </div>
    <div class="row justify-content-center" style="margin-top:20px;">
        <div>
            <div class="col-lg-12">
                <button  id="submit" type="submit" name="submit" value="Submit" onclick="return submitForm()" class="btn btn-primary">Submit</button>
                <button  id="save" type="submit" name="save" value="Save" onclick="return save_for_later()" class="btn btn-primary">Save For Later</button>
            </div>
        </div>
    </div>
    <div class="row">
        <!--<button type="button" class="btn btn-primary"  id="Next"  name="Next" value="Next" onclick="return save_data()"  style="width:9%; margin-left:0px;-->
        <!--margin-top: 25px">Next</button>-->
        <div class="col-lg-12">
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
                    <a href="<?php echo base_url(); ?>login/nayatel_save_for_later_extra_time">
                        <button type="button" value="OK" class="btn btn-success start" data-dismiss="modal">OK</button>
                    </a>
                </div>
            </div>

        </div>
    </div>


    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
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

                    $(".div1").show();
                    $(".div2").hide();
                    $(".div3").hide();
                    $(".div4").hide();
                    $(".div5").hide();
                    $(".div6").hide();
                    $(".div7").hide();
                    $(".div8").hide();
                    $(".div9").hide();
                    $(".div10").hide();
                     $(".div11").hide();

 var time22=[];
  var info=[];
  var new_counter=[];
  var checklength1=[];
 var checklength2=[];
 var checklength3=[];
 var checklength4=[];
 var checklength5=[];
 var checklength6=[];
 var checklength7=[];

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

 var checkbox64 = [];
 var checkbox65 = [];
 var checkbox66 = [];

 var checkbox67 = [];
 var checkbox68 = [];
 var checkbox69 = [];

 var checkbox70 = [];


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
 if (time < 01) {
     //$('#myModal2').modal('show');
     // alert("vdgdg") ;
     $(".someTimer").TimeCircles().destroy();
     // window.location.replace("ci/login/dashboard");


 }
</script>
    <script>
        function QueryViewModel() {

            var self = this;
            self.queuedValues = ko.observableArray([]);
        }
    </script>


<script>
$( document ).ready(function() {
    document.getElementById("kt_aside").style.pointerEvents = "none";
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
 var save_for_later_values = [];
 var checkboxes_length = [];
 var length_value = [];

 var arr = [];
 $('input.checkbox:checkbox:checked').each(function () {
     arr.push($(this).val());
 });
 //alert(arr);
 // var length_value=[];
 length_value = arr.length;
 //alert(length_value);

 var selected = [];
 $('#checkboxes input[type="hidden"]').each(function () {
     selected.push($(this).attr('value'));
 });
 //alert(selected);
 //questions_id

 var values = [];
 var values1 = [];
 var values2 = [];
 var values3 = [];
 var currentRows = [];
 var arr_length = [];

 var table = [];


 $('#checkboxes').on('page.dt', function () {


     table = $('#checkboxes').DataTable();
     info = table.page.info();
     info = info.page + 1;
// alert(counter);
// alert(arr.length);
//  alert(checklength1);
     new_counter = arr.length;
     if (info == 2 && new_counter > 9) {
         //alert('page 2');
         window.FlashMessage.success('success on page 1');
         $(".div1").hide();

         //alert('if');


     }
     if (info == 3 && new_counter > 19) {
         window.FlashMessage.success('success on page 2');
         $(".div1").hide();
         $(".div2").hide();
     }
     if (info == 4 && new_counter > 29) {
         window.FlashMessage.success('success on page 3');
         $(".div1").hide();
         $(".div2").hide();
         $(".div3").hide();
} if(info == 5 && new_counter > 39){
    window.FlashMessage.success('success on page 4');
     $(".div1").hide();
   $(".div2").hide();
   $(".div3").hide();
   $(".div4").hide();
} if(info == 6 && new_counter > 49){
    window.FlashMessage.success('success on page 5');
    $(".div1").hide();
   $(".div2").hide();
   $(".div3").hide();
         $(".div4").hide();
         $(".div5").hide();
     }
     if (info == 7 && new_counter > 59) {
         window.FlashMessage.success('success on page 6');
         $(".div1").hide();
         $(".div2").hide();
         $(".div3").hide();
         $(".div4").hide();
         $(".div5").hide();
         $(".div6").hide();
     } else {
         //alert('3rd');

         // alert('You are not allowed to skip the page.');
         window.FlashMessage.error('You are not allowed to skip the test.');
         e.preventDefault();
         // $(".div1").hide();
         //   $(".div2").hide();
         //   $(".div3").hide();
         //   $(".div4").hide();
         //   $(".div5").hide();
         //   $(".div6").hide();
         //   $(".div7").hide();
         //   $(".div1").hide();


     }
     // page 3


 });
 $("#checkboxes tbody tr").on("click", function () {

     counter++;
     currentRows = $(this).closest('tr').find('input[type="checkbox"]:checked').val();
     const clicked = $(this).closest('tr').find('input[type="checkbox"]:checked');
     $(clicked.context).css('opacity', clicked.length ? 0.5 : 1)
     //alert(currentRows);
     arr.push(currentRows);
     arr_length = arr.length;

     var form = document.myform;
     var dataString = [];
     dataString = $(form).serialize();

     var name = $(this).closest('tr').find('.q_name').text();
     var dimensions_name = $(this).closest('tr').find('input[type="hidden"]').val();
     //var questions_id = $(this).closest('tr').find('input[type="hidden"]').val();
//alert(currentRows);
     values.push(currentRows);
     values1.push(name);
     values2.push(dimensions_name);
//values3.push(questions_id);


//  if(info == 1){

$("#submit").hide();
$("#save_for_later").show();
//   $(".div2").hide();
//   $(".div3").hide();
//     $(".div4").hide();
//      $(".div5").hide();
//       $(".div6").hide();
//       $(".div7").hide();
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

         checklength1=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
//alert(checklength1);
if(checklength1 > 9){

         $(".div1").hide();
                $(".div2").show();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
    }

// }

// page 2

// if(info == 2){
        //  $("#submit").hide();
        //   $("#save_for_later").show();
    //   $(".div1").hide();

//   $(".div3").hide();
//     $(".div4").hide();
//      $(".div5").hide();
//       $(".div6").hide();
//       $(".div7").hide();
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
     checklength2=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
         //alert(checklength1);

    if(checklength1 > 19){
          $(".div1").hide();
                $(".div2").hide();
                $(".div3").show();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
    }

// }

// page 3
// if(info == 3){
        //   $("#submit").hide();
        //   $("#save_for_later").show();
//       $(".div1").hide();

//   $(".div2").hide();
         // $(".div4").hide();
         //  $(".div5").hide();
         //   $(".div6").hide();
         //   $(".div7").hide();
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

         checklength3 = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
         //alert(checklength1);

    if(checklength1 > 29){
        $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").show();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
    }

// }

// page 4
// if(info == 4){
        // $("#submit").hide();
        //  $("#save_for_later").show();
//           $(".div1").hide();

//   $(".div2").hide();
//     $(".div3").hide();
         //  $(".div5").hide();
         //   $(".div6").hide();
         //   $(".div7").hide();
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

         checklength4 = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
         //alert(checklength1);

    if(checklength1 > 39){
        $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").show();
                $(".div6").hide();
                $(".div7").hide();
    }

// }
// page 5

//  if(info == 5){
        //  $("#submit").hide();
        //   $("#save_for_later").show();
//          $(".div1").hide();

//   $(".div2").hide();
//     $(".div4").hide();
//      $(".div3").hide();
//      $(".div6").hide();
         //     $(".div7").hide();
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

         checklength5 = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
         //alert(checklength1);

    if(checklength1 > 49){
       $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").show();
                $(".div7").hide();
       //  window.FlashMessage.success('Yours answers are saved successfully.');
    }

// }
// page 6
//  if(info == 6){
        // $("#submit").hide();
        //  $("#save_for_later").show();
//          $(".div1").hide();

//   $(".div2").hide();
//     $(".div4").hide();
//      $(".div5").hide();
//       $(".div3").hide();
         //      $(".div7").hide();

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

         checklength6 = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
         //alert(checklength1);

    if(checklength1 > 59){
         $("#submit").show();
         $("#save_for_later").show();
        $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").show();
    }


// }
// if(info == 7){
        //  $("#submit").show();
        //  $("#save_for_later").hide();
//           $(".div1").hide();

//   $(".div2").hide();
//     $(".div4").hide();
//      $(".div5").hide();
//       $(".div6").hide();
//       $(".div3").hide();

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


         checklength7 = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
         //alert(checklength1);

    if(checklength1 > 69){
                $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").show();
    }

// }



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


     if (info == 7) {


     }

// alert(arr);
// alert(arr.length);
var dataString = dataString;
//alert(dataString);
 var length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;
        // alert(length);
$.ajax({
    type:'POST',
    url:'nayatel_value_statements_data',
    data: {"checkbox": arr, "dimensions_name": selected},
    dataType: 'json',

    success: function (data) {
        window.location.replace("http://10-yards.us-east-2.elasticbeanstalk.com/ci/login/dashboard");
        //  var len = data.length;
        //showChecked();
        var length = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
        //alert(length);
        // alert(len);
        arr_length = arr.length;
        if (arr_length == 70) {
            // alert(arr_length);
            // Read values

            //console.log(data);
            window.location.href = "<?php echo base_url();?>login/dashboard";

        } else {
            //alert(len);
            //  $('#myResponse').html(data);
            window.FlashMessage.error('all Questions Are Mandatory.');
            // alert("All Questions Are Mandatory.");
        }

    }
});
     arr_length = arr.length;
     if (arr_length >= 70) {

         window.location.href = "<?php echo base_url();?>login/dashboard";

         //alert('equal');

         // return true;
         // break;

     } else {
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
    const clicked = $(this).closest('tr').find('input[type="checkbox"]:checked');
    $(clicked.context).css('opacity', clicked.length ? 0.5 : 1)
    //alert(currentRows);
    // timer
    // first time
    // time1 = $(".someTimer").TimeCircles().getTime();

//alert(time22);
//899.995
    if (time22 < 01) {
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
				   $.ajax({
                type: 'POST',
                url: 'nayatel_incomplete_scenario',
                data: {
                    "time": 0,

                },
                dataType: 'json',
                success: function (data) {
                   // alert('success');
                   window.location.href = "<?php echo base_url();?>login/dashboard";
                }
            });

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
    if (first_time <= 0) {
        second_time = $(".someTimer2").TimeCircles().getTime();
        first_time = second_time;
    }

//alert(time);
    var length = [];
    length = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
    //  alert(length);


    $.ajax({
        type: 'POST',
        url: 'save_for_later',
        data: {"checkbox": values, "name": values1, "dimensions_name": values3, "length": length, "time": first_time},
        dataType: 'json',


        success: function (data) {

            var length = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
            counter = counter - 1;
            if (counter >= 0) {
                window.location.href = "<?php echo base_url();?>login/dashboard";
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

    checkboxes_length = arr.length;
    checkboxes_length = checkboxes_length + counter;
    checkboxes_length = checkboxes_length - 1;
//alert(arr.length-1);
//alert(checkboxes_length);
    counter = counter - 1;
    //alert(counter);
    if (counter >= 0) {
        // alert('below');
        window.location.href = "<?php echo base_url();?>login/dashboard";
        // return true;
    }

    return false;
}


</script>

</body>
</html>
