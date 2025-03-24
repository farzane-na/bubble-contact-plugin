<?php


function add_menu_bubble_contact(){
    add_menu_page( 
    __("bubble contact","bubble-contact"), 
    __("bubble contact","bubble-contact"),
    "manage_options", 
    "bubble-contact", 
    function(){
        include BUBBLE_CONTACT_PATH."admin/admin-view.php";
    }, 
    "dashicons-share", 
    60 );
};
add_action( "admin_menu", "add_menu_bubble_contact" );


add_action( "wp_enqueue_scripts", function(){
    wp_enqueue_script( "add_script", BUBBLE_CONTACT_URL."asset/js/app.js", [],  PLUGIN_VERSION, true );
    wp_enqueue_style( "add_style", BUBBLE_CONTACT_URL."asset/css/app.css", [],  PLUGIN_VERSION, false );
});


add_action("admin_enqueue_scripts",function(){
    wp_enqueue_script( "add_script_colorpicker", BUBBLE_CONTACT_JS_COLORPICKER, ['wp-color-picker'],  PLUGIN_VERSION);
    wp_enqueue_style( "add_style_colorpicker", BUBBLE_CONTACT_CSS_COLORPICKER, ['wp-color-picker'],  PLUGIN_VERSION );
});