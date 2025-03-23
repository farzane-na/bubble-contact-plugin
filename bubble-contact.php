<?php
/*
 * Plugin Name:       bubble contact
 * Plugin URI:        https://github.com/farzane-na/bubble-contact-plugin
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            farzane nazmabadi
 * Author URI:        https://farzanenazmabadi.ir
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       bubble-contact
 * Domain Path:       /languages
 */


//  define(BUBBLE_CONTACT_FRONT_STYLE,plugin_dir_url( __FILE__ )."asset/css/app.css");
//  define(BUBBLE_CONTACT_FRONT_SCRIPT,plugin_dir_url( __FILE__ )."asset/js/app.js");
//  define(BUBBLE_CONTACT_ADMIN_VIEW,plugin_dir_url( __FILE__ )."view/admin-view/admin-view.php");
//  define(BUBBLE_CONTACT_FRONT_VIEW,plugin_dir_url( __FILE__ )."view/front-view/front-view.php");
//  define(BUBBLE_CONTACT_ADMIN_FILE,plugin_dir_path( __FILE__ )."include/admin.php");
 define("BUBBLE_CONTACT_PATH",plugin_dir_path( __FILE__ ));
 define("BUBBLE_CONTACT_URL",plugin_dir_URL( __FILE__ ));
 define("PLUGIN_VERSION","1.0,0");

 if ( !defined( 'ABSPATH' ) ) {
    exit;
};

require_once BUBBLE_CONTACT_PATH."include/admin.php";

add_action("wp_head",function(){
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">' ;
});