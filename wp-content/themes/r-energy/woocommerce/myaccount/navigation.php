<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
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

do_action( 'woocommerce_before_account_navigation' );
$count = 0;
?>
<div class="tabs-holder catalog-tabs">
    <div class="aside-holder">
    	<span class="close-aside d-lg-none"><svg class="icon"><use xlink:href="#close"></use></svg></span>
    	<div class="catalog-aside">
    		<div class="tabs-header">
    			<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
                    <span class="tabs-header__title <?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
                        <span class="item">
                            <a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
                        </span>
                    </span>
    			<?php endforeach; ?>
    		</div>
    	</div>
    </div>
</div>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
