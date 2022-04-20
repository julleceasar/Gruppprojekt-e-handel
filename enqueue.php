<?php 

function register_scripts(){

    //register styles with update time 
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory().'/css/style.css'), 'all');
    wp_register_style('styles-css', get_stylesheet_uri(), [], filemtime(get_template_directory().'/css/styles.css'), 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri().'/asset/css/bootstrap.min.css', [], false, 'all');
    wp_register_style('singele-product-css', get_stylesheet_uri(), [], filemtime(get_template_directory().'/css/single-product.css'), 'all');

    //register scripts with update time
    wp_register_script('bootstrap-js', get_template_directory_uri().'/js/jquery.js', ['jquery'],null, true);
    wp_register_style('script-js', get_template_directory_uri().'/js/script.js', [], filemtime(get_template_directory().'/js/script.js'), true);
   

    //enqueue styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('styles-css');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style("singel-product-css");
    
    //enqueue scripts
    wp_enqueue_script('script-js');
    wp_enqueue_script('bootstrap-js');
 }

 add_action( 'wp_enqueue_scripts', 'register_scripts');

// Köar in CSS & JS filer
/*  function load_scripts() {

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
 */

?> 
