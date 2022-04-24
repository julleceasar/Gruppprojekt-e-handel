<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="">
                     
                    <?php
                        while ( have_posts() ) {
                     the_post(); ?>
                    <?php the_post_thumbnail();?> >
                    <?php get_template_directory_uri("category", "design"); ?>

                    <?php }?>
                </div>
            </div>	
        </div>
	</section>
</main>



<?php get_footer(); ?>