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

<div  <?php wc_product_class( 'vedway-product ', $product ); ?>>
    <div class="container">
        <div class="productImg">
          <a href="<?php echo get_the_permalink() ?>"><img src="<?php the_post_thumbnail_url('medium') ?>" alt="" srcset="" /></a>
        </div>
        <div class="productInfo">
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
                  <?php the_content(); ?>
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

