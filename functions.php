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


// Functions Menus 
function register_menu() {
        register_nav_menu("headermenu", "Header");
        register_nav_menu("footermenu", "Footer");
        register_nav_menu("sidemenu", "");
    }

add_action("after_setup_theme", "register_menu");



// Functions Image
/* add_image_size("blogImage_size", 635, 423, true );  */

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


/* Kassan */
/* add_action('wp','remove_storefront_functions'); */


/* function remove_storefront_functions(){

    if (is_checkout()){

        remove_all_actions('ocean_page_header');
        remove_all_actions('ocean_footer');
    
        remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

    }     */
       

/* add_filter('woocommerce_checkout_fields','hj_override_checkout_fields'); */
/*         function hj_override_checkout_fields($fields){

            unset(

                $fields['order']['order_comments'],
                $fields['billing']['billing_company'],
                $fields['billing']['billing_country'],
                $fields['billing']['billing_address_2'],

                $fields['shipping']['shipping_company'],
                $fields['shipping']['shipping_first_name'],
                $fields['shipping']['shipping_last_name'],
                $fields['shipping']['shipping_country'],

                $fields['shipping']['shipping_address_1'],
                $fields['shipping']['shipping_address_2'],
                $fields['shipping']['shipping_postcode'],
                $fields['shipping']['shipping_city'],

                
            );

            return $fields;

        }


        add_action( 'woocommerce_review_order_after_payment', 'hj_edit_cart_checkout' ); */


    /*     function hj_edit_cart_checkout(){

            echo '<a href="'.hj_edit_cart_checkout().'"/a>';

        }

    } */



?>

