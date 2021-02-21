<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 */

get_header();

do_action("r_energy_before_woo_shop_page");
$hero_image = r_energy_settings( 'shop_hero_img' );
?>

<div id="nt-shop-page" class="nt-shop-page">

    <?php if ( '0' != r_energy_settings( 'shop_hero_visibility', '1' ) ) : ?>
        <section class="promo-primary promo-primary--shop default-bg">
            <?php if ( !empty( $hero_image['url'] ) ) : ?>
                <div class="overlay"></div>
                <picture>
                    <source srcset="<?php echo r_energy_settings( 'shop_hero_img' )['url']; ?>" media="(min-width: 992px)"/>
                        <img class="jarallax-img img-bg" src="<?php echo r_energy_settings( 'shop_hero_img' )['url']; ?>" alt="<?php the_title_attribute(); ?>"/>
                </picture>
            <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="align-container">
                            <div class="align-item">
                                <h1 class="title">
                                    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                                        <?php woocommerce_page_title(); ?>
                                    <?php endif; ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ( r_energy_settings( 'shop_top_banner' ) ) : ?>
        <section class="section relevant">
            <?php echo r_energy_settings( 'shop_top_banner' ); ?>
        </section>
    <?php endif; ?>

    <section class="section catalog">
        <div class="tabs-holder catalog-tabs">
            <div class="container">
                <div class="row">

                    <?php if ( is_active_sidebar( 'shop-page-sidebar' ) ) { ?>
                        <div class="col-xl-4 col-lg-4">
                            <!-- catalog aside start-->
                            <div class="aside-holder">
                                <span class="close-aside d-lg-none"><svg class="icon"><use xlink:href="#close"></use></svg></span>
                                <aside id="nt-sidebar" class="catalog-aside">
                                    <?php
                                    /**
                                    * Hook: woocommerce_sidebar.
                                    *
                                    * @hooked woocommerce_get_sidebar - 10
                                    */
                                    dynamic_sidebar( 'shop-page-sidebar' );
                                    ?>
                                </aside>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if ( is_active_sidebar( 'shop-page-sidebar' ) ) { ?>
                    <div class="col-xl-8 col-lg-8">
                    <?php } else { ?>
                    <div class="col-xl-12 col-lg-12">
                    <?php } ?>
                        <div class="row justify-content-end row-filter">
                            <div class="col-4">
                                <?php
                                if ( woocommerce_product_loop() ) {
                                    woocommerce_output_all_notices();
                                }
                                ?>
                                <?php
                                if ( woocommerce_product_loop() ) {
                                    woocommerce_catalog_ordering();
                                }
                                ?>
                            </div>
                        </div>

                        <?php if ( is_active_sidebar( 'shop-page-sidebar' ) ) { ?>
                            <div class="row d-lg-none">
                                <div class="col-12">
                                    <div class="filter-trigger">
                                        <svg class="icon"><use xlink:href="#controls"></use></svg><span class="title"><?php esc_html_e( 'Filters', 'r-energy' ); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <!-- tabs content start-->
                        <div class="tabs-content">
                            <div class="tabs-content__item">
                                <div class="row offset-margin">
                                    <?php
                                    if ( woocommerce_product_loop() ) {

                                        if ( wc_get_loop_prop( 'total' ) ) {
                                            while ( have_posts() ) {
                                                the_post();

                                                do_action( 'woocommerce_shop_loop' );

                                                wc_get_template_part( 'content', 'product' );

                                            }
                                        }
                                        echo '<div class="col-sm-12 col-item d-flex-justify-content-center align-items-center"><div class="shop-page-nav">';
                                        r_energy_index_loop_pagination();
                                        echo '</div></div>';

                                    } else {
                                        /**
                                        * Hook: woocommerce_no_products_found.
                                        *
                                        * @hooked wc_no_products_found - 10
                                        */
                                        do_action( 'woocommerce_no_products_found' );
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
