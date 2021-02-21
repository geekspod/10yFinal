<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
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

do_action( 'woocommerce_before_lost_password_form' );
?>
<div class="section">
	<div class="container">
		<div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">

				<form method="post" class="form--primary account--form woocommerce-ResetPassword lost_reset_password">

                    <div class="row">

                        <div class="col-12">
    						<p><?php echo apply_filters( 'woocommerce_lost_password_message', esc_html__( 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'r-energy' ) ); ?></p><?php // @codingStandardsIgnoreLine ?>
    					</div>

                        <div class="col-12 mt-20">
    						<label class="input-label" for="user_login">
    						    <input class="form-field input" type="text" name="user_login" id="user_login" autocomplete="username" />
    						    <span><?php esc_html_e( 'Username or email', 'r-energy' ); ?></span>
    						</label>
    					</div>

    					<?php do_action( 'woocommerce_lostpassword_form' ); ?>

            			<div class="col-12">
            				<div class="button-holder">
            				    <input type="hidden" name="wc_reset_password" value="true" />
            					<button class="r-button r-button--transparent" type="submit" value="<?php esc_attr_e( 'Reset password', 'r-energy' ); ?>" data-hover="<?php esc_attr_e( 'Reset password', 'r-energy' ); ?>"><span><?php esc_attr_e( 'Reset password', 'r-energy' ); ?></span></button>
            				</div>
            			</div>

        			</div>

        			<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

				</form>

			</div>
		</div>
	</div>
</div>
<?php
do_action( 'woocommerce_after_lost_password_form' );
