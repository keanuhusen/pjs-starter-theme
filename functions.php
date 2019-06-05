<?php
/**************************************************************
 *
 * PlainJoe Studios Custom Functions
 *
 *************************************************************/


/* -------------------- add pjs.js -------------------- */

function pjs_javascript() {
	wp_enqueue_script('pjs-jquery', get_theme_file_uri('/js/jquery.min.js'), array(), '', true);
	wp_enqueue_script('pjs-javascript', get_theme_file_uri('/js/pjs.js'), array(), '', true);
}
add_action('wp_enqueue_scripts', 'pjs_javascript');


/* -------------------- create email with shortcode -------------------- */
/* -------------------- [pjs_email name="" domain="" toplevel="" label=""] -------------------- */

function pjemail_func($atts) {
	extract(shortcode_atts(array(
		'name' => 'test',
		'domain' => 'test',
		'toplevel' => 'test',
		'label' => 'test'
	), $atts));

	return '<script type="text/javascript">create_mail("'.$name.'","'.$domain.'","'.$toplevel.'","'.$label.'")</script>';
}
add_shortcode('pjs_email', 'pjemail_func');


/* -------------------- shorten text -------------------- */

function pjs_truncate($text, $length) {
	$length = abs((int)$length);
	if(strlen($text) > $length) {
		$text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
	}
	return($text);
}


/* -------------------- hide ACF menu -------------------- */

function remove_acf_menu(){
	global $current_user;
	if ($current_user->user_login != 'pjs'){
		remove_menu_page('edit.php?post_type=acf-field-group');
	}
}
add_action('admin_menu', 'remove_acf_menu', 100);


/* -------------------- hide comments menu -------------------- */

function remove_comment_menu(){
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_comment_menu', 100);


/* -------------------- join posts and postmeta tables -------------------- */

function cf_search_join($join) {
	global $wpdb;
	if (is_search()) {
		$join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
	}
	return $join;
}
add_filter('posts_join', 'cf_search_join' );


/* -------------------- modify the search query with posts_where -------------------- */

function cf_search_where($where) {
	global $pagenow, $wpdb;
	if (is_search()) {
		$where = preg_replace(
			"/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
			"(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
	}
	return $where;
}
add_filter('posts_where', 'cf_search_where');

/* -------------------- prevent duplicates -------------------- */

function cf_search_distinct($where) {
	global $wpdb;
	if (is_search()) {
		return "DISTINCT";
	}
	return $where;
}
add_filter('posts_distinct', 'cf_search_distinct');


/* -------------------- create ACF theme settings page -------------------- */

if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
	));
}