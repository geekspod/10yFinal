<?php
/**
 * Lost password reset form.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-reset-password.php.
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

do_action( 'woocommerce_before_reset_password_form' );
?>
<div class="section">
	<div class="container">
		<div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">

				<form method="post" class="form--primary account--form woocommerce-ResetPassword lost_reset_password">

					<div class="col-12">
					    <p><?php echo apply_filters( 'woocommerce_reset_password_message', esc_html__( 'Enter a new password below.', 'r-energy' ) ); ?></p><?php // @codingStandardsIgnoreLine ?>
					</div>

					<div class="col-12 mt-20">
						    <label class="input-label" for="password_1">
						    <input type="password" class="form-field input" name="password_1" id="password_1" autocomplete="new-password" />
						    <?php esc_html_e( 'New password', 'r-energy' ); ?>&nbsp;<span class="required">*</span>
						</label>
					</div>

					<div class="col-12 mt-20">
						    <label class="input-label" for="password_2">
						    <input type="password" class="form-field input" name="password_2" id="password_2" autocomplete="new-password" />
						    <?php esc_html_e( 'Re-enter new password', 'r-energy' ); ?>&nbsp;<span class="required">*</span>
						</label>
					</div>

					<input type="hidden" name="reset_key" value="<?php echo esc_attr( $args['key'] ); ?>" />
					<input type="hidden" name="reset_login" value="<?php echo esc_attr( $args['login'] ); ?>" />

					<div class="clear"></div>

					<?php do_action( 'woocommerce_resetpassword_form' ); ?>

        			<div class="col-12">
        				<div class="button-holder">
        				    <input type="hidden" name="wc_reset_password" value="true" />
        					<button class="r-button r-button--transparent" type="submit" value="<?php esc_attr_e( 'Save', 'r-energy' ); ?>" data-hover="<?php esc_attr_e( 'Save', 'r-energy' ); ?>"><span><?php esc_attr_e( 'Save', 'r-energy' ); ?></span></button>
        				</div>
        			</div>

					<?php wp_nonce_field( 'reset_password', 'woocommerce-reset-password-nonce' ); ?>

				</form>

			</div>
		</div>
	</div>
</div>
<?php
do_action( 'woocommerce_after_reset_password_form' );
