<?php

$xbox->add_field(array(
    'id' => 'display-on-devices',
    'name' => __( 'Display popup on these devices', 'masterpopups' ),
    'type' => 'checkbox',
    'default' => array('desktop', 'tablet', 'mobile'),
    'items' => array(
        'desktop' => 'Desktop',
        'tablet' => 'Tablet',
        'mobile' => 'Mobile',
    ),
));

$xbox->add_field(array(
    'id' => 'display-for-users',
    'name' => __( 'Display popup for these users', 'masterpopups' ),
    'type' => 'checkbox',
    'default' => array('logged-in', 'not-logged-in'),
    'items' => array(
        'logged-in' => __( 'Logged-In Users', 'masterpopups' ),
        'not-logged-in' => __( 'Not Logged-In Users', 'masterpopups' ),
    ),
));

$xbox->add_field(array(
    'id' => 'display-by-post-content',
    'name' => __( 'Display popup if post content has a keyword', 'masterpopups' ),
    'type' => 'text',
    'desc' => __( 'Enter a keyword or a regular expression', 'masterpopups' ),
    'grid' => '2-of-8',
    'options' => array(
        'desc_tooltip' => false
    ),
    'sanitize_callback' => false,
));


$xbox->add_field(array(
    'type' => 'title',
    'name' => __( 'Display popup if there are URL parameters', 'masterpopups' )
));

$url_params = $xbox->add_group(array(
    'id' => 'display-by-url-parameters',
    'name' => __( 'URL Parameters', 'masterpopups' ),
    'options' => array(
        'sortable' => false,
    ),
    'controls' => array(
        'name' => 'URL Parameter',
        'readonly_name' => false,
        'left_actions' => array(
            'xbox-info-order-item' => '#',
            'xbox-sort-group-item' => '',
        ),
        'right_actions' => array(
            'xbox-duplicate-group-item' => '',
            'xbox-visibility-group-item' => '',
            //'xbox-remove-group-item' => '',
        ),
    ),
));
$url_params->open_mixed_field(array(
    'options' => array(
        'show_name' => false
    ),
));
$url_params->add_field(array(
    'id' => 'key',
    'name' => __( 'Parameter name', 'masterpopups' ),
    'type' => 'text',
    'grid' => '2-of-8',
));
$url_params->add_field(array(
    'id' => 'condition',
    'name' => __( 'Condition', 'masterpopups' ),
    'type' => 'select',
    'default' => 'equal',
    'items' => array(
        'equal' => '=',
        'not_equal' => '!=',
        'less' => '<',
        'less_equal' => '<=',
        'higher' => '>',
        'higher_equal' => '>=',
    ),
    'grid' => '1-of-8',
));
$url_params->add_field(array(
    'id' => 'value',
    'name' => __( 'Parameter value', 'masterpopups' ),
    'type' => 'text',
    'grid' => '2-of-8',
));
$url_params->close_mixed_field();