<?php
/**
 * Reg Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-reg.php.
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

<div class="vedway-account">
    <div class="container">
        <div class="woocommerce">
            <div class="inner">
                <div class="_register">
                    <h1>Create an account</h1>
                    <p class='_sub'>Use your credentials to access your account.</p>
                    <form method="post" class="woocommerce-form woocommerce-form-register register">
                        <p class="reg_fields">
                            <input type="text" name="userFname" id="reg_name" autocomplete="John Doe" value=""
                                placeholder="Full name" />

                        </p>
                        <p class="reg_fields">

                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
                                name="username" id="reg_username" autocomplete="username" value=""
                                placeholder="username" />
                        </p>

                        <p class="reg_fields">

                            <input type="email" class="woocommerce-Input woocommerce-Input--text input-text"
                                name="email" id="reg_email" autocomplete="email" value="" placeholder="Email address" />
                        </p>
                        <p class="reg_fields">
                            <input type="text" name="userFname" id="reg_dob" autocomplete="01/01/2021" value=""
                                placeholder="DOB" />

                        </p>
                        <p class="reg_fields radio">

                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male"> male</label><br>

                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female"> female</label><br>

                            <input type="radio" id="others" name="gender" value="others">
                            <label for="others"> others</label><br><br>

                        </p>
                        <p class="reg_fields">
                            <input type="tel" name="" id="mob">
                        </p>
                        <p class="reg_fields">

                            <input type="password" class="woocommerce-Input woocommerce-Input--text input-text"
                                name="password" id="reg_password" autocomplete="new-password"
                                placeholder="Create Password*" />
                            <input type="password" class="woocommerce-Input woocommerce-Input--text input-text"
                                name="password" id="reg_password" autocomplete="new-password"
                                placeholder="Conform Password*" />
                        </p>


                        <?php do_action( 'woocommerce_register_form' ); ?>

                        <p class="woocommerce-form-row form-row">
                            <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                            <button type="submit"
                                class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit"
                                name="register"
                                value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
                        </p>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>