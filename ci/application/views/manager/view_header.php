<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<?php
		$error_message = '';
		$success_message = '';
		?>


		<?php
		$controller = $this->router->fetch_class();
		?>
		<?php

		$CI =& get_instance();
		$CI->load->model('Model_common');

		$language = $CI->Model_common->get_language_data();

		foreach ($language as $lang) {
			define($lang['name'], $lang['value']);
		}

		$class_name = '';
		$segment_2 = 0;
		$segment_3 = 0;
		$class_name = $this->router->fetch_class();
		$segment_2 = $this->uri->segment('2');
		$segment_3 = $this->uri->segment('3');

		if ($class_name == 'home') {
			echo '<meta name="description" content="'.$page_home['meta_description'].'">';
			echo '<meta name="keywords" content="'.$page_home['meta_keyword'].'">';
			echo '<title>'.$page_home['title'].'</title>';
		}
		if ($class_name == 'about') {
			echo '<meta name="description" content="'.$page_about['md_about'].'">';
			echo '<meta name="keywords" content="'.$page_about['mk_about'].'">';
			echo '<title>'.$page_about['mt_about'].'</title>';
		}
		if ($class_name == 'faq') {
			echo '<meta name="description" content="'.$page_faq['md_faq'].'">';
			echo '<meta name="keywords" content="'.$page_faq['mk_faq'].'">';
			echo '<title>'.$page_faq['mt_faq'].'</title>';
		}
		if ($class_name == 'team') {
			echo '<meta name="description" content="'.$page_team['md_team'].'">';
			echo '<meta name="keywords" content="'.$page_team['mk_team'].'">';
			echo '<title>'.$page_team['mt_team'].'</title>';
		}
		if ($class_name == 'team_member') {
			$single_team_member = $this->Model_team_member->team_member_detail($segment_2);
			echo '<meta name="description" content="'.$single_team_member['meta_description'].'">';
			echo '<meta name="keywords" content="'.$single_team_member['meta_keyword'].'">';
			echo '<title>'.$single_team_member['meta_title'].'</title>';
		}
		if ($class_name == 'portfolio') {
			echo '<meta name="description" content="'.$page_portfolio['md_portfolio'].'">';
			echo '<meta name="keywords" content="'.$page_portfolio['mk_portfolio'].'">';
			echo '<title>'.$page_portfolio['mt_portfolio'].'</title>';
		}
		if ($class_name == 'testimonial') {
			echo '<meta name="description" content="'.$page_testimonial['md_testimonial'].'">';
			echo '<meta name="keywords" content="'.$page_testimonial['mk_testimonial'].'">';
			echo '<title>'.$page_testimonial['mt_testimonial'].'</title>';
		}
		if ($class_name == 'contact') {
			echo '<meta name="description" content="'.$page_contact['md_contact'].'">';
			echo '<meta name="keywords" content="'.$page_contact['mk_contact'].'">';
			echo '<title>'.$page_contact['mt_contact'].'</title>';
		}
		if ($class_name == 'search') {
			echo '<meta name="description" content="'.$page_search['md_search'].'">';
			echo '<meta name="keywords" content="'.$page_search['mk_search'].'">';
			echo '<title>'.$page_search['mt_search'].'</title>';
		}
		if ($class_name == 'terms-and-conditions') {
			echo '<meta name="description" content="'.$page_term['md_term'].'">';
			echo '<meta name="keywords" content="'.$page_term['mk_term'].'">';
			echo '<title>'.$page_term['mt_term'].'</title>';
		}
		if ($class_name == 'privacy-policy') {
			echo '<meta name="description" content="'.$page_privacy['md_privacy'].'">';
			echo '<meta name="keywords" content="'.$page_privacy['mk_privacy'].'">';
			echo '<title>'.$page_privacy['mt_privacy'].'</title>';
		}
		if ($class_name == 'pricing') {
			echo '<meta name="description" content="'.$page_pricing['md_pricing'].'">';
			echo '<meta name="keywords" content="'.$page_pricing['mk_pricing'].'">';
			echo '<title>'.$page_pricing['mt_pricing'].'</title>';
		}
		if ($class_name == 'photo_gallery') {
			echo '<meta name="description" content="'.$page_photo_gallery['md_photo_gallery'].'">';
			echo '<meta name="keywords" content="'.$page_photo_gallery['mk_photo_gallery'].'">';
			echo '<title>'.$page_photo_gallery['mt_photo_gallery'].'</title>';
		}
		if ($class_name == 'service') {
			if ($segment_3 == 0) {
				echo '<meta name="description" content="'.$page_service['md_service'].'">';
				echo '<meta name="keywords" content="'.$page_service['mk_service'].'">';
				echo '<title>'.$page_service['mt_service'].'</title>';
			} else {
				$single_service = $this->Model_service->service_detail($segment_3);
				echo '<meta name="description" content="'.$single_service['meta_description'].'">';
				echo '<meta name="keywords" content="'.$single_service['meta_keyword'].'">';
				echo '<title>'.$single_service['meta_title'].'</title>';
			}
		}
		if ($class_name == 'category') {
			$single_category = $this->Model_category->category_by_id($segment_2);
			echo '<meta name="description" content="'.$single_category['meta_description'].'">';
			echo '<meta name="keywords" content="'.$single_category['meta_keyword'].'">';
			echo '<title>'.$single_category['meta_title'].'</title>';
		}
		if ($class_name == 'news') {
			if ($segment_3 == 0) {
				echo '<meta name="description" content="'.$page_news['md_news'].'">';
				echo '<meta name="keywords" content="'.$page_news['mk_news'].'">';
				echo '<title>'.$page_news['mt_news'].'</title>';
			} else {
				$news_single_item = $this->Model_news->news_detail($segment_3);
				echo '<meta name="description" content="'.$news_single_item['meta_description'].'">';
				echo '<meta name="keywords" content="'.$news_single_item['meta_keyword'].'">';
				echo '<title>'.$news_single_item['meta_title'].'</title>';
				$og_id = $news_single_item['news_id'];
				$og_photo = $news_single_item['photo'];
				$og_title = $news_single_item['news_title'];
				$og_description = $news_single_item['news_content_short'];
				echo '<meta property="og:title" content="'.$og_title.'">';
				echo '<meta property="og:type" content="website">';
				echo '<meta property="og:url" content="'.base_url().'news/view/'.$og_id.'">';
				echo '<meta property="og:description" content="'.$og_description.'">';
				echo '<meta property="og:image" content="'.base_url().'public/uploads/'.$og_photo.'">';
			}
		}
		if ($class_name == 'event') {
			if ($segment_3 == 0) {
				echo '<meta name="description" content="'.$page_event['md_event'].'">';
				echo '<meta name="keywords" content="'.$page_event['mk_event'].'">';
				echo '<title>'.$page_event['mt_event'].'</title>';
			} else {
				$event_single_item = $this->Model_event->event_detail($segment_3);
				echo '<meta name="description" content="'.$event_single_item['meta_description'].'">';
				echo '<meta name="keywords" content="'.$event_single_item['meta_keyword'].'">';
				echo '<title>'.$event_single_item['meta_title'].'</title>';
				$og_id = $event_single_item['event_id'];
				$og_photo = $event_single_item['photo'];
				$og_title = $event_single_item['event_title'];
				$og_description = $event_single_item['event_content_short'];
				echo '<meta property="og:title" content="'.$og_title.'">';
				echo '<meta property="og:type" content="website">';
				echo '<meta property="og:url" content="'.base_url().'event/view/'.$og_id.'">';
				echo '<meta property="og:description" content="'.$og_description.'">';
				echo '<meta property="og:image" content="'.base_url().'public/uploads/'.$og_photo.'">';
			}
		}
		?>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>" />
		
	<!-- CSS Files -->
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

	<link rel="stylesheet" href="<?php echo base_url();?>css/reset.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/animate.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/owl.carousel.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/socials.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/player/YTPlayer.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/prettyPhoto.css" />
	<!-- Page Styles -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/responsive.css" />
	<!-- End Page Styles -->

	<!-- Page Layout Color, night or dark -->
	<link id="changeable_tone" rel="stylesheet" href="<?php echo base_url();?>css/dark.css" />
	<!-- End Page Layout Color -->

	<!-- Page Elements Color -->
	<link id="changeable_color" rel="stylesheet" href="<?php echo base_url();?>css/colors/red.css" />
	<!-- End Page Elements Color -->

	<!-- Theme Panel -->
	<link rel="stylesheet" href="<?php echo base_url();?>theme_panel/theme_panel.css" />
	<!-- End Theme Panel -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
<!-- Page Loader -->
	<section id="pageloader" class="white-bg">
		<div class="outter dark-border">
			<div class="mid dark-border"></div>
		</div>
	</section>

	<!-- Navigation -->
	<!-- <nav id="navigation" class="first-nav dark-nav">
		
		<div class="nav-inner">
			<div class="logo">
				
				<a href="#home" class="scroll">
					
					<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" class="site_logo" alt="North Logo"/>
				</a>
			</div> -->
			<!-- Mobile Menu Button -->
			<a class="mobile-nav-button colored"><i class="fa fa-bars"></i></a>
			<!-- Navigation Menu -->
			<div class="nav-menu clearfix semibold">
				<ul class="nav uppercase oswald">
					
					<?php  $admin="admin"; $employer="2";?>


					
					<!-- <li><a href="<?php echo base_url() ; ?>login" class="scroll">Admin Login</a></li> -->

					<!-- <li><a href="<?php echo base_url() ; ?>login<?php echo "management"; ?>" class="scroll">Management Login</a></li> -->
					
				</ul>
			</div><!-- End Navigation Menu -->
		</div><!-- End Navigation Inner -->
	</nav><!-- End Navigation -->
