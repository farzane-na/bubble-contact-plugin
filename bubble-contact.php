<?php
/*
 * Plugin Name:       bubble contact
 * Plugin URI:        https://github.com/farzane-na/bubble-contact-plugin
 * Description:       A plugin that allows you to add your contact information to all pages of your site with a beautiful appearance.
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            farzane nazmabadi
 * Author URI:        https://farzanenazmabadi.ir
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       bubble-contact
 * Domain Path:       /languages
 */


 function bubble_contact_load_textdomain() {
    load_plugin_textdomain('bubble-contact', false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'bubble_contact_load_textdomain');


 define("BUBBLE_CONTACT_PATH",plugin_dir_path( __FILE__ ));
 define("BUBBLE_CONTACT_URL",plugin_dir_URL( __FILE__ ));
 define("BUBBLE_CONTACT_JS_COLORPICKER",plugin_dir_URL( __FILE__ )."admin/asset/js/admin.js");
 define("BUBBLE_CONTACT_CSS_COLORPICKER",plugin_dir_URL( __FILE__ )."admin/asset/css/admin.css");
 define("BUBBLE_CONTACT_ADMIN_VIEW_CSS",plugin_dir_URL( __FILE__ )."admin/asset/css/view.css");
 define("PLUGIN_VERSION","1.0.1");

 if ( !defined( 'ABSPATH' ) ) {
    exit;
};

require_once BUBBLE_CONTACT_PATH."include/admin.php";

add_action("wp_head",function(){
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">' ;
});


register_activation_hook( __FILE__, function(){
    if(!get_option("bubble-contact-option")){
        $bubble_contact_Default_value=[
            "bubble_1"=> array("bi bi-telegram","#","#1AB7EA"),
            "bubble_2"=> array("bi bi-whatsapp","#","#1AB7EA"),
            "bubble_3"=> array("bi bi-github","#","#1AB7EA"),
            "bubble_4"=> array("bi bi-linkedin","#","#1AB7EA"),
        ];
        add_option( "bubble-contact-option", $bubble_contact_Default_value );
    };
});