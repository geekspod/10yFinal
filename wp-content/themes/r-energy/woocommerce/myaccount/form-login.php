<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
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
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>
<div class="section">
	<div class="container">
		<div class="row align-items-center justify-content-center">

            <div class="col-6">
				<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
				<div class="" id="customer_login">
				<?php endif; ?>
                	<form class="form--primary account--form woocommerce-form woocommerce-form-login login" method="post">

                	    <?php do_action( 'woocommerce_login_form_start' ); ?>

                		<div class="row">

                			<div class="col-12">
                				<h4 class="form-title"><?php esc_html_e( 'Login', 'r-energy' ); ?></h4>
                			</div>

                			<div class="col-12">
                				<label class="input-label">
                					<input type="text" class="form-field input" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                					<span><?php esc_html_e( 'Username or email address', 'r-energy' ); ?></span>

                				</label>
                			</div>

                			<div class="col-12">
                				<label class="input-label">
                					<input class="form-field input" type="password" name="password" id="password" autocomplete="current-password" />
                					<span><?php esc_html_e( 'Password', 'r-energy' ); ?></span>
                				</label>
                			</div>

                			<?php do_action( 'woocommerce_login_form' ); ?>

                			<div class="col-12 d-flex justify-content-between">
                				<label>
                					<input class="checkbox checkbox--primary woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" />
                					<span class="checkbox--primary-mask"></span>
                					<span class="name"><?php esc_html_e( 'Remember me', 'r-energy' ); ?></span>
                				</label>
        						<p class="woocommerce-LostPassword lost_password mb-0">
        							<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'r-energy' ); ?></a>
        						</p>
                			</div>

                			<div class="col-12">
                				<div class="button-holder">
                				    <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                					<button class="r-button r-button--transparent" type="submit"  name="login"  value="<?php esc_attr_e( 'Log in', 'r-energy' ); ?>" data-hover="<?php esc_html_e( 'Log in', 'r-energy' ); ?>"><span><?php esc_html_e( 'Log in', 'r-energy' ); ?></span></button>
                				</div>
                			</div>

                		</div>
                		<?php do_action( 'woocommerce_login_form_end' ); ?>
                	</form>
                </div>
                </div>

                <?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
            	    <div class="col-6">
                    <form method="post" class="form--primary account--form woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
                    	<div class="row">

                    		<div class="col-12">
                    			<h4 class="form-title"><?php esc_html_e( 'Register', 'r-energy' ); ?></h4>
                    		</div>

						    <?php do_action( 'woocommerce_register_form_start' ); ?>

						    <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
                    		<div class="col-12">
                    			<label class="input-label">
                    				<input type="text" class="form-field input input-name" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                                    <span><?php esc_html_e( 'Username', 'r-energy' ); ?>&nbsp;<span class="required">*</span></span>
                    			</label>
                    		</div>
						    <?php endif; ?>

                    		<div class="col-12">
                    			<label class="input-label">
                    				<input type="email" class="form-field input input-email" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                                    <span><?php esc_html_e( 'Email address', 'r-energy' ); ?>&nbsp;<span class="required">*</span></span>
                    			</label>
                    		</div>


    						<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

                        		<div class="col-12">
                        			<label class="input-label">
                        				<input type="password" class="form-field input input-password" name="password" id="reg_password" autocomplete="new-password" />
                                        <span><?php esc_html_e( 'Password', 'r-energy' ); ?>&nbsp;<span class="required">*</span></span>
                        				<div class="password-trigger" toggle="#password-field_2"><svg class="icon"><use xlink:href="#eye"></use></svg>
                        				</div>
                        			</label>
                        		</div>

    						<?php else : ?>

    							<div class="password-form-info"><div class="col-12"><p><?php esc_html_e( 'A password will be sent to your email address.', 'r-energy' ); ?></p></div>

    						<?php endif; ?>

    						<div class="col-12"><?php do_action( 'woocommerce_register_form' ); ?></div>

                    		<div class="col-12">
                    			<div class="button-holder">
                    			    <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                    				<button type="submit" class="r-button r-button--transparent" name="register" value="<?php esc_attr_e( 'Register', 'r-energy' ); ?>" data-hover="<?php esc_html_e( 'Register', 'r-energy' ); ?>"><span><?php esc_html_e( 'Register', 'r-energy' ); ?></span></button>
                    			</div>
                    		</div>

                    		<?php do_action( 'woocommerce_register_form_end' ); ?>

                    	</div>
                    </form>
            	</div>

				<?php endif; ?>


        </div>
    </div>
</div>
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
