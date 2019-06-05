<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section class="generic-text">
		<div class="wrapper">
			<div class="container">
				<h1>Oops! That page can't be found.</h1>
				<p>It looks like nothing was found at this location. Maybe try a search?</p>
				<div id="search-btn" class="btns green"><a href="javascript:;">Search</a></div>
			</div>
		</div>
	</section>

<?php
get_footer();
