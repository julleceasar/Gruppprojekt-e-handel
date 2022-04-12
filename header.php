<!DOCTYPE html>
<html>

<head> 
	<meta charset="UTF-8"/>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
  
<body> 


	<div id="wrap">

	<header id="header">
			<div class="container">
				<div class="row">
					<div class="">

                    <nav id="nav">
				        <div class="container">
					        <div class="row">
						        <div class="">

                            <!-- Navigerings-Meny -->
							<?php  wp_nav_menu(array(
							   'theme_location' => 
							   ''
							   ));
						   ?>
						</div>
					</div>
				</div>
			</nav>
		</header>
