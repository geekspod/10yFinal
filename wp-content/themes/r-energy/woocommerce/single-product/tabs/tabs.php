<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
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

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>

	<div class="product-info-tabs">
		<div class="tabs-holder">
			<div class="tabs-header">
				<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
					<span class="tabs-header__title" id="tab_title_<?php echo esc_attr( $key ); ?>"><?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?></span>
				<?php endforeach; ?>
			</div>
			<!-- Tab panes -->
			<div class="tabs-content">
				<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
					<div class="tabs-content__item" id="tab-title-<?php echo esc_attr( $key ); ?>">
						<?php
						if ( isset( $product_tab['callback'] ) ) {
							call_user_func( $product_tab['callback'], $key, $product_tab );
						}
						?>
					</div>
				<?php endforeach; ?>
				<?php do_action( 'woocommerce_product_after_tabs' ); ?>
			</div>
		</div>
	</div>
<?php endif; ?>
