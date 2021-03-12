<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
	

<main class="vedway-product-main ">

				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>

					<?php wc_get_template_part( 'content', 'single-product' ); ?>

				<?php endwhile; // end of the loop. ?>


			
		
	
</main>
<div id="ingredients">
	<div class="container">
		<div class="card">
			<div class="header_card">
				<svg id='close' onclick="single_extras('close')" xmlns="http://www.w3.org/2000/svg" width="35.351"
					height="35.351" viewBox="0 0 35.351 35.351">
					<path
						d="M42.875,11.058,39.34,7.523,25.2,21.664,11.058,7.523,7.523,11.058,21.664,25.2,7.523,39.34l3.535,3.535L25.2,28.734,39.34,42.875l3.535-3.535L28.734,25.2Z"
						transform="translate(-7.523 -7.523)" fill="#fff" /></svg>
				<h2>Ingredients list</h2>
			</div>
			<div class="content">
				<img id='card_img' src="<?php echo vedway_dir_imgs().'single-graph.png' ?>" width="" alt="" srcset="">
				<div class="lists">
					<ul class="list_1">
						<li> Whole Moong</li>
						<li>Kulith</li>
						<li>Medicated Ghee</li>
						<li> Almonds</li>
						<li> Flaxeeds</li>
						<li> Gudmar</li>
						<li> Kutaki</li>
					</ul>

					<ul class="list_2">
						<li>Guduchi Satva</li>
						<li>Ashwagandha</li>
						<li>Haridra</li>
						<li>Tulasi</li>
						<li> Haritaki</li>
						<li>Shatavari</li>
						<li> Shilajit</li>
					</ul>

					<ul class="list_3">
						<li> Suntha</li>
						<li>Shankha Bhasma</li>
						<li>Loha Bhasma
						</li>
						<li>Jambhul Seeds
						</li>
						<li> Methi Seeds
						</li>
						<li> Namak (Rock salt)
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="nutrition">
	<div class="container">
		<div class="card">
			<div class="header_card">
				<svg id='close' onclick="single_extras('close')" xmlns="http://www.w3.org/2000/svg" width="35.351"
					height="35.351" viewBox="0 0 35.351 35.351">
					<path
						d="M42.875,11.058,39.34,7.523,25.2,21.664,11.058,7.523,7.523,11.058,21.664,25.2,7.523,39.34l3.535,3.535L25.2,28.734,39.34,42.875l3.535-3.535L28.734,25.2Z"
						transform="translate(-7.523 -7.523)" fill="#fff" /></svg>
				<h2>nutrition chart</h2>
			</div>
			<div class="content">
				<img id='card_img' src="<?php echo vedway_dir_imgs().'single-graph.png' ?>" width="" alt="" srcset="">
				<div class="lists">
					<ul class="list_1">
						<li> Whole Moong</li>
						<li>Kulith</li>
						<li>Medicated Ghee</li>
						<li> Almonds</li>
						<li> Flaxeeds</li>
						<li> Gudmar</li>
						<li> Kutaki</li>
					</ul>

					<ul class="list_2">
						<li>Guduchi Satva</li>
						<li>Ashwagandha</li>
						<li>Haridra</li>
						<li>Tulasi</li>
						<li> Haritaki</li>
						<li>Shatavari</li>
						<li> Shilajit</li>
					</ul>

					<ul class="list_3">
						<li> Suntha</li>
						<li>Shankha Bhasma</li>
						<li>Loha Bhasma
						</li>
						<li>Jambhul Seeds
						</li>
						<li> Methi Seeds
						</li>
						<li> Namak (Rock salt)
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
