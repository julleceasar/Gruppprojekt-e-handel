<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="">
                     
                    <?php
                        while ( have_posts() ) {
                            the_post(); ?>

                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>

                    <?php }?>
                </div>
            </div>	
        </div>
	</section>
</main>

<?php get_footer(); ?>

<?php $menuarray = [
								   'theme_location' => 'headermenu',
								   /* 'menu' => ' ',
								   'container' => 'div',
								   'menu_class' => 'collapse navbar-collapse',
								   'container_class' => 'collapse navbar-collapse' */
								   
								   ]; ?>
			  
								  <?php wp_nav_menu($menuarray); ?>