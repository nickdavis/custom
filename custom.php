<?php
/**
 * Library for generating custom post types, taxonomies and shortcodes for
 * WordPress
 *
 * @package     NickDavis\Custom
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://github.com/nickdavis/custom
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\Custom;

/**
 * Checks if package is already loaded and bails, if so.
 *
 * @since 1.0.0
 */
if ( defined( 'ND_CUSTOM_LOADED' ) ) {
	return;
}

/**
 * Sets up the packages's constants.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_constants() {
	$package_url = plugin_dir_url( __FILE__ );
	if ( is_ssl() ) {
		$package_url = str_replace( 'http://', 'https://', $package_url );
	}

	define( 'ND_CUSTOM_LOADED', true );
	define( 'ND_CUSTOM_VERSION', '1.0.0' );
	define( 'ND_CUSTOM_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );
	define( 'ND_CUSTOM_URL', $package_url );
	define( 'ND_CUSTOM_FILE', __FILE__ );
}

/**
 * Kicks off the package by initializing the package files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_autoloader() {
	require_once( 'includes/autoload.php' );

	autoload();
}

/**
 * Launches the package.
 *
 * @since 1.0.0
 *
 * @return void
 */
function launch() {
	init_autoloader();
}

init_constants();
launch();
