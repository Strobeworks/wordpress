<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.

	function vedway_menu(){
		$location=array(
			'primery'=>"primery Menu",
			'footer'=>"footer Menu"
		);
		register_nav_menus( $location );
	}

	add_action( 'init','vedway_menu' );

	function vedway_themesupport(){
		add_theme_support( 'title-tag');
		//add_theme_support( 'custom-logo');

		//vedway Woocommerce
		if (class_exists('WooCommerce')) {
			/* WooCommerce Support */
				add_theme_support( 'woocommerce' );
			// Remove WooCommerce Styles
			add_filter( 'woocommerce_enqueue_styles', '__return_false' );
		
			// Remove Shop Title
			add_filter( 'woocommerce_show_page_title', '__return_false' );
			
			// Add Support
			add_theme_support( 'wc-product-gallery-zoom' );
			add_theme_support( 'wc-product-gallery-lightbox' );
			add_theme_support( 'wc-product-gallery-slider' );
			
			function vedway_template_loop_product_img(){
				echo woocommerce_get_product_thumbnail('medium');
			}
			remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
			add_action( 'woocommerce_before_shop_loop_item_title', 'vedway_template_loop_product_img', 10 );
		
			function vedway_woocommerce_product_summary(){
				 woocommerce_template_single_rating();
				 woocommerce_template_single_excerpt();
				 woocommerce_template_single_add_to_cart();
				 woocommerce_template_single_meta();
				 woocommerce_template_single_sharing();
			}
		}

	}
	add_action('after_setup_theme','vedway_themesupport');	
	

	function vedway_dir_imgs(){
		return get_template_directory_uri()."/assets/images/";
	}

	function vedway_register_styles(){
		$version=wp_get_theme()->get('Version');
		wp_enqueue_style( 'vedway-style-main', get_template_directory_uri().'/assets/css/vedway.css',array(),$version,'all' );
		wp_enqueue_style( 'vedway-style', get_template_directory_uri().'/style.css',array(),$version,'all' );
		wp_enqueue_style( 'vedway-fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css',array(),'5.15.2','all' );
	}
	
	add_action( 'wp_enqueue_scripts','vedway_register_styles' );

	



	function vedway_register_scripts(){
		wp_enqueue_script('vedway-scripts',get_template_directory_uri().'/assets/js/vedway.js',array(),'1.0',true);
		wp_enqueue_script('vedway-JQ','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',array(),true);
	}
	
	add_action( 'wp_enqueue_scripts','vedway_register_scripts' );

	function vedway_dropdown_variation_attribute( $args = array() ) {
		$args = wp_parse_args(
		  apply_filters( 'woocommerce_dropdown_variation_attribute_options_args', $args ),
		  array(
			'options'          => false,
			'attribute'        => false,
			'product'          => false,
			'selected'         => false,
			'name'             => '',
			'id'               => '',
			'class'            => '',
			'show_option_none' => __( 'Choose an option', 'woocommerce' ),
		  )
		);
	
		// Get selected value.
		if ( false === $args['selected'] && $args['attribute'] && $args['product'] instanceof WC_Product ) {
		  $selected_key = 'attribute_' . sanitize_title( $args['attribute'] );
		  // phpcs:disable WordPress.Security.NonceVerification.Recommended
		  $args['selected'] = isset( $_REQUEST[ $selected_key ] ) ? wc_clean( wp_unslash( $_REQUEST[ $selected_key ] ) ) : $args['product']->get_variation_default_attribute( $args['attribute'] );
		  // phpcs:enable WordPress.Security.NonceVerification.Recommended
		}
	
		$options               = $args['options'];
		$product               = $args['product'];
		$attribute             = $args['attribute'];
		$name                  = $args['name'] ? $args['name'] : 'attribute_' . sanitize_title( $attribute );
		$id                    = $args['id'] ? $args['id'] : sanitize_title( $attribute );
		$class                 = $args['class'];
		$show_option_none      = (bool) $args['show_option_none'];
		$show_option_none_text = $args['show_option_none'] ? $args['show_option_none'] : __( 'Choose an option', 'woocommerce' ); // We'll do our best to hide the placeholder, but we'll need to show something when resetting options.
	
		if ( empty( $options ) && ! empty( $product ) && ! empty( $attribute ) ) {
		  $attributes = $product->get_variation_attributes();
		  $options    = $attributes[ $attribute ];
		}
		$t="alert('test')";
		$html  = '<select  style="display:none" id="' . esc_attr( $id ) . '" class="' . esc_attr( $class ) . '" name="' . esc_attr( $name ) . '" data-attribute_name="attribute_' . esc_attr( sanitize_title( $attribute ) ) . '" data-show_option_none="' . ( $show_option_none ? 'yes' : 'no' ) . '">';
		$html .= '<option value="">' . esc_html( $show_option_none_text ) . '</option>';
		if ( ! empty( $options ) ) {
		  if ( $product && taxonomy_exists( $attribute ) ) {
			// Get terms if this is a taxonomy - ordered. We need the names too.
			$terms = wc_get_product_terms(
			  $product->get_id(),
			  $attribute,
			  array(
				'fields' => 'all',
			  )
			);
	
			foreach ( $terms as $term ) {
			  if ( in_array( $term->slug, $options, true ) ) {
				$html .= '<option value="' . esc_attr( $term->slug ) . '" ' . selected( sanitize_title( $args['selected'] ), $term->slug, false ) . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $term->name, $term, $attribute, $product ) ) . '</option>';
			  }
			}
		  } else {
			foreach ( $options as $option ) {
			  // This handles < 2.4.0 bw compatibility where text attributes were not sanitized.
			  $selected = sanitize_title( $args['selected'] ) === $args['selected'] ? selected( $args['selected'], sanitize_title( $option ), false ) : selected( $args['selected'], $option, false );
			  $html    .= '<option value="' . esc_attr( $option ) . '" ' . $selected . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $option, null, $attribute, $product ) ) . '</option>';
			}
		  }
		}
	
		$html .= '</select>';

		if ( ! empty( $options ) ) {
			if ( $product && taxonomy_exists( $attribute ) ) {
			  // Get terms if this is a taxonomy - ordered. We need the names too.
			  $terms = wc_get_product_terms(
				$product->get_id(),
				$attribute,
				array(
				  'fields' => 'all',
				)
			  );
	  
			  foreach ( $terms as $term ) {
				if ( in_array( $term->slug, $options, true ) ) {
				  $html .= '<option value="' . esc_attr( $term->slug ) . '" ' . selected( sanitize_title( $args['selected'] ), $term->slug, false ) . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $term->name, $term, $attribute, $product ) ) . '</option>';
				}
			  }
			} else {
			  foreach ( $options as $option ) {
				// This handles < 2.4.0 bw compatibility where text attributes were not sanitized.
				//$selected = sanitize_title( $args['selected'] ) === $args['selected'] ? selected( $args['selected'], sanitize_title( $option ), false ) : selected( $args['selected'], $option, false );
				//$html .= '<option value="' . esc_attr( $option ) . '" ' . $selected . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $option, null, $attribute, $product ) ) . '</option>';
				$html .= '<input type="radio" onclick="vedway_available(this)" class="typeInput" value="' . esc_attr( $option ) . '" name="vedway_var_options" id="' . esc_attr( $option ) . '" ><label for="' . esc_attr( $option ) . '" class="typeLable">
					<h6>' . esc_attr( $option ) . '</h6>
					</label>';
			 }
			}
		  }
		  
		  
	
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo apply_filters( 'vedway_dropdown_variation_attribute', $html, $args );
	  }
	 

?>