<?php
/**
 * Default runtime configuration for a taxonomy
 *
 * @package     NickDavis\Custom
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://iamnickdavis.com
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\Custom;

return array(
	/**
	 * The taxonomy name.
	 */
	'taxonomy'   => '',

	/**
	 * These are the custom labels.
	 */
	'labels'     => array(
		'custom_type'       => '', // the taxonomy name from above
		'singular_label'    => '',
		'plural_label'      => '',
		'in_sentence_label' => '',
		'specific_labels'   => array(),
	),

	/**
	 * These are the arguments for registering the taxonomy.
	 */
	'args'       => array(
		'taxonomy'          => '',
		'labels'            => '', // automatically generate the labels.
	),

	/**
	 * These are the post types to bind the taxonomy to.
	 */
	'post_types' => array( '' ),
);
