<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
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

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}

?>
<div class="row">
    <div class="col-sm-12">
        <div class="woocommerce-form-coupon-toggle">
        	<?php wc_print_notice( apply_filters( 'woocommerce_checkout_coupon_message', esc_html__( 'Have a coupon?', 'r-energy' ) . ' <a href="#" class="showcoupon">' . esc_html__( 'Click here to enter your code', 'r-energy' ) . '</a>' ), 'notice' ); ?>
        </div>
    </div>
</div>

<form class="checkout_coupon form-default woocommerce-form-coupon" method="post" style="display:none">

	<div class="row">
    	<div class="col-sm-12">
    	    <p><?php esc_html_e( 'If you have a coupon code, please apply it below.', 'r-energy' ); ?></p>
    	</div>
    	<div class="col-sm-8">

        	<div class="form-group">
        	    <label for="coupon_code" class="placeholder-label"><?php esc_attr_e( 'Coupon code', 'r-energy' ); ?></label>
        		<input type="text" name="coupon_code" class="form-control" id="coupon_code" value="" />
        	</div>
    	</div>
        <div class="col-sm-4">
    	    <button type="submit" class="r-button r-button--transparent apply-button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'r-energy' ); ?>" data-hover="<?php esc_attr_e( 'Apply coupon', 'r-energy' ); ?>"><span><?php esc_html_e( 'Apply coupon', 'r-energy' ); ?></span></button>
    	</div>
	</div>

</form>
