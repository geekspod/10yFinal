<?php
/**
* Merlin WP configuration file.
*
* @package   Merlin WP
* @version   @@pkg.version
* @link      https://merlinwp.com/
* @author    Rich Tabor, from ThemeBeans.com & the team at ProteusThemes.com
* @copyright Copyright (c) 2018, Merlin WP of Inventionn LLC
* @license   Licensed GPLv3 for Open Source Use
*/

if ( ! class_exists( 'Merlin' ) ) {
    return;
}

/**
* Set directory locations, text strings, and settings.
*/
$wizard = new Merlin(

    $config = array(
        'directory'            => 'inc/merlin', // Location / directory where Merlin WP is placed in your theme.
        'merlin_url'           => 'merlin', // The wp-admin page slug where Merlin WP loads.
        'parent_slug'          => 'themes.php', // The wp-admin parent page slug for the admin menu item.
        'capability'           => 'manage_options', // The capability required for this menu to be displayed to the user.
        'child_action_btn_url' => 'https://codex.wordpress.org/child_themes', // URL for the 'child-action-link'.
        'dev_mode'             => false, // Enable development mode for testing.
        'license_step'         => false, // EDD license activation step.
        'license_required'     => false, // Require the license activation step.
        'license_help_url'     => '', // URL for the 'license-tooltip'.
        'edd_remote_api_url'   => '', // EDD_Theme_Updater_Admin remote_api_url.
        'edd_item_name'        => '', // EDD_Theme_Updater_Admin item_name.
        'edd_theme_slug'       => '', // EDD_Theme_Updater_Admin item_slug.
        'ready_big_button_url' => site_url(), // Link for the big button on the ready step.
    ),
    $strings = array(
        'admin-menu'               => esc_html__( 'Theme Setup', 'r-energy' ),

        /* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
        'title%s%s%s%s'            => esc_html__( '%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'r-energy' ),
        'return-to-dashboard'      => esc_html__( 'Return to the dashboard', 'r-energy' ),
        'ignore'                   => esc_html__( 'Disable this wizard', 'r-energy' ),

        'btn-skip'                 => esc_html__( 'Skip', 'r-energy' ),
        'btn-next'                 => esc_html__( 'Next', 'r-energy' ),
        'btn-start'                => esc_html__( 'Start', 'r-energy' ),
        'btn-no'                   => esc_html__( 'Cancel', 'r-energy' ),
        'btn-plugins-install'      => esc_html__( 'Install', 'r-energy' ),
        'btn-child-install'        => esc_html__( 'Install', 'r-energy' ),
        'btn-content-install'      => esc_html__( 'Install', 'r-energy' ),
        'btn-import'               => esc_html__( 'Import', 'r-energy' ),
        'btn-license-activate'     => esc_html__( 'Activate', 'r-energy' ),
        'btn-license-skip'         => esc_html__( 'Later', 'r-energy' ),

        /* translators: Theme Name */
        'license-header%s'         => esc_html__( 'Activate %s', 'r-energy' ),
        /* translators: Theme Name */
        'license-header-success%s' => esc_html__( '%s is Activated', 'r-energy' ),
        /* translators: Theme Name */
        'license%s'                => esc_html__( 'Enter your license key to enable remote updates and theme support.', 'r-energy' ),
        'license-label'            => esc_html__( 'License key', 'r-energy' ),
        'license-success%s'        => esc_html__( 'The theme is already registered, so you can go to the next step!', 'r-energy' ),
        'license-json-success%s'   => esc_html__( 'Your theme is activated! Remote updates and theme support are enabled.', 'r-energy' ),
        'license-tooltip'          => esc_html__( 'Need help?', 'r-energy' ),

        /* translators: Theme Name */
        'welcome-header%s'         => esc_html__( 'Welcome to %s', 'r-energy' ),
        'welcome-header-success%s' => esc_html__( 'Hi. Welcome back', 'r-energy' ),
        'welcome%s'                => esc_html__( 'This wizard will set up your theme, install plugins, and import content. It is optional & should take only a few minutes.', 'r-energy' ),
        'welcome-success%s'        => esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'r-energy' ),

        'child-header'             => esc_html__( 'Install Child Theme', 'r-energy' ),
        'child-header-success'     => esc_html__( 'You\'re good to go!', 'r-energy' ),
        'child'                    => esc_html__( 'Let\'s build & activate a child theme so you may easily make theme changes.', 'r-energy' ),
        'child-success%s'          => esc_html__( 'Your child theme has already been installed and is now activated, if it wasn\'t already.', 'r-energy' ),
        'child-action-link'        => esc_html__( 'Learn about child themes', 'r-energy' ),
        'child-json-success%s'     => esc_html__( 'Awesome. Your child theme has already been installed and is now activated.', 'r-energy' ),
        'child-json-already%s'     => esc_html__( 'Awesome. Your child theme has been created and is now activated.', 'r-energy' ),

        'plugins-header'           => esc_html__( 'Install Plugins', 'r-energy' ),
        'plugins-header-success'   => esc_html__( 'You\'re up to speed!', 'r-energy' ),
        'plugins'                  => esc_html__( 'Let\'s install some essential WordPress plugins to get your site up to speed.', 'r-energy' ),
        'plugins-success%s'        => esc_html__( 'The required WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.', 'r-energy' ),
        'plugins-action-link'      => esc_html__( 'Advanced', 'r-energy' ),

        'import-header'            => esc_html__( 'Import Content', 'r-energy' ),
        'import'                   => esc_html__( 'Let\'s import content to your website, to help you get familiar with the theme.', 'r-energy' ),
        'import-action-link'       => esc_html__( 'Advanced', 'r-energy' ),

        'ready-header'             => esc_html__( 'All done. Have fun!', 'r-energy' ),

        /* translators: Theme Author */
        'ready%s'                  => esc_html__( 'Your theme has been all set up. Enjoy your new theme by %s.', 'r-energy' ),
        'ready-action-link'        => esc_html__( 'Extras', 'r-energy' ),
        'ready-big-button'         => esc_html__( 'View your website', 'r-energy' ),
        'ready-link-1'             => sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'customize.php' ), esc_html__( 'Start Customizing', 'r-energy' ) ),
    )
);
