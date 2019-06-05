<?php
/**
 * The header for our theme
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<!--
		   _         _               _             __
		 _| |___ ___|_|___ ___ ___ _| |   _ _ _   |  |   ___ _ _ ___
		| . | -_|_ -| | . |   | -_| . |  | | | |  |  |__| . | | | -_|
		|___|___|___|_|_  |_|_|___|___|_ |_____|__|_____|___|\_/|___|
		              |___|  _  | |___|_|___ __|  |___ ___
		                  |   __| | .'| |   |  |  | . | -_|
		                  |__|  |_|__,|_|_|_|_____|___|___|
		-->
		
		<!-- Meta -->
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?php echo get_the_title(); ?> | <?php echo get_bloginfo(); ?></title>
		
		<!-- CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
		
		<!-- WordPress -->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="app">