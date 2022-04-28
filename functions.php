<?php 

//Inkluderar filen som köar in alla script
include('enqueue.php');


// Adderar features, menu & widegt-support på sidor


add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');


function add_woocommerce_support(){
    
    add_theme_support('woocommerce');
}

add_action("after_setup_theme", "add_woocommerce_support");

/* 
function product_price() { */

    $product = wc_get_product();



// Functions Menus 
function register_menu() {
        register_nav_menu("headermenu", "Header");
        register_nav_menu("footermenu", "Footer");
        register_nav_menu("sidemenu", "");
    }

add_action("after_setup_theme", "register_menu");



// Functions Image

add_image_size("blogImage_size", 635, 423, true ); 

// Functions sidebar
function widget_sidebar() {


    
    register_sidebar( 
        [
        'name' => 'Kontakt Uppgifter',
        'id' => 'contact',
        'description' => 'info blabla...',
        'before_widget' => '<div>',
        'after_widget' => '</div>'
        ]
    );
    
    register_sidebar( 
        [
        'name' => 'Copy right',
        'id' => 'copy',
        'description' => 'info blabla...',
        'before_widget' => '<div>',
        'after_widget' => '</div>'
        ]
    );
    
    register_sidebar( 
        [
        'name' => 'Social Media',
        'id' => 'social',
        'description' => 'info blabla...',
        'before_widget' => '<div>',
        'after_widget' => '</div>'
        ]
    );
}

add_action("after_setup_theme", "widget_sidebar",);

// Functions widgets 
function widget_footer() {

    register_sidebar(
        [
            "name" => "wigdet footer1",
            "id" => "widgetfooter1",
            "description" => "About us"
        ]
    );
}

add_action("after_setup_theme", "widget_footer");

?>











