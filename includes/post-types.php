<?php

// Case Studies post type ================================ /
add_action('init', 'register_case_studies');

function register_case_studies() {

	$labels = array (
		'name' => 'Case Studies',
		'singular_name' => 'Case Study',
		'menu_name' => 'Case Studies',
		'name_admin_bar' => 'Case Study',
		'add_new' => 'Add Case Study',
		'add_new_item' => 'Add New Case Study',
		'edit' => 'Edit',
		'edit_item' => 'Edit Case Study',
		'new_item' => 'New Case Study',
		'all_items' => 'All Case Studies',
		'view' => 'View Case Study',
		'view_item' => 'View Case Study',
		'search_items' => 'Search Case Studies',
		'not_found' => 'No Case Studies Found',
		'not_found_in_trash' => 'No Case Studies Found in Trash',
		'parent' => 'Parent Case Studies',
	);

	register_post_type('case_study', array(
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => array('slug' => 'case-studies', 'with_front' => false),
			'query_var' => true,
			'menu_position' => 5,
			'supports' => array('title','editor','thumbnail','excerpt'),
			'menu_icon' => 'dashicons-align-right',
			'labels' => $labels
		)
	);
}

// Custom Admin Columns (optional) ======= /
/*
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
