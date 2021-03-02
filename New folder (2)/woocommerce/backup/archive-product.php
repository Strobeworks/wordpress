<?php get_header(); ?>
<main>
<section class="banner-section">
    <div class="banner" style="overflow: hidden; width: 100%; background-color: #e8bf71">
      <img src="../assets/images/bg-product.svg" alt="banner" width="100%" srcset="" />
    </div>
  </section>
    <?php
        if(have_posts()) {
            while(have_posts()) : the_post();
    ?>
     

  <section class="products">
    <div class="container">
      <div class="product flex">
        <div class="productImg">
          <img src="<?php the_post_thumbnail_url(  ) ?>" alt="" srcset="" />
        </div>
        <div class="productInfo">
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
          <ul>
			  <?php the_content(); ?>
          </ul>
          <div class="price">
            <h3> <?php woocommerce_template_loop_price() ?> </h3>
          </div>
          <form action="" class="productForm">
            <div class="availableType">
              <p>Available</p>
			  <?php 
			  	do_shortcode( '[add_to_cart_form id=34]' );
			
 				?>
              <div class="types">
                <input type="radio" class="typeInput" value="type1" name="radio" id="type1" checked>
                <label for="type1" class="typeLable">
                  <h6>Single Pack</h6>
                </label>

                <input type="radio" class="typeInput" value="type2" name="radio" id="type2">
                <label for="type2" class="typeLable">
                  <h6>Pack of Five</h6>
                </label>


                <a href="#">Select a size</a>
              </div>
            </div>

            <div class="quantity">
              <p>Quantity</p>
              <input type="number" name="" placeholder="1" id="" min="1" />
            </div>
            <button class="btnAlternate" type="submit">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>
  </section>  

      
    <?php endwhile; } ?>

</main>
<?php get_footer(); ?>