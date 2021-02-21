<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 * Edited by NineTheme
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>


<div class="section shopping-checkout">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="checkout">

				<?php
                    do_action( 'woocommerce_before_checkout_form', $checkout );

                    // If checkout registration is disabled and not logged in, the user cannot checkout.
                    if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
                    	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'r-energy' ) ) );
                    	return;
                    }

                    ?>
                    <form name="checkout" method="post" class="checkout woocommerce-checkout billing-form" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

                    	<div class="row">
                    		<?php if ( $checkout->get_checkout_fields() ) : ?>
                    			<div class="col-md-6 col-xl-7">
                        			<div class="box-data">
                        				<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
                        				<div id="customer_details">
                        					<?php do_action( 'woocommerce_checkout_billing' ); ?>
                        					<?php do_action( 'woocommerce_checkout_shipping' ); ?>
                        				</div>
                        				<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
                        			</div>
                    			</div>
                    		<?php endif; ?>

                    		<div class="col-md-6 col-xl-5">
                        		<div class="box-data">
                        			<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
                        			<h4 id="order_review_heading" class="title"><?php esc_html_e( 'Your order', 'r-energy' ); ?></h4>
                        			<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
                        			<div id="order_review">
                        				<?php do_action( 'woocommerce_checkout_order_review' ); ?>
                        			</div>
                        			<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
                        		</div>
                    		</div>

                    	</div>
                    </form>

                    <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
                </div>
            </div>
        </div>
    </div>
</div>