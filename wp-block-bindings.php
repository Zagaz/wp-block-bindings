<?php 
/**
 * Plugin Name: WP Block Bindings
 * Description: A plugin to demonstrate how to bind data to a block.
 * Version: 1.0
 * Author: André Ranulfo
 * Author URI: https://www.linkedin.com/in/andre-ranulfo/
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Plugin URI:https://github.com/Zagaz/wp-block-bindings
 * Text Domain: wp-block-bindings 
 */


// You shall not pass!!!
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if (!defined('WPINC')) {
     exit;
 }


//Path to the plugin directory
define( 'WPBB_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// this is a block binding plugin

function wpbb_register_meta() {
register_post_meta(
    "book",
    "isbn",
    array(
        'show_in_rest' => true,
        'single' => true,
        'type' => 'string',
    )
    
    );

}




