<?php
/**
 * Description
 *
 * @package     NickDavis\Custom
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://iamnickdavis.com
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\Custom;

/**
 * Generate the labels for either a taxonomy or post type.
 *
 * Note, this will not work with text domains so if you need localisation
 * you cannot use this method and must register 'manually'.
 *
 * @since 1.0.0
 *
 * @param array $config Array of runtime configuration parameters.
 * @param string $custom_type 'taxonomy' or 'post type'
 *
 * @return array
 */
function generate_the_custom_labels( array $config, $custom_type = 'post_type' ) {
	$config = array_merge(
		array(
			'custom_type'       => '',
			'singular_label'    => '',
			'plural_label'      => '',
			'in_sentence_label' => '',
			'specific_labels'   => array(),
		),
		$config
	);

	// Shared labels.
	$labels = array(
		'name'              => $config['plural_label'],
		'singular_name'     => $config['singular_label'],
		'menu_name'         => $config['plural_label'],
		'add_new_item'      => 'Add New ' . $config['singular_label'],
		'edit_item'         => 'Edit ' . $config['singular_label'],
		'view_item'         => 'View ' . $config['singular_label'],
		'search_items'      => 'Search ' . $config['plural_label'],
		'parent_item_colon' => 'Parent ' . $config['plural_label'] . ':',
		'not_found'         => 'No ' . $config['in_sentence_label'] . ' found.',
	);

	$custom_type_generator = __NAMESPACE__;
	$custom_type_generator .= $custom_type == 'taxonomy'
		? '\generate_custom_labels_for_taxonomy'
		: '\generate_custom_labels_for_post_type';

	$labels = array_merge(
		$labels,
		$custom_type_generator( $config )
	);

	if ( $config['specific_labels' ] ) {
		$labels = array_merge(
			$labels,
			$config['specific_labels']
		);
	}

	return $labels;
}

/**
 * Generate the specific custom labels for the taxonomy.
 *
 * @since 1.3.0
 *
 * @param array $config Array of configuration parameters
 *
 * @return array
 */
function generate_custom_labels_for_taxonomy( array $config ) {
	return array(
		'popular_items'              => 'Popular ' . $config['plural_label'],
		'all_items'                  => 'All ' . $config['plural_label'],
		'parent_item'                => 'Parent ' . $config['singular_label'],
		'update_item'                => 'Update ' . $config['singular_label'],
		'new_item_name'              => 'New ' . $config['singular_label'] . ' Name',
		'separate_items_with_commas' => 'Separate ' . $config['in_sentence_label'] . ' with commas',
		'add_or_remove_items'        => 'Add or remove ' . $config['in_sentence_label'],
		'choose_from_most_used'      => 'Choose from the most used ' . $config['in_sentence_label'],
	);
}

/**
 * Generate the specific custom labels for the post type.
 *
 * @since 1.3.0
 *
 * @param array $config Array of configuration parameters
 *
 * @return array
 */
function generate_custom_labels_for_post_type( array $config ) {
	return array(
		'name_admin_bar'        => $config['singular_label'],
		'add_new'               => 'Add New',
		'new_item'              => 'New ' . $config['singular_label'],
		'view_item'             => 'View ' . $config['plural_label'],
		'all_items'             => 'All ' . $config['plural_label'],
		'not_found_in_trash'    => 'No ' . $config['in_sentence_label'] . ' found in Trash.',
		'archives'              => $config['plural_label'] . ' Archives',
		'attributes'            => $config['plural_label'] . ' Attributes',
		'insert_into_item'      => 'Insert into ' . $config['in_sentence_label'],
		'uploaded_to_this_item' => 'Uploaded to this ' . $config['in_sentence_label'],
	);
}
