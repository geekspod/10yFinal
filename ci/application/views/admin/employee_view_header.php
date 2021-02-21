<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Emplyee Panel</title>



	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">



	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/ionicons.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/datepicker3.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/all.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/select2.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/dataTables.bootstrap.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/jquery.fancybox.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/AdminLTE.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/_all-skins.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/summernote.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/magnific-popup.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/style.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/custom.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/flash.min.css">
         <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/flash.css">


          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
          <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/app.css">




	<style>

.dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
 .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
 .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active
 {
    display:none;
 }

		.skin-blue .wrapper,

		.skin-blue .main-header .logo,

		.skin-blue .main-header .navbar,

		.skin-blue .main-sidebar,

		.content-header .content-header-right a,

		.content .form-horizontal .btn-success {

			background-color: #4172a5!important;

		}



		.content-header .content-header-right a,

		.content .form-horizontal .btn-success {

			border-color: #4172a5!important;

		}



		.content-header>h1,

		.content-header .content-header-left h1,

		h3 {

			color: #4172a5!important;

		}


.box-info {
     padding-top: 0px;
}
.box {
    position: relative;
     border-radius: 0px;
    background: #ffffff;
     border-top: 0px solid white;
    margin-bottom: 0px;
    width: 100%;
    box-shadow:none;
}



		.nav-tabs-custom>.nav-tabs>li.active {

			border-top-color: #f4f4f4!important;

		}



		.skin-blue .sidebar a {

			color: #fff!important;

		}



		.skin-blue .sidebar-menu>li>.treeview-menu {

			margin: 0!important;

		}

		.skin-blue .sidebar-menu>li>a {

			border-left: 0!important;

		}



		.nav-tabs-custom>.nav-tabs>li {

			border-top-width: 1px!important;

		}



	</style>




</head>

<body class="hold-transition fixed skin-blue sidebar-mini">

	<div class="wrapper"  style="overflow: unset">

		<header class="main-header" style="display:none">

			<a href="<?php echo base_url(); ?>admin/dashboard" class="logo">
					<span class="logo-lg">QHR</span>
			</a>

			<nav class="navbar navbar-static-top">

				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">Employee Panel</span>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li>
							<a href="<?php echo base_url(); ?>" target="_blank">Visit Website</a>
						</li>

						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<?php if($this->session->userdata('photo') == ''): ?>
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $this->session->userdata('photo'); ?>" class="user-image" alt="user photo">
								<?php else: ?>
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $this->session->userdata('photo'); ?>" class="user-image" alt="user photo">
								<?php endif; ?>

								<span class="hidden-xs"><?php echo $this->session->userdata('full_name'); ?></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-footer">
									<!-- <div>
										<a href="<?php echo base_url(); ?>admin/profile" class="btn btn-default btn-flat">Edit Profile</a>
									</div> -->
									<div>
										<a href="<?php echo base_url(); ?>login/logout" class="btn btn-default btn-flat">Log out</a>
									</div>
								</li>
							</ul>
						</li>

					</ul>
				</div>

			</nav>
		</header>

  		<?php
			$class_name = '';
		    $segment_2 = 0;
		    $segment_3 = 0;
		    $class_name = $this->router->fetch_class();
		    $segment_2 = $this->uri->segment('2');
		    $segment_3 = $this->uri->segment('3');
		?>

  		<aside class="main-sidebar" style="display:none; background:white">
    		<section class="sidebar">


      			<ul class="sidebar-menu">


					<li class="treeview <?php if($class_name == 'Cultural Scan') {echo 'active';} ?>">
			          <a href="<?php echo base_url(); ?>login/cultural_scan_questions_view">
			            <i class="fa fa-list"></i> <span>Cultural Scan</span>
			          </a>
			        </li>

					<li class="treeview <?php if($class_name == 'Nayatel Values Assessment') {echo 'active';} ?>">
			          <a href="<?php echo base_url(); ?>login/nayatel_value_statements">
			            <i class="fa fa-tag"></i> <span>Nayatel Values Assessment</span>
			          </a>
			        </li>

					<li class="treeview <?php if($class_name == 'Personal values assessment') {echo 'active';} ?>">
			          <a href="<?php echo base_url(); ?>login/personal_values_assessment">
			            <i class="fa fa-bell-o"></i> <span>Personal values assessment</span>
			          </a>
			        </li>

					<li class="treeview <?php if($class_name == 'Personality Assessment') {echo 'active';} ?>">
			          <a href="<?php echo base_url(); ?>login/personality_assessment_questions">
			            <i class="fa fa-ban"></i> <span>Personality Assessment</span>
			          </a>
			        </li>

					<li class="treeview <?php if($class_name == 'Work personality Index') {echo 'active';} ?>">
			          <a href="<?php echo base_url(); ?>login/work_personality_index_form">
			            <i class="fa fa-cab"></i> <span>Work personality Index</span>
			          </a>
			        </li>

					<!-- <li class="treeview <?php if($class_name == 'Questions Score') {echo 'active';} ?>">
			          <a href="<?php echo base_url(); ?>admin/categories/questions_score">
			            <i class="fa fa-arrow-circle-down"></i> <span>Questions Score</span>
			          </a>
			        </li> -->



					<?php if( $this->session->userdata('role') == 'Admin' ): ?>















			        <?php endif; ?>
      			</ul>
    		</section>
  		</aside>

  		<div class="content-wrapper" style="margin:0px; padding:0px;background: white">
		  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
