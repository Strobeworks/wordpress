<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href=<?php echo vedway_dir_imgs()."favicon.ico"?> type="image/x-icon">
  <?php wp_head()?>
</head>

<body <?php body_class(); ?>>
  <aside class="sideMenu">
    <div class="container">
      <nav>

        <?php 
            wp_nav_menu( 
              array(
                'menu'=>'aside',
                'container'=>'',
                'theme_location'=>'aside',
                'items_wrap'=>'<ul id="headMenu" class=""> %3$s</ul>'
              )

            );
          ?>


      </nav>
      <a href="#" id="menuIco"><i class="fas fa-arrow-right"></i></a>
    </div>
  </aside>
  <header>
    <div class="container">
      <div class="logo">
        <a href="/"><img src=<?php echo vedway_dir_imgs()."vadway-logo.svg"?> width="100%" alt="vadway logo" /></a>
      </div>
      <nav>
        <?php 
            wp_nav_menu( 
              array(
                'menu'=>'primery',
                'container'=>'',
                'theme_location'=>'primery',
                'items_wrap'=>'<ul id="headMenu" class=""> %3$s</ul>'
              )

            );
          ?>

      </nav>
      <div class="misc">
        <a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>" id="account"><img
            src=<?php echo vedway_dir_imgs()."account-icon.svg"?> alt="account" /></a>
        <?php  if(is_user_logged_in()){
         // echo 'true';
          } ?>
        <a href="#" id="menu"><img src=<?php echo vedway_dir_imgs()."menu-icon.svg"?> alt="menu" /></a>
      </div>

    </div>
    <div class="vedway_floating">
      <div class="sale_banner" id="sale_banner_" onclick="sale_bannerToggle()">
        <h5>20% off on all </h5>
        <i class="fas fa-times"></i>
      </div>
      <div class="sale_card " id="sale_card_">
        <div class="sale_container">
          <h4>GET FLAT 10% OFF</h4>
          <p>Fill Up the form below and get flat 10% Off on your order!</p>
          <?php echo do_shortcode( "[wpforms id='98']" ); ?>
        </div>
      </div>
      <div class="vedway_floating_cart" onclick="floating_cart_toggle()">
      <p><?php  ?></p>
      <span class="cart_"><i class="fas fa-shopping-cart"></i></span>
      <span class="close_"><i class="fas fa-times"></i></span>
      </div>
      <div class="vedway_floating_cart_inner" >
      <?php
          
          get_vedway_floating_cart_items();
    
       
        ?>
      </div>
    </div>
  </header>