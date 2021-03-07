<?php get_header(); ?>
<?php if(is_page( 'about-us') ){
        include 'vedway-pages/about-us.php';
    
    }elseif(is_page( 'contact-us')){
        include 'vedway-pages/contact-us.php';

    }elseif(is_page( 'cart')){
        include 'vedway-pages/cart.php';        
    
    } else{
    
    ?>
<main>
    <div class="container" id="page_">
        <div class="page_inner">
            <?php
        if(have_posts()) {
            while(have_posts()) : the_post();
            if(get_the_title()=='about-us'){
                wc_get_template_part( 'content', 'product' );
            }
        endwhile;
        }
    ?>

            <h1 class="page-hero__heading page.php"><?php the_title(); ?></h1>


            <?php the_content(); ?>

        </div>

    </div>
</main>
<?php }?>
<?php get_footer(); ?>