<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 */

get_header();

do_action("r_energy_before_woo_single");
$hero_display = '0' == r_energy_settings( 'single_shop_hero_visibility', '1' ) ? ' hero-none' : '';
$hero_image = r_energy_settings( 'single_shop_hero_img' );
?>

<!-- WooCommerce product page container -->
<div id="nt-woo-single" class="nt-woo-single<?php echo esc_attr($hero_display); ?>">

    <?php if ( '0' != r_energy_settings( 'single_shop_hero_visibility', '1' ) ) : ?>

        <section class="promo-primary promo-primary--shop promo-single default-bg">

            <?php if ( !empty( $hero_image['url'] ) ) : ?>
                <div class="overlay"></div>
                <picture>
                    <source srcset="<?php echo r_energy_settings( 'single_shop_hero_img' )['url']; ?>" media="(min-width: 992px)"/>
                    <img class="img-bg" src="<?php echo r_energy_settings( 'single_shop_hero_img' )['url']; ?>" alt="<?php the_title_attribute(); ?>"/>
                </picture>
            <?php endif; ?>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="align-container">
                            <div class="align-item">
                                <?php if ( '' != r_energy_settings( 'shop_single_page_title' ) ) : ?>
                                    <h1 class="title"><?php echo r_energy_settings( 'shop_single_page_title' ); ?></h1>
                                <?php else : ?>
                                    <h1 class="title"><?php the_title(); ?></h1>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endif; ?>

    <?php if('0' != r_energy_settings( 'single_shop_related_visibility', '1' )) : ?>
        <section class="section shop-product no-padding-bottom">
    <?php else: ?>
        <section class="section shop-product">
    <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        if ( woocommerce_product_loop() ) {
                            woocommerce_output_all_notices();
                        }
                        ?>
                    </div>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="col-lg-7 col-md-8 offset-md-2 offset-lg-0">
                            <div class="sliders-holder">
                                <div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'nt-single-thumbs', $product ); ?>>
                                    <?php
                                    /**
                                    * Hook: woocommerce_before_single_product_summary.
                                    *
                                    * @hooked woocommerce_show_product_sale_flash - 10
                                    * @hooked woocommerce_show_product_images - 20
                                    */
                                    do_action( 'woocommerce_before_single_product_summary' );
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-10 offset-md-1 offset-lg-0">
                            <div class="product-about">
                                <?php if ( '0' != r_energy_settings( 'single_shop_status_visibility', '1' ) ) : ?>
                                    <?php if ( ! empty( wc_get_stock_html($product) ) ) : ?>
                                        <div class="status-block">
                                            <div class="status"><strong><?php esc_html_e( 'Status', 'r-energy' ); ?>:</strong> <?php echo wc_get_stock_html( $product ); ?></div>
                                            <div class="buttons">
                                                <span><?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <div class="details">
                                    <?php if ( '0' != r_energy_settings( 'single_shop_product_title_visibility', '1' ) ) : ?>
                                    <h3 class="name"><?php the_title(); ?></h3>
                                    <?php endif; ?>

                                    <?php if ( '0' != r_energy_settings( 'single_shop_product_price_visibility', '1' ) ) : ?>
                                        <?php if ( ! empty( $product->get_sale_price() ) ) : ?>
                                            <span class="old-price price"><?php echo esc_html(get_woocommerce_currency_symbol()); ?><?php echo esc_html($product->get_regular_price()); ?></span>
                                            <?php if ( ! empty( $product->get_sale_price() ) ) : ?>
                                                <span class="new-price price"><?php echo esc_html(get_woocommerce_currency_symbol()); ?><?php echo esc_html($product->get_sale_price()); ?></span>
                                            <?php endif; ?>
                                        <?php else : ?>
                                            <?php if ( ! empty( $product->get_regular_price() ) ) : ?>
                                                <span class="new-price price"><?php echo esc_html(get_woocommerce_currency_symbol()); ?><?php echo esc_html($product->get_regular_price()); ?></span>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php if ( '0' != r_energy_settings( 'single_shop_product_attr_visibility', '1' ) ) : ?>
                                        <?php if ( ! empty( $product->get_attributes() ) ) : ?>
                                            <div class="details-inner">
                                                <?php wc_display_product_attributes( $product ); ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>

                                <?php if ( '0' != r_energy_settings( 'single_shop_product_cat_visibility', '1' ) ) : ?>
                                    <?php if ( wc_get_product_category_list($product->get_id()) ) : ?>
                                        <?php echo wc_get_product_category_list( $product->get_id(), ' ', '<span class="tags-block">' . _n( 'Category: ', 'Categories: ', count( $product->get_category_ids() ), 'r-energy' ) . ' ', '</span>' ); ?>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <?php if ( '0' != r_energy_settings( 'single_shop_product_tags_visibility', '1' ) ) : ?>
                                    <?php if ( wc_get_product_tag_list($product->get_id()) ) : ?>
                                        <?php echo wc_get_product_tag_list(
                                            $product->get_id(), ' ', '<span class="tags-block">' . _n( 'Tag: ', 'Tags: ', count( $product->get_tag_ids() ), 'r-energy' ) . ' ', '</span>' ); ?>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <?php if ( '0' != r_energy_settings( 'single_shop_product_rating_visibility', '1' ) ) : ?>

                                    <div class="rating-block">
                                        <span class="name"><?php esc_html_e( 'Ratings', 'r-energy' ); ?>:</span>
                                        <?php if ( ($product->get_rating_count()) > 0 ) : ?>
                                            <?php wc_get_template( 'single-product/rating.php' ); ?>
                                        <?php else : ?>
                                            <div class="woocommerce-product-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 4.33 out of 5">
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ( '0' != r_energy_settings( 'single_shop_product_addtocart_visibility', '1' ) ) : ?>
                                    <div class="add-block">
                                        <?php woocommerce_template_single_add_to_cart(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; // end of the loop. ?>
                </div>
                <?php if ( '0' != r_energy_settings( 'single_shop_product_tabs_visibility', '1' ) ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php wc_get_template( 'single-product/tabs/tabs.php' ); ?>
                    <?php endwhile; // end of the loop. ?>
                <?php endif; ?>
            </div>
        </section>

        <?php if('0' != r_energy_settings( 'single_shop_related_visibility', '1' )) : ?>
            <section class="section products--style-3">
                <div class="container">
                    <div class="row align-items-center margin-bottom">
                        <div class="col-xl-6 col-lg-7">
                            <div class="heading primary-heading heading-with-r-button">
                                <div class="text-block">
                                    <?php if ( r_energy_settings( 'single_shop_related_subtitle' ) ) : ?>
                                        <h3 class="title"><?php echo r_energy_settings( 'single_shop_related_subtitle', 'Our products' ); ?></h3>
                                    <?php endif ?>
                                    <h5 class="subtitle"><?php echo r_energy_settings( 'single_shop_related_title', '<span>A System You</span> <span>Can Count On</span>' ); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5">
                            <div class="r-button-block">
                                <div class="products-slider-dots"></div>
                                <?php if ( r_energy_settings( 'single_shop_related_btntitle' ) ) : ?>
                                    <a class="r-button r-button--transparent d-none d-lg-inline-block" href="<?php echo r_energy_settings( 'single_shop_related_btn_url', '#0' ); ?>" data-hover="<?php echo r_energy_settings( 'single_shop_related_btntitle', 'Discover' ); ?>"><span><?php echo r_energy_settings( 'single_shop_related_btntitle', 'Discover' ); ?></span></a>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-holder">
                    <div class="slider-wrapper">
                        <div class="products-slider r-products-slider">
                            <?php
                            $r_energy_related_taxonomy_terms = wp_get_object_terms( $post->ID, 'product_cat', array('fields' => 'ids') );
                            $r_energy_related_args = array(
                                'post_type' => 'product',
                                'post_status' => 'publish',
                                'posts_per_page' => r_energy_settings( 'single_shop_related_count', '8' ),
                                'orderby' => 'rand',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'product_cat',
                                        'field' => 'id',
                                        'terms' => $r_energy_related_taxonomy_terms
                                    )
                                ),
                                'post__not_in' => array ($post->ID),
                            );
                            $r_energy_related_posts = new WP_Query( $r_energy_related_args );
                            if($r_energy_related_posts->have_posts()){

                                while($r_energy_related_posts->have_posts()){
                                    $r_energy_related_posts->the_post();
                                    global $product;
                                    $image_large = wp_get_attachment_url( get_post_thumbnail_id(), 'full' );
                                    ?>
                                    <div class="slider-item">
                                        <figure class="product-item product-item--primary">
                                            <a class="img-holder" href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($image_large); ?>" alt="<?php the_title_attribute(); ?>"/></a>
                                            <figcaption>

                                                <?php
                                                // This variable has been safely escaped in woocommerce
                                                ?>

                                                <?php if ( $price_html_escaped = $product->get_price_html() ) : ?>
                                                    <span class="description price"><?php echo r_energy_sanitize_data($price_html_escaped); ?></span>
                                                <?php endif; ?>

                                                <h4 class="title">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h4>

                                                <?php woocommerce_template_loop_add_to_cart();?>

                                            </figcaption>
                                        </figure>
                                    </div>
                                    <?php
                                }
                            }
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <?php if ( r_energy_settings( 'single_shop_related_btntitle', 'Discover' ) ) : ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center d-block d-lg-none margin-top">
                                    <a class="r-button r-button--transparent" href="<?php echo r_energy_settings( 'single_shop_related_btn_url', '#0' ); ?>" data-hover="<?php echo r_energy_settings( 'single_shop_related_btntitle', 'Discover' ); ?>"><span><?php echo r_energy_settings( 'single_shop_related_btntitle', 'Discover' ); ?></span></a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>
    </div>

<?php
do_action("r_energy_after_woo_single");
get_footer();
?>
