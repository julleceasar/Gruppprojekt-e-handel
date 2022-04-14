	<!-- <header id="header"> -->
<!-- 
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid d-flex justify-content-around">
			<a class="navbar-brand" href="#">Fixed top</a>
			<a class="navbar-brand" href="#">Fixed top</a>
			<a class="navbar-brand" href="#">Fixed top</a>
		</div>


	</nav> -->

	
    <div class="row bg-dark">
    <div class="col d-flex justify-content-center text-white">
      1 of 3
    </div>
    <div class="col d-flex justify-content-center">
      2 of 3
    </div>
    <div class="col d-flex justify-content-center">
      3 of 3
    </div>
  </div>


	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
		<div class="container">
			<div class="container-fluid d-flex justify-content-between">

				<div class="col-sm d-flex justify-content-start">
					<a class="navbar-brand" href="#">ADIDAS</a>

				</div>

				<div class="col-l d-flex justify-content-center">

					<?php $menuarray = ['theme_location' => 'mainmenu']; ?>

					<?php wp_nav_menu($menuarray); ?>

				</div>

				<div class="col-sm d-flex justify-content-end">
				<!-- 	<a class="navbar-brand" href="#">Fixed top</a>
					<a class="navbar-brand" href="#">Fixed top</a> -->
					
					<?php get_search_form(); ?>
					
				</div>
			</div>



		</div>
	</nav>