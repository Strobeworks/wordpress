<?php
        if(have_posts()) {
            while(have_posts()) : the_post();
            
        endwhile;
        }
    ?>

<div class="vedway-cart">
    <div class="container">
    <h1>SHOPPING CART</h1>
            <?php the_content(); ?>

    </div>
</div>