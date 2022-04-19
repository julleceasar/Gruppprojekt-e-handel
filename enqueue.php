<!-- Ändra pathen -->

<?php 

// Köar in CSS & JS filer
 function load_scripts() {

    // CSS
    wp_enqueue_style("bootstrap", get_template_directory_uri()."/asset/css/bootstrap.min.css");
    wp_enqueue_style("font-awesome", get_template_directory_uri()."/css/font-awesome.css");
    wp_enqueue_style("style", get_template_directory_uri()."/style.css");
    
    // JS
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/asset/js/bootstrap.min.js");
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/asset/js/bootstrap.js");
    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.js'); 
    wp_enqueue_script('script', get_template_directory_uri().'/js/script.js'); 
    wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );

}

add_action("wp_enqueue_scripts", "load_scripts");


?> 
