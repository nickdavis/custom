<?php
/**
 * Default runtime configuration for a custom post type
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
	 * The post type name.
	 */
	'post_type' => '',

	/**
	 * These are the custom labels.
	 */
	'labels'    => array(
		'custom_type'       => '', // the post_type from above
		'singular_label'    => '',
		'plural_label'      => '',
		'in_sentence_label' => '',
		'specific_labels'   => array(),
	),

	/**
	 * Supported features.
	 */
	'features'  => array(
		'base_post_type' => 'post',
		'exclude'        => array(),
		'additional'     => array(),
	),

	/**
	 * Registration arguments.
	 */
	'args'      => array(
		'description' => '',
		'label'       => '',
		'labels'      => '', // automatically generate the labels.
		'public'      => true,
		'supports'    => '', // automatically generate the support features.
		'menu_icon'   => '',
		'has_archive' => false,
	),
);
