<?php
        if(have_posts()) {
            while(have_posts()) : the_post();
            
        endwhile;
        }
    ?>

<div class="vedway-account">
    <div class="container">
            <?php the_content(); ?>

    </div>
</div>