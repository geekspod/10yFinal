<?php

    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if (! class_exists('Redux')) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $r_energy_pre = "r_energy";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $r_energy_theme = wp_get_theme(); // For use with some settings. Not necessary.

    $r_energy_options_args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name' => $r_energy_pre,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name' => $r_energy_theme->get('Name'),
        // Name that appears at the top of your panel
        'display_version' => $r_energy_theme->get('Version'),
        // Version that appears at the top of your panel
        'menu_type' => 'submenu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu' => false,
        // Show the sections below the admin menu item or not
        'menu_title' => esc_html__('Theme Options', 'r-energy'),
        'page_title' => esc_html__('Theme Options', 'r-energy'),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key' => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography' => false,
        // Use a asynchronous font on the front end or font string
        'admin_bar' => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon' => 'dashicons-admin-generic',
        // Choose an icon for the admin bar menu
        'admin_bar_priority' => 50,
        // Choose an priority for the admin bar menu
        'global_variable' => 'r_energy',
        // Set a different name for your global variable other than the r_energy_pre
        'dev_mode' => false,
        // Show the time the page took to load, etc
        'update_notice' => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer' => true,
        // Enable basic customizer support

        // OPTIONAL -> Give you extra features
        'page_priority' => 99,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent' => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions' => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon' => '',
        // Specify a custom URL to an icon
        'last_tab' => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon' => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug' => '',
        // Page slug used to denote the panel, will be based off page title then menu title then r_energy_pre if not provided
        'save_defaults' => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show' => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark' => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export' => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time' => 60 * MINUTE_IN_SECONDS,
        'output' => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag' => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database' => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn' => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints' => array(
            'icon' => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color' => 'lightgray',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'dark',
                'shadow' => true,
                'rounded' => false,
                'style' => '',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'effect' => 'slide',
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'effect' => 'slide',
                    'duration' => '500',
                    'event' => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $r_energy_options_args['admin_bar_links'][] = array(
        'id' => 'ninetheme-r-energy-docs',
        'href' => 'https://ninetheme.com/documentation/r-energy.html',
        'title' => esc_html__('R-energy Documentation', 'r-energy'),
    );
    $r_energy_options_args['admin_bar_links'][] = array(
        'id' => 'ninetheme-support',
        'href' => 'https://9theme.ticksy.com/',
        'title' => esc_html__('Support', 'r-energy'),
    );
    $r_energy_options_args['admin_bar_links'][] = array(
        'id' => 'ninetheme-portfolio',
        'href' => 'https://themeforest.net/user/ninetheme/portfolio',
        'title' => esc_html__('NineTheme Portfolio', 'r-energy'),
    );

    // Add content after the form.
    $r_energy_options_args['footer_text'] = esc_html__('If you need help please read docs and open a ticket on our support center.', 'r-energy');

    Redux::setArgs($r_energy_pre, $r_energy_options_args);

    /* END ARGUMENTS */

    /* START SECTIONS */


    /*************************************************
    ## MAIN SETTING SECTION
    *************************************************/
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Main Setting', 'r-energy'),
        'id' => 'basic',
        'desc' => esc_html__('These are main settings for general theme!', 'r-energy'),
        'customizer_width' => '400px',
        'icon' => 'el el-cog',
    ));
    //BREADCRUMBS SETTINGS SUBSECTION
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Theme Color', 'r-energy'),
        'id' => 'themebreadcrumbssubsection',
        'icon' => 'el el-brush',
        'subsection' => true,
        'customizer_width' => '450px',
        'fields' => array(
            array(
                'title' => esc_html__('Theme Main Color', 'r-energy'),
                'subtitle' => esc_html__('Change theme main color.', 'r-energy'),
                'id' => 'theme_main_color',
                'type' => 'color',
                'default' => '#0D73FC'
            )
        )
    ));
    //BREADCRUMBS SETTINGS SUBSECTION
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Breadcrumbs', 'r-energy'),
        'id' => 'thememaincolorsubsection',
        'icon' => 'el el-brush',
        'subsection' => true,
        'customizer_width' => '450px',
        'fields' => array(
            array(
                'title' => esc_html__('Breadcrumbs', 'r-energy'),
                'subtitle' => esc_html__('If enabled, adds breadcrumbs navigation to bottom of page title.', 'r-energy'),
                'id' => 'breadcrumbs_visibility',
                'type' => 'switch',
                'default' => false
            ),
            array(
                'title' => esc_html__('Breadcrumbs Typography', 'r-energy'),
                'id' => 'breadcrumbs_typo',
                'type' => 'typography',
                'font-backup' => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'all_styles' => true,
                'output' => array( '.nt-breadcrumbs, .nt-breadcrumbs .nt-breadcrumbs-list' ),
                'default' => array(
                    'color' => '',
                    'font-style' => '',
                    'font-family' => '',
                    'google' => true,
                    'font-size' => '',
                    'line-height' => ''
                ),
                'required' => array( 'breadcrumbs_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Breadcrumbs Current Color', 'r-energy'),
                'id' => 'breadcrumbs_current',
                'type' => 'color',
                'default' => '#fff',
                'output' => array( '.nt-breadcrumbs .nt-breadcrumbs-list li.active' ),
                'required' => array( 'breadcrumbs_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Breadcrumbs Icon Color', 'r-energy'),
                'id' => 'breadcrumbs_icon',
                'type' => 'color',
                'default' => '#fff',
                'output' => array( '.nt-breadcrumbs .nt-breadcrumbs-list i' ),
                'required' => array( 'breadcrumbs_visibility', '=', '1' )
            )
        )
    ));
    //PRELOADER SETTINGS SUBSECTION
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Preloader', 'r-energy'),
        'id' => 'themepreloadersubsection',
        'icon' => 'el el-brush',
        'subsection' => true,
        'fields' => array(
            array(
                'title' => esc_html__('Preloader', 'r-energy'),
                'subtitle' => esc_html__('If enabled, adds preloader.', 'r-energy'),
                'id' => 'preloader_visibility',
                'type' => 'switch',
                'default' => true
            ),
            array(
                'title' => esc_html__('Preloader Type', 'r-energy'),
                'subtitle' => esc_html__('Select your site preloader type.', 'r-energy'),
                'id' => 'pre_type',
                'type' => 'select',
                'customizer' => true,
                'options' => array(
                    '01' => esc_html__('Type 1', 'r-energy'),
                    '02' => esc_html__('Type 2', 'r-energy'),
                    '03' => esc_html__('Type 3', 'r-energy'),
                    '04' => esc_html__('Type 4', 'r-energy'),
                    '05' => esc_html__('Type 5', 'r-energy'),
                    '06' => esc_html__('Type 6', 'r-energy'),
                    '07' => esc_html__('Type 7', 'r-energy'),
                    '08' => esc_html__('Type 8', 'r-energy'),
                    '09' => esc_html__('Type 9', 'r-energy'),
                    '10' => esc_html__('Type 10', 'r-energy'),
                    '11' => esc_html__('Type 11', 'r-energy'),
                    '12' => esc_html__('Type 12', 'r-energy'),
                    'custom' => esc_html__('Custom Gif Image ', 'r-energy')
                ),
                'default' => '01',
                'required' => array( 'preloader_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Custom preloder image', 'r-energy'),
                'subtitle' => esc_html__('Upload your custom preloder image.', 'r-energy'),
                'id' => 'pre_custom_img',
                'type' => 'media',
                'url' => true,
                'customizer' => true,
                'required' => array(
                    array( 'preloader_visibility', '=', '1' ),
                    array( 'pre_type', '=', 'custom' )
                ),
            ),
            array(
                'title' => esc_html__('Preloader Background Color', 'r-energy'),
                'subtitle' => esc_html__('Add preloader background color.', 'r-energy'),
                'id' => 'pre_bg',
                'type' => 'color',
                'default' => '#fff',
                'required' => array(
                    array( 'preloader_visibility', '=', '1' )
                ),
            ),
            array(
                'title' => esc_html__('Preloader Spin Color', 'r-energy'),
                'subtitle' => esc_html__('Add preloader spin color.', 'r-energy'),
                'id' => 'pre_spin',
                'type' => 'color',
                'default' => '#0d73fc',
                'required' => array(
                    array( 'preloader_visibility', '=', '1' ),
                    array( 'pre_type', '!=', 'custom' )
                )
            )
    )));
    //MAIN THEME TYPOGRAPHY SUBSECTION
    Redux::setSection($r_energy_pre, array(
    'title' => esc_html__('Typograhy General', 'r-energy'),
    'id' => 'themetypographysection',
    'icon' => 'el el-fontsize',
    'subsection' => true,
    'fields' => array(
        array(
            'title' => esc_html__('H1 Headings', 'r-energy'),
            'subtitle' => esc_html__("Choose Size and Style for h1", 'r-energy'),
            'id' => 'font_h1',
            'type' => 'typography',
            'font-backup' => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'all_styles' => true,
            'output' => array( 'h1' ),
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            )
        ),
        array(
            'title' => esc_html__('H2 Headings', 'r-energy'),
            'subtitle' => esc_html__("Choose Size and Style for h2", 'r-energy'),
            'id' => 'font_h2',
            'type' => 'typography',
            'font-backup' => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'all_styles' => true,
            'output' => array( 'h2' ),
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            )
        ),
        array(
            'title' => esc_html__('H3 Headings', 'r-energy'),
            'subtitle' => esc_html__("Choose Size and Style for h3", 'r-energy'),
            'id' => 'font_h3',
            'type' => 'typography',
            'font-backup' => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'all_styles' => true,
            'output' => array( 'h3' ),
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            )
        ),
        array(
            'title' => esc_html__('H4 Headings', 'r-energy'),
            'subtitle' => esc_html__("Choose Size and Style for h4", 'r-energy'),
            'id' => 'font_h4',
            'type' => 'typography',
            'font-backup' => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'all_styles' => true,
            'output' => array( 'h4' ),
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            )
        ),
        array(
            'title' => esc_html__('H5 Headings', 'r-energy'),
            'subtitle' => esc_html__("Choose Size and Style for h5", 'r-energy'),
            'id' => 'font_h5',
            'type' => 'typography',
            'font-backup' => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'all_styles' => true,
            'output' => array( 'h5' ),
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            )
        ),
        array(
            'title' => esc_html__('H6 Headings', 'r-energy'),
            'subtitle' => esc_html__("Choose Size and Style for h6", 'r-energy'),
            'id' => 'font_h6',
            'type' => 'typography',
            'font-backup' => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'all_styles' => true,
            'output' => array( 'h6' ),
            'units' => 'px',
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            )
        ),
        array(
            'id' =>'info_body_font',
            'type' => 'info',
            'customizer' => false,
            'desc' => esc_html__('Body Font Options', 'r-energy')
        ),
        array(
            'title' => esc_html__('Paragraph', 'r-energy'),
            'subtitle' => esc_html__("Choose Size and Style for paragraph", 'r-energy'),
            'id' => 'font_p',
            'type' => 'typography',
            'font-backup' => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'all_styles' => true,
            'output' => array( 'p' ),
            'default' => array(
                'font-family' =>'',
                'color' =>"",
                'font-style' =>'',
                'font-size' =>'',
                'line-height' =>''
            )
        )
    )));
    //BACKTOTOP BUTTON SUBSECTION
    Redux::setSection($r_energy_pre, array(
    'title' => esc_html__('Back-to-top Button', 'r-energy'),
    'id' => 'backtotop',
    'icon' => 'el el-brush',
    'subsection' => true,
    'fields' => array(
        array(
            'title' => esc_html__('Back-to-top', 'r-energy'),
            'subtitle' => esc_html__('Switch On-off', 'r-energy'),
            'desc' => esc_html__('If enabled, adds preloader.', 'r-energy'),
            'id' => 'backtotop_visibility',
            'type' => 'switch',
            'default' => true
        ),
        array(
            'title' => esc_html__('Top Offset', 'r-energy'),
            'subtitle' => esc_html__('Set custom top offset for the back-to-top button', 'r-energy'),
            'desc' => esc_html__('If enabled, adds preloader.', 'r-energy'),
            'id' => 'backtotop_offset',
            'type' => 'slider',
            'default' => 800,
            'min' => 10,
            'step' => 1,
            'max'=> 2000,
            'required' => array( 'backtotop_visibility', '=', '1' )
        ),
        array(
            'title' => esc_html__('Back-to-top Background', 'r-energy'),
            'id' => 'backtotop_bg',
            'type' => 'color',
            'mode' => 'background',
            'output' => array( '#btn-to-top-wrap #btn-to-top' ),
            'default' =>  '#045fa0',
            'required' => array( 'backtotop_visibility', '=', '1' )
        )
    )));

    // THEME PAGINATION SUBSECTION
    Redux::setSection($r_energy_pre, array(
    'title' => esc_html__('Pagination', 'r-energy'),
    'desc' => esc_html__('These are main settings for general theme!', 'r-energy'),
    'id' => 'pagination',
    'subsection' => true,
    'icon' => 'el el-link',
    'fields' => array(
        array(
            'title' => esc_html__('Pagination', 'r-energy'),
            'subtitle' => esc_html__('Switch On-off', 'r-energy'),
            'desc' => esc_html__('If enabled, adds pagination.', 'r-energy'),
            'id' => 'pagination_visibility',
            'type' => 'switch',
            'default' => true
        ),
        array(
            'title' => esc_html__('Pagination Type', 'r-energy'),
            'subtitle' => esc_html__('Select type.', 'r-energy'),
            'id' => 'pag_type',
            'type' => 'select',
            'customizer' => true,
            'options' => array(
                'default' => esc_html__('Default', 'r-energy'),
                'outline' => esc_html__('Outline', 'r-energy')
            ),
            'default' => 'outline',
            'required' => array( 'pagination_visibility', '=', '1' )
        ),
        array(
            'title' => esc_html__('Pagination size', 'r-energy'),
            'subtitle' => esc_html__('Select size.', 'r-energy'),
            'id' => 'pag_size',
            'type' => 'select',
            'customizer' => true,
            'options' => array(
                'small' => esc_html__('small', 'r-energy'),
                'medium' => esc_html__('medium', 'r-energy'),
                'large' => esc_html__('large', 'r-energy')
            ),
            'default' => 'medium',
            'required' => array( 'pagination_visibility', '=', '1' )
        ),
        array(
            'title' => esc_html__('Pagination group', 'r-energy'),
            'subtitle' => esc_html__('Select group.', 'r-energy'),
            'id' => 'pag_group',
            'type' => 'select',
            'customizer' => true,
            'options' => array(
                'yes' => esc_html__('Yes', 'r-energy'),
                'no' => esc_html__('No', 'r-energy')
            ),
            'default' => 'no',
            'required' => array( 'pagination_visibility', '=', '1' )
        ),
        array(
            'title' => esc_html__('Pagination corner', 'r-energy'),
            'subtitle' => esc_html__('Select corner type.', 'r-energy'),
            'id' => 'pag_corner',
            'type' => 'select',
            'customizer' => true,
            'options' => array(
                'square' => esc_html__('square', 'r-energy'),
                'rounded' => esc_html__('rounded', 'r-energy'),
                'circle' => esc_html__('circle', 'r-energy')
            ),
            'default' => 'circle',
            'required' => array( 'pagination_visibility', '=', '1' )
        ),
        array(
            'title' => esc_html__('Pagination align', 'r-energy'),
            'subtitle' => esc_html__('Select align.', 'r-energy'),
            'id' => 'pag_align',
            'type' => 'select',
            'customizer' => true,
            'options' => array(
                'left' => esc_html__('left', 'r-energy'),
                'right' => esc_html__('right', 'r-energy'),
                'center' => esc_html__('center', 'r-energy')
            ),
            'default' => 'center',
            'required' => array( 'pagination_visibility', '=', '1' )
        ),
        array(
            'title' => esc_html__('Pagination default/outline color', 'r-energy'),
            'id' => 'pag_clr',
            'type' => 'color',
            'mode' => 'color',
            'required' => array( 'pagination_visibility', '=', '1' )
        ),
        array(
            'title' => esc_html__('Active and Hover pagination color', 'r-energy'),
            'id' => 'pag_hvrclr',
            'type' => 'color',
            'mode' => 'color',
            'required' => array( 'pagination_visibility', '=', '1' )
        ),
        array(
            'title' => esc_html__('Pagination number color', 'r-energy'),
            'id' => 'pag_nclr',
            'type' => 'color',
            'mode' => 'color',
            'required' => array( 'pagination_visibility', '=', '1' )
        ),
        array(
            'title' => esc_html__('Active and Hover pagination number color', 'r-energy'),
            'id' => 'pag_hvrnclr',
            'type' => 'color',
            'mode' => 'color',
            'required' => array( 'pagination_visibility', '=', '1' )
        )
    )));

    /*************************************************
    ## LOGO SECTION
    *************************************************/
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Logo', 'r-energy'),
        'desc' => esc_html__('These are main settings for general theme!', 'r-energy'),
        'id' => 'logosection',
        'customizer_width' => '400px',
        'icon' => 'el el-star-empty',
        'fields' => array(
            array(
                'title' => esc_html__('Logo Switch', 'r-energy'),
                'subtitle' => esc_html__('You can select logo on or off.', 'r-energy'),
                'id' => 'logo_visibility',
                'type' => 'switch',
                'default' => true
            ),
            array(
                'title' => esc_html__('Logo Type', 'r-energy'),
                'subtitle' => esc_html__('Select your logo type.', 'r-energy'),
                'id' => 'logo_type',
                'type' => 'select',
                'customizer' => true,
                'options' => array(
                    'img' => esc_html__('Image Logo', 'r-energy'),
                    'sitename' => esc_html__('Site Name', 'r-energy'),
                    'customtext' => esc_html__('Custom HTML', 'r-energy')
                ),
                'default' => 'sitename',
                'required' => array( 'logo_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Custom text for logo', 'r-energy'),
                'desc' => esc_html__('Text entered here will be used as logo', 'r-energy'),
                'id' => 'text_logo',
                'type' => 'editor',
                'args'   => array(
                    'teeny' => false,
                    'textarea_rows' => 10
                ),
                'required' => array(
                    array( 'logo_visibility', '=', '1' ),
                    array( 'logo_type', '=', 'customtext' )
                ),
            ),
            array(
                'title' => esc_html__('Sitename or Custom Text Logo Font', 'r-energy'),
                'desc' => esc_html__("Choose size and style your sitename, if you don't use an image logo.", 'r-energy'),
                'id' =>'logo_style',
                'type' => 'typography',
                'font-family' => true,
                'google' => true, // Disable google fonts. Won't work if you haven't defined your google api key
                'font-backup' => false, // Select a backup non-google font in addition to a google font
                'font-style' => true, // Includes font-style and weight. Can use font-style or font-weight to declare
                'subsets' => true, // Only appears if google is true and subsets not set to false
                'font-size' => true,
                'line-height' => true,
                'text-transform' => true,
                'text-align' => false,
                'customizer' => true,
                'color' => true,
                'preview' => true, // Disable the previewer
                'output' => array('#nt-logo.logo-type-customtext, #nt-logo.logo-type-sitename'),
                'default' => array(
                    'font-family' =>'',
                    'color' =>"",
                    'font-style' =>'',
                    'font-size' =>'',
                    'line-height' =>''
                ),
                'required' => array(
                    array( 'logo_visibility', '=', '1' ),
                    array( 'logo_type', '!=', 'img' )
                )
            ),
            array(
                'title' => esc_html__('Hover Text Logo Color', 'r-energy'),
                'desc' => esc_html__('Set your own hover color for the text logo.', 'r-energy'),
                'id' => 'text_logo_hvr',
                'type' => 'color',
                'output' => array( '#top-bar #nt-logo.logo-type-customtext:hover, #top-bar #nt-logo.logo-type-sitename:hover' ),
                'required' => array(
                    array( 'logo_visibility', '=', '1' ),
                    array( 'logo_type', '!=', 'img' )
                )
            ),
            array(
                'title' => esc_html__('Logo image', 'r-energy'),
                'subtitle' => esc_html__('Upload your Logo. If left blank theme will use site default logo.', 'r-energy'),
                'id' => 'img_logo',
                'type' => 'media',
                'url' => true,
                'customizer' => true,
                'required' => array(
                    array( 'logo_visibility', '=', '1' ),
                    array( 'logo_type', '=', 'img' ),
                    array( 'logo_type', '!=', '' )
                )
            ),
            array(
                'title' => esc_html__('Logo Dimensions', 'r-energy'),
                'subtitle' => esc_html__('Set the logo width and height of the image.', 'r-energy'),
                'id' => 'img_logo_dimensions',
                'type' => 'dimensions',
                'customizer' => true,
                'output' => array('#nt-logo img.main-logo'),
                'required' => array(
                    array( 'logo_visibility', '=', '1' ),
                    array( 'logo_type', '!=', '' )
                )
            ),
            array(
                'title' => esc_html__('Sticky Logo Switch', 'r-energy'),
                'subtitle' => esc_html__('You can select sticky logo on or off.', 'r-energy'),
                'id' => 'sticky_logo_visibility',
                'type' => 'switch',
                'default' => false,
                'required' => array(
                    array( 'logo_visibility', '=', '1' ),
                    array( 'logo_type', '=', 'img' )
                )
            ),
            array(
                'title' => esc_html__('Sticky logo image', 'r-energy'),
                'subtitle' => esc_html__('Upload your Logo. If left blank theme will use site default logo.', 'r-energy'),
                'id' => 'sticky_logo',
                'type' => 'media',
                'url' => true,
                'customizer' => true,
                'required' => array(
                    array( 'logo_visibility', '=', '1' ),
                    array( 'logo_type', '=', 'img' ),
                    array( 'logo_type', '!=', '' ),
                    array( 'sticky_logo_visibility', '=', '1' )
                )
            ),
            array(
                'title' => esc_html__('Sticky logo Dimensions', 'r-energy'),
                'subtitle' => esc_html__('Set the sticky logo width and height of the image.', 'r-energy'),
                'id' => 'sticky_logo_dimensions',
                'type' => 'dimensions',
                'customizer' => true,
                'output' => array('#nt-logo img.sticky-logo'),
                'required' => array(
                    array( 'logo_visibility', '=', '1' ),
                    array( 'logo_type', '=', 'img' ),
                    array( 'logo_type', '!=', '' ),
                    array( 'sticky_logo_visibility', '=', '1' )
                )
            )
    )));

    /*************************************************
    ## HEADER & NAV SECTION
    *************************************************/
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Header', 'r-energy'),
        'id' => 'headersection',
        'icon' => 'fa fa-bars',
    ));
    //HEADER MENU
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('General', 'r-energy'),
        'id' => 'headernavgeneralsection',
        'subsection' => true,
        'icon' => 'fa fa-cog',
        'fields' => array(
            array(
                'title' => esc_html__('Header Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site navigation.', 'r-energy'),
                'id' => 'nav_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Header Type', 'r-energy'),
                'id' => 'nav_type',
                'type' => 'select',
                'options'  => array(
                    'fullwidth' => esc_html__('Full-width', 'r-energy'),
                    'boxed' => esc_html__('Boxed', 'r-energy'),
                    'boxedbar' => esc_html__('Boxed + Bottom Bar', 'r-energy'),
                    'shop' => esc_html__('Shop Header', 'r-energy'),
                ),
                'default' => 'fullwidth',
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Use Shop Header Only Shop Pages', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site shop header only shop page.', 'r-energy'),
                'id' => 'open_shop_header',
                'type' => 'switch',
                'default' => 0,
                'on' => 'On',
                'off' => 'Off'
            ),
            //information on-off
            array(
                'id' =>'info_nav0',
                'type' => 'info',
                'style' => 'success',
                'title' => esc_html__('Success!', 'r-energy'),
                'icon' => 'el el-info-circle',
                'customizer' => false,
                'desc' => sprintf(esc_html__('%s is disabled on the site. Please activate to view options.', 'r-energy'), '<b>Navigation</b>'),
                'required' => array( 'nav_visibility', '=', '0' )
            )
    )));
    //HEADER MENU
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Static Header Menu', 'r-energy'),
        'id' => 'headernavsection',
        'subsection' => true,
        'icon' => 'el el-brush',
        'fields' => array(
            array(
                'title' => esc_html__('Header Background Color', 'r-energy'),
                'id' => 'nav_bg',
                'type' => 'color_rgba',
                'mode' => 'background',
                'output' => array( '#header.header' ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Menu Item Font and Color', 'r-energy'),
                'subtitle' => esc_html__("Choose Size and Style for primary menu", 'r-energy'),
                'id' => 'nav_a_typo',
                'type' => 'typography',
                'font-backup' => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'all_styles' => true,
                'output' => array( '.main-menu > li > a, .main-menu .sub-menu > li > a,.main-menu .sub-menu li a' ),
                'default' => array(
                    'color' => '',
                    'font-style' => '',
                    'font-family' => '',
                    'google' => true,
                    'font-size' => '',
                    'line-height' => ''
                ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Menu Item Color ( Hover and Active )', 'r-energy'),
                'desc' => esc_html__('Set your own hover color for the navigation menu item.', 'r-energy'),
                'id' => 'nav_hvr_a',
                'type' => 'color',
                'output' => array( '.main-menu > li > a:hover,.main-menu .sub-menu li a:hover' ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Menu Item Border Color ( Hover and Active )', 'r-energy'),
                'desc' => esc_html__('Set your own hover color for the navigation menu item.', 'r-energy'),
                'id' => 'nav_hvr_a_brd',
                'type' => 'color',
                'mode' => 'background',
                'output' => array( '.main-menu > li > a:after' ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            //information on-off
            array(
                'id' =>'info_nav1',
                'type' => 'info',
                'style' => 'success',
                'title' => esc_html__('Success!', 'r-energy'),
                'icon' => 'el el-info-circle',
                'customizer' => false,
                'desc' => sprintf(esc_html__('%s is disabled on the site. Please activate to view options.', 'r-energy'), '<b>Navigation</b>'),
                'required' => array( 'nav_visibility', '=', '0' )
            )
    )));
    //HEADER MENU
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Sticky Header Menu', 'r-energy'),
        'id' => 'headerstickynavsection',
        'subsection' => true,
        'icon' => 'el el-brush',
        'fields' => array(
            array(
                'title' => esc_html__('Sticky Menu Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site navigation sticky option.', 'r-energy'),
                'id' => 'nav_sticky_visibility',
                'type' => 'switch',
                'default' => 0,
                'on' => 'On',
                'off' => 'Off',
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Sticky Menu Background', 'r-energy'),
                'id' => 'nav_bg_sticky',
                'type' => 'color_rgba',
                'mode' => 'background',
                'output' => array( '#header.header.sticked' ),
                'required' => array(
                    array( 'nav_visibility', '=', '1' ),
                    array( 'nav_sticky_visibility', '=', '1' ),
                )
            ),
            array(
                'title' => esc_html__('Menu Item Font and Color', 'r-energy'),
                'subtitle' => esc_html__("Choose Size and Style for primary menu", 'r-energy'),
                'id' => 'snav_a_typo',
                'type' => 'typography',
                'font-backup' => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'all_styles' => true,
                'output' => array( '#header.header.sticked .main-menu > li > a, #header.header.sticked .main-menu .sub-menu > li > a, #header.header.sticked .main-menu .sub-menu li a' ),
                'default' => array(
                    'color' => '',
                    'font-style' => '',
                    'font-family' => '',
                    'google' => true,
                    'font-size' => '',
                    'line-height' => ''
                ),
                'required' => array(
                    array( 'nav_visibility', '=', '1' ),
                    array( 'nav_sticky_visibility', '=', '1' )
                )
            ),
            array(
                'title' => esc_html__('Menu Item Color ( Hover and Active )', 'r-energy'),
                'desc' => esc_html__('Set your own hover color for the navigation menu item.', 'r-energy'),
                'id' => 'snav_hvr_a',
                'type' => 'color',
                'output' => array( '#header.header.sticked .main-menu > li > a:hover,#header.header.sticked .main-menu .sub-menu li a:hover' ),
                'required' => array(
                    array( 'nav_visibility', '=', '1' ),
                    array( 'nav_sticky_visibility', '=', '1' )
                )
            ),
            array(
                'title' => esc_html__('Menu Item Border Color ( Hover and Active )', 'r-energy'),
                'desc' => esc_html__('Set your own hover color for the navigation menu item.', 'r-energy'),
                'id' => 'snav_hvr_a_brd',
                'type' => 'color',
                'mode' => 'background',
                'output' => array( '#header.header.sticked .main-menu > li > a:after' ),
                'required' => array(
                    array( 'nav_visibility', '=', '1' ),
                    array( 'nav_sticky_visibility', '=', '1' )
                )
            ),
            //information on-off
            array(
                'id' =>'info_nav2',
                'type' => 'info',
                'style' => 'success',
                'title' => esc_html__('Success!', 'r-energy'),
                'icon' => 'el el-info-circle',
                'customizer' => false,
                'desc' => sprintf(esc_html__('%s is disabled on the site. Please activate to view options.', 'r-energy'), '<b>Navigation</b>'),
                'required' => array( 'nav_visibility', '=', '0' )
            )
    )));
    //HEADER MENU
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Dropdown Submenu', 'r-energy'),
        'id' => 'headernavdropdaownsection',
        'subsection' => true,
        'icon' => 'el el-brush',
        'fields' => array(
            array(
                'title' => esc_html__('Dropdown Submenu Background Color', 'r-energy'),
                'desc' => esc_html__('Set your own background-color for the navigation dropdown menu.', 'r-energy'),
                'id' => 'nav_drop_bg',
                'type' => 'color_rgba',
                'mode' => 'background',
                'output' => array( '.main-menu .sub-menu' ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Dropdown Submenu Item Font and Color', 'r-energy'),
                'subtitle' => esc_html__("Choose Size and Style for dropdown menu item", 'r-energy'),
                'id' => 'nav_drop_typo',
                'type' => 'typography',
                'font-backup' => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'all_styles' => true,
                'output' => array( '.main-menu .sub-menu li a' ),
                'default' => array(
                    'color' => '',
                    'font-style' => '',
                    'font-family' => '',
                    'google' => true,
                    'font-size' => '',
                    'line-height' => ''
                ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Dropdown Item Color ( Hover )', 'r-energy'),
                'desc' => esc_html__('Set your own hover color for the navigation dropdown menu item.', 'r-energy'),
                'id' => 'nav_drop_i',
                'type' => 'color',
                'mode' => 'color',
                'output' => array( '.main-menu .sub-menu li a:hover' ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            //information on-off
            array(
                'id' =>'info_nav3',
                'type' => 'info',
                'style' => 'success',
                'title' => esc_html__('Success!', 'r-energy'),
                'icon' => 'el el-info-circle',
                'customizer' => false,
                'desc' => sprintf(esc_html__('%s is disabled on the site. Please activate to view options.', 'r-energy'), '<b>Navigation</b>'),
                'required' => array( 'nav_visibility', '=', '0' )
            )
    )));
    //HEADER LANGUAGES
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Header Language', 'r-energy'),
        'id' => 'headernavlanguagesubsection',
        'subsection' => true,
        'icon' => 'fa fa-language',
        'fields' => array(
            array(
                'title' => esc_html__('Header Language Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site header language.', 'r-energy'),
                'id' => 'nav_lang_visibility',
                'type' => 'switch',
                'default' => 0,
                'on' => 'On',
                'off' => 'Off',
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Header Language Mobile Menu Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site header language on mobile menu.', 'r-energy'),
                'id' => 'lang_mobile_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off',
                'required' => array(
                    array( 'nav_visibility', '=', '1' ),
                    array( 'nav_lang_visibility', '=', '1' )
                )
            ),
            array(
                'title' => esc_html__('Language Type', 'r-energy'),
                'subtitle' => esc_html__('Select your language type.', 'r-energy'),
                'id' => 'lang_type',
                'type' => 'select',
                'customizer' => true,
                'options' => array(
                    'default' => esc_html__('Deafult', 'r-energy'),
                    'polylang' => esc_html__('Polylang Plugin', 'r-energy'),
                ),
                'default' => 'default',
                'required' => array(
                    array( 'nav_visibility', '=', '1' ),
                    array( 'nav_lang_visibility', '=', '1' )
                )
            ),
            array(
                'title' => esc_html__('Create your custom lang list', 'r-energy'),
                'subtitle' => esc_html__('HTML allowed (wp_kses)', 'r-energy'),
                'id' => 'nav_lang_list',
                'type' => 'textarea',
                'validate' => 'html',
                'default' => '<ul class="lang-select">
                <li class="lang-item active"><span>EN</span>
                <ul class="sub-list">
                <li class="lang-item"><a href="#">French</a></li>
                <li class="lang-item"><a href="#">Spanish</a></li>
                <li class="lang-item"><a href="#">Deutsch</a></li>
                <li class="lang-item"><a href="#">Russian</a></li>
                </ul>
                </li>
                </ul>',
                'required' => array(
                    array( 'nav_visibility', '=', '1' ),
                    array( 'nav_lang_visibility', '=', '1' ),
                    array( 'lang_type', '=', 'default' )
                )
            ),
            array(
                'title' => esc_html__('Language Background Color', 'r-energy'),
                'id' => 'header_lang_bg',
                'type' => 'color',
                'mode' => 'background',
                'output' => array( 'header .lang-select .sub-list' ),
                'default' => '',
                'required' => array(
                    array( 'nav_visibility', '=', '1' ),
                    array( 'nav_lang_visibility', '=', '1' )
                )
            ),
            array(
                'title' => esc_html__('Language Item Color ( Current )', 'r-energy'),
                'id' => 'header_lang_active_clr',
                'type' => 'color',
                'mode' => 'color',
                'output' => array( 'header .lang-select .lang-item.active span' ),
                'default' => '',
                'required' => array(
                    array( 'nav_visibility', '=', '1' ),
                    array( 'nav_lang_visibility', '=', '1' )
                )
            ),
            array(
                'title' => esc_html__('Language Arrow Color', 'r-energy'),
                'id' => 'header_lang_arrow_clr',
                'type' => 'color',
                'mode' => 'background-color',
                'output' => array( '.lang-select .lang-item.active span::before, .lang-select .lang-item.active span::after' ),
                'default' => '',
                'required' => array(
                    array( 'nav_visibility', '=', '1' ),
                    array( 'nav_lang_visibility', '=', '1' )
                )
            ),
            array(
                'title' => esc_html__('Dropdown Language Item Color', 'r-energy'),
                'id' => 'header_lang_clr',
                'type' => 'color',
                'mode' => 'color',
                'output' => array( 'header .lang-select .sub-list li a span' ),
                'default' => '',
                'required' => array(
                    array( 'nav_visibility', '=', '1' ),
                    array( 'nav_lang_visibility', '=', '1' )
                )
            ),
            array(
                'title' => esc_html__('Dropdown Language Item Color ( Hover )', 'r-energy'),
                'id' => 'header_lang_hvr_clr',
                'type' => 'color',
                'mode' => 'color',
                'output' => array( 'header .lang-select .sub-list li a:hover span' ),
                'default' => '',
                'required' => array(
                    array( 'nav_visibility', '=', '1' ),
                    array( 'nav_lang_visibility', '=', '1' )
                )
            ),
            array(
                'title' => esc_html__('Dropdown Language Item Border Color', 'r-energy'),
                'id' => 'header_lang_brd_clr',
                'type' => 'color',
                'mode' => 'background-color',
                'output' => array( 'header .lang-select .sub-list li a::after' ),
                'default' => '',
                'required' => array(
                    array( 'nav_visibility', '=', '1' ),
                    array( 'nav_lang_visibility', '=', '1' )
                )
            )
     )));
    //HEADER RIGHT BUTTON
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Header Contact Button', 'r-energy'),
        'id' => 'headernavbtnsubsection',
        'subsection' => true,
        'icon' => 'fa fa-link',
        'fields' => array(
            //nav second button
            array(
                'title' => esc_html__('Button Title', 'r-energy'),
                'subtitle' => esc_html__('Add button title.', 'r-energy'),
                'id' => 'nav_btn_title',
                'type' => 'text',
                'default' => '',
                'validate' => 'html_custom',
                'allowed_html' => array(
                    'i' => array(
                        'class' => array(),
                        'style' => array()
                    ),
                    'span' => array(
                        'class' => array(),
                        'style' => array()
                    )
                ),
                'required' => array( 'nav_visibility', '=', '1' ),
            ),
            array(
                'title' => esc_html__('Button URL', 'r-energy'),
                'subtitle' => esc_html__('Add button URL/Link.', 'r-energy'),
                'id' => 'nav_btn_url',
                'type' => 'text',
                'required' => array( 'nav_visibility', '=', '1' ),
            ),
            array(
                'title' => esc_html__('Button URL for Polylang', 'r-energy'),
                'subtitle' => esc_html__('Add more link for this button', 'r-energy'),
                    'id' => 'nav_btn_multi_url',
                    'type' => 'nt_multi_field',
                    'add_text' => esc_html__('Add Link', 'r-energy'),
                    'add_number' => 1,
                    'class' => 'block',
                    'placeholder'=> array(
                    'for example: en-US,fr-FR...',
                    'URL',
                ),
                'show_empty'=> false,
                'required' => array( 'nav_visibility', '=', '1' ),
            ),
            array(
                'title' => esc_html__('Background Color', 'r-energy'),
                'id' => 'nav_btn_bg',
                'type' => 'color_rgba',
                'mode' => 'background-color',
                'output' => array( 'header .button span' ),
                'default' => array(
                    'color' => '',
                    'alpha' => 1
                ),
                'required' => array( 'nav_visibility', '=', '1' ),
            ),
            array(
                'title' => esc_html__('Background Color ( Hover )', 'r-energy'),
                'id' => 'nav_btn_hvrbg',
                'type' => 'color_rgba',
                'mode' => 'background-color',
                'output' => array( 'header .button::before,.button.button--transparent::before' ),
                'default' => array(
                    'color' => '',
                    'alpha' => 1
                ),
                'required' => array( 'nav_visibility', '=', '1' ),
            ),
            array(
                'title' => esc_html__('Border', 'r-energy'),
                'id' => 'nav_btn_brd',
                'type' => 'border',
                'all' => false,
                'output' => array( 'header .button' ),
                'default'  => array(
                  'border-color'  => '#0D73FC',
                  'border-style'  => 'solid',
                  'border-top'    => '2px',
                  'border-right'  => '2px',
                  'border-bottom' => '2px',
                  'border-left'   => '2px'
                ),
                'required' => array( 'nav_visibility', '=', '1' ),
            ),
            array(
                'title' => esc_html__('Title Color', 'r-energy'),
                'id' => 'nav_btn_clr',
                'type' => 'color',
                'mode' => 'color',
                'output' => array( 'header .button' ),
                'required' => array( 'nav_visibility', '=', '1' ),
            ),
            array(
                'title' => esc_html__('Title Color ( Hover )', 'r-energy'),
                'id' => 'nav_btn_hvrclr',
                'type' => 'color',
                'mode' => 'color',
                'output' => array( 'header .button:hover:before' ),
                'required' => array( 'nav_visibility', '=', '1' ),
            ),
            //information on-off
            array(
                'id' =>'info_nav5',
                'type' => 'info',
                'style' => 'success',
                'title' => esc_html__('Success!', 'r-energy'),
                'icon' => 'el el-info-circle',
                'customizer' => false,
                'desc' => sprintf(esc_html__('%s is disabled on the site. Please activate to view options.', 'r-energy'), '<b>Navigation</b>'),
                'required' => array( 'nav_visibility', '=', '0' )
            )
    )));
    //HEADER MOBILE MENU
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Mobile Menu', 'r-energy'),
        'id' => 'headermobilenavsection',
        'subsection' => true,
        'icon' => 'fa fa-mobile',
        'fields' => array(
            array(
                'title' => esc_html__('Mobile Menu Background', 'r-energy'),
                'desc' => esc_html__('Set your own hover color for the navigation menu item.', 'r-energy'),
                'id' => 'mob_nav_bg',
                'type' => 'color',
                'mode' => 'background-color',
                'output' => array( '#header.menu-opened,.mobile-nav .nav-inner' ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Menu Item Font and Color', 'r-energy'),
                'subtitle' => esc_html__("Choose Size and Style for primary menu", 'r-energy'),
                'id' => 'mob_nav_a_typo',
                'type' => 'typography',
                'font-backup' => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'all_styles' => true,
                'output' => array( '.mobile-menu > li > a' ),
                'default' => array(
                    'color' => '',
                    'font-style' => '',
                    'font-family' => '',
                    'google' => true,
                    'font-size' => '',
                    'line-height' => ''
                ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Menu Item Color ( Hover and Active )', 'r-energy'),
                'desc' => esc_html__('Set your own hover color for the navigation menu item.', 'r-energy'),
                'id' => 'mob_nav_hvr_a',
                'type' => 'color',
                'output' => array( '.mobile-menu > li > a:hover,.mobile-menu .sub-menu li a:hover' ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Menu Item Border Color ( Hover and Active )', 'r-energy'),
                'desc' => esc_html__('Set your own hover color for the navigation menu item.', 'r-energy'),
                'id' => 'mob_nav_hvr_a_brd',
                'type' => 'color',
                'mode' => 'background-color',
                'output' => array( '.mobile-menu > li > a::after,.mobile-menu > li.menu-item--has-child > a > span::before, .mobile-menu > li.menu-item--has-child > a > span::after' ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Menu Toggle Button Bar Color', 'r-energy'),
                'desc' => esc_html__('Set your own color for mobile menu navbar toggle button.', 'r-energy'),
                'id' => 'mob_nav_toggle',
                'type' => 'color',
                'mode' => 'background-color',
                'output' => array( '.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after' ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Menu Toggle Button Bar Color ( Hover )', 'r-energy'),
                'desc' => esc_html__('Set your own color for mobile menu navbar toggle button.', 'r-energy'),
                'id' => 'mob_nav_toggle_hvr',
                'type' => 'color',
                'mode' => 'color',
                'output' => array( '.hamburger-inner, .hamburger-inner:before:hover, .hamburger-inner:after:hover' ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Mobile Menu Contacts', 'r-energy'),
                'subtitle' => esc_html__('HTML allowed (wp_kses)', 'r-energy'),
                'desc' => esc_html__('Enter your custom contacts details here.', 'r-energy'),
                'id' => 'mob_nav_contacts',
                'type' => 'textarea',
                'validate' => 'html',
                'default' => '<p class="address">Elliott Ave, Parkville VIC 3052, Melbourne</p>
                <p class="phone-number">Phone: <a href="tel:+31859644725">+31 85 964 47 25</a></p>
                <p class="e-main">Email: <a href="mailto:r_energy@mail.co">r_energy@mail.co</a></p>',
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Contact Button Background Color', 'r-energy'),
                'id' => 'mob_nav_btn_bg',
                'type' => 'color_rgba',
                'mode' => 'background-color',
                'output' => array( 'header .button span' ),
                'default' => array(
                'color' => '',
                    'alpha' => 1
                ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Contact Button Background Color ( Hover )', 'r-energy'),
                'id' => 'mob_nav_btn_hvrbg',
                'type' => 'color_rgba',
                'mode' => 'background-color',
                'output' => array( '.mobile-nav .nav-inner .button-holder .button::before' ),
                'default' => array(
                'color' => '',
                    'alpha' => 1
                ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Contact Button Border', 'r-energy'),
                'id' => 'mob_nav_btn_brd',
                'type' => 'border',
                'all' => false,
                'output' => array( '.mobile-nav .button' ),
                'default'  => '',
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Contact Button Title Color', 'r-energy'),
                'id' => 'mob_nav_btn_clr',
                'type' => 'color',
                'mode' => 'color',
                'output' => array( '.mobile-nav .button' ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Contact Button Title Color ( Hover )', 'r-energy'),
                'id' => 'mob_nav_btn_hvrclr',
                'type' => 'color',
                'mode' => 'color',
                'output' => array( '.mobile-nav .nav-inner .button-holder .button::before' ),
                'required' => array( 'nav_visibility', '=', '1' )
            ),
            //information on-off
            array(
                'id' =>'info_nav4',
                'type' => 'info',
                'style' => 'success',
                'title' => esc_html__('Success!', 'r-energy'),
                'icon' => 'el el-info-circle',
                'customizer' => false,
                'desc' => sprintf(esc_html__('%s is disabled on the site. Please activate to view options.', 'r-energy'), '<b>Navigation</b>'),
                'required' => array( 'nav_visibility', '=', '0' )
            )
     )));
     //HEADER TOPBAR
     Redux::setSection($r_energy_pre, array(
         'title' => esc_html__('Header Topbar', 'r-energy'),
         'id' => 'headertopbarsection',
         'subsection' => true,
         'icon' => 'fa fa-link',
         'fields' => array(
             array(
                 'title' => esc_html__('Header Topbar Display', 'r-energy'),
                 'subtitle' => esc_html__('You can enable or disable the site header topbar.', 'r-energy'),
                 'id' => 'header_topbar_visibility',
                 'type' => 'switch',
                 'default' => 0,
                 'on' => 'On',
                 'off' => 'Off',
                 'required' => array( 'nav_visibility', '=', '1' )
             ),
             array(
                 'title' => esc_html__('Topbar Background', 'r-energy'),
                 'desc' => esc_html__('Set your own hover color for the navigation menu item.', 'r-energy'),
                 'id' => 'mob_nav_bg',
                 'type' => 'color',
                 'mode' => 'background-color',
                 'output' => array( '#header .topbar' ),
                 'required' => array( 'nav_visibility', '=', '1' )
             ),
             array(
                 'title' => esc_html__('Contacts', 'r-energy'),
                 'subtitle' => esc_html__('HTML allowed (wp_kses)', 'r-energy'),
                 'desc' => esc_html__('Enter your custom contacts details here.', 'r-energy'),
                 'id' => 'topbar_contacts',
                 'type' => 'textarea',
                 'validate' => 'html',
                 'default' => '<div class="address-block"><p>Elliott Ave, Parkville VIC 3052, Melbourne</p></div>
 <div class="phones-block"><a href="tel:+31859644725">+31 85 964 47 25</a><a href="tel:+31853255813">+31 85 325 58 13</a></div>
 <div class="mail-block"><a href="mailto:r_enery@mail.com">r_enery@mail.co</a></div>',
                 'required' => array(
                     array( 'nav_visibility', '=', '1' ),
                     array( 'header_topbar_visibility', '=', '1' )
                 )
             ),
             array(
                 'title' => esc_html__('Contact Color', 'r-energy'),
                 'id' => 'topbar_contact_clr',
                 'type' => 'color',
                 'mode' => 'color',
                 'output' => array( '#header .topbar.top-line *, .header--style-1 .top-line .contacts-block p, .header--style-1 .top-line .contacts-block a' ),
                 'required' => array(
                     array( 'nav_visibility', '=', '1' ),
                     array( 'header_topbar_visibility', '=', '1' )
                 )
             ),
             array(
                 'title' => esc_html__('Contact Link Hover Bottom Line Color', 'r-energy'),
                 'id' => 'topbar_contact_lineclr',
                 'type' => 'color',
                 'mode' => 'background-color',
                 'output' => array( '#header .topbar .top-line .contacts-block a::after, .header--style-1 .top-line .contacts-block a::after' ),
                 'required' => array(
                     array( 'nav_visibility', '=', '1' ),
                     array( 'header_topbar_visibility', '=', '1' )
                 )
             ),
             array(
                 'title' => esc_html__('Socials', 'r-energy'),
                 'subtitle' => esc_html__('HTML allowed (wp_kses)', 'r-energy'),
                 'desc' => esc_html__('Enter your custom contacts socials here.', 'r-energy'),
                 'id' => 'topbar_socials',
                 'type' => 'textarea',
                 'validate' => 'html',
                 'default' => '<ul class="socials-primary">
     <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
     <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
     <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
     <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
 </ul>',
                 'required' => array(
                     array( 'nav_visibility', '=', '1' ),
                     array( 'header_topbar_visibility', '=', '1' )
                 )
             ),
             array(
                 'title' => esc_html__('Social Color', 'r-energy'),
                 'id' => 'topbar_social_clr',
                 'type' => 'color',
                 'mode' => 'color',
                 'output' => array( '#header .socials-primary a,.header--style-1 .socials-primary a' ),
                 'required' => array(
                     array( 'nav_visibility', '=', '1' ),
                     array( 'header_topbar_visibility', '=', '1' )
                 )
             ),
             array(
                 'title' => esc_html__('Hover Social Color', 'r-energy'),
                 'id' => 'topbar_social_hvrclr',
                 'type' => 'color',
                 'mode' => 'color',
                 'output' => array( '#header .socials-primary a:hover, .header--style-1 .socials-primary a:hover' ),
                 'required' => array(
                     array( 'nav_visibility', '=', '1' ),
                     array( 'header_topbar_visibility', '=', '1' )
                 )
             ),
             //information on-off
             array(
                 'id' =>'info_nav5',
                 'type' => 'info',
                 'style' => 'success',
                 'title' => esc_html__('Success!', 'r-energy'),
                 'icon' => 'el el-info-circle',
                 'customizer' => false,
                 'desc' => sprintf(esc_html__('%s is disabled on the site. Please activate to view options.', 'r-energy'), '<b>Navigation</b>'),
                 'required' => array( 'nav_visibility', '=', '0' )
             )
      )));
    /*************************************************
    ## SIDEBARS SECTION
    *************************************************/
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Sidebars', 'r-energy'),
        'id' => 'sidebarssection',
        'customizer_width' => '400px',
        'icon' => 'fa fa-th-list',
    ));
    // SIDEBAR LAYOUT SUBSECTION
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Sidebars Layout', 'r-energy'),
        'desc' => esc_html__('You can change the below default layout type.', 'r-energy'),
        'id' => 'sidebarslayoutsection',
        'subsection' => true,
        'icon' => 'el el-cogs',
        'fields' => array(
            array(
                'title' => esc_html__('Sidebar type', 'r-energy'),
                'subtitle' => esc_html__('Select sidebar type.', 'r-energy'),
                'id' => 'sidebar_type',
                'type' => 'select',
                'customizer' => true,
                'options' => array(
                    '' => esc_html__('Select type', 'r-energy'),
                    'default' => esc_html__('default', 'r-energy'),
                    'bordered' => esc_html__('bordered', 'r-energy')
                ),
                'default' => 'default',
            ),
            array(
                'title' => esc_html__('Blog Page Layout', 'r-energy'),
                'subtitle' => esc_html__('Choose the blog index page layout.', 'r-energy'),
                'id' => 'index_layout',
                'type' => 'image_select',
                'options' => array(
                    'left-sidebar' => array(
                        'alt' => 'Left Sidebar',
                        'img' => get_template_directory_uri() . '/inc/theme-options/img/2cl.png'
                    ),
                    'full-width' => array(
                        'alt' => 'Full Width',
                        'img' => get_template_directory_uri() . '/inc/theme-options/img/1col.png'
                    ),
                    'right-sidebar' => array(
                        'alt' => 'Right Sidebar',
                        'img' => get_template_directory_uri() . '/inc/theme-options/img/2cr.png'
                    )
                ),
                'default' => 'right-sidebar'
            ),
            array(
                'title' => esc_html__('Single Page Layout', 'r-energy'),
                'subtitle' => esc_html__('Choose the single post page layout.', 'r-energy'),
                'id' => 'single_layout',
                'type' => 'image_select',
                'options' => array(
                    'left-sidebar' => array(
                        'alt' => 'Left Sidebar',
                        'img' => get_template_directory_uri() . '/inc/theme-options/img/2cl.png'
                    ),
                    'full-width' => array(
                        'alt' => 'Full Width',
                        'img' => get_template_directory_uri() . '/inc/theme-options/img/1col.png'
                    ),
                    'right-sidebar' => array(
                        'alt' => 'Right Sidebar',
                        'img' => get_template_directory_uri() . '/inc/theme-options/img/2cr.png'
                    )
                ),
                'default' => 'right-sidebar'
            ),
            array(
                'title' => esc_html__('Search Page Layout', 'r-energy'),
                'subtitle' => esc_html__('Choose the search page layout.', 'r-energy'),
                'id' => 'search_layout',
                'type' => 'image_select',
                'options' => array(
                    'left-sidebar' => array(
                        'alt' => 'Left Sidebar',
                        'img' => get_template_directory_uri() . '/inc/theme-options/img/2cl.png'
                    ),
                    'full-width' => array(
                        'alt' => 'Full Width',
                        'img' => get_template_directory_uri() . '/inc/theme-options/img/1col.png'
                    ),
                    'right-sidebar' => array(
                        'alt' => 'Right Sidebar',
                        'img' => get_template_directory_uri() . '/inc/theme-options/img/2cr.png'
                    )
                ),
                'default' => 'full-width'
            ),
            array(
                'title' => esc_html__('Archive Page Layout', 'r-energy'),
                'subtitle' => esc_html__('Choose the archive page layout.', 'r-energy'),
                'id' => 'archive_layout',
                'type' => 'image_select',
                'options' => array(
                    'left-sidebar' => array(
                        'alt' => 'Left Sidebar',
                        'img' => get_template_directory_uri() . '/inc/theme-options/img/2cl.png'
                    ),
                    'full-width' => array(
                        'alt' => 'Full Width',
                        'img' => get_template_directory_uri() . '/inc/theme-options/img/1col.png'
                    ),
                    'right-sidebar' => array(
                        'alt' => 'Right Sidebar',
                        'img' => get_template_directory_uri() . '/inc/theme-options/img/2cr.png'
                    )
                ),
                'default' => 'right-sidebar'
            )
    )));
    // SIDEBAR COLORS SUBSECTION
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Sidebar Customize', 'r-energy'),
        'desc' => esc_html__('These are main settings for general theme!', 'r-energy'),
        'id' => 'sidebarsgenaralsection',
        'subsection' => true,
        'icon' => 'el el-brush',
        'fields' => array(
            array(
                'title' => esc_html__('Sidebar Background', 'r-energy'),
                'id' => 'sdbr_bg',
                'type' => 'color',
                'mode' => 'background',
                'output' => array( '.nt-sidebar' )
            ),
            array(
                'id' => 'sdbr_brd',
                'type' => 'border',
                'title' => esc_html__('Sidebar Border', 'r-energy'),
                'output' => array( '.nt-sidebar' ),
                'all' => false
            ),
            array(
                'title' => esc_html__('Sidebar Padding', 'r-energy'),
                'id' => 'sdbr_pad',
                'type' => 'spacing',
                'mode' => 'padding',
                'all' => false,
                'units' => array( 'em', 'px', '%' ),
                'units_extended' => 'true',
                'output' => array( '.nt-sidebar' ),
                'default' => array(
                    'margin-top' => '',
                    'margin-right' => '',
                    'margin-bottom' => '',
                    'margin-left' => ''
                )
            ),
            array(
                'title' => esc_html__('Sidebar Margin', 'r-energy'),
                'id' => 'sdbr_mar',
                'type' => 'spacing',
                'mode' => 'margin',
                'all' => false,
                'units' => array( 'em', 'px', '%' ),
                'units_extended' => 'true',
                'output' => array( '.nt-sidebar' ),
                'default' => array(
                    'margin-top' => '',
                    'margin-right' => '',
                    'margin-bottom' => '',
                    'margin-left' => ''
                )
            ),
    )));
    // SIDEBAR WIDGET COLORS SUBSECTION
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Widget Customize', 'r-energy'),
        'desc' => esc_html__('These are main settings for general theme!', 'r-energy'),
        'id' => 'sidebarwidgetsection',
        'subsection' => true,
        'icon' => 'el el-brush',
        'fields' => array(
            array(
                'title' => esc_html__('Sidebar Widgets Background Color', 'r-energy'),
                'id' => 'sdbr_w_bg',
                'type' => 'color',
                'mode' => 'background',
                'output' => array( '.nt-sidebar .nt-sidebar-inner-widget' )
            ),
            array(
                'title' => esc_html__('Widgets Border', 'r-energy'),
                'id' => 'sdbr_w_brd',
                'type' => 'border',
                'output' => array( '.nt-sidebar .nt-sidebar-inner-widget' ),
                'all' => false
            ),
            array(
                'title' => esc_html__('Widget Title Color', 'r-energy'),
                'desc' => esc_html__('Set your own colors for the widgets.', 'r-energy'),
                'id' => 'sdbr_wt',
                'type' => 'color',
                'output' => array( '#nt-sidebar .widget-title' )
            ),
            array(
                'title' => esc_html__('Widget Text Color', 'r-energy'),
                'desc' => esc_html__('Set your own colors for the widgets.', 'r-energy'),
                'id' => 'sdbr_wp',
                'type' => 'color',
                'output' => array( '.nt-sidebar .nt-sidebar-inner-widget, .nt-sidebar .nt-sidebar-inner-widget p' )
            ),
            array(
                'title' => esc_html__('Widget Link Color', 'r-energy'),
                'desc' => esc_html__('Set your own colors for the widgets.', 'r-energy'),
                'id' => 'sdbr_a',
                'type' => 'color',
                'output' => array( '.nt-sidebar .nt-sidebar-inner-widget a' )
            ),
            array(
                'title' => esc_html__('Widget Hover Link Color', 'r-energy'),
                'desc' => esc_html__('Set your own hover colors for the widgets.', 'r-energy'),
                'id' => 'sdbr_hvr_a',
                'type' => 'color',
                'output' => array( '.nt-sidebar .nt-sidebar-inner-widget a:hover' )
            ),
            array(
                'title' => esc_html__('Widget Padding', 'r-energy'),
                'id' => 'sdbr_w_pad',
                'type' => 'spacing',
                'mode' => 'padding',
                'all' => false,
                'units' => array( 'em', 'px', '%' ),
                'units_extended' => 'true',
                'output' => array( '.nt-sidebar .nt-sidebar-inner-widget' ),
                'default' => array(
                    'margin-top' => '',
                    'margin-right' => '',
                    'margin-bottom' => '',
                    'margin-left' => ''
                )
            ),
            array(
                'title' => esc_html__('Widget Margin', 'r-energy'),
                'id' => 'sdbr_w_mar',
                'type' => 'spacing',
                'mode' => 'margin',
                'all' => false,
                'units' => array( 'em', 'px', '%' ),
                'units_extended' => 'true',
                'output' => array( '.nt-sidebar .nt-sidebar-inner-widget' ),
                'default' => array(
                    'margin-top' => '',
                    'margin-right' => '',
                    'margin-bottom' => '',
                    'margin-left' => ''
                )
            )
    )));

    /*************************************************
    ## BLOG PAGE SECTION
    *************************************************/
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Blog Page', 'r-energy'),
        'id' => 'blogsection',
        'icon' => 'el el-home',
    ));
    // BLOG HERO SUBSECTION
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Blog Hero', 'r-energy'),
        'desc' => esc_html__('These are blog index page hero text settings!', 'r-energy'),
        'id' => 'blogherosubsection',
        'subsection' => true,
        'icon' => 'el el-brush',
        'fields' => array(
            array(
                'title' => esc_html__('Blog Hero Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site blog index page hero section with switch option.', 'r-energy'),
                'id' => 'blog_hero_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Blog Hero Background', 'r-energy'),
                'id' => 'blog_hero_bg',
                'type' => 'background',
                'preview' => true,
                'preview_media' => true,
                'default' => array(
                    'background-position' => '50% 50%'
                ),
                'required' => array( 'blog_hero_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Blog Title', 'r-energy'),
                'subtitle' => esc_html__('Add your blog index page title here.', 'r-energy'),
                'id' => 'blog_title',
                'type' => 'text',
                'default' => 'BLOG',
                'required' => array( 'blog_hero_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Blog Title Typography', 'r-energy'),
                'id' => 'blog_title_typo',
                'type' => 'typography',
                'font-backup' => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'all_styles' => true,
                'output' => array( '#nt-index .nt-hero-title' ),
                'default' => array(
                    'color' => '',
                    'font-style' => '',
                    'font-family' => '',
                    'google' => true,
                    'font-size' => '',
                    'line-height' => ''
                ),
                'required' => array( 'blog_hero_visibility', '=', '1' ),
            ),
            array(
                'title' => esc_html__('Blog Site Title', 'r-energy'),
                'subtitle' => esc_html__('Add your blog index page site title here.', 'r-energy'),
                'id' => 'blog_site_title',
                'type' => 'textarea',
                'default' => get_bloginfo('name'),
                'required' => array( 'blog_hero_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Blog Site Title Typography', 'r-energy'),
                'id' => 'blog_site_title_typo',
                'type' => 'typography',
                'font-backup' => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'all_styles' => true,
                'output' => array( '#nt-index .nt-hero-subtitle' ),
                'default' => array(
                    'color' => '',
                    'font-style' => '',
                    'font-family' => '',
                    'google' => true,
                    'font-size' => '',
                    'line-height' => ''
                ),
                'required' => array( 'blog_hero_visibility', '=', '1' )
            )
    )));
    // BLOG LAYOUT AND POST COLUMN STYLE
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Blog Content', 'r-energy'),
        'id' => 'blogcontentsubsection',
        'subsection' => true,
        'icon' => 'el el-brush',
        'fields' => array(
            array(
                'title' => esc_html__('Blog page type', 'r-energy'),
                'subtitle' => esc_html__('Select blog page layout type.', 'r-energy'),
                'id' => 'index_type',
                'type' => 'select',
                'customizer' => true,
                'options' => array(
                    '' => esc_html__('Select type', 'r-energy'),
                    'default' => esc_html__('default', 'r-energy'),
                    'masonry' => esc_html__('masonry', 'r-energy'),
                ),
                'default' => 'masonry'
            ),
            array(
                'title' => esc_html__('Blog page masonry column width', 'r-energy'),
                'subtitle' => esc_html__('Select a column number.', 'r-energy'),
                'id' => 'index_masonry_column',
                'type' => 'select',
                'customizer' => true,
                'options' => array(
                    '' => esc_html__('Select type', 'r-energy'),
                    'col-lg-6' => esc_html__('2 column', 'r-energy'),
                    'col-lg-4' => esc_html__('3 column', 'r-energy')
                ),
                'default' => 'col-lg-6',
                'required' => array( 'index_type', '=', 'masonry' )
            ),
            array(
                'title' => esc_html__('Blog Post Title Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site blog index page post title with switch option.', 'r-energy'),
                'id' => 'post_title_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Blog Post Meta Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site blog index page post meta with switch option.', 'r-energy'),
                'id' => 'post_meta_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Blog Post Category Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site blog index page post category with switch option.', 'r-energy'),
                'id' => 'post_category_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Blog Post Author Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site blog index page post author with switch option.', 'r-energy'),
                'id' => 'post_author_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Blog Post Date Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site blog index page post date with switch option.', 'r-energy'),
                'id' => 'post_date_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off',
                'required' => array( 'post_meta', '=', '1' )
            ),
            array(
                'title' => esc_html__('Blog Post Comments Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site blog index page post comments with switch option.', 'r-energy'),
                'id' => 'post_comments_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off',
                'required' => array( 'post_meta', '=', '1' )
            ),
            array(
                'title' => esc_html__('Blog Post Excerpt Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site blog index page post meta with switch option.', 'r-energy'),
                'id' => 'post_excerpt_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Post Excerpt Size (max word count)', 'r-energy'),
                'subtitle' => esc_html__('You can control blog post excerpt size with this option.', 'r-energy'),
                'id' => 'excerptsz',
                'type' => 'slider',
                'default' => 30,
                'min' => 0,
                'step' => 1,
                'max' => 100,
                'display_value' => 'text',
                'required' => array( 'post_excerpt_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Blog Post Button Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site blog index page post read more button wityh switch option.', 'r-energy'),
                'id' => 'post_button_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Blog Post Button Title', 'r-energy'),
                'subtitle' => esc_html__('Add your blog post read more button title here.', 'r-energy'),
                'id' => 'post_button_title',
                'type' => 'text',
                'default' => esc_html__('Read More', 'r-energy'),
                'required' => array( 'post_button_visibility', '=', '1' )
            )
    )));

    /*************************************************
    ## SINGLE PAGE SECTION
    *************************************************/
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Single Page', 'r-energy'),
        'id' => 'singlesection',
        'icon' => 'el el-home-alt',
    ));
    // SINGLE HERO SUBSECTION
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Single Hero', 'r-energy'),
        'desc' => esc_html__('These are single page hero section settings!', 'r-energy'),
        'id' => 'singleherosubsection',
        'subsection' => true,
        'icon' => 'el el-brush',
        'fields' => array(
            array(
                'title' => esc_html__('Single Hero display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site single page hero section with switch option.', 'r-energy'),
                'id' => 'single_hero_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off',
            ),
            array(
                'title' => esc_html__('Single Hero Background', 'r-energy'),
                'id' => 'single_hero_bg',
                'type' => 'background',
                'required' => array( 'single_hero_visibility', '=', '1' ),
            ),
            array(
                'title' => esc_html__('Single Title Typography', 'r-energy'),
                'id' => 'single_title_typo',
                'type' => 'typography',
                'font-backup' => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'all_styles' => true,
                'output' => array( '#nt-single .nt-hero-title' ),
                'units' => 'px',
                'default' => array(
                    'color' => '',
                    'font-style' => '',
                    'font-family' => '',
                    'google' => true,
                    'font-size' => '',
                    'line-height' => ''
                ),
                'required' => array( 'single_hero_visibility', '=', '1' ),
            ),
            array(
                'title' => esc_html__('Single Site Title', 'r-energy'),
                'subtitle' => esc_html__('Add your single page site title here.', 'r-energy'),
                'id' => 'single_site_title',
                'type' => 'textarea',
                'default' => get_bloginfo('name'),
                'required' => array( 'single_hero_visibility', '=', '1' ),
            ),
            array(
                'title' => esc_html__('Single Site Title Typography', 'r-energy'),
                'id' => 'single_site_title_typo',
                'type' => 'typography',
                'font-backup' => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'all_styles' => true,
                'output' => array( '#nt-single .nt-hero-subtitle' ),
                'default' => array(
                    'color' => '',
                    'font-style' => '',
                    'font-family' => '',
                    'google' => true,
                    'font-size' => '',
                    'line-height' => ''
                ),
                'required' => array( 'single_hero_visibility', '=', '1' ),
            )
    )));
    // SINGLE CONTENT SUBSECTION
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Single Content', 'r-energy'),
        'id' => 'singlecontentsubsection',
        'subsection' => true,
        'icon' => 'el el-brush',
        'fields' => array(
            array(
                'title' => esc_html__('Single Post Tags Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site single page post meta tags with switch option.', 'r-energy'),
                'id' => 'single_postmeta_tags_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Single Post Authorbox', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site single page post authorbox with switch option.', 'r-energy'),
                'id' => 'single_post_author_box_visibility',
                'type' => 'switch',
                'default' => 0,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Single Post Pagination Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site single page post next and prev pagination with switch option.', 'r-energy'),
                'id' => 'single_navigation_visibility',
                'type' => 'switch',
                'default' => 0,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Single Related Post Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site single page related post with switch option.', 'r-energy'),
                'id' => 'single_related_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Single Related Post Count', 'r-energy'),
                'subtitle' => esc_html__('You can control related post count with this option.', 'r-energy'),
                'id' => 'related_perpage',
                'type' => 'slider',
                'default' => 3,
                'min' => 1,
                'step' => 1,
                'max' => 24,
                'display_value' => 'text',
                'required' => array( 'single_related_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Related Section Title', 'r-energy'),
                'subtitle' => esc_html__('Add your single page related post section title here.', 'r-energy'),
                'id' => 'related_title',
                'type' => 'text',
                'default' => esc_html__('You May Also Like', 'r-energy'),
                'required' => array( 'single_related_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Post Related Excerpt Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site single post excerpt with switch option.', 'r-energy'),
                'id' => 'related_excerpt_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Post Related Excerpt Size (max word count)', 'r-energy'),
                'subtitle' => esc_html__('You can control blog post related excerpt size with this option.', 'r-energy'),
                'id' => 'related_excerptsz',
                'type' => 'slider',
                'default' => 40,
                'min' => 0,
                'step' => 1,
                'max' => 100,
                'display_value' => 'text',
                'required' => array( 'post_excerpt_visibility', '=', '1' )
            ),
    )));
    /*************************************************
    ## ARCHIVE PAGE SECTION
    *************************************************/
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Archive Page', 'r-energy'),
        'id' => 'archivesection',
        'icon' => 'el el-folder-open',
    ));
    // ARCHIVE PAGE SECTION
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Archive Hero', 'r-energy'),
        'desc' => esc_html__('These are archive page hero settings!', 'r-energy'),
        'id' => 'archiveherosubsection',
        'subsection' => true,
        'icon' => 'el el-brush',
        'fields' => array(
            array(
                'title' => esc_html__('Archive Hero display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site archive page hero section with switch option.', 'r-energy'),
                'id' => 'archive_hero_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off',
            ),
            array(
                'title' => esc_html__('Archive Hero Background', 'r-energy'),
                'id' => 'archive_hero_bg',
                'type' => 'background',
                'required' => array( 'archive_hero_visibility', '=', '1' ),
            ),
            array(
                'title' => esc_html__('Custom Archive Title', 'r-energy'),
                'subtitle' => esc_html__('Add your custom archive page title here.', 'r-energy'),
                'id' => 'archive_title',
                'type' => 'text',
                'default' => esc_html__('ARCHIVE', 'r-energy'),
                'required' => array( 'archive_hero', '=', '1' ),
            ),
            array(
                'title' => esc_html__('Archive Title Typography', 'r-energy'),
                'id' => 'archive_title_typo',
                'type' => 'typography',
                'font-backup' => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'all_styles' => true,
                'output' => array( '#nt-archive .nt-hero-title' ),
                'default' => array(
                    'color' => '',
                    'font-style' => '',
                    'font-family' => '',
                    'google' => true,
                    'font-size' => '',
                    'line-height' => ''
                ),
                'required' => array( 'archive_hero_visibility', '=', '1' ),
            ),
            array(
                'title' => esc_html__('Archive Site Title', 'r-energy'),
                'subtitle' => esc_html__('Add your archive page site title here.', 'r-energy'),
                'id' => 'archive_site_title',
                'type' => 'textarea',
                'default' => get_bloginfo('name'),
                'required' => array( 'archive_hero_visibility', '=', '1' ),
            ),
            array(
                'title' => esc_html__('Archive Site Title Typography', 'r-energy'),
                'id' => 'archive_site_title_typo',
                'type' => 'typography',
                'font-backup' => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'all_styles' => true,
                'output' => array( '#nt-archive .nt-hero-subtitle' ),
                'default' => array(
                    'color' => '',
                    'font-style' => '',
                    'font-family' => '',
                    'google' => true,
                    'font-size' => '',
                    'line-height' => ''
                ),
                'required' => array( 'archive_hero_visibility', '=', '1' ),
            )
    )));
    /*************************************************
    ## 404 PAGE SECTION
    *************************************************/
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('404 Page', 'r-energy'),
        'id' => 'errorsection',
        'icon' => 'el el-error',
        'fields' => array(
            array(
                'title' => esc_html__('404 Background', 'r-energy'),
                'id' => 'error_content_bg_img',
                'type' => 'background',
                'output' => array( '#nt-404.nt-404' ),
            ),
            array(
                'title' => esc_html__('Content Title Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site 404 page content title with switch option.', 'r-energy'),
                'id' => 'error_content_title_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off',
            ),
            array(
                'title' => esc_html__('Content Title', 'r-energy'),
                'subtitle' => esc_html__('Add your 404 page content title here.', 'r-energy'),
                'id' => 'error_content_title',
                'type' => 'textarea',
                'default' => '<span>Someting</span> <span>Went Wrong</span>',
                'required' => array( 'error_content_title_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Title Typography', 'r-energy'),
                'id' => 'error_content_title_typo',
                'type' => 'typography',
                'font-backup' => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'all_styles' => true,
                'output' => array( '#nt-404 .heading .subtitle' ),
                'default' => array(
                    'color' => '',
                    'font-style' => '',
                    'font-family' => '',
                    'google' => true,
                    'font-size' => '',
                    'line-height' => ''
                ),
                'required' => array( 'error_content_title_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Content Description Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site 404 page content description with switch option.', 'r-energy'),
                'id' => 'error_content_desc_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Content Description', 'r-energy'),
                'subtitle' => esc_html__('Add your 404 page content description here.', 'r-energy'),
                'id' => 'error_content_desc',
                'type' => 'textarea',
                'default' => 'The page not found',
                'required' => array( 'error_content_desc_visibility', '=', '1' )
            ),
            array(
                'title' =>esc_html__('Description Typography', 'r-energy'),
                'id' => 'error_page_content_desc_typo',
                'type' => 'typography',
                'font-backup' => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'all_styles' => true,
                'output' => array( '#nt-404 .error-desc' ),
                'default' => array(
                    'color' =>'',
                    'font-style' => '',
                    'font-family' => '',
                    'google' => true,
                    'font-size' => '',
                    'line-height' => ''
                ),
                'required' => array( 'error_content_desc_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Button Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site 404 page content back to home button with switch option.', 'r-energy'),
                'id' => 'error_content_btn_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Button Title', 'r-energy'),
                'subtitle' => esc_html__('Add your 404 page content back to home button title here.', 'r-energy'),
                'id' => 'error_content_btn_title',
                'type' => 'text',
                'default' => 'Home Page',
                'required' => array( 'error_content_btn_visibility', '=', '1' )
            ),
    )));
    /*************************************************
    ## SEARCH PAGE SECTION
    *************************************************/
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Search Page', 'r-energy'),
        'id' => 'searchsection',
        'icon' => 'el el-search',
    ));
    //SEARCH PAGE SECTION
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Search Hero', 'r-energy'),
        'id' => 'searchherosubsection',
        'desc' => esc_html__('These are main settings for general theme!', 'r-energy'),
        'icon' => 'el el-search',
        'subsection' => true,
        'fields' => array(
            array(
                'title' => esc_html__('Search Hero display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site search page hero section with switch option.', 'r-energy'),
                'id' => 'search_hero_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Search Hero Background', 'r-energy'),
                'id' =>'search_hero_bg',
                'type' => 'background',
                'output' => array( '#nt-search .hero-container' ),
                'required' => array( 'search_hero_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Search Title', 'r-energy'),
                'subtitle' => esc_html__('Add your search page title here.', 'r-energy'),
                'id' => 'search_title',
                'type' => 'text',
                'default' => esc_html__('Search results for :', 'r-energy'),
                'required' => array( 'search_hero_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Search Title Typography', 'r-energy'),
                'id' => 'search_title_typo',
                'type' => 'typography',
                'font-backup' => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'all_styles' => true,
                'output' => array( '#nt-search .nt-hero-title' ),
                'default' => array(
                    'color' => '',
                    'font-style' => '',
                    'font-family' => '',
                    'google' => true,
                    'font-size' => '',
                    'line-height' => ''
                ),
                'required' => array( 'search_hero_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Search Site Title', 'r-energy'),
                'subtitle' => esc_html__('Add your search page site title here.', 'r-energy'),
                'id' => 'search_site_title',
                'type' => 'textarea',
                'default' => get_bloginfo('name'),
                'required' => array( 'search_hero_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Search Site Title Typography', 'r-energy'),
                'id' => 'search_site_title_typo',
                'type' => 'typography',
                'font-backup' => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'all_styles' => true,
                'output' => array( '#nt-search .nt-hero-subtitle' ),
                'default' => array(
                    'color' => '',
                    'font-style' => '',
                    'font-family' => '',
                    'google' => true,
                    'font-size' => '',
                    'line-height' => ''
                ),
                'required' => array( 'search_hero_visibility', '=', '1' )
            )
    )));
    //FOOTER SECTION
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Footer', 'r-energy'),
        'desc' => esc_html__('These are main settings for general theme!', 'r-energy'),
        'id' => 'footersection',
        'icon' => 'el el-photo',
        'fields' => array(
            array(
                'title' => esc_html__('Footer Section Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the site footer section on the site with switch option.', 'r-energy'),
                'id' => 'footer_copyright_visibility',
                'type' => 'switch',
                'default' => 1,
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'title' => esc_html__('Footer Type', 'r-energy'),
                'subtitle' => esc_html__('Select your footer type.', 'r-energy'),
                'id' => 'footer_type',
                'type' => 'select',
                'customizer' => true,
                'options' => array(
                    'default' => esc_html__('Deafult Site Footer', 'r-energy'),
                    'elementor' => esc_html__('Elementor Templates', 'r-energy'),
                    'custom' => esc_html__('Custom Footer', 'r-energy'),
                ),
                'default' => 'default',
                'required' => array( 'footer_copyright_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Elementor Templates', 'r-energy'),
                'subtitle' => esc_html__('Select a template from elementor templates.', 'r-energy'),
                'id' => 'footer_elementor_templates',
                'type' => 'select',
                'customizer' => true,
                'options' => r_energy_get_elementorTemplates(),
                'required' => array(
                    array( 'footer_copyright_visibility', '=', '1' ),
                    array( 'footer_type', '=', 'elementor' )
                ),
            ),
            array(
                'title' => esc_html__('Create your custom footer', 'r-energy'),
                'subtitle' => esc_html__('HTML allowed (wp_kses)', 'r-energy'),
                'id' => 'custom_footer',
                'type' => 'textarea',
                'validate' => 'html',
                'placeholder' => esc_html__('Enter your custom footer here. Html can be entered in this field.', 'r-energy'),
                'required' => array(
                    array( 'footer_copyright_visibility', '=', '1' ),
                    array( 'footer_type', '=', 'custom' )
                ),
            ),
            array(
                'title' => esc_html__('Copyright Text', 'r-energy'),
                'subtitle' => esc_html__('HTML allowed (wp_kses)', 'r-energy'),
                'desc' => esc_html__('Enter your site copyright here.', 'r-energy'),
                'id' => 'footer_copyright',
                'type' => 'textarea',
                'validate' => 'html',
                'default' => '<i class="fa fa-copyright"></i> Copyrights by <a class="__dev" href="https://ninetheme.com/contact/" target="_blank">Ninetheme</a>',
                'required' => array(
                    array( 'footer_copyright_visibility', '=', '1' ),
                    array( 'footer_type', '=', 'default' )
                ),
            ),
            array(
                'title' => esc_html__('Footer Links', 'r-energy'),
                'subtitle' => esc_html__('HTML allowed (wp_kses)', 'r-energy'),
                'desc' => esc_html__('Enter your site copyright here.', 'r-energy'),
                'id' => 'footer_link',
                'type' => 'textarea',
                'validate' => 'html',
                'default' => '',
                'required' => array(
                    array( 'footer_copyright_visibility', '=', '1' ),
                    array( 'footer_type', '=', 'default' )
                ),
            ),
            array(
                'title' => esc_html__('Socials', 'r-energy'),
                'subtitle' => esc_html__('Create socials link', 'r-energy'),
                'id' => 'footer_social',
                'type' => 'nt_multi_field',
                'add_text' => esc_html__('Add Social', 'r-energy'),
                'add_number' => 1,
                'class' => 'block',
                'placeholder'=> array(
                    'fontawesome icon name',
                    'social URL'
                ),
                'show_empty'=> false,
                'required' => array(
                    array( 'footer_copyright_visibility', '=', '1' ),
                    array( 'footer_type', '=', 'default' )
                ),
            ),
            array(
                'id' =>'footer_color_customize',
                'type' => 'info',
                'icon' => 'el el-brush',
                'customizer' => false,
                'desc' => sprintf(esc_html__('%s', 'r-energy'), '<h2>Footer Color Customize</h2>'),
                'required' => array(
                    array( 'footer_copyright_visibility', '=', '1' ),
                    array( 'footer_type', '=', 'default' )
                )
            ),
            array(
                'title' => esc_html__('Copyright Text Color', 'r-energy'),
                'desc' => esc_html__('Set your own colors for the copyright.', 'r-energy'),
                'id' => 'footer_copy_clr',
                'type' => 'color',
                'transparent' => false,
                'output' => array( '#nt-footer.footer .copyright, #nt-footer.footer .copyright p' ),
                'required' => array(
                    array( 'footer_copyright_visibility', '=', '1' ),
                    array( 'footer_type', '=', 'default' )
                )
            ),
            array(
                'title' => esc_html__('Link Color', 'r-energy'),
                'desc' => esc_html__('Set your own colors for the copyright.', 'r-energy'),
                'id' => 'footer_link_clr',
                'type' => 'color',
                'transparent' => false,
                'output' => array( '#nt-footer.footer .privacy-block a' ),
                'required' => array(
                    array( 'footer_copyright_visibility', '=', '1' ),
                    array( 'footer_type', '=', 'default' )
                )
            ),
            array(
                'title' => esc_html__('Link Color ( Hover )', 'r-energy'),
                'desc' => esc_html__('Set your own colors for the copyright.', 'r-energy'),
                'id' => 'footer_link_hvr_clr',
                'type' => 'color',
                'transparent' => false,
                'output' => array( '#nt-footer.footer .privacy-block a:hover' ),
                'required' => array(
                    array( 'footer_copyright_visibility', '=', '1' ),
                    array( 'footer_type', '=', 'default' )
                )
            ),
            array(
                'title' => esc_html__('Social Icon Color', 'r-energy'),
                'desc' => esc_html__('Set your own colors for the copyright.', 'r-energy'),
                'id' => 'social_clr',
                'type' => 'color',
                'transparent' => false,
                'output' => array( '#nt-footer.footer .socials-primary a' ),
                'required' => array(
                    array( 'footer_copyright_visibility', '=', '1' ),
                    array( 'footer_type', '=', 'default' )
                )
            ),
            array(
                'title' => esc_html__('Social Icon Color (Hover)', 'r-energy'),
                'desc' => esc_html__('Set your own colors for the copyright.', 'r-energy'),
                'id' => 'social_hvr_clr',
                'type' => 'color',
                'transparent' => false,
                'output' => array( '#nt-footer.footer .socials-primary a:hover' ),
                'required' => array(
                    array( 'footer_copyright_visibility', '=', '1' ),
                    array( 'footer_type', '=', 'default' )
                )
            ),
            array(
                'title' => esc_html__('Footer Padding', 'r-energy'),
                'subtitle' => esc_html__('You can set the top spacing of the site main footer.', 'r-energy'),
                'id' => 'footer_pad',
                'type' => 'spacing',
                'output' => array('#nt-footer.footer'),
                'mode' => 'padding',
                'units' => array('em', 'px'),
                'units_extended' => 'false',
                'default' => array(
                    'padding-top' => '',
                    'padding-right' => '',
                    'padding-bottom' => '',
                    'padding-left' => '',
                    'units' => 'px'
                ),
                'required' => array(
                    array( 'footer_copyright_visibility', '=', '1' ),
                    array( 'footer_type', '!=', 'elementor' )
                )
            ),
            array(
                'title' => esc_html__('Footer Background Color', 'r-energy'),
                'desc' => esc_html__('Set your own colors for the footer.', 'r-energy'),
                'id' => 'footer_bg_clr',
                'type' => 'color',
                'mode' => 'background-color',
                'output' => array( '#nt-footer.footer' ),
                'required' => array(
                    array( 'footer_copyright_visibility', '=', '1' ),
                    array( 'footer_type', '!=', 'elementor' )
                )
            ),
            //information on-off
            array(
                'id' =>'info_f0',
                'type' => 'info',
                'style' => 'success',
                'title' => esc_html__('Success!', 'r-energy'),
                'icon' => 'el el-info-circle',
                'customizer' => false,
                'desc' => sprintf(esc_html__('%s section is disabled on the site.', 'r-energy'), '<b>Site Main Footer</b>'),
                'required' => array( 'footer_copyright_visibility', '=', '0' )
            )
    )));

    //FOOTER WIDGETIZE SUBSECTION
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Footer Widget Area', 'r-energy'),
        'id' => 'footerwidgetizesection',
        'icon' => 'el el-th-large',
        'fields' => array(
            array(
                'title' => esc_html__('Footer Widget Area Section Display', 'r-energy'),
                'subtitle' => esc_html__('You can enable or disable the footer widget area with one option.', 'r-energy'),
                'id' => 'footer_widgetize_visibility',
                'type' => 'switch',
                'default' => 0,
                'on' => 'On',
                'off' => 'Off'
            ),
            //information on-off
            array(
                'id' =>'info_fw0',
                'type' => 'info',
                'style' => 'success',
                'title' => esc_html__('Success!', 'r-energy'),
                'icon' => 'el el-info-circle',
                'customizer' => false,
                'desc' => sprintf(esc_html__('%s section is disabled on the site. Please activate to view subsection options.', 'r-energy'), '<b>Footer Widget Area</b>'),
                'required' => array( 'footer_widgetize_visibility', '=', '0' )
            ),
    )));

    //FOOTER WIDGETIZE COLOR SUBSECTION
    Redux::setSection($r_energy_pre, array(
        'title' => esc_html__('Widget Area Customize', 'r-energy'),
        'id' => 'widgetcustomizesubsection',
        'subsection' => true,
        'customizer_width' => '400px',
        'icon' => 'el el-brush',
        'fields' => array(
            array(
                'title' => esc_html__('Footer Widget Area Background', 'r-energy'),
                'id' => 'fw_bg',
                'type' => 'background',
                'output' => array( '.nt-footer-sidebar' ),
                'required' => array( 'footer_widgetize_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Widget Title Colors', 'r-energy'),
                'desc' => esc_html__('Set your own color for the widgets title.', 'r-energy'),
                'id' => 'fw_w',
                'type' => 'color',
                'output' => array( '.nt-footer-sidebar .nt-footer-widget-title' ),
                'required' => array( 'footer_widgetize_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Widget Link Color', 'r-energy'),
                'desc' => esc_html__('Set your own color for the widgets link.', 'r-energy'),
                'id' => 'fw_wa',
                'type' => 'color',
                'output' => array( '.#footer.nt-footer-sidebar ul li a' ),
                'required' => array( 'footer_widgetize_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Widget Hover Link Color', 'r-energy'),
                'desc' => esc_html__('Set your own hover colors for the widgets link.', 'r-energy'),
                'id' => 'fw_wa',
                'type' => 'color',
                'output' => array( '.#footer.nt-footer-sidebar ul li a:hover' ),
                'required' => array( 'footer_widgetize_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Widget Text Color', 'r-energy'),
                'desc' => esc_html__('Set your own colors for the widgets.', 'r-energy'),
                'id' => 'fw_wp',
                'type' => 'color',
                'output' => array( '.nt-footer-sidebar, .nt-footer-sidebar p' ),
                'required' => array( 'footer_widgetize_visibility', '=', '1' )
            ),
            array(
                'title' => esc_html__('Widget Area Padding', 'r-energy'),
                'subtitle' => esc_html__('You can set the top spacing of the widget area.', 'r-energy'),
                'id' => 'fw_pad',
                'type' => 'spacing',
                'output' => array('.nt-footer-sidebar.footer-widget-area'),
                'mode' => 'padding',
                'units' => array('em', 'px'),
                'units_extended' => 'false',
                'default' => array(
                    'padding-top' => '',
                    'padding-right' => '',
                    'padding-bottom' => '',
                    'padding-left' => '',
                    'units' => 'px'
                ),
                'required' => array( 'footer_widgetize_visibility', '=', '1' )
            ),
            //information on-off
            array(
                'id' =>'info_fw2',
                'type' => 'info',
                'style' => 'success',
                'title' => esc_html__('Information!', 'r-energy'),
                'icon' => 'el el-info-circle',
                'customizer' => false,
                'desc' => sprintf(esc_html__('This section options are disabled by the %s Section. Please activate to view options.', 'r-energy'), '<b>Footer Widget Area</b>'),
                'required' => array( 'footer_widgetize_visibility', '=', '0' )
            )
    )));
    Redux::setSection($r_energy_pre, array(
        'id' => 'inportexport_settings',
        'title' => esc_html__('Import / Export', 'r-energy'),
        'desc' => esc_html__('Import and Export your Theme Options from text or URL.', 'r-energy'),
        'icon' => 'fa fa-download',
        'fields' => array(
            array(
                'id' => 'opt-import-export',
                'type' => 'import_export',
                'title' => '',
                'customizer' => false,
                'subtitle' => '',
                'full_width' => true
            )
    )));
    Redux::setSection($r_energy_pre, array(
    'id' => 'nt_support_settings',
    'title' => esc_html__('Support', 'r-energy'),
    'icon' => 'el el-idea',
    'fields' => array(
        array(
            'id' => 'doc',
            'type' => 'raw',
            'markdown' => true,
            'class' => 'theme_support',
            'content' => '<div class="support-section">
            <h5>'.esc_html__('WE RECOMMEND YOU READ IT BEFORE YOU START', 'r-energy').'</h5>
            <h2><i class="el el-website"></i> '.esc_html__('DOCUMENTATION', 'r-energy').'</h2>
            <a target="_blank" class="button" href="https://ninetheme.com/documentations/">'.esc_html__('READ MORE', 'r-energy').'</a>
            </div>'
        ),
        array(
            'id' => 'support',
            'type' => 'raw',
            'markdown' => true,
            'class' => 'theme_support',
            'content' => '<div class="support-section">
            <h5>'.esc_html__('DO YOU NEED HELP?', 'r-energy').'</h5>
            <h2><i class="el el-adult"></i> '.esc_html__('SUPPORT CENTER', 'r-energy').'</h2>
            <a target="_blank" class="button" href="https://ninetheme.com/contact/">'.esc_html__('GET SUPPORT', 'r-energy').'</a>
            </div>'
        ),
        array(
            'id' => 'portfolio',
            'type' => 'raw',
            'markdown' => true,
            'class' => 'theme_support',
            'content' => '<div class="support-section">
            <h5>'.esc_html__('SEE MORE THE NINETHEME WORDPRESS THEMES', 'r-energy').'</h5>
            <h2><i class="el el-picture"></i> '.esc_html__('NINETHEME PORTFOLIO', 'r-energy').'</h2>
            <a target="_blank" class="button" href="https://ninetheme.com/wordpress-themes/">'.esc_html__('SEE MORE', 'r-energy').'</a>
            </div>'
        ),
        array(
            'id' => 'like',
            'type' => 'raw',
            'markdown' => true,
            'class' => 'theme_support',
            'content' => '<div class="support-section">
            <h5>'.esc_html__('WOULD YOU LIKE TO REWARD OUR EFFORT?', 'r-energy').'</h5>
            <h2><i class="el el-thumbs-up"></i> '.esc_html__('PLEASE RATE US!', 'r-energy').'</h2>
            <a target="_blank" class="button" href="https://themeforest.net/downloads/">'.esc_html__('GET STARS', 'r-energy').'</a>
            </div>'
        )
    )));
    /*
     * <--- END SECTIONS
     */


    /** Action hook examples **/

    function r_energy_remove_demo()
    {
        // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
        if (class_exists('ReduxFrameworkPlugin')) {
            // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
            remove_action('admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ));
        }
    }
    include get_template_directory() . '/inc/theme-options/redux-extensions/loader.php';
    function r_energy_newIconFont() {
        // Uncomment this to remove elusive icon from the panel completely
        // wp_deregister_style( 'redux-elusive-icon' );
        // wp_deregister_style( 'redux-elusive-icon-ie7' );
        wp_register_style(
            'redux-font-awesome',
            '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
            array(),
            time(),
            'all'
        );
        wp_enqueue_style( 'redux-font-awesome' );
    }
    add_action( 'redux/page/r_energy/enqueue', 'r_energy_newIconFont' );
