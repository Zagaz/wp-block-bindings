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

include_once WPBB_PLUGIN_DIR . 'includes/wpbb_main.php';

$wpbb_main = new WPBB_Main();


