<?php

$xbox->add_field(array(
    'name' => __( 'Form validation messages', 'masterpopups' ),
    'type' => 'title',
));
$xbox->add_field(array(
    'id' => 'validation-msg-general',
    'name' => 'General',
    'type' => 'text',
    'default' => __( 'This field is required', 'masterpopups' ),
    'grid' => '5-of-8'
));
$xbox->add_field(array(
    'id' => 'validation-msg-email',
    'name' => 'Email',
    'type' => 'text',
    'default' => __( 'Invalid email address', 'masterpopups' ),
    'grid' => '5-of-8'
));
$xbox->add_field(array(
    'id' => 'validation-msg-checkbox',
    'name' => 'Checkbox',
    'type' => 'text',
    'default' => __( 'This field is required, please check', 'masterpopups' ),
    'grid' => '5-of-8'
));
$xbox->add_field(array(
    'id' => 'validation-msg-dropdown',
    'name' => 'Dropdown',
    'type' => 'text',
    'default' => __( 'This field is required. Please select an option', 'masterpopups' ),
    'grid' => '5-of-8'
));
$xbox->add_field(array(
    'id' => 'validation-msg-minlength',
    'name' => 'Min length',
    'type' => 'text',
    'default' => __( 'Min length:', 'masterpopups' ),
    'grid' => '5-of-8'
));
$xbox->add_field(array(
    'id' => 'form-submission-back-to-form-text',
    'name' => __( 'Back to form', 'masterpopups' ),
    'type' => 'text',
    'default' => __( 'Back to form', 'masterpopups' ),
    'grid' => '2-of-8'
));
$xbox->add_field(array(
    'id' => 'form-submission-close-popup-text',
    'name' => __( 'Close', 'masterpopups' ),
    'type' => 'text',
    'default' => __( 'Close', 'masterpopups' ),
    'grid' => '2-of-8'
));