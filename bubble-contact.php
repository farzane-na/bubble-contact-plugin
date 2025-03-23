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
 * Requires Plugins:  my-plugin, yet-another-plugin
 */


 define(BUBBLE_CONTACT_FRONT_STYLE,plugin_dir_url( __FILE__ )."asset/css/app.css");
 define(BUBBLE_CONTACT_FRONT_SCRIPT,plugin_dir_url( __FILE__ )."asset/js/app.js");
 define(BUBBLE_CONTACT_ADMIN_VIEW,plugin_dir_url( __FILE__ )."view/admin-view/admin-view.php");
 define(BUBBLE_CONTACT_FRONT_VIEW,plugin_dir_url( __FILE__ )."view/front-view/front-view.php");
 define(BUBBLE_CONTACT_ADMIN_FILE,plugin_dir_url( __FILE__ )."include/admin.php");

 if ( !defined( 'ABSPATH' ) ) {
    exit;
}

require_once BUBBLE_CONTACT_ADMIN_FILE;