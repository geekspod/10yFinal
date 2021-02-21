<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_mini_cart' ); ?>

<?php if ( ! WC()->cart->is_empty() ) : ?>
    <div class="cart-dropdown">
    	<div class="items-holder <?php echo esc_attr( $args['list_class'] ); ?>">
    		<?php
    		do_action( 'woocommerce_before_mini_cart_contents' );

    		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
    			$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
    			$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

    			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
    				$product_name_escaped = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
    				$thumbnail_escaped = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
    				$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
    				$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
    				?>
                    <div class="cart-item <?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">
            			<div class="item-block">
                            <div class="img-holder" href="shop-product.html">
                                <?php if ( empty( $product_permalink ) ) : ?>
            						<?php echo r_energy_sanitize_data($thumbnail_escaped); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            					<?php else : ?>
            						<a href="<?php echo esc_url( $product_permalink ); ?>">
            							<?php echo r_energy_sanitize_data($thumbnail_escaped); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            						</a>
            					<?php endif; ?>
                            </div>
            				<div class="text-holder">
            					<?php echo wc_get_formatted_cart_item_data( $cart_item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                <?php if ( empty( $product_permalink ) ) : ?>
            						<?php echo r_energy_sanitize_data($product_name_escaped); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            					<?php else : ?>
            						<a href="<?php echo esc_url( $product_permalink ); ?>">
            							<?php echo r_energy_sanitize_data($product_name_escaped); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            						</a>
            					<?php endif; ?>
                                <?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            				</div>
            			</div>
                        <?php
    					echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    						'woocommerce_cart_item_remove_link',
    						sprintf(
    							'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s"><svg class="icon" viewBox="0 0 47.971 47.971" xmlns="http://www.w3.org/2000/svg"><path d="M28.228 23.986L47.092 5.122a2.998 2.998 0 000-4.242 2.998 2.998 0 00-4.242 0L23.986 19.744 5.121.88a2.998 2.998 0 00-4.242 0 2.998 2.998 0 000 4.242l18.865 18.864L.879 42.85a2.998 2.998 0 104.242 4.241l18.865-18.864L42.85 47.091c.586.586 1.354.879 2.121.879s1.535-.293 2.121-.879a2.998 2.998 0 000-4.242L28.228 23.986z"/></svg></a>',
    							esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
    							esc_attr__( 'Remove this item', 'r-energy' ),
    							esc_attr( $product_id ),
    							esc_attr( $cart_item_key ),
    							esc_attr( $_product->get_sku() )
    						),
    						$cart_item_key
    					);
    					?>
            		</div>

                    <?php do_action( 'woocommerce_mini_cart_contents' ); ?>

    				<?php
    			}
    		}
    		do_action( 'woocommerce_mini_cart_contents' );
    		?>
        </div>

        <div class="cart-lower">

            <span class="subtitle">
                <?php
            		/**
            		 * Hook: woocommerce_widget_shopping_cart_total.
            		 *
            		 * @hooked woocommerce_widget_shopping_cart_subtotal - 10
            		 */
            		do_action( 'woocommerce_widget_shopping_cart_total' );
            		?>
            </span>

    		<div class="buttons-block">
                <?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>
               <?php
                   $renergy_checkout_url = wc_get_checkout_url();
                   $renergy_cart_url = wc_get_cart_url();
               ?>
                <a class="r-button r-button--transparent" href="<?php echo esc_url( $renergy_cart_url ); ?>" data-hover="<?php esc_html_e( 'View Cart', 'r-energy' ); ?>"><span><?php esc_html_e( 'View Cart', 'r-energy' ); ?></span></a>
                <a class="r-button r-button--filled" href="<?php echo esc_url( $renergy_checkout_url ); ?>" data-hover="<?php esc_html_e( 'Checkout', 'r-energy' ); ?>"><span><?php esc_html_e( 'Checkout', 'r-energy' ); ?></span></a>
            	<?php do_action( 'woocommerce_widget_shopping_cart_after_buttons' ); ?>
    		</div>
    	</div>
    </div>

<?php else : ?>


<?php endif; ?>

<?php do_action( 'woocommerce_after_mini_cart' ); ?>
