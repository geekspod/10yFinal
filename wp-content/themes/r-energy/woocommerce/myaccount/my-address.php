<?php
/**
 * My Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-address.php.
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

$customer_id = get_current_user_id();

if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing'  => __( 'Billing address', 'r-energy' ),
			'shipping' => __( 'Shipping address', 'r-energy' ),
		),
		$customer_id
	);
} else {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing' => __( 'Billing address', 'r-energy' ),
		),
		$customer_id
	);
}

$oldcol = 1;
$col    = 1;
?>

<p class="mt-0">
	<?php echo apply_filters( 'woocommerce_my_account_my_address_description', esc_html__( 'The following addresses will be used on the checkout page by default.', 'r-energy' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</p>

<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) : ?>
	<div class="woocommerce-Addresses addresses">
<?php endif; ?>

<?php foreach ( $get_addresses as $name => $address_title ) : ?>
	<?php
		$address = wc_get_account_formatted_address( $name );
		$col     = $col * -1;
		$oldcol  = $oldcol * -1;
	?>

	<div class="row mt-40">
		<div class="col-md-12 woocommerce-Address">
			<div class="woocommerce-Address-title title">
				<h4 class="pb-0"><?php echo esc_html( $address_title ); ?></h4>
			</div>
			<address>
				<?php
					echo wp_kses( $address, r_energy_allowed_html() ) ? wp_kses_post( $address ) : esc_html_e( 'You have not set up this type of address yet.', 'r-energy' );
				?>
			</address>
			<a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address', $name ) ); ?>" class="r-button r-button--transparent r-button-small" data-hover="<?php echo wp_kses( $address, r_energy_allowed_html() ) ? esc_html__( 'Edit', 'r-energy' ) : esc_html__( 'Add', 'r-energy' ); ?>"><span><?php echo wp_kses( $address, r_energy_allowed_html() ) ? esc_html__( 'Edit', 'r-energy' ) : esc_html__( 'Add', 'r-energy' ); ?></span></a>
		</div>
	</div>

<?php endforeach; ?>

<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) : ?>
	</div>
	<?php
endif;
