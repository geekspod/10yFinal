<?php

/**
* The template for displaying all elementor edit template posts
*
*
* @package WordPress
* @subpackage R-Energy
* @since 1.0.0
*/

get_header();

    while ( have_posts() ) : the_post();
        the_content();
    endwhile;

get_footer();
?>