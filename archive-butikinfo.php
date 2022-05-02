<?php get_header();?>

<?php


	
    while ( have_posts() ) :
        the_post();
        ?>

        <div id="content-wrap" class="container clr">
            <?php the_content(); ?>
            <a href="<?php the_permalink(); ?> "><h1><?php the_title(); ?></h1></a>
             
        </div><!-- .entry-content -->

    <?php endwhile; ?>

 

<?php get_footer();?>