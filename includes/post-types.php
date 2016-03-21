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

function my_case_study_columns($columns) {
	$columns = array(
		'cb'	 	=> '<input type="checkbox" />',
		'title' 	=> 'Title',
		'display' 	=> 'Display',
		'date'		=> 'Date',
	);
	return $columns;
}
function custom_case_study_columns($column, $post_id) {
	switch ($column) {
		case "display" :
			if ( get_field('case_study_featured', $post_id) ) {
				echo 'Featured';
			} else {
				echo '—';
			}
			break;
	}
}
add_action("manage_case_study_posts_custom_column", "custom_case_study_columns", 10, 2);
add_filter("manage_edit-case_study_columns", "my_case_study_columns");




// Bios post type ================================ /
add_action('init', 'register_bios');

function register_bios() {

	$labels = array (
		'name' => 'Bios',
		'singular_name' => 'Bio',
		'menu_name' => 'Bios',
		'name_admin_bar' => 'Bio',
		'add_new' => 'Add Bio',
		'add_new_item' => 'Add New Bio',
		'edit' => 'Edit',
		'edit_item' => 'Edit Bio',
		'new_item' => 'New Bio',
		'all_items' => 'All Bios',
		'view' => 'View Bio',
		'view_item' => 'View Bio',
		'search_items' => 'Search Bios',
		'not_found' => 'No Bios Found',
		'not_found_in_trash' => 'No Bios Found in Trash',
		'parent' => 'Parent Bios',
	);

	register_post_type('bio', array(
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => true,
			'query_var' => true,
			'menu_position' => 5,
			'supports' => array('title','editor','thumbnail','excerpt'),
			'menu_icon' => 'dashicons-businessman',
			'labels' => $labels
		)
	);
}


// Form Entries post type ================================ /
add_action('init', 'register_form_entry');

function register_form_entry() {

	$labels = array (
		'name' => 'Form Entries',
		'singular_name' => 'Form Entry',
		'menu_name' => 'Form Entries',
		'name_admin_bar' => 'Form Entry',
		'add_new' => 'Add Form Entry',
		'add_new_item' => 'Add New Form Entry',
		'edit' => 'Edit',
		'edit_item' => 'Edit Form Entry',
		'new_item' => 'New Form Entry',
		'all_items' => 'All Form Entries',
		'view' => 'View Form Entry',
		'view_item' => 'View Form Entry',
		'search_items' => 'Search Form Entries',
		'not_found' => 'No Form Entries Found',
		'not_found_in_trash' => 'No Form Entries Found in Trash',
		'parent' => 'Parent Form Entries',
	);

	register_post_type('form_entry', array(
			'description' => '',
			'public' => false,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'hierarchical' => false,
			'rewrite' => true,
			'query_var' => true,
			'menu_position' => 5,
			'supports' => array('title','editor'),
			'menu_icon' => 'dashicons-megaphone',
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
