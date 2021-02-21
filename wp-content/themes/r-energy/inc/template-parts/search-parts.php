<?php
/**
 * search and other forms parts
*/


/*************************************************
## THEME SEARCH FORM
*************************************************/
if (! function_exists('r_energy_content_custom_search_form')) {
    function r_energy_content_custom_search_form()
    {
        $form = '<div class="nt-sidebar-inner-search">
            <form class="nt-sidebar-inner-search-form searchform form--horizontal form-default" role="search" method="get" id="widget-searchform" action="' . esc_url(home_url('/')) . '" >
                <div class="row no-gutters">
                    <div class="col-10">
                        <div class="form-group">
                            <input class="nt-sidebar-inner-search-field form-control" type="text" value="' . get_search_query() . '" placeholder="'. esc_attr__('Search for...', 'r-energy') .'" name="s" id="ws">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <button class="nt-sidebar-inner-search-button btn" id="searchsubmit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>';

        return $form;
    }
    add_filter('get_search_form', 'r_energy_content_custom_search_form');
}

/*************************************************
## THEME PASSWORD FORM
*************************************************/
if (! function_exists('r_energy_custom_password_form')) {
    function r_energy_custom_password_form()
    {
        global $post;
        $form = '<div class="nt-sidebar-inner-search">
            <form class="nt-sidebar-inner-search-form searchform form--horizontal form-default protected-post-form"
            role="password"
            method="post"
            id="widget-searchform"
            action="' . get_option('siteurl') . '/wp-login.php?action=postpass" >
                <div class="row no-gutters">
                    <div class="col-10">
                        <div class="form-group">
                            <input class="nt-sidebar-inner-search-field form-control" type="password"  placeholder="'. esc_attr__('Enter Password', 'r-energy') .'" name="post_password" id="ws">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <button class="nt-sidebar-inner-search-button btn" id="submit" type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>';

        return $form;
    }
    add_filter('the_password_form', 'r_energy_custom_password_form');
}



/*************************************************
## THEME WOOCOMMERCE SEARCH FORM
*************************************************/

function r_energy_woo_content_custom_search_form()
{
    $form = '<div class="nt-sidebar-inner-search">
            <form class="nt-sidebar-inner-search-form searchform form--horizontal form-default" role="search" method="get" id="widget-searchform" action="' . esc_url(home_url('/')) . '" >
                <div class="row no-gutters">
                    <div class="col-10">
                        <div class="form-group">
                            <input class="nt-sidebar-inner-search-field form-control" type="text" value="' . get_search_query() . '" placeholder="'. esc_attr__('Search for...', 'r-energy') .'" name="s" id="wws">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <button class="nt-sidebar-inner-search-button btn" id="woo-searchsubmit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>';

        return $form;
}
add_filter('get_product_search_form', 'r_energy_woo_content_custom_search_form');
