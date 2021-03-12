<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

?>

<div <?php wc_product_class( 'vedway-product ', $product ); ?>>
      <svg xmlns="http://www.w3.org/2000/svg" width="673.952" height="727.252" viewBox="0 0 673.952 727.252">
        <defs>
          <style>
            .productsSvg {
              fill: rgba(247, 230, 212, 0.8);
              opacity: 1;
            }
          </style>
        </defs>
        <path class="productsSvg"
          d="M554.858,727.252l-32.93-75-189.287-431.1L118.16,727.252H0l288.054-623.5H0V0H673.952V103.749H378.389l295.562,623.5Z" />
      </svg>
    <div class="container">
   

    <div class="productInner">
      <div class="productImg">
        <img id='product_img_bg' src="<?php echo vedway_product_img_bg(); ?>" alt="" srcset="" />
        <a href="<?php echo get_the_permalink() ?>"><img src="<?php the_post_thumbnail_url('medium') ?>" alt=""
            srcset="" /></a>
      </div>
      <div class="productInfo">
        <div class="blocks">
          <div class="blockOne">
            <h2 class="header">
              <?php 
                $head=get_the_title();
                $head=explode(" ",$head);
                if(sizeof($head)>1){
                  echo "<span>".$head[0]."</span> <br>";
                  for($i=1;$i<=sizeof($head);$i++){
                    echo $head[$i];
                  }
                }
              ?>
            </h2>
            <p><?php echo get_the_content(); ?></p>
            <div class="price">
              <h3> <?php woocommerce_template_loop_price() ?> </h3>
            </div>


          </div>
          <div class="blockTwo">

            <?php woocommerce_template_single_add_to_cart();?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>