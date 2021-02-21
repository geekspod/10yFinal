<?php

	/*
	* R-Energy Page Header
	*/
	// Get the current post id
	$post_id = get_the_ID();
	// Get the page settings manager
	$r_energy_page_settings_manager  =  \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
	$r_energy_page_settings_model    =  $r_energy_page_settings_manager->get_model( $post_id );
	$r_energy_hide_page_header_type  =  $r_energy_page_settings_model->get_settings( 'r_energy_hide_page_header_type' );

