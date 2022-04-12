<!-- Exempel code for us -->


<!-- Sidebar -->

<aside id="secondary" class="">
	<div id="sidebar">
    <ul role="navigation">
			<li class="pagenav">
                <?php dynamic_sidebar("");?>
                </li>
		</ul>
	</div>
</aside>
                         

<!-- Pagination -->
<nav class="navigation pagination">
	<h2 class="screen-reader-text"></h2>
		<?php the_posts_pagination( array(
    		'mid_size'  => 2,
			'prev_text' => __( 'Föregående', 'textdomain' ),
    		'next_text' => __( 'Nästa', 'textdomain' ),
		));
	?>				
</nav>

 <!-- Skriver ut datum, författare och kategorier -->
 <ul class="meta">
	<li>
	    <i class="fa fa-calendar"><?php the_time( 'j F, Y' ); ?></i>
		<i class="fa fa-user"><?php the_author_posts_link(); ?></i>
		<i class="fa fa-tag"><?php the_category( ', ' ); ?></i>
	</li>
</ul>


<!-- Skriver ut utdrag på sidan från blogginlägg -->
<p><?php the_excerpt();?></p>