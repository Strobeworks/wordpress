<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href= <?php echo vedway_dir_imgs()."favicon.ico"?> type="image/x-icon">
  <?php wp_head()?>
  </head>

<body <?php body_class(); ?>>
<aside class="sideMenu">
    <div class="container">
      <hr />
      <nav>
        <ul>
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
        </ul>
      </nav>
      <hr>
      <a href="#" id="menuIco">Close</a>
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
        <a href="<?php echo wc_get_cart_url(); ?>" id="shop"><img src=<?php echo vedway_dir_imgs()."shop-icon.svg"?> alt="shop" /></a>
        <a href="#" id="account"><img src=<?php echo vedway_dir_imgs()."account-icon.svg"?> alt="account" /></a>
        <a href="#" id="menu"><img src=<?php echo vedway_dir_imgs()."menu-icon.svg"?> alt="menu" /></a>
      </div>
    </div>
  </header>

            
