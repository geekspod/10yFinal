<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 * Edited by NineTheme
 *
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="section nt-cart-empty">
    <div class="container">
		<div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">

                <div class="nt-cart-empty-info text-center">
                    <i class="fa fa-info-circle nt-info-icon" aria-hidden="true"></i>
                    <?php do_action( 'woocommerce_cart_is_empty' ); ?>

                    <?php if ( wc_get_page_id( 'shop' ) > 0 ) : ?>

                        <a class="r-button r-button--transparent r-button-small wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" data-hover="<?php esc_html_e( 'Return to shop', 'r-energy' ); ?>">
                            <span><?php esc_html_e( 'Return to shop', 'r-energy' ); ?></span>
                        </a>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
