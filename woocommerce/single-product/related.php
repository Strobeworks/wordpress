<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related products">
		<h2>OTHER PRODUCTS</h2>
		<div class="container">
			<div class="products">
				
			<?php foreach ( $related_products as $related_product ) : ?>

					<?php
					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found


					?>
					<div class="_product">
					<a href="<?php echo get_the_permalink() ?>">
					<div class="card">
						<img src="<?php echo the_post_thumbnail_url('medium') ?>" alt="" width="50px" srcset="">
					</div>
					</a>
					<h4><?php echo $related_product->get_title()?></h4>

				</div>

					<?php endforeach; ?>

			</div>
		</div>			
		

			


	</section>
	<?php
endif;

wp_reset_postdata();
