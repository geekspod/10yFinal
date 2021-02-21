<?php
/*
* Theme Footer
*/

        if ( ! is_page_template( 'r-energy-elementor-page.php' ) ) {
            echo'</main>';
            do_action( 'r_energy_before_main_footer' );
            if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
                r_energy_footer();
            }
            do_action( 'r_energy_after_main_footer' );
        }
        ?>
    </div>
    <?php do_action( 'r_energy_before_wp_footer' ); ?>
    <?php wp_footer(); ?>
    </body>
</html>
