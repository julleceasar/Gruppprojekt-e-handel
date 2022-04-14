<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body>


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
								   'theme_location' => 'headermenu',
								   /* 'menu' => ' ',
								   'container' => 'div',
								   'menu_class' => 'collapse navbar-collapse',
								   'container_class' => 'collapse navbar-collapse' */
								   
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