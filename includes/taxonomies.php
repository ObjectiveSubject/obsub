<?php

/*

// {tax-name} Taxonomy ============================================ /

$labels = array(
	'name'              => _x( '{tax-name}', 'taxonomy general name' ),
	'singular_name'     => _x( '{tax-name}', 'taxonomy singular name' ),
	'search_items'      => __( 'Search {tax-name}' ),
	'all_items'         => __( 'All {tax-name}' ),
	'parent_item'       => __( 'Parent {tax-name}' ),
	'parent_item_colon' => __( 'Parent {tax-name}:' ),
	'edit_item'         => __( 'Edit {tax-name}' ),
	'update_item'       => __( 'Update {tax-name}' ),
	'add_new_item'      => __( 'Add New {tax-name}' ),
	'new_item_name'     => __( 'New {tax-name} Name' ),
	'menu_name'         => __( '{tax-name}' ),
);

$args = array(
	'hierarchical'      => true,
	'labels'            => $labels,
	'show_ui'           => true,
	'show_admin_column' => false,
	'query_var'         => true,
	'rewrite'           => array( 'slug' => '{tax-name}' ),
);

register_taxonomy( '{tax-name}', array( '{post-type}' ), $args );

*/

?>
