<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Admin Panel</title>



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

	





	<style>

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



		.box.box-info {

			border-top-color: #4172a5!important;

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



	<div class="wrapper">



		<header class="main-header">



			<a href="<?php echo base_url(); ?>admin/dashboard" class="logo">

					<span class="logo-lg">10-Yards</span>

			</a>



			<nav class="navbar navbar-static-top">

				

				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">

					<span class="sr-only">Toggle navigation</span>

				</a>



				<span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">Admin Panel</span>



				<div class="navbar-custom-menu">

					<ul class="nav navbar-nav">

						<li>

							<a href="<?php echo base_url(); ?>" target="_blank">Visit Website</a>

						</li>



						<li class="dropdown user user-menu">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown">

								<?php if($this->session->userdata('photo') == ''): ?>

									<img src="<?php echo base_url(); ?>public/img/no-photo.jpg" class="user-image" alt="user photo">

								<?php else: ?>

									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $this->session->userdata('photo'); ?>" class="user-image" alt="user photo">

								<?php endif; ?>

								

								<span class="hidden-xs"><?php echo $this->session->userdata('full_name'); ?></span>

							</a>

							<ul class="dropdown-menu">

								<li class="user-footer">

									<div>

										<a href="<?php echo base_url(); ?>admin/profile" class="btn btn-default btn-flat">Edit Profile</a>

									</div>

									<div>

										<a href="<?php echo base_url(); ?>admin/login/logout" class="btn btn-default btn-flat">Log out</a>

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



  		<aside class="main-sidebar">

    		<section class="sidebar">



     

      			<ul class="sidebar-menu">



			        <li class="treeview <?php if($class_name == 'dashboard') {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/dashboard">

			            <i class="fa fa-laptop"></i> <span>Dashboard</span>

			          </a>

			        </li>

					

					<li class="treeview <?php if($class_name == 'test') {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/categories">

			            <i class="fa fa-list-alt"></i> <span>Test</span>

			          </a>

			        </li>





					<li class="treeview <?php if($class_name == 'categories') {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/dimensions/view">

			            <i class="fa fa-home fa-fw"></i> <span>Categories</span>

			          </a>

			        </li>



					 <li class="treeview <?php if($class_name == 'sub_categories') {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/dimensions/view_sub_categories">

			            <i class="fa fa-bar-chart-o"></i> <span>Sub Categories</span>

			          </a>

			        </li>



					<li class="treeview <?php if($class_name == 'Cultural Scan') {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/categories/view_all_cultural_scan">

			            <i class="fa fa-list"></i> <span>Cultural Scan</span>

			          </a>

			        </li>



					<li class="treeview <?php if($class_name == 'Nayatel Values Assessment') {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/categories/view_all_nayatel_values_assessment">

			            <i class="fa fa-tag"></i> <span>Nayatel Values Assessment</span>

			          </a>

			        </li>



					<li class="treeview <?php if($class_name == 'Personal values assessment') {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/categories/view_all_personal_values_assessment">

			            <i class="fa fa-bell-o"></i> <span>Personal values assessment</span>

			          </a>

			        </li>



					<li class="treeview <?php if($class_name == 'Personality Assessment') {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/categories/view_all_personality_assessment">

			            <i class="fa fa-ban"></i> <span>Personality Assessment</span>

			          </a>

			        </li>

				

					<li class="treeview <?php if($class_name == 'Work personality Index') {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/categories/view_Work_personality_index">

			            <i class="fa fa-cab"></i> <span>Work personality Index</span>

			          </a>

			        </li>



					<!-- <li class="treeview <?php if($class_name == 'Questions Score') {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/categories/questions_score">

			            <i class="fa fa-arrow-circle-down"></i> <span>Questions Score</span>

			          </a>

			        </li> -->



					<li class="treeview <?php if($class_name == 'Questions Score Description') {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/categories/view_questions_score_description">

			            <i class="fa fa-balance-scale"></i> <span>Description</span>

			          </a>

			        </li>



					<?php if( $this->session->userdata('role') == 'Admin' ): ?>

			        <li class="treeview <?php if( ($class_name == 'setting') ) {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/setting">

			            <i class="fa fa-cog"></i> <span>Settings</span>

			          </a>

			        </li>



			        <li class="treeview <?php if( ($class_name == 'page') ) {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/page">

			            <i class="fa fa-file-text"></i> <span>Page</span>

			          </a>

			        </li>



			       <li class="treeview <?php if( ($class_name == 'user') ) {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/customer">

			            <i class="fa fa-user"></i> <span>Add Manager</span>

			          </a>

			        </li>

					<li class="treeview <?php if( ($class_name == 'organization') ) {echo 'active';} ?>">

					<a href="<?php echo base_url(); ?>admin/organization">

 					 <i class="fa fa-user"></i> <span>organization</span>

						</a>

						</li>

			         <li class="treeview <?php if( ($class_name == 'news') ) {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/news">

			            <i class="fa fa-paper-plane-o"></i> <span>News</span>

			          </a>

			        </li>

			         <li class="treeview <?php if( ($class_name == 'testimonial') ) {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/testimonial">

			            <i class="fa fa-paper-plane-o"></i> <span>Testimonails</span>

			          </a>

			        </li>



			      



			        <li class="treeview <?php if( ($class_name == 'slider') ) {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/slider">

			            <i class="fa fa-picture-o"></i> <span>Slider</span>

			          </a>

			        </li>

			        <li class="treeview <?php if( ($class_name == 'why_choose') ) {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/why_choose">

			            <i class="fa fa-picture-o"></i> <span>About Boxes</span>

			          </a>

			        </li>







			        <li class="treeview <?php if( ($class_name == 'service') ) {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/service">

			            <i class="fa fa-life-ring"></i> <span>Human Titles</span>

			          </a>

			        </li>





			       <li class="treeview <?php if( ($class_name == 'social_media') ) {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/social_media">

			            <i class="fa fa-address-book"></i> <span>Social Media</span>

			          </a>

			        </li>
			        
			        
			        <!--Manage roles-->
			         <li class="treeview <?php if( ($class_name == 'roles') ) {echo 'active';} ?>">

			          <a href="<?php echo base_url(); ?>admin/roles">

			            <i class="fa fa-star"></i> <span>Manage Roles</span>

			          </a>

			        </li>



			        	        



			        <?php endif; ?>        

      			</ul>

    		</section>

  		</aside>



  		<div class="content-wrapper">

		  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

