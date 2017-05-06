<?php
/**
 * Autoload
 *
 * @package     NickDavis\Custom
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://iamnickdavis.com
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\Custom;

/**
 * Autoload package files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload() {
	$files = array(
		'label-generator.php',
		'post-type.php',
		'taxonomy.php',
	);

	foreach ($files as $file ) {
		include __DIR__ . '/' . $file;
	}
}
