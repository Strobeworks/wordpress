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
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>



<div class="inner">
	
	<div class="_login">
		<h1>Login to account</h1>
		<p class='_sub'>Use your credentials to access your account.</p>
		<form class="woocommerce-form woocommerce-form-login login" method="post">

			<?php do_action( 'woocommerce_login_form_start' ); ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username"><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span
						class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username"
					id="username" autocomplete="username" placeholder="Email Address"
					value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span
						class="required">*</span></label>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password"
					placeholder="Password" id="password" autocomplete="current-password" />
			</p>

			<?php do_action( 'woocommerce_login_form' ); ?>

			<p class="form-row misc">
				<label
					class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme"
						type="checkbox" id="rememberme" value="forever" />
					<span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
				</label>
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				<a
					href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Forgot password?', 'woocommerce' ); ?></a>

			</p>
			<p class="woocommerce-LostPassword lost_password">
				<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login"
					value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>">
					<h4><?php esc_html_e( 'Log in', 'woocommerce' ); ?></h4>
				</button>
				<button type="" class="woocommerce-form-login__submit guest" name="" value="">
					<h4>Continue as a guest</h4>
				</button>
			</p>

			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>
	</div>



	<h4>Don’t have an account? <a href="reg/">Sign-in here.</a></h4>




</div>



<?php do_action( 'woocommerce_after_customer_login_form' ); ?>