<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Contact_Form_Map_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-contact-form-map-section';
    }
    public function get_title() {
        return 'Map & Contact Form';
    }
    public function get_icon() {
        return 'eicon-google-maps';
    }
    public function get_categories() {
        return [ 'r-energy' ];
    }
    // Registering Controls
    protected function _register_controls() {
        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_contact_form_text_settings',
            [
                'label' => esc_html__( 'Text and Form', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'type',
            [
                'label' => esc_html__( 'Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => esc_html__( 'Form', 'r-energy' ),
                    '1' => esc_html__( 'Contact Details', 'r-energy' ),
                ]
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<span>. Our</span> <span>Contacts</span>',
                'label_block' => true,
                'condition' => ['type' => '1']
            ]
        );
        $this->add_control( 'address',
            [
                'label' => esc_html__( 'Address', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Elliott Ave, Parkville VIC 3052 Melbourne Canada',
                'label_block' => true,
                'condition' => ['type' => '1']
            ]
        );
        $this->add_control( 'phones',
            [
                'label' => esc_html__( 'Phones', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<p><a href="tel:+31859644725">+31 85 964 47 25</a></p><p><a href="tel:+31853255813">+31 85 325 58 13</a></p>',
                'label_block' => true,
                'condition' => ['type' => '1']
            ]
        );
        $this->add_control( 'mail',
            [
                'label' => esc_html__( 'Mail', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<p><a href="mailto:r_energy@gmail.com">r_energy@gmail.com</a></p><p><a href="mailto:r_energy_systems@gmail.com">r_energy_systems@gmail.com</a></p>',
                'label_block' => true,
                'condition' => ['type' => '1']
            ]
        );
        $this->add_control( 'btn_text',
            [
                'label' => esc_html__( 'Button Text', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'See Google Map',
                'label_block' => true,
                'condition' => ['type' => '1']
            ]
        );
        $this->add_control( 'link',
            [
                'label' => esc_html__( 'Button Link', 'r-energy' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => ''
                ],
                'show_external' => true,
                'condition' => ['type' => '1']
            ]
        );
        $this->add_control('r_energy_cf7_form_id_control',
            [
                'label' => esc_html__( 'Select Form', 'r-energy' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => false,
                'options' => $this->r_energy_get_cf7(),
                'description' => 'Select Form to Embed',
                'condition' => ['type' => '']
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_map_settings',
            [
                'label' => esc_html__( 'Map', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'api',
            [
                'label' => esc_html__( 'Api Key', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'AIzaSyD5ES8GFHrarPhIVpDhFDea6fPtga0Wy4Y',
                'label_block' => true,
            ]
        );
        $this->add_control( 'longitude',
            [
                'label' => esc_html__( 'Longitude (lng)', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => '-9.141827',
                'input_type' => 'number',
                'label_block' => true,
            ]
        );
        $this->add_control( 'latitude',
            [
                'label' => esc_html__( 'Latitude (lat)', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => '38.737749',
                'input_type' => 'number',
                'label_block' => true,
            ]
        );
        $this->add_control( 'zoom',
            [
                'label' => esc_html__( 'Zoom', 'nt-addons' ),
                'type' => Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 1000,
                'default' => 13
            ]
        );
        $this->add_control( 'marker',
            [
                'label' => esc_html__( 'Marker Image', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => plugins_url( 'assets/front/img/placeholder.png', __DIR__ )],
            ]
        );
        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail',
                'default' => 'full',
                'condition' => [ 'marker[url]!' => '' ],
            ]
        );
        $this->add_control( 'here',
            [
                'label' => esc_html__( 'Marker Title', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Here',
                'label_block' => true,
            ]
        );
        $this->add_control( 'color',
            [
                'label' => esc_html__( 'Map Water Color', 'r-energy' ),
                'type' => Controls_Manager::COLOR,
                'default' => '#0D73FC',
            ]
        );
        $this->add_control( 'lbcolor',
            [
                'label' => esc_html__( 'Map Labels Color', 'r-energy' ),
                'type' => Controls_Manager::COLOR,
                'default' => '#0D73FC',
            ]
        );
        $this->add_control( 'tcolor',
            [
                'label' => esc_html__( 'Map Text Color', 'r-energy' ),
                'type' => Controls_Manager::COLOR,
                'default' => '#212326',
            ]
        );
        $this->add_control( 'lnscolor',
            [
                'label' => esc_html__( 'Landscape Color', 'r-energy' ),
                'type' => Controls_Manager::COLOR,
                'default' => '#F8F8F9',
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
    }

    protected function render() {

        $settings  = $this->get_settings_for_display();
        $image      = $this->get_settings( 'marker' );
        $image_url  = Group_Control_Image_Size::get_attachment_image_src( $image['id'], 'thumbnail', $settings );
        $imageurl   = empty( $image_url ) ? $image['url'] : $image_url;
        $target   = $settings['link']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $settings['link']['nofollow'] ? ' rel="nofollow"' : '';
        echo '<div class="map-section section-contact">';
        if ($settings['type'] == '1'){
            echo '<div class="contacts-banner">';
    			echo '<div class="container">';
                    if ($settings['title']){
        				echo '<div class="row"><div class="col-12"><div class="title-block"><h2 class="title">'.$settings['title'].'</h2></div></div></div>';
                    }
    				echo '<div class="row">';
                        if ($settings['address']){
        					echo '<div class="col-12"><div class="address-block inner-block"><p class="address">'.$settings['address'].'</p></div></div>';
                        }
                        if ($settings['phones']){
                            echo '<div class="col-12"><div class="phones-block inner-block">'.$settings['phones'].'</div></div>';
                        }
                        if ($settings['mail']){
                            echo '<div class="col-12"><div class="mail-block inner-block">'.$settings['mail'].'</div></div>';
                        }
    				echo '</div>';
                    if ($settings['btn_text']){
                        echo '<div class="row"><div class="col-12"><div class="r-button-holder"><a class="r-button r-button--filled" href="'.$settings['link']['url'].'"'.$target.$nofollow.' data-hover="'.$settings['btn_text'].'"><span>'.$settings['btn_text'].'</span></a></div></div></div>';
                    }
    			echo '</div>';
    		echo '</div>';
        } else {
            if (!empty($settings['r_energy_cf7_form_id_control'])){
                echo do_shortcode( '[contact-form-7 id="'.$settings['r_energy_cf7_form_id_control'].'"]' );
            }
        }
        if ($settings['api']){
            echo '<div class="map" id="map" data-api-key="'.$settings['api'].'" data-longitude="'.$settings['longitude'].'" data-latitude="'.$settings['latitude'].'" data-marker="'.$imageurl.'"></div>';
        }
        echo '</div>';
        if ($settings['api']){
            echo '<script>(function($) {\'use strict\'; jQuery(document).ready(function () { var maps = $(\'#map\'); _g_map(); function _g_map(){ if( maps.length > 0){ var apiKey = maps.attr(\'data-api-key\'), apiURL; if(apiKey){ apiURL = \'https://maps.google.com/maps/api/js?key=\'+ apiKey +\' &sensor=false\'; }else{ apiURL = \'https://maps.google.com/maps/api/js?sensor=false\'; }; $.getScript( apiURL , function(data, textStatus, jqxhr){ maps.each(function(){ var current_map = $(this), latlng = new google.maps.LatLng(current_map.attr(\'data-longitude\'), current_map.attr(\'data-latitude\')), point = current_map.attr(\'data-marker\'), center = { lat: 38.747444, lng: -9.211978 }, markerPos = { lat: '.$settings['latitude'].', lng: '.$settings['longitude'].' }, myOptions = { zoom: '.$settings['zoom'].', center: center, disableDefaultUI: true, mapTypeId: google.maps.MapTypeId.ROADMAP, mapTypeControl: false, scrollwheel: false, draggable: true, panControl: false, zoomControl: false, disableDefaultUI: true, styles: [ { "featureType": "administrative", "elementType": "labels.text.fill", "stylers": [ { "color": "'.$settings['tcolor'].'" } ] }, { "featureType": "administrative.locality", "elementType": "labels.text.fill", "stylers": [ { "color": "'.$settings['lbcolor'].'" } ] }, { "featureType": "landscape", "elementType": "all", "stylers": [ { "color": "'.$settings['lnscolor'].'" } ] }, { "featureType": "poi", "elementType": "all", "stylers": [ { "visibility": "off" } ] }, { "featureType": "road", "elementType": "all", "stylers": [ { "saturation": -100 }, { "lightness": 45 } ] }, { "featureType": "road", "elementType": "labels", "stylers": [ { "visibility": "off" } ] }, { "featureType": "road", "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] }, { "featureType": "transit", "elementType": "all", "stylers": [ { "visibility": "off" } ] }, { "featureType": "road.highway", "elementType": "all", "stylers": [ { "visibility": "off" } ] }, { "featureType": "road.arterial", "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] }, { "featureType": "transit", "elementType": "all", "stylers": [ { "visibility": "off" } ] }, { "featureType": "water", "elementType": "all", "stylers": [ { "color": "'.$settings['color'].'" }, { "visibility": "on" } ] } ] }; var map = new google.maps.Map(current_map[0], myOptions); var marker = new google.maps.Marker({ map: map, icon: { size: new google.maps.Size(59,69), origin: new google.maps.Point(0,0), anchor: new google.maps.Point(0,69), url: point }, position: markerPos }); var windowContent = \'<h3 class="map-placeholder">'.$settings['here'].'</h3>\'; var infowindow = new google.maps.InfoWindow({ content: windowContent }); var windowContent = \'<h3 class="map-placeholder">'.$settings['here'].'</h3>\'; var infowindow = new google.maps.InfoWindow({ content: windowContent }); google.maps.event.addListener(marker, \'click\', function() { infowindow.open(map,marker); }); infowindow.open(map,marker); google.maps.event.addDomListener(window, "resize", function(){ var center = map.getCenter(); google.maps.event.trigger(map, "resize"); map.setCenter(center); }); }); }); }; }; }); }(jQuery));</script>';
        }
    }
}
