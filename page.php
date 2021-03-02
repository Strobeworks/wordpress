<?php get_header(); ?>
<main>
   
    <?php
        if(have_posts()) {
            while(have_posts()) : the_post();
    ?>

        <h1 class="page-hero__heading page.php"><?php the_title(); ?></h1>


    <?php the_content(); ?>    
    <?php endwhile; } ?>

</main>
<?php get_footer(); ?>