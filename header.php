
<?php
/**
 * Header template.
 * 
 * @package Projektarbete-e-handel
 */

 ?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    

    <body <?php body_class();?>>

    <?php 
    if (function_exists('wp_body_open')){
        wp_body_open();
    }
    ?>


	<header id="header">

	<div class="banner">
		<p class="banner-text">FÅ 30 % RABATT MED KODEN SHOP30</p>
		<p class="banner-text">60 DAGARS* GRATIS BYTE OCH RETUR</p>
		<p class="banner-text">Fri frakt och retur</p>
	</div>
		

    </div>
	
    
  </div>

		<nav class="navbar navbar-expand-sm navbar-light bg-light">
			<a href="#" class="navbar-brand">SportCeasar</a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarMenu">
				<ul class="navbar-nav m-auto">
				
					<!-- <li class="nav-item">
						<a href="#" class="nav-link">BAJS</a>
					 </li>  -->
					 
					 <li class="nav-item">
						<!-- <a href="#" class="nav-link">KISS</a>  -->
						<?php $menuarray = [
								   'theme_location' => 'headermenu'
								   
								   ]; ?>
			  
								  <?php wp_nav_menu($menuarray); ?>	
						
						
					 </li> 
				 

	
				</ul> 
				
				<!-- <ul class="navbar-nav">
					<li class="nav-item">
						<a href="#" class="nav-link">Users</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Products</a>
					</li> -->
					

					<?php get_search_form(); ?>
					
				</ul>
			</div>
		</nav>


	</header>

