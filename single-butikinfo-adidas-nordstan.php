<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

	<div id="content-wrap" class="container clr">
			<h1><?php the_title(); ?></h1>
        

	
     
			
<h3><b>Adress:</b> <i><?php the_field('adress'); ?></i>	</h3> 

<h3><b>Postnummer:</b> <i><?php the_field('postnummer'); ?></i> </h3>

<h3><b>Telnr:</b> <i><?php the_field('telefonnummer'); ?> </i></h3>

<h3><b>Öppetider:</b> <i><?php the_field('oppetider'); ?> </i></h3>

<h3><b>Karta:</b></h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d545652.774170268!2d11.408839765624998!3d57.70870910000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464ff363f5374bcb%3A0xfc7ac7ea2ddb942!2sNordstan!5e0!3m2!1ssv!2sse!4v1651229492196!5m2!1ssv!2sse" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

	



	
    

	
	</div><!-- #primary -->


<?php
/* do_action( 'storefront_sidebar' ); */
get_footer();