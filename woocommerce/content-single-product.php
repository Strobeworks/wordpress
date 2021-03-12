<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<section class="vedway-product-single ">

	<div class="container">

		<div class="vedway_single_top">
			<div class="productImg">

				<a href="<?php echo get_the_permalink() ?>"><img src="<?php the_post_thumbnail_url('medium') ?>" alt=""
						srcset="" /></a>
			</div>
			<div class="productInfo">
				<div class="info">
					<div class="blockOne">
						<h1 class="header_single">
							<?php 
                      echo get_the_title();
                    ?>
						</h1>
						<h2>
							For Adults
						</h2>
						<p style="white-space: break-spaces;"><?php echo substr(get_the_excerpt( ),0,100) ?></p>
						<div class="price">
							<h3> <?php woocommerce_template_loop_price() ?> </h3>
						</div>


					</div>
					<div class="blockTwo">
						<?php woocommerce_template_single_add_to_cart();?>
					</div>

				</div>
				<div class="single_extra">
					<div class="list">
						<span><img src="<?php echo vedway_dir_imgs().'single-list.png' ?>" alt="" srcset=""></span>
						<button class="btn_secondary" onClick="single_extras('list')"><a>Ingredients
								List</a></button>
					</div>
					<div class="chart">
						<span><img src="<?php echo vedway_dir_imgs().'single-graph.png' ?>" alt="" srcset=""></span>
						<button class="btn_secondary" onclick="single_extras('chart')"><a>Nutrition
								Chart</a></button>

					</div>
				</div>
			</div>

		</div>

	</div>
</section>



<?php
	woocommerce_output_related_products();
?>