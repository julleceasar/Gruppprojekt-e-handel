<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="">
               
            	    <artical> 
                    <?php
    					while (have_posts()) {
        	        		the_post();?>

                	    <?php the_post_thumbnail();?>    
						<h1><?php the_title(); ?></h1></a>
						<p><?php the_content(); ?></p>

					 <?php } ?>	
                    </artikel>
	 
                </div>
            </div>
		</div>
	</section>
</main>

<?php get_footer(); ?>