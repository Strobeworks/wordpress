<?php get_header(); ?>
<?php if(is_page( 'about-us') ){
        include 'vedway-pages/about-us.php';
    
    }elseif(is_page( 'contact-us')){
        include 'vedway-pages/contact-us.php';

    }elseif(is_page( 'cart-disabled')){
        include 'vedway-pages/cart.php';        
    
    }elseif(is_page( 'disable-my-accounts')){
        include 'vedway-pages/my-account.php';
    
    }elseif(is_page( 'disable-reg')){
        include 'vedway-pages/form-reg.php';
    
    }else{
    
    ?>
<main>
    <div class="container" id="page_">
        <div class="page_inner">
            

            <!--<h1 class="page-hero__heading page.php"><?php //the_title(); ?></h1>-->


            <?php the_content(); ?>

        </div>

    </div>
</main>
<?php }?>
<?php get_footer(); ?>