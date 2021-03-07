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

    <h1 style="text-align:center">Work Personality Index</h1>
    <div style="position: fixed; right: 0; left: 0;z-index: 100;">

<!--end-->
<section class="content-header" style="display:none">
    <div class="content-header-left">
        <?php echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>"; ?>
        <h1>Nayatel’s Value Statements</h1>
    </div>
    <!--<div class="content-header-right">-->
    <!--	<a href="<?php echo base_url(); ?>admin/categories/personal_values_assessment_questions_data" class="btn btn-primary btn-sm">Add New</a>-->
    <!--</div>-->
</section>
        <div>
            <div class="someTimer" data-timer="420" style="position: absolute;left: 6%;width: 200px;height: 100px;margin: auto;background-color: #EEE;border-radius:20px;z-index:200;" data-tc-id="f0da222b-4be7-a421-c703-df55751c8c4b"><div class="time_circles"><canvas width="200" height="100"></canvas><div class="textDiv_Days" style="top: 18px; left: 0px; width: 50px;"><h4 style="font-size: 4px;">Days</h4><span style="font-size: 14px;">0</span></div><div class="textDiv_Hours" style="top: 18px; left: 50px; width: 50px;"><h4 style="font-size: 4px;">Hours</h4><span style="font-size: 14px;">0</span></div><div class="textDiv_Minutes" style="top: 18px; left: 100px; width: 50px;"><h4 style="font-size: 4px;">Minutes</h4><span style="font-size: 14px;">0</span></div><div class="textDiv_Seconds" style="top: 18px; left: 150px; width: 50px;"><h4 style="font-size: 4px;">Seconds</h4><span style="font-size: 14px;">25</span></div></div></div>
            <div class="someTimer2" data-timer="180" style="position: absolute;left: 6%;width: 200px;height: 100px;margin: auto;background-color: #EEE;border-radius:20px;"></div>
        </div>
    </div>
<form id="myform" class="myform" method="post" name="myform">

    <div id="message"></div>
    <input type="hidden" class="email" name="email" value="<?php echo $dashboard_data['email']; ?>"
    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
           value="<?php echo $this->security->get_csrf_hash(); ?>">


           <input type="hidden"  name="csrf_name" value="<?php echo htmlspecialchars($unique_form_name);?>"/>
   		<input type="hidden"  name="csrf_token" value="<?php echo htmlspecialchars($token);?>"/>


    <section class="content container">
        <div class="row">
            <div class="col-md-12">

                <?php
                if ($this->session->flashdata('error')) {
                    ?>
                    <div class="callout callout-danger">
                        <p><?php echo $this->session->flashdata('error'); ?></p>
                    </div>
                    <?php
                }
                if ($this->session->flashdata('success')) {
                    ?>
                    <div class="callout callout-success">
                        <p><?php echo $this->session->flashdata('success'); ?></p>
                    </div>
                    <?php
                }
                ?>

                <div class="box box-info">

                    <div class="box-body table-responsive">
                        <!--<h1 style="    color: #4172a5">Questions</h1>-->
                        <table id="checkboxes" class="table table-responsive table-bordered table-striped">
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
                            $i = 0;

                            $i++;
                            ?>
                            <tr id="div1" class="div1" name="div1">
                                <td><?php echo "1"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[0]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[0]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden" class="q_name2"
                                       value="<?php echo $get_all_work_personality_save_for_later[0]['sub_categories_names']; ?>"
                                       id="sub_categories_names" name="sub_categories_names[]">
                                <!--<input type="hidden" value="<?php echo $get_all_work_personality_save_for_later[0]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">-->
                                <td><input type="checkbox" id="checkbox1" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[0]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"
                                           required="required"/></td>
                                <td><input type="checkbox" id="checkbox1" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[0]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"
                                           required="required"/></td>
                                <td><input type="checkbox" id="checkbox1" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[0]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"
                                           required="required"/></td>
                                <td><input type="checkbox" id="checkbox1" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[0]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"
                                           required="required"/></td>
                                <td><input type="checkbox" id="checkbox1" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[0]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"
                                           required="required"/></td>
                            </tr>
                            <!--2nd row-->


                            <tr id="div1" class="div1" name="div1">
                                <td><?php echo "2"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[1]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[1]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden" class="q_name2"
                                       value="<?php echo $get_all_work_personality_save_for_later[1]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox2" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[1]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox2" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[1]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox2" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[1]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox2" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[1]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox2" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[1]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>

                            <!--3-->
                            <tr id="div1" class="div1" name="div1">
                                <td><?php echo "3"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[2]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[2]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden" class="q_name2"
                                       value="<?php echo $get_all_work_personality_save_for_later[2]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox3" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[2]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox3" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[2]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox3" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[2]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox3" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[2]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox3" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[2]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>

                            <!--4-->

                            <tr id="div1" class="div1" name="div1">
                                <td><?php echo "4"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[3]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[3]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[3]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox4" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[3]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox4" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[3]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox4" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[3]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox4" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[3]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox4" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[3]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>

                            <!--5-->


                            <tr id="div1" class="div1" name="div1">
                                <td><?php echo "5"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[4]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[4]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[4]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox5" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[4]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox5" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[4]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox5" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[4]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox5" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[4]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox5" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[4]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>

                            <!--6-->
                            <tr id="div1" class="div1" name="div1">
                                <td><?php echo "6"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[5]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[5]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[5]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox6" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[5]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox6" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[5]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox6" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[5]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox6" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[5]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox6" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[5]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>
                            <!--7-->

                            <tr id="div1" class="div1" name="div1">
                                <td><?php echo "7"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[6]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[6]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[6]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox7" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[6]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox7" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[6]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox7" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[6]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox7" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[6]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox7" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[6]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>

                            <!--8-->
                            <tr id="div1" class="div1" name="div1">
                                <td><?php echo "8"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[7]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[7]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[7]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox8" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[7]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox8" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[7]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox8" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[7]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox8" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[7]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox8" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[7]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>

                            <!--9-->
                            <tr id="div1" class="div1" name="div1">
                                <td><?php echo "9"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[8]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[8]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[8]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox9" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[8]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox9" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[8]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox9" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[8]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox9" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[8]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox9" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[8]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>
                            <!--10-->
                            <tr id="div1" class="div1" name="div1">
                                <td><?php echo "10"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[9]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[9]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[9]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox10" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[9]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox10" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[9]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox10" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[9]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox10" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[9]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox10" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[9]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>
<!-- 2nd row-11-->
                            <tr id="div2" class="div2" name="div2">
                                <td><?php echo "11"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[10]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[10]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[10]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox11" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[10]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox11" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[10]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox11" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[10]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox11" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[10]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox11" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[10]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div2" class="div2" name="div2">
                                <td><?php echo "12"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[11]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[11]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[11]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox12" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[11]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox12" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[11]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox12" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[11]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox12" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[11]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox12" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[11]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div2" class="div2" name="div2">
                                <td><?php echo "13"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[12]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[12]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[12]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox13" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[12]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox13" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[12]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox13" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[12]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox13" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[12]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox13" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[12]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div2" class="div2" name="div2">
                                <td><?php echo "14"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[13]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[13]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[13]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox14" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[13]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox14" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[13]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox14" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[13]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox14" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[13]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox14" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[13]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div2" class="div2" name="div2">
                                <td><?php echo "15"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[14]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[14]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[14]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox15" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[14]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox15" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[14]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox15" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[14]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox15" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[14]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox15" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[14]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div2" class="div2" name="div2">
                                <td><?php echo "16"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[15]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[15]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[15]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox16" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[15]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox16" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[15]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox16" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[15]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox16" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[15]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox16" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[15]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div2" class="div2" name="div2">
                                <td><?php echo "17"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[16]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[16]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[16]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox17" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[16]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox17" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[16]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox17" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[16]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox17" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[16]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox17" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[16]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div2" class="div2" name="div2">
                                <td><?php echo "18"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[17]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[17]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[17]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox18" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[17]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox18" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[17]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox18" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[17]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox18" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[17]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox18" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[17]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div2" class="div2" name="div2">
                                <td><?php echo "19"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[18]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[18]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[18]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox19" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[18]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox19" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[18]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox19" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[18]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox19" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[18]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox19" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[18]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div2" class="div2" name="div2">
                                <td><?php echo "20"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[19]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[19]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[19]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox20" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[19]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox20" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[19]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox20" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[19]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox20" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[19]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox20" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[19]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>
                            <!--3rd-row-21-->
                            <tr id="div3" class="div3" name="div3">
                                <td><?php echo "21"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[20]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[20]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[20]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox21" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[20]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox21" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[20]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox21" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[20]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox21" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[20]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox21" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[20]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>

                            <tr id="div3" class="div3" name="div3">
                                <td><?php echo "22"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[21]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[21]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[21]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox22" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[21]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox22" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[21]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox22" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[21]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox22" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[21]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox22" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[21]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div3" class="div3" name="div3">
                                <td><?php echo "23"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[22]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[22]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[22]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox23" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[22]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"
                                           required="required"/></td>
                                <td><input type="checkbox" id="checkbox23" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[22]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"
                                           required="required"/></td>
                                <td><input type="checkbox" id="checkbox23" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[22]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"
                                           required="required"/></td>
                                <td><input type="checkbox" id="checkbox23" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[22]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"
                                           required="required"/></td>
                                <td><input type="checkbox" id="checkbox23" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[22]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"
                                           required="required"/></td>
                            </tr>


                            <tr id="div3" class="div3" name="div3">
                                <td><?php echo "24"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[23]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[23]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[23]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox24" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[23]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox24" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[23]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox24" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[23]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox24" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[23]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox24" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[23]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div3" class="div3" name="div3">
                                <td><?php echo "25"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[24]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[24]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[24]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox25" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[24]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox25" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[24]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox25" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[24]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox25" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[24]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox25" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[24]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div3" class="div3" name="div3">
                                <td><?php echo "26"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[25]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[25]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[25]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox26" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[25]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox26" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[25]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox26" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[25]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox26" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[25]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox26" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[25]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>

                            <tr id="div3" class="div3" name="div3">
                                <td><?php echo "27"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[26]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[26]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[26]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox27" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[26]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox27" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[26]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox27" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[26]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox27" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[26]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox27" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[26]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div3" class="div3" name="div3">
                                <td><?php echo "28"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[27]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[27]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[27]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox28" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[27]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox28" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[27]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox28" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[27]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox28" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[27]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox28" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[27]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div3" class="div3" name="div3">
                                <td><?php echo "29"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[28]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[28]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[28]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox29" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[28]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox29" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[28]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox29" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[28]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox29" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[28]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox29" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[28]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div3" class="div3" name="div3">
                                <td><?php echo "30"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[29]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[29]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[29]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox30" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[29]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox30" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[29]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox30" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[29]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox30" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[29]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox30" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[29]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div4" class="div4" name="div4">
                                <td><?php echo "31"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[30]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[30]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[30]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox31" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[30]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox31" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[30]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox31" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[30]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox31" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[30]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox31" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[30]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div4" class="div4" name="div4">
                                <td><?php echo "32"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[31]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[31]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[31]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox32" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[31]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox32" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[31]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox32" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[31]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox32" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[31]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox32" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[31]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div4" class="div4" name="div4">
                                <td><?php echo "33"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[32]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[32]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[32]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox33" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[32]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox33" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[32]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox33" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[32]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox33" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[32]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox33" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[32]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div4" class="div4" name="div4">
                                <td><?php echo "34"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[33]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[33]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[33]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox34" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[33]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox34" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[33]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox34" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[33]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox34" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[33]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox34" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[33]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div4" class="div4" name="div4">
                                <td><?php echo "35"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[34]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[34]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[34]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox35" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[34]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox35" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[34]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox35" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[34]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox35" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[34]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox35" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[34]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div4" class="div4" name="div4">
                                <td><?php echo "36"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[35]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[35]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[35]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox36" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[35]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox36" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[35]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox36" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[35]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox36" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[35]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox36" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[35]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div4" class="div4" name="div4">
                                <td><?php echo "37"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[36]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[36]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[36]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox37" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[36]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox37" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[36]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox37" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[36]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox37" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[36]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox37" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[36]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div4" class="div4" name="div4">
                                <td><?php echo "38"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[37]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[37]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[37]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox38" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[37]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox38" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[37]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox38" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[37]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox38" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[37]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox38" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[37]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div4" class="div4" name="div4">
                                <td><?php echo "39"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[38]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[38]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[38]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox39" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[38]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox39" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[38]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox39" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[38]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox39" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[38]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox39" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[38]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div4" class="div4" name="div4">
                                <td><?php echo "40"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[39]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[39]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[39]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox40" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[39]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox40" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[39]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox40" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[39]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox40" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[39]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox40" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[39]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div5" class="div5" name="div5">
                                <td><?php echo "41"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[40]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[40]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[40]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox41" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[40]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox41" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[40]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox41" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[40]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox41" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[40]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox41" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[40]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>

                            <tr id="div5" class="div5" name="div5">
                                <td><?php echo "42"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[41]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[41]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[41]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox42" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[41]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox42" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[41]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox42" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[41]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox42" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[41]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox42" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[41]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div5" class="div5" name="div5">
                                <td><?php echo "43"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[42]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[42]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[42]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox43" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[42]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox43" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[42]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox43" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[42]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox43" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[42]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox43" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[42]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div5" class="div5" name="div5">
                                <td><?php echo "44"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[43]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[43]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[43]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox44" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[43]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox44" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[43]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox44" class="checkbox" name="checkbox[]"
                                    "value="2" <?php if ($get_all_work_personality_save_for_later[43]['value'] == "2") {
                                        echo "checked";
                                    } ?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" />
                                </td>
                                <td><input type="checkbox" id="checkbox44" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[43]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox44" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[43]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div5" class="div5" name="div5">
                                <td><?php echo "45"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[44]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[44]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[44]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox45" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[44]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox45" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[44]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox45" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[44]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox45" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[44]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox45" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[44]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div5" class="div5" name="div5">
                                <td><?php echo "46"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[45]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[45]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[45]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox46" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[45]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox46" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[45]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox46" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[45]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox46" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[45]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox46" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[45]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div5" class="div5" name="div5">
                                <td><?php echo "47"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[46]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[46]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[46]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox47" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[46]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox47" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[46]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox47" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[46]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox47" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[46]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox47" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[46]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div5" class="div5" name="div5">
                                <td><?php echo "48"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[47]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[47]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[47]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox48" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[47]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox48" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[47]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox48" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[47]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox48" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[47]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox48" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[47]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div5" class="div5" name="div5">
                                <td><?php echo "49"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[48]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[48]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[48]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox49" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[48]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox49" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[48]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox49" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[48]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox49" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[48]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox49" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[48]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div5" class="div5" name="div5">
                                <td><?php echo "50"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[49]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[49]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[49]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox50" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[49]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox50" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[49]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox50" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[49]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox50" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[49]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox50" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[49]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>

                            <!--now-->
                            <tr id="div6" class="div6" name="div6">
                                <td><?php echo "51"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[50]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[50]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[50]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox51" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[50]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox51" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[50]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox51" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[50]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox51" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[50]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox51" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[50]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div6" class="div6" name="div6">
                                <td><?php echo "52"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[51]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[51]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[51]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox52" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[51]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox52" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[51]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox52" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[51]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox52" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[51]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox52" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[51]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div6" class="div6" name="div6">
                                <td><?php echo "53"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[52]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[52]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[52]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox53" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[52]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox53" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[52]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox53" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[52]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox53" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[52]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox53" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[52]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div6" class="div6" name="div6">
                                <td><?php echo "54"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[53]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[53]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[53]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox54" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[53]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox54" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[53]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox54" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[53]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox54" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[53]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox54" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[53]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div6" class="div6" name="div6">
                                <td><?php echo "55"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[54]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[54]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[54]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox55" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[54]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox55" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[54]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox55" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[54]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox55" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[54]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox55" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[54]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div6" class="div6" name="div6">
                                <td><?php echo "56"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[55]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[55]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[55]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox56" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[55]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox56" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[55]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox56" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[55]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox56" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[55]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox56" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[55]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div6" class="div6" name="div6">
                                <td><?php echo "57"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[56]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[56]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[56]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox57" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[56]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox57" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[56]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox57" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[56]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox57" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[56]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox57" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[56]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div6" class="div6" name="div6">
                                <td><?php echo "58"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[57]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[57]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[57]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox58" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[57]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox58" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[57]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox58" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[57]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox58" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[57]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox58" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[57]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div6" class="div6" name="div6">
                                <td><?php echo "59"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[58]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[58]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[58]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox59" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[58]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox59" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[58]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox59" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[58]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox59" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[58]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox59" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[58]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div6" class="div6" name="div6">
                                <td><?php echo "60"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[59]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[59]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[59]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox60" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[59]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox60" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[59]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox60" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[59]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox60" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[59]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox60" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[59]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div7" class="div7" name="div7">
                                <td><?php echo "61"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[60]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[60]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[60]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox61" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[60]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox61" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[60]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox61" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[60]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox61" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[60]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox61" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[60]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div7" class="div7" name="div7">
                                <td><?php echo "62"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[61]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[61]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[61]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox62" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[61]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox62" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[61]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox62" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[61]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox62" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[61]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox62" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[61]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div7" class="div7" name="div7">
                                <td><?php echo "63"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[62]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[62]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[62]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox63" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[62]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox63" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[62]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox63" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[62]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox63" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[62]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox63" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[62]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>

                            <!--now-->

                            <tr id="div7" class="div7" name="div7">
                                <td><?php echo "64"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[63]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[63]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[63]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox64" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[63]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox64" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[63]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox64" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[63]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox64" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[63]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox64" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[63]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div7" class="div7" name="div7">
                                <td><?php echo "65"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[64]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[64]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[64]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox65" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[64]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox65" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[64]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox65" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[64]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox65" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[64]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox65" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[64]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div7" class="div7" name="div7">
                                <td><?php echo "66"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[65]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[65]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[65]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox66" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[65]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox66" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[65]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox66" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[65]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox66" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[65]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox66" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[65]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div7" class="div7" name="div7">
                                <td><?php echo "67"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[66]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[66]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[66]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox67" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[66]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox67" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[66]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox67" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[66]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox67" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[66]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox67" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[66]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div7" class="div7" name="div7">
                                <td><?php echo "68"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[67]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[67]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[67]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox68" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[67]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox68" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[67]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox68" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[67]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox68" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[67]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox68" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[67]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div7" class="div7" name="div7">
                                <td><?php echo "69"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[68]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[68]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[68]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox69" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[68]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox69" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[68]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox69" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[68]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox69" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[68]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox69" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[68]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div7" class="div7" name="div7">
                                <td><?php echo "70"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[69]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[69]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[69]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox70" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[69]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox70" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[69]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox70" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[69]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox70" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[69]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox70" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[69]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>

                            <tr id="div8" class="div8" name="div8">
                                <td><?php echo "71"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[70]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[70]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[70]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox71" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[70]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox71" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[70]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox71" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[70]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox71" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[70]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox71" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[70]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div8" class="div8" name="div8">
                                <td><?php echo "72"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[71]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[71]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[71]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox72" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[71]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox72" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[71]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox72" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[71]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox72" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[71]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox72" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[71]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div8" class="div8" name="div8">
                                <td><?php echo "73"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[72]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[72]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[72]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox73" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[72]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox73" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[72]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox73" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[72]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox73" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[72]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox73" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[72]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div8" class="div8" name="div8">
                                <td><?php echo "74"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[73]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[73]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[73]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox74" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[73]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox74" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[73]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox74" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[73]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox74" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[73]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox74" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[73]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div8" class="div8" name="div8">
                                <td><?php echo "75"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[74]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[74]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[74]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox75" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[74]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox75" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[74]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox75" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[74]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox75" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[74]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox75" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[74]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div8" class="div8" name="div8">
                                <td><?php echo "76"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[75]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[75]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[75]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox76" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[75]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox76" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[75]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox76" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[75]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox76" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[75]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox76" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[75]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div8" class="div8" name="div8">
                                <td><?php echo "77"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[76]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[76]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[76]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox77" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[76]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox77" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[76]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox77" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[76]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox77" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[76]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox77" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[76]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>

                            <tr id="div8" class="div8" name="div8">
                                <td><?php echo "78"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[77]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[77]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[77]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox78" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[77]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox78" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[77]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox78" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[77]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox78" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[77]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox78" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[77]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div8" class="div8" name="div8">
                                <td><?php echo "79"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[78]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[78]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[78]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox79" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[78]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox79" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[78]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox79" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[78]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox79" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[78]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox79" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[78]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div8" class="div8" name="div8">
                                <td><?php echo "80"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[79]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[79]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[79]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox80" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[79]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox80" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[79]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox80" class="checkbox" name="checkbox[]"
                                    "value="2" <?php if ($get_all_work_personality_save_for_later[79]['value'] == "2") {
                                        echo "checked";
                                    } ?> data-bind="checked: $data.queuedValues, checkedValue: policyNumber" />
                                </td>
                                <td><input type="checkbox" id="checkbox80" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[79]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox80" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[79]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div9" class="div9" name="div9">
                                <td><?php echo "81"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[80]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[80]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[80]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox81" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[80]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox81" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[80]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox81" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[80]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox81" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[80]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox81" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[80]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div9" class="div9" name="div9">
                                <td><?php echo "82"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[81]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[81]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[81]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox82" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[81]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox82" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[81]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox82" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[81]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox82" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[81]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox82" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[81]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div9" class="div9" name="div9">
                                <td><?php echo "83"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[82]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[82]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[82]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox83" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[82]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox83" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[82]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox83" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[82]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox83" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[82]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox83" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[82]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div9" class="div9" name="div9">
                                <td><?php echo "84"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[83]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[83]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[83]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox84" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[83]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox84" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[83]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox84" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[83]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox84" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[83]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox84" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[83]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div9" class="div9" name="div9">
                                <td><?php echo "85"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[84]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[84]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[84]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox85" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[84]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox85" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[84]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox85" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[84]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox85" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[84]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox85" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[84]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div9" class="div9" name="div9">
                                <td><?php echo "86"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[85]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[85]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[85]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox86" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[85]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox86" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[85]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox86" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[85]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox86" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[85]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox86" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[85]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>

                            <!--now-->
                            <tr id="div9" class="div9" name="div9">
                                <td><?php echo "87"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[86]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[86]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[86]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox87" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[86]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox87" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[86]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox87" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[86]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox87" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[86]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox87" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[86]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div9" class="div9" name="div9">
                                <td><?php echo "88"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[87]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[87]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[87]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox88" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[87]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox88" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[87]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox88" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[87]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox88" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[87]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox88" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[87]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div9" class="div9" name="div9">
                                <td><?php echo "89"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[88]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[88]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[88]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox89" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[88]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox89" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[88]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox89" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[88]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox89" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[88]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox89" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[88]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div9" class="div9" name="div9">
                                <td><?php echo "90"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[89]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[89]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[89]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox90" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[89]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox90" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[89]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox90" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[89]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox90" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[89]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox90" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[89]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div10" class="div10" name="div10">
                                <td><?php echo "91"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[90]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[90]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[90]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox91" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[90]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox91" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[90]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox91" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[90]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox91" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[90]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox91" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[90]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div10" class="div10" name="div10">
                                <td><?php echo "92"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[91]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[91]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[91]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox92" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[91]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox92" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[91]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox92" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[91]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox92" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[91]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox92" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[91]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div10" class="div10" name="div10">
                                <td><?php echo "93"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[92]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[92]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[92]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox93" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[92]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox93" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[92]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox93" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[92]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox93" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[92]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox93" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[92]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div10" class="div10" name="div10">
                                <td><?php echo "94"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[93]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[93]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[93]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox94" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[93]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox94" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[93]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox94" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[93]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox94" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[93]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox94" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[93]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div10" class="div10" name="div10">
                                <td><?php echo "95"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[94]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[94]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[94]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox95" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[94]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox95" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[94]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox95" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[94]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox95" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[94]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox95" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[94]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div10" class="div10" name="div10">
                                <td><?php echo "96"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[95]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[95]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[95]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox96" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[95]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox96" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[95]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox96" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[95]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox96" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[95]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox96" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[95]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div10" class="div10" name="div10">
                                <td><?php echo "97"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[96]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[96]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[96]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox97" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[96]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox97" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[96]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox97" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[96]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox97" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[96]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox97" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[96]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div10" class="div10" name="div10">
                                <td><?php echo "98"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[97]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[97]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[97]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox98" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[97]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox98" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[97]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox98" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[97]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox98" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[97]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox98" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[97]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div10" class="div10" name="div10">
                                <td><?php echo "99"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[98]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[98]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[98]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox99" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[98]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox99" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[98]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox99" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[98]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox99" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[98]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox99" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[98]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>

                            <!--now-->

                            <tr id="div10" class="div10" name="div10">
                                <td><?php echo "100"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[99]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[99]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[99]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox100" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[99]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox100" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[99]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox100" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[99]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox100" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[99]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox100" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[99]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div11" class="div11" name="div11">
                                <td><?php echo "101"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[100]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[100]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[100]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox101" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[100]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox101" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[100]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox101" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[100]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox101" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[100]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox101" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[100]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div11" class="div11" name="div11">
                                <td><?php echo "102"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[101]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[101]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[101]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox102" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[101]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox102" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[101]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox102" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[101]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox102" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[101]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox102" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[101]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div11" class="div11" name="div11">
                                <td><?php echo "103"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[102]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[102]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[102]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox103" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[102]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox103" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[102]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox103" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[102]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox103" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[102]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox103" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[102]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div11" class="div11" name="div11">
                                <td><?php echo "104"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[103]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[103]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[103]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox104" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[103]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox104" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[103]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox104" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[103]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox104" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[103]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox104" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[103]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            <tr id="div11" class="div11" name="div11">
                                <td><?php echo "105"; ?></td>
                                <td class="q_name"><?php echo $get_all_work_personality_save_for_later[104]['name']; ?></td>
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[104]['dimensions_name']; ?>"
                                       id="dimensions_name[]" name="dimensions_name[]">
                                <input type="hidden"
                                       value="<?php echo $get_all_work_personality_save_for_later[104]['sub_categories_names']; ?>"
                                       id="sub_categories_names[]" name="sub_categories_names[]">
                                <td><input type="checkbox" id="checkbox105" class="checkbox" name="checkbox[]"
                                           value="0" <?php echo($get_all_work_personality_save_for_later[104]['value'] == 0 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox105" class="checkbox" name="checkbox[]"
                                           value="1" <?php echo($get_all_work_personality_save_for_later[104]['value'] == 1 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox105" class="checkbox" name="checkbox[]"
                                           value="2" <?php echo($get_all_work_personality_save_for_later[104]['value'] == 2 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox105" class="checkbox" name="checkbox[]"
                                           value="3" <?php echo($get_all_work_personality_save_for_later[104]['value'] == 3 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                                <td><input type="checkbox" id="checkbox105" class="checkbox" name="checkbox[]"
                                           value="5" <?php echo($get_all_work_personality_save_for_later[104]['value'] == 5 ? 'checked' : ''); ?>
                                           data-bind="checked: $data.queuedValues, checkedValue: policyNumber"/></td>
                            </tr>


                            </tbody>
                        </table>
                        <?php
                        $i = 70;
                        if ($i == '70'){


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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at,
                        luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum id
                        metus ac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet sagittis.
                        In tincidunt orci sit amet.</p>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo base_url(); ?>login/dashboard">
                        <button type="button" class="btn btn-secondary">Save For Later</button>
                    </a>
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
        document.getElementById("kt_aside").style.pointerEvents = "none";
           var arr = [];
     var length_value = [];
           $('input.checkbox:checkbox:checked').each(function () {
            arr.push($(this).val());
        });
        // alert(arr);
        // var length_value=[];
        length_value = arr.length;
        length_value=length_value-1;
      //  alert(length_value);


           $(window).on('load', function() {
                        //alert('ffggf');
if(length_value > 1 && length_value <= 9){
   // alert('1');
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

}
else if(length_value > 9 && length_value <= 19){
   // alert('2');
     $(".div1").hide();
                $(".div2").show();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").hide();

}
else if(length_value > 19 && length_value <= 29){
   // alert('3');
         $(".div1").hide();
                $(".div2").hide();
                $(".div3").show();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").hide();

}
else if(length_value > 29 && length_value <=39){
  //  alert('4');
    $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").show();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").hide();


}
else if(length_value > 39 && length_value <= 49){
   // alert('5');
        $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").show();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").hide();

}
else if(length_value > 49 && length_value <= 59){
   // alert('6');
     $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").show();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").hide();

}
else if(length_value > 59 && length_value <=69){
   // alert('7');
   $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").show();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").hide();

}
else if(length_value > 69 && length_value <=79){

    $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").show();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").hide();
}
else if(length_value > 79 && length_value <=89){

    $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").show();
                $(".div10").hide();
				$(".div11").hide();
}
else if(length_value > 89 && length_value <=99){

    $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").show();
				$(".div11").hide();
}
else if(length_value > 99 && length_value <=104){
   $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").show();

}

});



        var time22 = [];
        var info = [];

        var alert_variable = [];


        var new_counter = [];
        var checklength1 = [];
        var checklength2 = [];
        var checklength3 = [];
        var checklength4 = [];
        var checklength5 = [];
        var checklength6 = [];
        var checklength7 = [];

        var checklength8 = [];
        var checklength9 = [];
        var checklength10 = [];
        var checklength11 = [];

        var checkbox1 = [];
        var checkbox2 = [];
        var checkbox3 = [];

        var checkbox4 = [];
        var checkbox5 = [];
        var checkbox6 = [];

        var checkbox7 = [];
        var checkbox8 = [];
        var checkbox9 = [];

        var checkbox10 = [];
        var checkbox11 = [];
        var checkbox12 = [];
        var checkbox13 = [];

        var checkbox14 = [];
        var checkbox15 = [];
        var checkbox16 = [];

        var checkbox17 = [];
        var checkbox18 = [];
        var checkbox19 = [];

        var checkbox20 = [];


        var checkbox21 = [];
        var checkbox22 = [];
        var checkbox23 = [];

        var checkbox24 = [];
        var checkbox25 = [];
        var checkbox26 = [];

        var checkbox27 = [];
        var checkbox28 = [];
        var checkbox29 = [];

        var checkbox30 = [];

        var checkbox31 = [];
        var checkbox32 = [];
        var checkbox33 = [];

        var checkbox34 = [];
        var checkbox35 = [];
        var checkbox36 = [];

        var checkbox37 = [];
        var checkbox38 = [];
        var checkbox39 = [];

        var checkbox40 = [];


        var checkbox51 = [];
        var checkbox52 = [];
        var checkbox53 = [];

        var checkbox54 = [];
        var checkbox55 = [];
        var checkbox56 = [];

        var checkbox57 = [];
        var checkbox58 = [];
        var checkbox59 = [];

        var checkbox60 = [];


        var checkbox61 = [];
        var checkbox62 = [];
        var checkbox63 = [];

        var checkbox64 = [];
        var checkbox65 = [];
        var checkbox66 = [];

        var checkbox67 = [];
        var checkbox68 = [];
        var checkbox69 = [];

        var checkbox70 = [];


        var checkbox71 = [];
        var checkbox72 = [];
        var checkbox73 = [];

        var checkbox74 = [];
        var checkbox75 = [];
        var checkbox76 = [];

        var checkbox77 = [];
        var checkbox78 = [];
        var checkbox79 = [];

        var checkbox80 = [];


        var checkbox81 = [];
        var checkbox82 = [];
        var checkbox83 = [];

        var checkbox84 = [];
        var checkbox85 = [];
        var checkbox86 = [];

        var checkbox87 = [];
        var checkbox88 = [];
        var checkbox89 = [];

        var checkbox90 = [];


        var checkbox91 = [];
        var checkbox92 = [];
        var checkbox93 = [];

        var checkbox94 = [];
        var checkbox95 = [];
        var checkbox96 = [];

        var checkbox97 = [];
        var checkbox98 = [];
        var checkbox99 = [];

        var checkbox100 = [];

        var checkbox101 = [];
        var checkbox102 = [];
        var checkbox103 = [];

        var checkbox104 = [];
        var checkbox105 = [];


        var alert_variable = [];
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
        $(".fadeIn").click(function () {
            timeCircles.elements.last().fadeIn();
        });
        $(".fadeOut").click(function () {
            timeCircles.elements.last().fadeOut();
        });

        // Start and stop are methods applied on the public TimeCircles instance
        $(".startTimer").click(function () {
            $(".someTimer").eq(1).TimeCircles().start();
        });
        $(".stopTimer").click(function () {
            $(".someTimer").eq(1).TimeCircles().stop();

        });


        $(".start").click(function () {
            $(".someTimer").TimeCircles().start();
        });
        $(".stop").click(function () {
            $(".someTimer").TimeCircles().stop();
        });

        setTimeout(function () {
            window.location.href = "http://10-yards.us-east-2.elasticbeanstalk.com/ci/login/dashboard"; //will redirect to your blog page (an ex: blog.html)
        }, 900000); //will call the function after 2 secs.
        $(".someTimer2").TimeCircles().destroy();

        time = $(".someTimer").TimeCircles().getTime();
        //alert(time);
        $('.someTimer').TimeCircles({time: {Days: {show: false}, Hours: {show: false}}});

        $('.someTimer').TimeCircles().addListener(function () {
            time22 = $('.someTimer').TimeCircles().getTime()

        });

        //alert(time22);

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
        $(document).ready(function () {
            $('input[type="checkbox"]').on('change', function () {
                var checkedValue = $(this).prop('checked');
                $(this).closest('tr').find('input[type="checkbox"]').each(function () {
                    $(this).prop('checked', false);
                });
                $(this).prop("checked", checkedValue);

            });
        });
    </script>
    <script>
         $('.someTimer').TimeCircles().addListener(function () {
            time22 = $('.someTimer').TimeCircles().getTime()

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
        var counter = [];
        counter = 0;
        var values = [];
        var values1 = [];
        var values3 = [];
        var values2 = [];
        var values5 = [];
        var currentRows = [];
        var arr_length = [];
        var selected = [];

        var final_length = [];
        // var info=[];
        var current = [];





        $('#checkboxes input[name="dimensions_name[]"]').each(function () {
            selected.push($(this).attr('value'));
        });
        //alert(selected);
        //alert(selected.length);
        //alert('exit');
        // alert(selected.length);
        //alert('selected');
        var sub_categories_names = [];
        $('#checkboxes input[name="sub_categories_names[]"]').each(function () {
            sub_categories_names.push($(this).attr('value'));
        });
        var dimensions_name2 = [];
        $('#checkboxes input[name="dimensions_name[]"]').each(function () {
            dimensions_name2.push($(this).attr('value'));
        });

        //alert(sub_categories_names);
        // alert(sub_categories_names.length);
        //  sub_categories_names = $(this).closest('tr').find('.q_name2').text();
        // alert(sub_categories_names);
        // alert('before');
        // var sub_categories_names = $(this).closest('tr').find('input[name="sub_categories_names[]"]').val();
        // alert(sub_categories_names);
        // alert('after');
        $("#checkboxes tbody tr").on("click", function () {
            //alert(dimensions_name2.length);

//var table = $('#checkboxes').DataTable();

//info = table.page.info();


// var table = $ ('#checkboxes'). DataTable ();
//  info = table.page.info ();
//  info=info.page + 1;
//alert(info);

            current = $("#checkbox[10]").prop("checked", false);


            counter++;
            var oDate = new Date();
            var nHrs = oDate.getHours();
            var nMin = oDate.getMinutes();
            var nDate = oDate.getDate();
            var nMnth = oDate.getMonth();
            var nYear = oDate.getFullYear();


            var values20 = nHrs + ':' + nMin;


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
// var sub_categories_names2 = $(this).closest('tr').find('input[name="sub_categories_names[]"]').val();
//var sub_categories_names = $(this).closest('tr').find('.q_name2').text();
//alert(sub_categories_names);
            //var sub_categories_names = $(this).closest('tr').find('input[type="hidden"]').val();
// alert(dimensions_name);
            values = arr;
            if (!(values.length == 105)) {

                values.push(currentRows);
            }

// alert(values);
            values1.push(name);
//alert(values1);
//alert(dimensions_name2.length);
            values3 = dimensions_name2;
//alert(values3);
//alert('after');
            //values3.push(dimensions_name);
            //alert(values3);
            values5 = sub_categories_names;
//values5.push(sub_categories_names2);
//alert(values2);

            length = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
            arr_length = values.length;
// alert(values);//checkbox
// alert(values1);// name
// alert(values2);// sub_categories_names
// alert(values3);//dimensions_name

            var table = $('#checkboxes').DataTable();
            info = table.page.info();
            info = info.page + 1;
//alert(info);
            alert_variable = arr.length - 1;
            //alert(alert_variable);
            // if (info == 1) {
                $("#submit").hide();
                $("#save_for_later").show();

// $(".div2").hide();
        // $(".div3").hide();
        // $(".div4").hide();
        // $(".div5").hide();
        // $(".div6").hide();
        // $(".div7").hide();
        // $(".div8").hide();
        // $(".div9").hide();
        // $(".div10").hide();
        // $(".div11").hide();


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

                checklength1 = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
              //  alert(counter);
new_counter=arr.length;
//alert(new_counter);
                if (checklength1 > 9) {

                    $(".div1").hide();
                $(".div2").show();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").hide();

                    //  window.FlashMessage.success('Yours answers are saved successfully.');
                }

            // }

//  page #2


// page 2

            // if (info == 2) {
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


                checklength2 = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
                //alert(checklength2);

                if (checklength1 > 19) {
                    $(".div1").hide();
                $(".div2").hide();
                $(".div3").show();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").hide();
                    // window.FlashMessage.success('Yours answers are saved successfully.');
                }


            // }


// page 3

            // if (info == 3) {
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

                checklength3 = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
               // alert(checklength3);

                if (checklength1 > 29) {
                    $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").show();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").hide();
                    // window.FlashMessage.success('Yours answers are saved successfully.');
                }
            // }


// page 4

            // if (info == 4) {
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

                checklength4 = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
                //alert(checklength1);

                if (checklength1 > 39) {
                    $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").show();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").hide();
                    // window.FlashMessage.success('Yours answers are saved successfully.');
                }
            // }


// page 5

            // if (info == 5) {
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


                checklength5 = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
                //alert(checklength1);

                if (checklength1 > 49) {
                    $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").show();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").hide();
                    // window.FlashMessage.success('Yours answers are saved successfully.');
                }
            // }


// page 6
            // if (info == 6) {
                $("#submit").hide();
                $("#save_for_later").show();

                //alert(checkbox46);
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

                if (checklength1 > 59) {
                    $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").show();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").hide();
                    // window.FlashMessage.success('Yours answers are saved successfully.');
                }
            // }

            // if (info == 7) {
                $("#submit").hide();
                $("#save_for_later").show();


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

                if (checklength1 > 69) {
                    $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").show();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").hide();
                    // window.FlashMessage.success('Yours answers are saved successfully.');
                }
            // }


//  page 8

            // if (info == 8) {
                $("#submit").hide();
                $("#save_for_later").show();

                checkbox71 = jQuery("#checkbox71:checked").length;
                checkbox72 = jQuery("#checkbox72:checked").length;
                checkbox73 = jQuery("#checkbox73:checked").length;
                checkbox74 = jQuery("#checkbox74:checked").length;
                checkbox75 = jQuery("#checkbox75:checked").length;
                checkbox76 = jQuery("#checkbox76:checked").length;
                checkbox77 = jQuery("#checkbox77:checked").length;
                checkbox78 = jQuery("#checkbox78:checked").length;
                checkbox79 = jQuery("#checkbox79:checked").length;
                checkbox80 = jQuery("#checkbox80:checked").length;
                //alert(alert_variable);

                checklength8 = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
                //alert(checklength1);

                if (checklength1 > 79) {
                    $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").show();
                $(".div10").hide();
				$(".div11").hide();
                    // window.FlashMessage.success('Yours answers are saved successfully.');
                }
            // }


//  page 9
//alert(info);
            // if (info == 9) {
                $("#submit").hide();
                $("#save_for_later").show();


// alert(info);
// alert(alert_variable);

                checkbox81 = jQuery("#checkbox81:checked").length;
                checkbox82 = jQuery("#checkbox82:checked").length;
                checkbox83 = jQuery("#checkbox83:checked").length;
                checkbox84 = jQuery("#checkbox84:checked").length;
                checkbox85 = jQuery("#checkbox85:checked").length;
                checkbox86 = jQuery("#checkbox86:checked").length;
                checkbox87 = jQuery("#checkbox87:checked").length;
                checkbox88 = jQuery("#checkbox88:checked").length;
                checkbox89 = jQuery("#checkbox89:checked").length;
                checkbox90 = jQuery("#checkbox90:checked").length;


                checklength9 = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
                //alert(checklength1);

                if (checklength1 > 89) {
                    $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").show();
				$(".div11").hide();
                    // window.FlashMessage.success('Yours answers are saved successfully.');
                }
            // }
//  page 10

            // if (info == 10) {
                $("#submit").hide();
                $("#save_for_later").show();
                checkbox91 = jQuery("#checkbox91:checked").length;
                checkbox92 = jQuery("#checkbox92:checked").length;
                checkbox93 = jQuery("#checkbox93:checked").length;
                checkbox94 = jQuery("#checkbox94:checked").length;
                checkbox95 = jQuery("#checkbox95:checked").length;
                checkbox96 = jQuery("#checkbox96:checked").length;
                checkbox97 = jQuery("#checkbox97:checked").length;
                checkbox98 = jQuery("#checkbox98:checked").length;
                checkbox99 = jQuery("#checkbox99:checked").length;
                checkbox100 = jQuery("#checkbox100:checked").length;

//alert(checkbox91);

                checklength10 = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
                //alert(checklength1);

                if (checklength1 > 99) {
                    $("#submit").show();
                    $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").show();
                    // window.FlashMessage.success('Yours answers are saved successfully.');
                }
            // }

            // if (info == 11) {

                $("#save_for_later").hide();

                checkbox101 = jQuery("#checkbox101:checked").length;
                checkbox102 = jQuery("#checkbox102:checked").length;
                checkbox103 = jQuery("#checkbox103:checked").length;
                checkbox104 = jQuery("#checkbox104:checked").length;
                checkbox105 = jQuery("#checkbox105:checked").length;


                checklength11 = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
                //alert(checklength1);

                if (checklength1 > 105) {
                    $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
				$(".div11").show();

                    //  $(".div11").hide();
                }
            // }

        });


        function submitForm() {
            //alert(time22);
             if (time22 < 01) {
               // alert('innnn');

                $(".someTimer").TimeCircles().destroy();
                 $(".someTimer2").TimeCircles().destroy();
            }




            if (info == 11) {
                if (alert_variable < 101) {
                    if (checkbox101 == 0) {

                        window.FlashMessage.error('Question # 101 is required.');

                    }
                }
                if (alert_variable < 102) {
                    if (checkbox102 == 0) {

                        window.FlashMessage.error('Question # 102 is required.');

                    }
                }
                if (alert_variable < 103) {
                    if (checkbox103 == 0) {

                        window.FlashMessage.error('Question # 103 is required.');

                    }
                }
                if (alert_variable < 104) {
                    if (checkbox104 == 0) {

                        window.FlashMessage.error('Question # 104 is required.');

                    }
                }
                if (alert_variable < 105) {
                    if (checkbox105 == 0) {

                        window.FlashMessage.error('Question # 105 is required.');

                    }
                }

            }


            //debugger;
            var time = [];
            var time2 = [];
            time = $(".someTimer").TimeCircles().getTime();
            if (time <= 0) {
                time2 = $(".someTimer2").TimeCircles().getTime();
                time = time2;
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

            final_length = length_value + counter;

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
                type: 'POST',
                url: 'work_personality_index_form_data',
                data: {"checkbox": values, "sub_categories_names": values5, "dimensions_name": selected, "time": time},

                success: function (data) {
                    //alert('success');


                    // var len = data.length;
                    // var length=document.getElementById("checkboxes").querySelectorAll("input:checked").length;

                    //alert(length);//5
                    //alert(len);
                    //alert(counter);
                    // counter=105
                    if (final_length >= 105) {
                        //   alert(final_length);
                        //   alert('before');
                        window.location.href = "<?php echo base_url();?>login/dashboard";
                        //   alert(length);
                        // Read values
                        //alert('Are you sure to submit?');
                        // console.log(data);
                        //window.location.href="<?php echo base_url();?>login/dashboard";


                    } else {
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

            if (final_length >= 105) {

                window.location.href = "<?php echo base_url();?>login/dashboard";

                //alert('equal');

                // return true;
                // break;

            } else {
                //window.FlashMessage.error('all Questions Are Mandatory.');
//alert("all Questions Are Mandatory.");
            }
            return false;
        }
    </script>
    <script type="text/javascript">
        $(window).on('load', function () {
            $('#myModal').modal('show');
        });
    </script>

    <script type="text/javascript">
        var counter = [];
        counter = 0;
        time = $(".someTimer").TimeCircles().getTime();
        var currentRows2 = [];
        //alert(time);
        var values = [];
        var save_for_later_values = [];
        var values1 = [];
        var values2 = [];
        var values3 = [];
        var checkboxes_length = [];
        var questions_name = [];
        var dimensions_name3 = [];

        $('#checkboxes').on('page.dt', function () {


            table = $('#checkboxes').DataTable();
            info = table.page.info();
            info = info.page + 1;
// alert(counter);
// alert(arr.length);
            //alert(checklength1);
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
            }
            if (info == 5 && new_counter > 39) {
                window.FlashMessage.success('success on page 4');
                $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
            }
            if (info == 6 && new_counter > 49) {
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

            }
            if (info == 8 && new_counter > 69) {
                window.FlashMessage.success('success on page 7');
                $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();

            }
            if (info == 9 && new_counter > 79) {
                window.FlashMessage.success('success on page 8');
                $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();


            }
            if (info == 10 && new_counter > 89) {
                window.FlashMessage.success('success on page 10');
                $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();

            }
            if (info == 11 && new_counter > 99) {
                window.FlashMessage.success('success on page 11');
                $(".div1").hide();
                $(".div2").hide();
                $(".div3").hide();
                $(".div4").hide();
                $(".div5").hide();
                $(".div6").hide();
                $(".div7").hide();
                $(".div8").hide();
                $(".div9").hide();
                $(".div10").hide();
            } else {
                //alert('3rd');
            //$('#checkboxes').hide();
               //  alert('You are not allowed to skip the page.');
                window.FlashMessage.error('You are not allowed to skip the test.');
               // e.stopPropagation()
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

            var currentRows2 = $(this).closest('tr').find('input[type="checkbox"]:checked').val();
            const clicked = $(this).closest('tr').find('input[type="checkbox"]:checked');
            $(clicked.context).css('opacity', clicked.length ? 0.5 : 1)
            // alert(currentRows2);
            save_for_later_values.push(currentRows2);
            //alert(save_for_later_values);
            // timer
            // first time
            time1 = $(".someTimer").TimeCircles().getTime();

//alert(time);
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
                $(".start").click(function () {
                    $(".someTimer2").TimeCircles().start();
                });
                time2 = $(".someTimer2").TimeCircles().getTime();
//alert(time);
//01
                if (time2 < 01) {
                    	//alert("vdgdg") ;
                    $(".someTimer").TimeCircles().destroy();
                    $(".someTimer2").TimeCircles().destroy();

                    $.ajax({
                type: 'POST',
                url: 'incomplete_scenario',
                data: {
                    "time": 0,

                },
                dataType: 'json',
                success: function (data) {
                   // alert('success');
                   window.location.href = "<?php echo base_url();?>login/dashboard";
                }
            });
                    //alert('success2');
                     window.location.replace("http://10-yards.us-east-2.elasticbeanstalk.com/ci/login/dashboard");
                }


            }
            // end


            var name = $(this).closest('tr').find('.q_name').text();

//  var dimensions_name = $(this).closest('tr').find('input[type="hidden"]').val();
            var dimensions_name = $(this).closest('tr').find('input[type="hidden"]').val();
            var sub_categories_names = $(this).closest('tr').find('input[name="sub_categories_names[]"]').val();


            questions_name.push(name);
            values2.push(sub_categories_names);
            dimensions_name3.push(dimensions_name);

        });


        //alert(values.length);
        //alert(save_for_later_values.length);

        //alert(save_for_later_values);

        function save_for_later() {



            //alert(time22);
            if (time22 < 01) {
               // alert('innnn');

                $(".someTimer").TimeCircles().destroy();
                 $(".someTimer2").TimeCircles().destroy();
            }

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
            // var time=[];
            // var time2=[];
            // time = $(".someTimer").TimeCircles().getTime();
            // if(time <= 0){
            //      time2 = $(".someTimer2").TimeCircles().getTime();
            //     time=time2;
            // }
            // alert(time);

            var first_time = [];
            var second_time = [];
            first_time = $(".someTimer").TimeCircles().getTime();

            if(time22 < 01){
                 //alert('11111');
                 $(".someTimer").TimeCircles().destroy();
                second_time = $(".someTimer2").TimeCircles().getTime();
                 //alert(second_time);
                if (second_time !== '') {
                //alert('gfgg');
                $(".someTimer").TimeCircles().destroy();
                 $(".someTimer2").TimeCircles().destroy();
                first_time = 0;
            }
            }

             //alert(first_time);
            //  alert(second_time);


            // time=899.95-time;
            // alert(time);
            // time=time/60;
            // time= Math.ceil(time);
//alert(time);
            var length = [];
            length = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
            //alert(length);
            //alert(time);


            $.ajax({
                type: 'POST',
                url: 'work_save_for_later',
                data: {
                    "checkbox": save_for_later_values,
                    "name": questions_name,
                    "sub_categories_names": values2,
                    "dimensions_name": dimensions_name3,
                    "length": length,
                    "time": first_time
                },
                dataType: 'json',


                success: function (data) {
//      alert(counter);
// alert('before');
                    var length = document.getElementById("checkboxes").querySelectorAll("input:checked").length;
                    alert('success');
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
//  alert(save_for_later_values.length-1);
//  alert('exit1');
//  alert(save_for_later_values);
//  alert('exit2');
// alert("neechay");
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
<script>
    function alertmessage(){
        var table = $('#checkboxes').DataTable();
            info = table.page.info();
            info = info.page + 1;
        //     alert(info);
        // alert(checklength1);
        if(checklength1 !== 9){

          window.FlashMessage.error('You are not allowed to skip');
        }


       // alert('You are not allowed to skip the test.');
    }
</script>
</body>
</html>
