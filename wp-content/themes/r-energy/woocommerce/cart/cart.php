<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
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
<!-- shopping cart start-->
<div class="section shopping-cart">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="cart-inner">

					<?php do_action( 'woocommerce_before_cart' ); ?>

					<div class="shop-cart">
						<form class="nt-woo-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
							<?php do_action( 'woocommerce_before_cart_table' ); ?>
							<!-- cart heading start-->
							<div class="cart-heading">
								<div class="product-block"><span><?php esc_html_e( 'Product', 'r-energy' ); ?></span></div>
								<div class="price-block"><span><?php esc_html_e( 'Price', 'r-energy' ); ?></span></div>
								<div class="quantity-block"><span><?php esc_html_e( 'Quantity', 'r-energy' ); ?></span></div>
								<div class="total-block"><span><?php esc_html_e( 'Subtotal', 'r-energy' ); ?></span></div>
								<div class="next-block"></div>
							</div>
							<?php do_action( 'woocommerce_before_cart_contents' ); ?>
							<!-- cart heading end-->
							<!-- cart content start-->
							<div class="cart-content">
								<!-- cart item start-->
								<?php
								foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
									$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
									$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

									if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
										$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
										?>
										<div class="cart-item">
											<div class="product-block inner-block">
												<?php
													$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
													if ( ! $product_permalink ) {
														echo '<div class="img-holder">'.$thumbnail.'</div>';
													} else {
														printf( '<a class="img-holder" href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
													}
												?>

												<div class="text-holder">
													<?php

													if ( ! $product_permalink ) {
														// Meta data.
														echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

														echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
													} else {
														echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
													}

													do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

													// Backorder notification.
													if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
														echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'r-energy' ) . '</p>', $product_id ) );
													}
													?>
												</div>
											</div>

											<div class="price-block inner-block">
												<span class="count">
													<?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );?>
												</span>
											</div>
											<div class="quantity-block inner-block">

												<?php
												if ( $_product->is_sold_individually() ) {
													$product_quantity = sprintf( '1 <input type="hidden" class="items-count" name="cart[%s][qty]" value="1" />', $cart_item_key );
												} else {
													$product_quantity = woocommerce_quantity_input(
														array(
															'input_name'   => "cart[{$cart_item_key}][qty]",
															'input_value'  => $cart_item['quantity'],
															'max_value'    => $_product->get_max_purchase_quantity(),
															'min_value'    => '0',
															'product_name' => $_product->get_name(),
														),
														$_product,
														false
													);
												}
												echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
												?>
											</div>
											<div class="total-block inner-block">
												<span class="total">
													<?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );?>
												</span>
											</div>

											<div class="next-block inner-block">

													<?php
													echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
													'woocommerce_cart_item_remove_link',
													sprintf(
													'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><svg class="icon" viewBox="0 0 47.971 47.971" xmlns="http://www.w3.org/2000/svg"><path d="M28.228 23.986L47.092 5.122a2.998 2.998 0 000-4.242 2.998 2.998 0 00-4.242 0L23.986 19.744 5.121.88a2.998 2.998 0 00-4.242 0 2.998 2.998 0 000 4.242l18.865 18.864L.879 42.85a2.998 2.998 0 104.242 4.241l18.865-18.864L42.85 47.091c.586.586 1.354.879 2.121.879s1.535-.293 2.121-.879a2.998 2.998 0 000-4.242L28.228 23.986z"/></svg></a>',
													esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
													esc_html__( 'Remove this item', 'r-energy' ),
													esc_attr( $product_id ),
													esc_attr( $_product->get_sku() )
													),
													$cart_item_key
													);
													?>

											</div>
										</div>
										<?php
									}
								}
								?>
								<?php if ( wc_coupons_enabled() ) { ?>
									<div class="coupon-block">
										<span class="title"><?php esc_attr_e( 'Coupon Code', 'r-energy' ); ?></span>
										<div class="input-holder">
											<input type="text" name="coupon_code" class="coupon-input" id="coupon_code" value="" placeholder="xxxx-xx" />
										</div>
										<button type="submit" class="r-button r-button--filled" name="apply_coupon" data-hover="<?php esc_attr_e( 'Apply coupon', 'r-energy' ); ?>" value="<?php esc_attr_e( 'Apply coupon', 'r-energy' ); ?>"><span><?php esc_attr_e( 'Apply coupon', 'r-energy' ); ?></span></button>
										<?php do_action( 'woocommerce_cart_coupon' ); ?>
										<button type="submit" class="refresh" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'r-energy' ); ?>"><svg class="icon" viewBox="0 0 56.855 56.855" xmlns="http://www.w3.org/2000/svg"><path d="M54.28 39.762c3.027-6.356 3.398-13.51 1.045-20.146C50.468 5.92 35.372-1.27 21.676 3.588 15.046 5.94 9.782 10.703 6.784 16.914L3.885 8.739a2 2 0 10-3.769 1.338l4.651 13.116a2.006 2.006 0 001.884 1.331c.226 0 .452-.038.668-.115l13.846-4.911a2 2 0 10-1.337-3.77l-9.692 3.438c2.497-5.518 7.073-9.75 12.875-11.809 11.619-4.12 24.421 1.979 28.542 13.597 4.121 11.617-1.979 24.422-13.596 28.543a22.358 22.358 0 01-23.852-5.846 2 2 0 10-2.929 2.724 26.347 26.347 0 0028.116 6.89c6.639-2.352 11.96-7.147 14.988-13.503z"/></svg></button>
										<?php do_action( 'woocommerce_cart_actions' ); ?>
										<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
									</div>

								<?php } ?>
								<!-- coupon block end-->
								<?php do_action( 'woocommerce_cart_contents' ); ?>
								<?php do_action( 'woocommerce_after_cart_contents' ); ?>

							</div>
							<?php do_action( 'woocommerce_after_cart_table' ); ?>
						<!-- cart content end-->
						</form>

						<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

	                    <div class="cart-collaterals">
	                    	<?php
	                    		/**
	                    		 * Cart collaterals hook.
	                    		 *
	                    		 * @hooked woocommerce_cross_sell_display
	                    		 * @hooked woocommerce_cart_totals - 10
	                    		 */
	                    		do_action( 'woocommerce_cart_collaterals' );
	                    	?>
	                    </div>
					</div>
					<?php do_action( 'woocommerce_after_cart' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
