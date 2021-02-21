<?php

// register R_Energy_Footer_Collapsed_Widget
add_action( 'widgets_init', function(){
    register_widget( 'R_Energy_Footer_Collapsed_Widget' );
});

// Creating the widget 
class R_Energy_Footer_Collapsed_Widget extends WP_Widget {
    // class constructor
    public function __construct() 
    {
        $widget_ops = array( 
            'classname' => 'r_energy_footer_collapsed_widget', 
            'description' => esc_html__( 'R-Energy Footer Collapsed Widget', 'r-energy' ) );
        parent::__construct( 'r_energy_footer_collapsed_widget', 'R-Energy Footer Collapsed Widget', $widget_ops );
    }
    
    public function widget( $args, $instance ) 
    {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance[ 'title' ] );
        $text = $instance[ 'text' ];
        $menu = $instance[ 'c_link' ];
        $collg = $instance[ 'c_lgcol' ] != '' ? ' '.esc_attr($instance[ 'c_lgcol' ]) : '';
        $colmd = $instance[ 'c_mdcol' ] != '' ? ' '.esc_attr($instance[ 'c_mdcol' ]) : '';
        $colsm = $instance[ 'c_smcol' ] != '' ? ' '.esc_attr($instance[ 'c_smcol' ]) : '';
        $colxs = $instance[ 'c_xscol' ] != '' ? ' '.esc_attr($instance[ 'c_xscol' ]) : '';
        $class = $instance[ 'c_class' ] != '' ? ' '.esc_attr($instance[ 'c_class' ]) : '';
        
        // The following variable is for a checkbox option type
        $c_html = $instance[ 'c_html' ] ? 'true' : 'false';
        
        echo '<div class="col-nt'.$colxs.$colsm.$colmd.$collg.$class.'"><div class="mobile-collapse">';
        
        echo wp_kses( $before_widget, r_energy_allowed_html() );
        
            if ( $title ) {
                echo wp_kses( $before_title . $title . $after_title, r_energy_allowed_html() );
            }
            echo '<div class="pt-collapse-content">';
            // Retrieve the checkbox
            if( 'true' == $c_html ) {
                echo wp_kses( $text, r_energy_allowed_html() );
            }

            if( 'false' == $c_html ) {
                if ( has_nav_menu($menu) ) {
                    echo'<ul class="list">';
                        // default wp menu
                        wp_nav_menu(
                            array(
                                'theme_location' => $menu,
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
                                'depth' => 1, // '0' to display all depths
                                'echo' => true,
                                'fallback_cb' => 'R_Energy_Wp_Bootstrap_Navwalker::fallback',
                                'walker' => new R_Energy_Wp_Bootstrap_Navwalker()
                            )
                        );
                    echo'</ul>';
                }
            }
        echo wp_kses( $after_widget, r_energy_allowed_html() );
        echo '</div></div></div>';
    }

    public function update( $new_instance, $old_instance ) 
    {
        $instance = $old_instance;
        $instance[ 'title' ] = strip_tags($new_instance[ 'title' ]);
        $instance['text'] = wp_kses($new_instance['text'], r_energy_allowed_html());
        // The update for the variable of the checkbox
        $instance[ 'c_html' ] = $new_instance[ 'c_html' ];
        $instance[ 'c_link' ] = $new_instance[ 'c_link' ];
        $instance[ 'c_lgcol' ] = esc_attr($new_instance[ 'c_lgcol' ]);
        $instance[ 'c_mdcol' ] = esc_attr($new_instance[ 'c_mdcol' ]);
        $instance[ 'c_smcol' ] = esc_attr($new_instance[ 'c_smcol' ]);
        $instance[ 'c_xscol' ] = esc_attr($new_instance[ 'c_xscol' ]);
        $instance[ 'c_class' ] = esc_attr($new_instance[ 'c_class' ]);
        return $instance;
    }

    public function form( $instance ) 
    {
        $defaults = array( 
            'title' => esc_html__( 'Useful Links', 'r-energy' ),
            'c_html' => 'off',
            'c_lgcol' => '',
            'c_mdcol' => '',
            'c_smcol' => '',
            'c_xscol' => '',
            'c_link' => '',
            'c_class' => ''
        );
        $instance = wp_parse_args( ( array ) $instance, $defaults ); 
        $registered_menus = get_registered_nav_menus();
        $collg = array(
            '' => esc_html__( 'Select column width', 'r-energy' ),
            'col-lg-auto' => esc_html__( 'Auto column', 'r-energy' ),
            'col-lg-1' => esc_html__( '1 column', 'r-energy' ),
            'col-lg-2' => esc_html__( '2 column', 'r-energy' ),
            'col-lg-3' => esc_html__( '3 column', 'r-energy' ),
            'col-lg-4' => esc_html__( '4 column', 'r-energy' ),
            'col-lg-5' => esc_html__( '5 column', 'r-energy' ),
            'col-lg-6' => esc_html__( '6 column', 'r-energy' ),
            'col-lg-7' => esc_html__( '7 column', 'r-energy' ),
            'col-lg-8' => esc_html__( '8 column', 'r-energy' ),
            'col-lg-9' => esc_html__( '9 column', 'r-energy' ),
            'col-lg-10' => esc_html__( '10 column', 'r-energy' ),
            'col-lg-11' => esc_html__( '11 column', 'r-energy' ),
            'col-lg-12' => esc_html__( '12 column', 'r-energy' )
        );
        $colmd = array(
            '' => esc_html__( 'Select column width', 'r-energy' ),
            'col-md-auto' => esc_html__( 'Auto column', 'r-energy' ),
            'col-md-1' => esc_html__( '1 column', 'r-energy' ),
            'col-md-2' => esc_html__( '2 column', 'r-energy' ),
            'col-md-3' => esc_html__( '3 column', 'r-energy' ),
            'col-md-4' => esc_html__( '4 column', 'r-energy' ),
            'col-md-5' => esc_html__( '5 column', 'r-energy' ),
            'col-md-6' => esc_html__( '6 column', 'r-energy' ),
            'col-md-7' => esc_html__( '7 column', 'r-energy' ),
            'col-md-8' => esc_html__( '8 column', 'r-energy' ),
            'col-md-9' => esc_html__( '9 column', 'r-energy' ),
            'col-md-10' => esc_html__( '10 column', 'r-energy' ),
            'col-md-11' => esc_html__( '11 column', 'r-energy' ),
            'col-md-12' => esc_html__( '12 column', 'r-energy' )
        );
        $colsm = array(
            '' => esc_html__( 'Select column width', 'r-energy' ),
            'col-sm-auto' => esc_html__( 'Auto column', 'r-energy' ),
            'col-sm-1' => esc_html__( '1 column', 'r-energy' ),
            'col-sm-2' => esc_html__( '2 column', 'r-energy' ),
            'col-sm-3' => esc_html__( '3 column', 'r-energy' ),
            'col-sm-4' => esc_html__( '4 column', 'r-energy' ),
            'col-sm-5' => esc_html__( '5 column', 'r-energy' ),
            'col-sm-6' => esc_html__( '6 column', 'r-energy' ),
            'col-sm-7' => esc_html__( '7 column', 'r-energy' ),
            'col-sm-8' => esc_html__( '8 column', 'r-energy' ),
            'col-sm-9' => esc_html__( '9 column', 'r-energy' ),
            'col-sm-10' => esc_html__( '10 column', 'r-energy' ),
            'col-sm-11' => esc_html__( '11 column', 'r-energy' ),
            'col-sm-12' => esc_html__( '12 column', 'r-energy' )
        );
        $colxs = array(
            '' => esc_html__( 'Select column width', 'r-energy' ),
            'col-xs-auto' => esc_html__( 'Auto column', 'r-energy' ),
            'col-xs-1' => esc_html__( '1 column', 'r-energy' ),
            'col-xs-2' => esc_html__( '2 column', 'r-energy' ),
            'col-xs-3' => esc_html__( '3 column', 'r-energy' ),
            'col-xs-4' => esc_html__( '4 column', 'r-energy' ),
            'col-xs-5' => esc_html__( '5 column', 'r-energy' ),
            'col-xs-6' => esc_html__( '6 column', 'r-energy' ),
            'col-xs-7' => esc_html__( '7 column', 'r-energy' ),
            'col-xs-8' => esc_html__( '8 column', 'r-energy' ),
            'col-xs-9' => esc_html__( '9 column', 'r-energy' ),
            'col-xs-10' => esc_html__( '10 column', 'r-energy' ),
            'col-xs-11' => esc_html__( '11 column', 'r-energy' ),
            'col-xs-12' => esc_html__( '12 column', 'r-energy' )
        );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php echo esc_html__( 'Title', 'r-energy' ); ?></label>
            <input class="widefat"  id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $instance[ 'title' ] ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'c_lgcol' ); ?>"><?php echo esc_html__( 'Responsive Column ( Large Device )', 'r-energy' ); ?></label>
        </p>
        <p>
            <select class="col-lg" name="<?php echo $this->get_field_name( 'c_lgcol' ); ?>">
                <?php foreach ( $collg as $col => $desc) { ?>
                    <option <?php selected( $instance[ 'c_lgcol' ], $col ); ?> value="<?php echo $col; ?>"><?php echo $desc; ?></option>
                <?php } ?>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'c_mdcol' ); ?>"><?php echo esc_html__( 'Responsive Column ( Desktop / Tablet-Landscape )', 'r-energy' ); ?></label>
        </p>
        <p>
            <select class="col-md" name="<?php echo $this->get_field_name( 'c_mdcol' ); ?>">
                <?php foreach ( $colmd as $col => $desc) { ?>
                    <option <?php selected( $instance[ 'c_mdcol' ], $col ); ?> value="<?php echo $col; ?>"><?php echo $desc; ?></option>
                <?php } ?>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'c_smcol' ); ?>"><?php echo esc_html__( 'Responsive Column ( Tablet-Portrait )', 'r-energy' ); ?></label>
        </p>
        <p>
            <select class="col-sm" name="<?php echo $this->get_field_name( 'c_smcol' ); ?>">
                <?php foreach ( $colsm as $col => $desc) { ?>
                    <option <?php selected( $instance[ 'c_smcol' ], $col ); ?> value="<?php echo $col; ?>"><?php echo $desc; ?></option>
                <?php } ?>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'c_xscol' ); ?>"><?php echo esc_html__( 'Responsive Column ( Phone )', 'r-energy' ); ?></label>
        </p>
        <p>
            <select class="col-sm" name="<?php echo $this->get_field_name( 'c_xscol' ); ?>">
                <?php foreach ( $colxs as $col => $desc) { ?>
                    <option <?php selected( $instance[ 'c_xscol' ], $col ); ?> value="<?php echo $col; ?>"><?php echo $desc; ?></option>
                <?php } ?>
            </select>
        </p>
        <p>
            <input class="checkbox" type="checkbox" <?php checked( $instance[ 'c_html' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'c_html' ); ?>" name="<?php echo $this->get_field_name( 'c_html' ); ?>" /> 
            <label for="<?php echo $this->get_field_id( 'c_html' ); ?>"><?php echo esc_html__( 'Use Custom HTML instead of Link (click the save button after checking)', 'r-energy' ); ?></label>
        </p>
        <?php if ( 'on' == $instance[ 'c_html' ] ) { ?>
            <p>
                <label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php echo esc_html__( 'Custom HTML Area', 'r-energy' ); ?></label>
                <textarea class="widefat content" id="<?php echo $this->get_field_id( 'text' ); ?>" rows="10" cols="10" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance[ 'text' ]; ?></textarea>
            </p>
        <?php } else { ?>
            <p>
                <label for="<?php echo $this->get_field_name( 'c_link' ); ?>"><?php echo esc_html__( 'Select Menu:', 'r-energy' ); ?></label>
                <select name="<?php echo $this->get_field_name( 'c_link' ); ?>">
                    <?php foreach ( $registered_menus as $location => $description ) { ?>
                        <option <?php selected( $instance[ 'c_link' ], $location ); ?> value="<?php echo $location; ?>"><?php echo $description; ?></option>
                    <?php } ?>
                </select>
            </p>
        <?php } ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'c_class' ); ?>"><?php echo esc_html__( 'Custom Class', 'r-energy' ); ?></label>
            <input class="widefat"  id="<?php echo $this->get_field_id( 'c_class' ); ?>" name="<?php echo $this->get_field_name( 'c_class' ); ?>" type="text" value="<?php echo esc_attr( $instance[ 'c_class' ] ); ?>" />
        </p>
    <?php
    }
}
