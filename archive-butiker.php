<?php get_header();?>

<?php

if ( have_posts() ) {    
    while ( have_posts() ) {    

        the_post();

        ?>

        <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?> </a>
        <?php the_content(); ?>

        <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?> </a>

        <?php

    } 

}?> 

<?php get_footer();?>