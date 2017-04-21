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

define( 'ND_CUSTOM_LIBRARY', __FILE__ );
define( 'ND_CUSTOM_DIR', trailingslashit(__DIR__ ) );

include __DIR__ . '/includes/module.php';
