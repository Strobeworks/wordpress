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
			'aside'=>"aside Menu",
			'footer'=>"footer Menu",
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
			
			function vedway_dequeue_styles( $enqueue_styles ) {
					
					if(is_cart() | is_checkout()|is_account_page()){
						return $enqueue_styles;
					}else{
						unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
						unset( $enqueue_styles['woocommerce-layout'] );	// Remove the gloss
						unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
						return $enqueue_styles;
					}
						
					
					
			}
			add_filter( 'woocommerce_enqueue_styles', 'vedway_dequeue_styles' );

			
			function slug_disable_woocommerce_block_editor_styles() {
					wp_deregister_style( 'wc-block-editor' );
					wp_deregister_style( 'wc-block-style' );
			}
			add_action( 'enqueue_block_assets', 'slug_disable_woocommerce_block_editor_styles', 1, 1 );
			
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
	
	function vedway_product_img_bg(){
		static $r=0;
		
		$img=[
			vedway_dir_imgs().'itembg1.png',
			vedway_dir_imgs().'itembg2.png',
			vedway_dir_imgs().'itembg3.png',
			vedway_dir_imgs().'itembg4.png',
		];

		$send=$img[$r];
		++$r;
		return $send;
		
	}

	function vedway_register_styles(){
		$version=wp_get_theme()->get('Version');
		wp_enqueue_style( 'vedway-style-main', get_template_directory_uri().'/assets/css/vedway.css',array(),$version,'all' );
		wp_enqueue_style( 'vedway-style', get_template_directory_uri().'/style.css',array(),$version,'all' );
		wp_enqueue_style( 'vedway-fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css',array(),'5.15.2','all' );
		if(is_page( 'contact-us') || is_page( 'blog')){
			wp_enqueue_style( 'vedway-style-pages', get_template_directory_uri().'/assets/css/vedway_pages.css',array(),$version,'all' );
		}
		if(is_front_page()){
			wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
			wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
		}
	}
	
	add_action( 'wp_enqueue_scripts','vedway_register_styles' );

	/**
	 * Redirect users after add to cart.
	 */
	function my_custom_add_to_cart_redirect( $url ) {

		$url = get_permalink( wc_get_page_id( 'shop' ) ); 

		return $url;

	}
	add_filter( 'woocommerce_add_to_cart_redirect', 'my_custom_add_to_cart_redirect' );

	function get_vedway_floating_cart_items(){
		echo "<div class='vedway_floating_cart_items'>";
		$cart = WC()->cart;
		if($cart){
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
	
				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?><div class="vedway_floating_cart_item">
						<div class="_floating_thumb">
							<?php
							$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
	
							if ( ! $product_permalink ) {
								echo $thumbnail; // PHPCS: XSS ok.
							} else {
								printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
							}
							?>
						</div>

						<div class="_floating_blocks">
							<div class="_floating_block">
								<div class="_floating_name">
								<?php
								if ( ! $product_permalink ) {
									echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
								} else {
									echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
								}
		
								do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );
		
								// Meta data.
								echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.
		
								// Backorder notification.
								if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
									echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
								}
								?>
								
								
								</div>
								<div class="_floating_remove">
									<?php
										echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
											'woocommerce_cart_item_remove_link',
											sprintf(
												'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fas fa-times"></i></a>',
												esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
												esc_html__( 'Remove this item', 'woocommerce' ),
												esc_attr( $product_id ),
												esc_attr( $_product->get_sku() )
											),
											$cart_item_key
										);
									?>
								</div>
							</div>
			
						<div class="_floating_block">
							<div class="_floating_quantity">
								<?php
									if ( $_product->is_sold_individually() ) {
										$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
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
							<div class="_floating_price">
							
								<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
							</div>
						</div>
						</div>

						</div>
					<?php
				}
			}
		}

		if(!$cart->get_cart()){
			echo 'Your cart is empty';
		}
		?>
		</div>
		<div class="floating_checkout">
			<?php 
			if($cart->get_cart()){
			  echo '<p>subtotal <span>';
			  wc_cart_totals_subtotal_html();
			  echo '</span> </p>';
			}
			if(!$cart->get_cart()){
				echo '<p>subtotal &#8377;0<span>';
				echo '</span> </p>';
			  }
			

			?>
			<a href="<?php echo wc_get_cart_url() ?>"><button > <i class="fas fa-shopping-cart"></i></button> </a>
			
		</div>

		<?php
		
	}


	function vedway_register_scripts(){
		wp_enqueue_script('vedway-scripts',get_template_directory_uri().'/assets/js/vedway.js',array(),'1.0',true);
		if(!is_front_page()){
		wp_enqueue_script('vedway-JQ','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',array(),true);

		}		
		if(is_front_page()){
			wp_enqueue_script('aos','https://unpkg.com/aos@2.3.1/dist/aos.js',true);
			wp_enqueue_script('swiper','https://unpkg.com/swiper/swiper-bundle.min.js',true);
			wp_enqueue_script('vedway-front',get_template_directory_uri().'/assets/js/vedway-front.js',array('swiper'),'1.0',true);

		}
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
				$checkbox='';
				$labelId= str_replace(" ","_",$product->name.$option);
				if($product->weight){
					$qty='<p>'. $product->weight.'g</p>';
				}else{
					$qty='<p>  </p>';
				}
				if($args['selected']==$option){
					$checkbox='checked';
				}
				$html .= '<input type="radio" onclick="vedway_available(this)"  '.$checkbox.' class="typeInput" value="' . esc_attr( $option ) . '" name="vedway_var_options" id="' . $labelId . '" ><label for="' . $labelId . '" class="typeLable">
					<h4>' . esc_attr( $option ) . '</h4>'.$qty.'
					</label>';
			 }
			}
		  }
		  
		  
	
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo apply_filters( 'vedway_dropdown_variation_attribute', $html, $args );
	  }
	 

?>