<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
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
<form role="search" method="get" class="form-default woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form-group">
        <label class="placeholder-label" for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"><?php esc_html_e( 'Search for:', 'r-energy' ); ?></label>
        <input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="form-control" value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="btn mt-15" value="<?php echo esc_attr_x( 'Search', 'submit button', 'r-energy' ); ?>"><?php echo esc_html_x( 'Search', 'submit button', 'r-energy' ); ?></button>
        <input type="hidden" name="post_type" value="product" />
    </div>
</form>
