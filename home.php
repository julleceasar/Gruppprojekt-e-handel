<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="">
                    <h1><?php wp_title(""); ?></h1>

					<article> 
			   			
						<?php
                			while (have_posts()) {
            					the_post();?>
                        	<?php the_post_thumbnail("");?>
                            <h2 class="title">
								<a href="<?php the_permalink();?>">
								<h1><?php the_title(); ?></h1></a>
							</h2>
						<?php } ?>
                        
					</article>
                </div>
            </div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
