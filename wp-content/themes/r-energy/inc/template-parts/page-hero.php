<?php

/*************************************************
## HERO FUNCTION
*************************************************/

if (! function_exists('r_energy_hero_section')) {
    function r_energy_hero_section()
    {
        $h_s = get_bloginfo('name');
        if (is_404()) { // error page
            $name = 'error';
            $h_t = esc_html__('404 - Not Found', 'r-energy');
        } elseif (is_archive()) { // blog and cpt archive page
            $name = 'archive';
            $h_t = get_the_archive_title();
        } elseif (is_search()) { // search page
            $name = 'search';
            $h_t = esc_html__('Search results for :', 'r-energy');
        } elseif (is_home() || is_front_page()) { // blog post loop page index.php or your choise on settings
            $name = 'blog';
            $h_t = r_energy_settings('blog_title', esc_html__('Blog', 'r-energy'));
        } elseif (is_single() && ! is_singular('portfolio')) { // blog post single/singular page
            $name = 'single';
            $h_t = r_energy_settings('blog_title', esc_html__('Blog', 'r-energy'));
        } elseif (is_singular('portfolio')) { // it is cpt and if you want use another clone this condition and add your cpt name as portfolio
            $name = 'single_portfolio';
            $h_t = get_the_title();
        } elseif (is_page()) {	// default or custom page
            $name = 'page';
            $h_t = get_the_title();
        }

        $def_bg = ' default-bg';
        if(is_page() && class_exists('ACF') ){
            $h_v = true === get_field('r_energy_hide_page_hero') ? '0' : '1';
            $h_all = get_field('r_energy_page_hero_customize');
            // site title
            $h_s = $h_all["r_energy_page_hero_text_customize"]["r_energy_page_subtitle"];
            // page title
            $h_pt = $h_all["r_energy_page_hero_text_customize"]["r_energy_page_title"];
            $h_t = $h_pt ? $h_pt : $h_t;
            // page breadcrumbs
            $h_b = $h_all["r_energy_page_hero_text_customize"]["r_energy_page_bread_visibility"];
            // hero background image
            $h_bg = $h_all["r_energy_page_hero_background_customize"]["r_energy_hero_bg_img"];
            $h_bg = $h_bg ? esc_url($h_bg) : '';
        } else {
            $h_v = r_energy_settings($name.'_hero_visibility', '1');
            // site title
            $h_s = r_energy_settings($name.'_site_title', $h_s);
            // page title
            $h_t = r_energy_settings($name.'_title', $h_t);
            // page breadcrumbs
            $h_b = r_energy_settings('breadcrumbs_visibility', '0');
            // hero background image
            $h_bg = r_energy_settings($name.'_hero_bg');
            $h_bg = isset( $h_bg['background-image'] ) ? esc_url(  $h_bg['background-image'] ) : '';
        }

        do_action( 'r_energy_before_hero_action' );

        if ('0' != $h_v) {

            if ( class_exists( 'WooCommerce' ) && (is_checkout() || is_cart() || is_account_page()) ) {

                echo '<div class="promo-primary promo-primary--shop'.esc_attr($def_bg).' page-'. get_the_ID() .'">';
                    if ($h_bg) {
                        echo '<div class="overlay"></div>
                        <picture>
                        <source srcset="'.$h_bg.'" media="(min-width: 992px)"/>
                        <img class="jarallax-img img-bg" src="'.$h_bg.'" alt="'. get_the_title() .'"/>
                        </picture>';
                    }
                    echo '<div class="container">';
                        echo '<div class="row">';
                            echo '<div class="col-12">';
                                echo '<div class="align-container">';
                                    echo '<div class="align-item">';
                                        if ($h_t) {
                                            echo '<h1 class="nt-hero-title title">'.wp_kses($h_t, r_energy_allowed_html()).'</h1>';
                                        } else{
                                          echo '<h1 class="title">'.get_the_title().'</h1>';
                                        }
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';

            } else {
                echo '<div class="promo-primary'.esc_attr($def_bg).' page-'. get_the_ID() .'">';
                    if ($h_bg) {
                        echo '<div class="overlay"></div>
                        <picture>
                        <source srcset="'.$h_bg.'" media="(min-width: 992px)"/>
                        <img class="jarallax-img img-bg" src="'.$h_bg.'" alt="'. get_the_title() .'"/>
                        </picture>';
                    }
                    echo '<div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-container">
                                    <div class="align-item">';
                                    if ($h_s) {
                                        echo '<span>'. wp_kses($h_s, r_energy_allowed_html()) .'</span>';
                                    }
                                    // page hero title
                                    if ($h_t) { ?>
                                        <h1 class="nt-hero-title title"><?php echo wp_kses($h_t, r_energy_allowed_html()), strlen(get_search_query()) > 16 ? substr(get_search_query(), 0, 16).'...' : get_search_query(); ?></h1>
                                    <?php }

                                    do_action( 'r_energy_after_title_action' );

                                    // page breadcrumbs
                                    if ('1' == $h_b) {
                                        r_energy_breadcrumbs();
                                    }
                            echo '</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            }
        } // hide hero area
        do_action( 'r_energy_after_hero_action' );
    }
}
