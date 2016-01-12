<?php
/*

// Brands post type ================================ /
add_action('init', 'register_brands');

function register_brands() {

	$labels = array (
		'name' => 'Brands',
		'singular_name' => 'Brand',
		'menu_name' => 'Brands',
		'name_admin_bar' => 'Brand',
		'add_new' => 'Add Brand',
		'add_new_item' => 'Add New Brand',
		'edit' => 'Edit',
		'edit_item' => 'Edit Brand',
		'new_item' => 'New Brand',
		'all_items' => 'All Brands',
		'view' => 'View Brand',
		'view_item' => 'View Brand',
		'search_items' => 'Search Brands',
		'not_found' => 'No Brands Found',
		'not_found_in_trash' => 'No Brands Found in Trash',
		'parent' => 'Parent Brands',
	);

	register_post_type('brands', array(
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array('slug' => 'brands', 'with_front' => false),
			'query_var' => true,
			'menu_position' => 5,
			'supports' => array('title','editor','thumbnail'),
			'menu_icon' => 'dashicons-admin-post',
			'labels' => $labels
		)
	);
}

// Custom Admin Columns (optional) ======= /

function my_{post-type}_columns($columns) {
	$columns = array(
		'cb'	 	=> '<input type="checkbox" />',
		'title' 	=> 'Title',
    'taxonomy' => 'Taxonomy',
    'processes' => 'Processes',
		'date'		=>	'Date',
	);
	return $columns;
}
function my_custom_columns($column, $post_id) {
	switch ($column) {
		case "taxonomy" :
			$terms = get_the_term_list( $post_id , 'taxonomy' , '' , ', ' , '' );
			if ( is_string( $terms ) )
				echo $terms;
			else
				echo '—';
			break;
	}
}
add_action("manage_{post-type}_posts_custom_column", "my_custom_columns", 10, 2);
add_filter("manage_edit-{post-type}_columns", "my_{post-type}_columns");

*/

?>
