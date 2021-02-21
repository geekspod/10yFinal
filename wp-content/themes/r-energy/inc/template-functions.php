<?php
/**
 * Functions which enhance the theme by hooking into WordPress
*/


/*************************************************
## ADMIN NOTICES
*************************************************/

function r_energy_theme_activation_notice()
{
    global $current_user;

    $user_id = $current_user->ID;

    if (!get_user_meta($user_id, 'r_energy_theme_activation_notice')) {
        ?>
        <div class="updated notice">
            <p>
                <?php
                    echo sprintf(
                    esc_html__('If you need help about demodata installation, please read docs and %s', 'r-energy'),
                    '<a target="_blank" href="' . esc_url('https://ninetheme.com/contact/') . '">' . esc_html__('Open a ticket', 'r-energy') . '</a>
                    ' . esc_html__('or', 'r-energy') . ' <a href="' . esc_url( wp_nonce_url( add_query_arg( 'r-energy-ignore-notice', 'dismiss_admin_notices' ), 'r-energy-dismiss-' . get_current_user_id() ) ) . '">' . esc_html__('Dismiss this notice', 'r-energy') . '</a>');
                ?>
            </p>
        </div>
        <?php
    }
}
add_action('admin_notices', 'r_energy_theme_activation_notice');

function r_energy_theme_activation_notice_ignore()
{
    global $current_user;

    $user_id = $current_user->ID;

    if (isset($_GET['r-energy-ignore-notice'])) {
        add_user_meta($user_id, 'r_energy_theme_activation_notice', 'true', true);
    }
}
add_action('admin_init', 'r_energy_theme_activation_notice_ignore');


/*************************************************
## DATA CONTROL FROM THEME-OPTIONS PANEL
*************************************************/
if (! function_exists('r_energy_settings')) {
    function r_energy_settings($opt_id, $def_value='')
    {

        global $r_energy;

        $defval = '' != $def_value ? $def_value : false;
        $opt_id = trim($opt_id);
        $opt    = isset($r_energy[$opt_id]) ? $r_energy[$opt_id] : $defval;

        if (!class_exists('Redux')) {
            return $defval;
        } else {
            return $opt;
        }
    }
}
/*************************************************
## header button title polylang translate
*************************************************/

if ( function_exists( 'pll_register_string' ) ) {
	add_action('init', function() {
		$btn_title = r_energy_settings('nav_btn_title');
		if( '' != $btn_title ){
			pll_register_string('renergy-contact-us', $btn_title );
		}

	});
}

/*************************************************
## GET ALL ELEMENTOR PAGE TEMPLATES
# @return array
*************************************************/


if (!function_exists('r_energy_get_elementorTemplates')) {
    function r_energy_get_elementorTemplates($type = null)
    {
        if (class_exists('\Elementor\Frontend')) {
            $args = [
                'post_type' => 'elementor_library',
                'posts_per_page' => -1,
            ];
            if ($type) {
                $args['tax_query'] = [
                    [
                        'taxonomy' => 'elementor_library_type',
                        'field' => 'slug',
                        'terms' => $type,
                    ],
                ];
            }
            $page_templates = get_posts($args);
            $options = array();
            if (!empty($page_templates) && !is_wp_error($page_templates)) {
                foreach ($page_templates as $post) {
                    $options[$post->ID] = $post->post_title;
                }
            } else {
                $options = array(
                    '' => esc_html__('No template exist.', 'r-energy')
                );
            }
            return $options;
        }
    }
}


/*************************************************
## SANITIZE MODIFIED VC-ELEMENTS OUTPUT
*************************************************/


if (!function_exists('r_energy_sanitize_data')) {
    function r_energy_sanitize_data($html_data)
    {
        return $html_data;
    }
}


/*************************************************
## CUSTOM BODY CLASSES
*************************************************/


if (! function_exists('r_energy_body_theme_classes')) {
    function r_energy_body_theme_classes($classes)
    {
        global $post;

        $header_type = r_energy_settings( 'open_shop_header', '0' );
        $header_type = '0' == $header_type ? 'nt-header-type-1' : 'nt-header-type-2';

        $theme_name = wp_get_theme();
        $thumbnial =  is_single() && has_post_thumbnail( $post->ID )  ? 'nt-single-has-thumbnial-none' : 'nt-single-no-thumbnial-none';
        $has_thumbnial = $thumbnial;
        $theme_version = 'nt-version-' . wp_get_theme()->get('Version');
        $header_off = '0' == r_energy_settings('nav_visibility', '1') ? 'header-off' : '';

        $classes[] = $has_thumbnial;
        $classes[] = $theme_name;
        $classes[] = $theme_version;
        $classes[] = $header_off;
        $classes[] = $header_type;

        return $classes;

    }
    add_filter('body_class', 'r_energy_body_theme_classes');
}



/*************************************************
## EXCERPT FILTER
*************************************************/


if (! function_exists('r_energy_custom_excerpt_more')) {
    function r_energy_custom_excerpt_more($more)
    {
        return '...';
    }
    add_filter('excerpt_more', 'r_energy_custom_excerpt_more');
}


/*************************************************
## EXCERPT LIMIT
*************************************************/


if (! function_exists('r_energy_excerpt_limit')) {
    function r_energy_excerpt_limit($limit)
    {
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        if (count($excerpt) >= $limit) {
            array_pop($excerpt);
            $excerpt = implode(" ", $excerpt) . '...';
        } else {
            $excerpt = implode(" ", $excerpt);
        }
        $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
        return $excerpt;
    }
}


/*************************************************
## DEFAULT CATEGORIES WIDGET
*************************************************/
if (! function_exists('r_energy_add_span_cat_count')) {
    function r_energy_add_span_cat_count($links)
    {

        $links = str_replace('</a> (', '</a> <span class="widget-list-span">', $links);
		$links = str_replace('</a> <span class="count">(', '</a> <span class="widget-list-span">', $links);
        $links = str_replace(')', '</span>', $links);

        return $links;

    }
    add_filter('wp_list_categories', 'r_energy_add_span_cat_count');
}



/*************************************************
## DEFAULT ARCHIVES WIDGET
*************************************************/


if (! function_exists('r_energy_add_span_arc_count')) {
    function r_energy_add_span_arc_count($links)
    {
        $links = str_replace('</a>&nbsp;(', '</a> <span class="widget-list-span">', $links);

        $links = str_replace(')', '</span>', $links);

        // dropdown selectbox
        $links = str_replace('&nbsp;(', ' - ', $links);

        return $links;

    }
    add_filter('get_archives_link', 'r_energy_add_span_arc_count');
}



/*************************************************
## CUSTOM ARCHIVE TITLES
*************************************************/


if (! function_exists('r_energy_archive_title')) {
    function r_energy_archive_title()
    {
        $title = '';
        if (is_category()) {
            $title = single_cat_title('', false);
        } elseif (is_tag()) {
            $title = single_tag_title('', false);
        } elseif (is_author()) {
            $title = get_the_author();
        } elseif (is_year()) {
            $title = get_the_date(_x('Y', 'yearly archives date format', 'r-energy'));
        } elseif (is_month()) {
            $title = get_the_date(_x('F Y', 'monthly archives date format', 'r-energy'));
        } elseif (is_day()) {
            $title = get_the_date(_x('F j, Y', 'daily archives date format', 'r-energy'));
        } elseif (is_post_type_archive()) {
            $title = post_type_archive_title('', false);
        } elseif (is_tax()) {
            $title = single_term_title('', false);
        } else {
            $title = get_the_archive_title();
        }

        return $title;
    }
    add_filter('get_the_archive_title', 'r_energy_archive_title');
}



/*************************************************
## CHECKS TO SEE IF CPT EXISTS.
*************************************************/


/*
* By setting '_builtin' to false,
* we exclude the WordPress built-in public post types
* (post, page, attachment, revision, and nav_menu_item)
* and retrieve only registered custom public post types.
* return boolean
*/
if (! function_exists('r_energy_cpt_exists')) {
    function r_energy_cpt_exists()
    {

        $args = array(
           'public'   => true,
           '_builtin' => false
        );

        $output = 'names'; // 'names' or 'objects' (default: 'names')
        $operator = 'and'; // 'and' or 'or' (default: 'and')

        $post_types = get_post_types( $args, $output, $operator ); // get simple cpt if exists
        $classes = get_body_class();
        $cpt_exsits = array();

        if ( $post_types ) {
            foreach ($post_types as $cpt ) {
                if ( is_single() ) {
                    array_push($cpt_exsits, 'single-'.$cpt);
                }
                if ( is_archive() ) {
                    array_push($cpt_exsits, 'post-type-archive-'.$cpt);
                }
            }
        }

        $sameclass = array_intersect( $cpt_exsits, $classes );

        if ( $sameclass ) {
            return true;
        }
        return false;
    }
}


/*************************************************
## PARALLAX BG .
*************************************************/
/**
 * attributes
 * @var $parallax
 * @var $img
 * @var $type
 * @var $speed
 * @var $bgpos
 * @var $bgsize
 * @var $bgrepeat
 * @var $localvideo
 * @var $localtype
 * @var $localurl
 * @var $video
*/
if (! function_exists('r_energy_parallax')) {
    function r_energy_parallax($parallax='',$img='',$type='',$speed='',$bgpos='',$bgsize='',$bgrepeat='',$localvideo='',$localtype='',$localurl='',$video='')
    {
        if ($parallax == true || $parallax == '1') {
            wp_enqueue_script('jarallax');

            $attr[] = 'data-img-src="'.esc_attr($img).'"';
            $attr[] = 'data-type="'.esc_attr($type).'"';
            $attr[] = 'data-speed="'.esc_attr($speed).'"';
            $attr[] = 'data-img-position="'.esc_attr($bgpos).'"';
            $attr[] = 'data-img-size="'.esc_attr($bgsize).'"';
            $attr[] = 'data-img-repeat="'.esc_attr($bgrepeat).'"';

            if ($localvideo == true || $localvideo == '1') {
                if ($localtype == 'mp4') {
                    $attr[] = $localurl ? 'data-jarallax-video="mp4:'.esc_url($localurl).'"' : '';
                }
                if ($localtype == 'webm') {
                    $attr[] = $localurl ? 'data-jarallax-video="webm:'.esc_url($localurl).'"' : '';
                }
                if ($localtype == 'ogv') {
                    $attr[] = $localurl ? 'data-jarallax-video="ogv:'.esc_url($localurl).'"' : '';
                }
            } else {
                $attr[] = $video ? 'data-jarallax-video="'.esc_url($video).'"' : '';
            }
            return implode(' ', $attr);
        }
        return false;
    }
}

/*************************************************
## CONVERT HEX TO RGB
*************************************************/

 if (! function_exists('r_energy_hex2rgb')) {
     function r_energy_hex2rgb($hex)
     {
         $hex = str_replace("#", "", $hex);

         if (strlen($hex) == 3) {
             $r = hexdec(substr($hex, 0, 1).substr($hex, 0, 1));
             $g = hexdec(substr($hex, 1, 1).substr($hex, 1, 1));
             $b = hexdec(substr($hex, 2, 1).substr($hex, 2, 1));
         } else {
             $r = hexdec(substr($hex, 0, 2));
             $g = hexdec(substr($hex, 2, 2));
             $b = hexdec(substr($hex, 4, 2));
         }
         $rgb = array($r, $g, $b);

         return $rgb; // returns an array with the rgb values
     }
 }

/**********************************
## THEME ALLOWED HTML TAG
/**********************************/

if (! function_exists('r_energy_allowed_html')) {
    function r_energy_allowed_html()
    {
        $allowed_tags = array(
            'a' => array(
                'class' => array(),
                'href'  => array(),
                'rel'   => array(),
                'title' => array(),
                'target' => array()
            ),
            'abbr' => array(
                'title' => array()
            ),
            'address' => array(),
            'iframe' => array(
                'src' => array()
            ),
            'b' => array(),
            'br' => array(),
            'blockquote' => array(
                'cite'  => array()
            ),
            'cite' => array(
                'title' => array()
            ),
            'code' => array(),
            'del' => array(
                'datetime' => array(),
                'title' => array()
            ),
            'dd' => array(),
            'div' => array(
                'class' => array(),
                'id'    => array(),
                'title' => array(),
                'style' => array()
            ),
            'dl' => array(),
            'dt' => array(),
            'em' => array(),
            'h1' => array(
                'class' => array()
            ),
            'h2' => array(
                'class' => array()
            ),
            'h3' => array(
                'class' => array()
            ),
            'h4' => array(
                'class' => array()
            ),
            'h5' => array(
                'class' => array()
            ),
            'h6' => array(
                'class' => array()
            ),
            'i' => array(
                'class'  => array()
            ),
            'img' => array(
                'alt'    => array(),
                'class'  => array(),
                'height' => array(),
                'src'    => array(),
                'width'  => array()
            ),
            'li' => array(
                'class' => array()
            ),
            'ol' => array(
                'class' => array()
            ),
            'p' => array(
                'class' => array()
            ),
            'q' => array(
                'cite' => array(),
                'title' => array()
            ),
            'span' => array(
                'class' => array(),
                'title' => array(),
                'style' => array()
            ),
            'strike' => array(),
            'strong' => array(),
            'ul' => array(
                'class' => array()
            )
        );
        return $allowed_tags;
    }
}
