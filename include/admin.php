<?php


function add_menu_bubble_contact(){
    add_menu_page( 
    __("bubble contact","bubble-contact"), 
    __("bubble contact","bubble-contact"),
    "manage_options", 
    "bubble-contact", 
    function(){
        include BUBBLE_CONTACT_PATH."view/admin-view/admin-view.php";
    }, 
    "dashicons-share", 
    60 );
};
add_action( "admin_menu", "add_menu_bubble_contact" );


add_action( "wp_enqueue_scripts", function(){
    wp_enqueue_script( "add_script", BUBBLE_CONTACT_URL."asset/js/app.js", [],  PLUGIN_VERSION, true );
    wp_enqueue_script( "add_script", BUBBLE_CONTACT_URL."asset/js/admin.js", [],  PLUGIN_VERSION, true );
    wp_enqueue_style( "add_style", BUBBLE_CONTACT_URL."asset/css/app.css", [],  PLUGIN_VERSION, false );
    wp_enqueue_style( "add_style", BUBBLE_CONTACT_URL."asset/css/admin.css", [],  PLUGIN_VERSION, false );
});