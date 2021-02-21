<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <!-- Meta UTF8 charset -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />
    <meta name="theme-color" content="#056EB9" />
    <meta name="msapplication-navbutton-color" content="#056EB9" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#056EB9" />
    <?php wp_head(); ?>

</head>

<!-- BODY START -->
<body <?php body_class(); ?>>
    <?php
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    }
    ?>
    <div class="page-wrapper">
        <?php

        if ( ! is_page_template( 'r-energy-elementor-page.php' ) ) {
            // theme preloader
            r_energy_preloader();
            // use this action to add any content before  header container element
            do_action('r_energy_before_header');
            if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
                // include logo, menu and more contents
                do_action('r_energy_header_action');
            }
            // theme back to top button
            r_energy_backtop();

            echo'<main class="main">';
        }
        ?>
