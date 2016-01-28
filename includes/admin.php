<?php
/** Custom Admin Dashboard styles.
-------------------------------------------------- */
function load_dashboard_style() {
  wp_register_style( 'admin_dashboard_style', get_template_directory_uri() . '/admin/dashboard/admin-dashboard.css', false, '1.0.0' );
  wp_enqueue_style( 'admin_dashboard_style' );
}
add_action( 'admin_enqueue_scripts', 'load_dashboard_style' );


/** Custom Admin Color Scheme.
-------------------------------------------------- */
require get_template_directory() . '/admin/color-scheme/admin-color-scheme.php';

/** Set custom color scheme as default. ---------- */
function set_default_admin_color($user_id) {
  $args = array(
      'ID' => $user_id,
      'admin_color' => 'obsub'
  );
  wp_update_user( $args );
}
add_action('user_register', 'set_default_admin_color');


/** Custom Admin Login.
-------------------------------------------------- */
function load_login_style() {
	wp_register_style( 'admin_login_style', get_template_directory_uri() . '/admin/login/admin-login.css', false, '1.0.0' );
  wp_enqueue_style( 'admin_login_style' );
}
function login_logo_url() { return home_url(); }
function login_logo_url_title() { return get_bloginfo('name'); }
add_action( 'login_enqueue_scripts', 'load_login_style' );
add_filter( 'login_headerurl', 'login_logo_url' );
add_filter( 'login_headertitle', 'login_logo_url_title' );

?>