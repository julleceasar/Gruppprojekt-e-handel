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

<h3><b>Karta:  </b></h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2095.8860726943767!2d11.9093957!3d57.6518573!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464ff248003e93b7%3A0xdb4288c864984cc6!2sFr%C3%B6lunda%20Torg!5e1!3m2!1ssv!2sse!4v1651230278071!5m2!1ssv!2sse" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	



		
	</div><!-- #primary -->


<?php
/* do_action( 'storefront_sidebar' ); */
get_footer();