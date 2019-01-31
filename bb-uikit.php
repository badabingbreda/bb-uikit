<?php
/**
 * Plugin Name: Beaver Builder UI Kit
 * Plugin URI: http://www.badabing.nl
 * Description: UIkit 3.0.3 for Beaver Builder with AlekVolsk's width-ex for extended col support (up to 30)
 * Version: 1.1
 * Author: BadabingBreda
 * Domain Path: languages/
 * Text Domain: bb-ui-kit
 * Author URI: http://www.beaverplugin.com
 */

define( 'BBUIKIT_URL' 		, plugins_url( '/', __FILE__ ) );
define( 'BBUIKIT_VERSION' 		, '1.1' );


add_action( 'wp_enqueue_scripts', 'beaver_ui_kit_scripts_styles', 99, 1 );


add_action( 'plugins_loaded' , 'check_toolbox_blocks' );

function check_toolbox_blocks() {
	if ( class_exists('Toolbox_Blocks') ) add_action( 'admin_enqueue_scripts', 'beaver_ui_kit_scripts_styles', 99, 1 );
}

/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function beaver_ui_kit_scripts_styles() {
	wp_enqueue_script( 'bb-uikitjs', BBUIKIT_URL.'/vendor/uikit/js/uikit.min.js', false, BBUIKIT_VERSION , false );
	wp_enqueue_script( 'bb-uikiticons', BBUIKIT_URL.'/vendor/uikit/js/uikit-icons.min.js', false, BBUIKIT_VERSION , false );
	wp_enqueue_style( 'bb-uikitcss', BBUIKIT_URL.'/vendor/uikit/css/bbuikit.theme.min.css', false, BBUIKIT_VERSION , 'all' );
}

