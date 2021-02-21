<?php

/**
* Custom template parts for this theme.
*
* Eventually, some of the functionality here could be replaced by core features.
*
* @package r-energy
*/


/*************************************************
##  LOGO
*************************************************/

if (! function_exists('r_energy_logo')) {
    function r_energy_logo()
    {
        if ('0' != r_energy_settings('logo_visibility', '1')) {
            $sticky_logo = r_energy_settings('sticky_logo');
            $has_sticky_logo = '1' == r_energy_settings('sticky_logo_visibility') && '' != $sticky_logo['url'] ? ' has-sticky-logo' : '';

            echo '<div class="logo-block"><a href="' . esc_url(home_url('/')) . '" id="nt-logo" class="logo site-logo logo-type-'.r_energy_settings('logo_type', 'sitename').$has_sticky_logo.'">';

            if ('img' == r_energy_settings('logo_type') && '' != r_energy_settings('img_logo')) {

                // image logo
                echo '<img src="'.esc_url(r_energy_settings('img_logo')['url']).'" alt="'.esc_attr(get_bloginfo('name')).'" class="img-fluid main-logo" />';

                if ('1' == r_energy_settings('sticky_logo_visibility') && '' != $sticky_logo['url'] ) {
                    echo '<img src="'.esc_url($sticky_logo['url']).'" alt="'.esc_attr(get_bloginfo('name')).'" class="img-fluid sticky-logo" />';
                }

            } elseif ('sitename' == r_energy_settings('logo_type')) {
                // get bloginfo name
                echo esc_html(get_bloginfo('name'));
            } elseif ('customtext' == r_energy_settings('logo_type')) {
                // custom text logo
                echo r_energy_settings('text_logo');
            } else {
                // default image logo
                echo '. R-Energy';
            }
            echo '</a></div>';
        }
    }
}


/*************************************************
##  HEADER NAVIGATION
*************************************************/

if (! function_exists('r_energy_main_header')) {
    add_action('r_energy_header_action', 'r_energy_main_header', 10);
    function r_energy_main_header()
    {
        $nav_visibility = r_energy_settings('nav_visibility', '1');
        $nav_visibility = is_page_template( 'default' ) && class_exists('ACF') && function_exists('get_field') && true === get_field('r_energy_hide_page_header') ? '0' : $nav_visibility;

        if ('0' != $nav_visibility ) {

            r_energy_header_mobile_menu();

            if ( class_exists( 'WooCommerce' ) && ( is_product() || is_shop() ) && '1' == r_energy_settings('open_shop_header', '0') ) {

                do_action('r_energy_shop_header_action');

            } else {

                $header_type = r_energy_settings('nav_type', 'fullwidth');
                $page_header_type = class_exists('ACF') && function_exists('get_field') ? get_field('r_energy_page_header_type') : '';
                $header_type = is_page_template( 'default' ) && '' != $page_header_type ? $page_header_type : $header_type;

                if ( 'shop' == $header_type ) {

                    do_action('r_energy_shop_header_action');

                } elseif ( 'boxedbar' == $header_type ) {

                    do_action('r_energy_header_boxedbar_action');

                } elseif ( 'boxed' == $header_type ) {

                    do_action('r_energy_header_boxed_action');

                } else {

                    do_action('r_energy_header_fullwidth_action');

                }
            }
        }
    }
}
/*************************************************
##  HEADER FULLWIDTH TYPE
*************************************************/

if (! function_exists('r_energy_header_fullwidth')) {
    add_action('r_energy_header_fullwidth_action', 'r_energy_header_fullwidth', 10);
    function r_energy_header_fullwidth()
    {
        $sticky = '1' == r_energy_settings('nav_sticky_visibility') ? ' sticky-header' : '';
        ?>
        <header class="header header--style-1<?php echo esc_attr($sticky); ?>" id="header">

            <div class="container-fluid">

                <?php if ('0' != r_energy_settings('header_topbar_visibility', '0')) { ?>
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="topbar top-line">
                                <?php
                                if ('' != r_energy_settings('topbar_contacts')) {
                                    echo'<div class="contacts-block">'.r_energy_settings('topbar_contacts').'</div>';
                                }

                                if ('' != r_energy_settings('topbar_socials')) {
                                    echo'<div class="socials-block"><nav class="socials-holder">'.r_energy_settings('topbar_socials').'</nav></div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                <?php } ?>

                <div class="row">
                    <div class="col-12 column">

                        <div class="logo-block"><?php r_energy_logo(); ?></div>

                        <div class="menu-block">
                            <nav class="menu-holder">
                                <ul class="main-menu">
                                    <?php r_energy_header_wp_menu(); ?>
                                </ul>
                            </nav>
                        </div>

                        <div class="lang-block lang-mobile-<?php echo r_energy_settings('lang_mobile_visibility', '0'); ?>">
                            <?php
                            r_energy_header_lang();

                            r_energy_header_right_button();

                            ?>
                            <div class="hamburger">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </header>
        <?php
    }
}
/*************************************************
##  HEADER BOXED TYPE
*************************************************/

if (! function_exists('r_energy_header_boxed')) {
    add_action('r_energy_header_boxed_action', 'r_energy_header_boxed', 10);
    function r_energy_header_boxed()
    {
        $sticky = '1' == r_energy_settings('nav_sticky_visibility') ? ' sticky-header' : '';
        $topbar = '1' == r_energy_settings('header_topbar_visibility', '0') ? ' has-topbar' : '';
        ?>

        <header class="header header--style-2<?php echo esc_attr($sticky.$topbar); ?>" id="header">

            <div class="container-fluid topbar-container">
                <?php if ('0' != r_energy_settings('header_topbar_visibility', '0')) { ?>
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="topbar top-line">
                                <?php
                                if ('' != r_energy_settings('topbar_contacts')) {
                                    echo'<div class="contacts-block">'.r_energy_settings('topbar_contacts').'</div>';
                                }

                                if ('' != r_energy_settings('topbar_socials')) {
                                    echo'<div class="socials-block"><nav class="socials-holder">'.r_energy_settings('topbar_socials').'</nav></div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 column">

                        <div class="logo-block"><?php r_energy_logo(); ?></div>

                        <div class="menu-block">
                            <nav class="menu-holder">
                                <ul class="main-menu">
                                    <?php r_energy_header_wp_menu(); ?>
                                </ul>
                            </nav>
                        </div>

                        <div class="lang-block lang-mobile-<?php echo r_energy_settings('lang_mobile_visibility', '0'); ?>">
                            <?php
                            r_energy_header_lang();

                            r_energy_header_right_button();

                            ?>
                            <div class="hamburger">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </header>
        <?php
    }
}

/*************************************************
##  HEADER TYPE 3
*************************************************/

if (! function_exists('r_energy_header_boxedbar')) {
    add_action('r_energy_header_boxedbar_action', 'r_energy_header_boxedbar', 10);
    function r_energy_header_boxedbar()
    {
        $sticky = '1' == r_energy_settings('nav_sticky_visibility') ? ' sticky-header' : '';
        ?>
        <header class="header--style-3<?php echo esc_attr($sticky); ?>" id="header">

            <div class="container-fluid">

                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="top">

                            <div class="logo-block"><?php r_energy_logo(); ?></div>

                            <div class="menu-block">
                                <nav class="menu-holder">
                                    <ul class="main-menu">
                                        <?php r_energy_header_wp_menu(); ?>
                                    </ul>
                                </nav>
                            </div>

                            <div class="lang-block lang-mobile-<?php echo r_energy_settings('lang_mobile_visibility', '0'); ?>">
                                <?php
                                r_energy_header_lang();

                                r_energy_header_right_button();
                                ?>
                                <div class="hamburger">
                                    <div class="hamburger-box">
                                        <div class="hamburger-inner"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <?php if ('0' != r_energy_settings('header_topbar_visibility', '0')) { ?>
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="topbar lower-line">
                                <?php
                                if ('' != r_energy_settings('topbar_contacts')) {
                                    echo'<div class="contacts-block">'.r_energy_settings('topbar_contacts').'</div>';
                                }

                                if ('' != r_energy_settings('topbar_socials')) {
                                    echo'<div class="socials-block"><nav class="socials-holder">'.r_energy_settings('topbar_socials').'</nav></div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </header>
        <?php
    }
}

/*************************************************
##  SHOP HEADER NAVIGATION
*************************************************/

if (! function_exists('r_energy_shop_header')) {
    add_action('r_energy_shop_header_action', 'r_energy_shop_header', 10);
    function r_energy_shop_header()
    {
        $sticky = '1' == r_energy_settings('nav_sticky_visibility') ? ' sticky-header' : '';
        ?>
        <header class="shop-header<?php echo esc_attr($sticky); ?>" id="header">
            <div class="container-fluid">

                <?php if ('0' != r_energy_settings('header_topbar_visibility', '0')) { ?>
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="topbar top-line">
                                <?php
                                if ('' != r_energy_settings('topbar_contacts')) {
                                    echo'<div class="contacts-block">'.r_energy_settings('topbar_contacts').'</div>';
                                }

                                if ('' != r_energy_settings('topbar_socials')) {
                                    echo'<div class="socials-block"><nav class="socials-holder">'.r_energy_settings('topbar_socials').'</nav></div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="lower">

                            <div class="logo-block"><?php r_energy_logo(); ?></div>

                            <div class="menu-block">
                                <nav class="menu-holder">
                                    <ul class="main-menu">
                                        <?php r_energy_header_wp_menu(); ?>
                                    </ul>
                                </nav>
                            </div>

                            <div class="block-right">

                                <div class="lang-block lang-mobile-<?php echo r_energy_settings('lang_mobile_visibility', '0'); ?>">
                                    <?php r_energy_header_lang(); ?>
                                </div>
                                <?php if ( class_exists( 'WooCommerce' ) ) { ?>
                                    <div class="user-block"><svg class="icon" viewBox="-42 0 512 512.001" xmlns="http://www.w3.org/2000/svg"><path d="M210.352 246.633c33.882 0 63.218-12.153 87.195-36.13 23.969-23.972 36.125-53.304 36.125-87.19 0-33.876-12.152-63.211-36.129-87.192C273.566 12.152 244.23 0 210.352 0c-33.887 0-63.22 12.152-87.192 36.125s-36.129 53.309-36.129 87.188c0 33.886 12.156 63.222 36.13 87.195 23.98 23.969 53.316 36.125 87.19 36.125zM144.379 57.34c18.394-18.395 39.973-27.336 65.973-27.336 25.996 0 47.578 8.941 65.976 27.336 18.395 18.398 27.34 39.98 27.34 65.972 0 26-8.945 47.579-27.34 65.977-18.398 18.399-39.98 27.34-65.976 27.34-25.993 0-47.57-8.945-65.973-27.34-18.399-18.394-27.344-39.976-27.344-65.976 0-25.993 8.945-47.575 27.344-65.973zm281.75 336.363c-.692-9.976-2.09-20.86-4.149-32.351-2.078-11.579-4.753-22.524-7.957-32.528-3.312-10.34-7.808-20.55-13.375-30.336-5.77-10.156-12.55-19-20.16-26.277-7.957-7.613-17.699-13.734-28.965-18.2-11.226-4.44-23.668-6.69-36.976-6.69-5.227 0-10.281 2.144-20.043 8.5a2711.03 2711.03 0 01-20.879 13.46c-6.707 4.274-15.793 8.278-27.016 11.903-10.949 3.543-22.066 5.34-33.043 5.34-10.968 0-22.086-1.797-33.043-5.34-11.21-3.622-20.3-7.625-26.996-11.899a2853.13 2853.13 0 01-20.898-13.469c-9.754-6.355-14.809-8.5-20.035-8.5-13.313 0-25.75 2.254-36.973 6.7-11.258 4.457-21.004 10.578-28.969 18.199-7.609 7.281-14.39 16.12-20.156 26.273-5.558 9.785-10.058 19.992-13.371 30.34-3.2 10.004-5.875 20.945-7.953 32.524-2.063 11.476-3.457 22.363-4.149 32.363C.343 403.492 0 413.668 0 423.949c0 26.727 8.496 48.363 25.25 64.32C41.797 504.017 63.688 512 90.316 512h246.532c26.62 0 48.511-7.984 65.062-23.73 16.758-15.946 25.254-37.59 25.254-64.325-.004-10.316-.351-20.492-1.035-30.242zm-44.906 72.828c-10.934 10.406-25.45 15.465-44.38 15.465H90.317c-18.933 0-33.449-5.059-44.379-15.46-10.722-10.208-15.933-24.141-15.933-42.587 0-9.594.316-19.066.95-28.16.616-8.922 1.878-18.723 3.75-29.137 1.847-10.285 4.198-19.937 6.995-28.675 2.684-8.38 6.344-16.676 10.883-24.668 4.332-7.618 9.316-14.153 14.816-19.418 5.145-4.926 11.63-8.957 19.27-11.98 7.066-2.798 15.008-4.329 23.629-4.56 1.05.56 2.922 1.626 5.953 3.602 6.168 4.02 13.277 8.606 21.137 13.625 8.86 5.649 20.273 10.75 33.91 15.152 13.941 4.508 28.16 6.797 42.273 6.797 14.114 0 28.336-2.289 42.27-6.793 13.648-4.41 25.058-9.507 33.93-15.164 8.043-5.14 14.953-9.593 21.12-13.617 3.032-1.973 4.903-3.043 5.954-3.601 8.625.23 16.566 1.761 23.636 4.558 7.637 3.024 14.122 7.059 19.266 11.98 5.5 5.262 10.484 11.798 14.816 19.423 4.543 7.988 8.208 16.289 10.887 24.66 2.801 8.75 5.156 18.398 7 28.675 1.867 10.434 3.133 20.239 3.75 29.145v.008c.637 9.058.957 18.527.961 28.148-.004 18.45-5.215 32.38-15.937 42.582zm0 0"/></svg></div>

                                    <div class="cart-trigger">
                                        <?php echo r_energy_woo_header_cart_button(); ?>
                                        <?php
                                        if ( function_exists( 'woocommerce_mini_cart' ) ) {
                                            woocommerce_get_template( 'cart/mini-cart.php' );

                                        }
                                        ?>
                                    </div>
                                <?php } ?>

                                <div class="hamburger">
                                    <div class="hamburger-box">
                                        <div class="hamburger-inner"></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php

    }
}


/*************************************************
##  HEADER WP MEUNU
*************************************************/

if (! function_exists('r_energy_header_wp_menu')) {
    function r_energy_header_wp_menu()
    {
        wp_nav_menu(
            array(
                'menu' => '',
                'theme_location' => 'header_menu_1',
                'container' => '', // menu wrapper element
                'container_class' => '',
                'container_id' => '', // default: none
                'menu_class' => '', // ul class
                'menu_id' => '', // ul id
                'items_wrap' => '%3$s',
                'before' => '', // before <a>
                'after' => '', // after <a>
                'link_before' => '', // inside <a>, before text
                'link_after' => '', // inside <a>, after text
                'depth' => 4, // '0' to display all depths
                'echo' => true,
                'fallback_cb' => 'R_EnergyWp_Bootstrap_Navwalker::fallback',
                'walker' => new R_EnergyWp_Bootstrap_Navwalker()
            )
        );
    }
}

/*************************************************
##  HEADER MOBILE MEUNU
*************************************************/

if (! function_exists('r_energy_header_mobile_menu')) {
    function r_energy_header_mobile_menu()
    {
        ?>
        <div class="mobile-nav">
            <div class="nav-inner">
                <div class="nav-item">
                    <nav class="menu-holder">
                        <ul class="mobile-menu">
                            <?php r_energy_header_wp_menu(); ?>
                        </ul>
                    </nav>
                    <?php

                    if ('' != r_energy_settings('nav_btn_title')) {
						$btn_title = r_energy_settings('nav_btn_title');
						$btntitle = function_exists( 'pll_translate_string' ) ? pll_translate_string( $btn_title, pll_current_language() ) : $btn_title;

						$multiurl = r_energy_settings('nav_btn_multi_url');
						$nav_btn_url = r_energy_settings('nav_btn_url');

						if ( function_exists( 'pll_current_language' ) && !empty( $multiurl ) ) {

							$polycur_lang = pll_current_language('locale');

							for ( $i=0; $i < ( count( $multiurl ) ); $i++ ) {

								$lang = $multiurl[$i] ? $multiurl[$i] : '';
								$lang = str_replace( '-', '_', $lang );
								$url = $multiurl[ $i+1 ] ? $multiurl[ $i+1 ] : $nav_btn_url;

								if ( $polycur_lang == $lang ) {

									$nav_btn_url = $url;
									break;
								}

								$i = $i+1;
							}
						}
                        echo'<div class="r-button-holder"><a href="'.esc_url( $nav_btn_url ).'" class="r-button r-button--filled" data-hover="'.$btntitle.'"><span>'.$btntitle.'</span></a></div>';
                    }
                    if ('' != r_energy_settings('mob_nav_contacts')) {
                        echo'<div class="menu-contacts">'.r_energy_settings('mob_nav_contacts').'</div>';
                    }
                    ?>

                </div>
            </div>
        </div>
        <?php
    }
}
/*************************************************
##  HEADER LANGUAGE
*************************************************/

if (! function_exists('r_energy_header_lang')) {
    function r_energy_header_lang()
    {
        if ('0' != r_energy_settings('nav_lang_visibility', '0')) {
            if ('polylang' == r_energy_settings('lang_type') ) {
                echo'<ul class="lang-select">';
                if (function_exists('pll_the_languages')) { ?>
                    <li class="lang-item active"><?php echo pll_current_language('flag') ?> <span class="uppercase"><?php echo pll_current_language('slug') ?></span>
                        <ul class="sub-list">
                            <?php
                            pll_the_languages(
                                array(
                                    'show_flags'=>1,
                                    'show_names'=>1,
                                    'dropdown'=>0,
                                    'raw'=>0,
                                    'hide_current'=>1,
                                    'display_names_as'=>'name'
                                )
                            );
                            ?>
                        </ul>
                    </li>
                    <?php
                } else {
                    echo '<li class="lang-item">'.esc_html__('Please install and activate Polylang', 'r-energy').'</li>';
                }
                echo'</ul>';
            } else {
                echo r_energy_settings('nav_lang_list');
            }
        }
    }
}

/*************************************************
##  HEADER RIGHT BUTTON
*************************************************/

if (! function_exists('r_energy_header_right_button')) {
    function r_energy_header_right_button()
    {
		$btn_title = r_energy_settings('nav_btn_title');
		$btntitle = function_exists( 'pll_translate_string' ) && '' != $btn_title ? pll_translate_string( $btn_title, pll_current_language() ) : $btn_title;
        if ('' != r_energy_settings('nav_btn_title')) {

            $multiurl = r_energy_settings('nav_btn_multi_url');
            $nav_btn_url = r_energy_settings('nav_btn_url');

            if ( function_exists( 'pll_current_language' ) && !empty( $multiurl ) ) {

                $polycur_lang = pll_current_language('locale');

                for ( $i=0; $i < ( count( $multiurl ) ); $i++ ) {

                    $lang = $multiurl[$i] ? $multiurl[$i] : '';
                    $lang = str_replace( '-', '_', $lang );
                    $url = $multiurl[ $i+1 ] ? $multiurl[ $i+1 ] : $nav_btn_url;

                    if ( $polycur_lang == $lang ) {

                        $nav_btn_url = $url;
                        break;
                    }

                    $i = $i+1;
                }
            }
            echo'<a href="'.esc_url( $nav_btn_url ).'" class="r-button r-button--transparent" data-hover="'.$btntitle.'"><span>'.$btntitle.'</span></a>';
        }
    }
}
