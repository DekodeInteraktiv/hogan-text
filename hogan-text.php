<?php
/**
 * Plugin Name: Hogan Module: Text
 * Plugin URI: https://github.com/dekodeinteraktiv/hogan-text
 * GitHub Plugin URI: https://github.com/dekodeinteraktiv/hogan-text
 * Description: WYSIWYG Text Module for Hogan
 * Version: 1.0.1
 * Author: Dekode
 * Author URI: https://dekode.no
 * License: GPL-3.0
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 *
 * * Text Domain: hogan-text
 * Domain Path: /languages/
 *
 * @package Hogan
 * @author Dekode
 */

declare( strict_types = 1 );
namespace Dekode\Hogan\Text;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'plugins_loaded', __NAMESPACE__ . '\\hogan_text_load_textdomain' );
add_action( 'hogan/include_modules', __NAMESPACE__ . '\\hogan_text_register_module' );

/**
 * Register module text domain
 */
function hogan_text_load_textdomain() {
	\load_plugin_textdomain( 'hogan-text', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

/**
 * Register module in Hogan
 */
function hogan_text_register_module() {
	require_once 'class-text.php';
	\hogan_register_module( new \Dekode\Hogan\Text() );
}
