<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<?php
					if ( have_posts() ) :
						echo '<h1>Search Results</h1>';
						echo '<div class="search-results">';
						while ( have_posts() ) : the_post();
						
							$title = get_the_title();
							$link = get_the_permalink();
							// $excerpt = get_the_excerpt();
							
							echo '<div class="result">';
								echo '<h4><a href="' . $link . '">' . $title . '</a></h4>';
								// echo '<p>' . $excerpt . '</p>';
							echo '</div>';
							
						endwhile;
						echo '</div>';
					else :
						echo '<h1>No search results for: ' . get_search_query() . '</h1>';
						echo '<p>It looks like nothing was found for ' . get_search_query() . '. Maybe try a less specific search?</p>';
						echo '<div id="search-btn" class="btns green"><a href="javascript:;">Search</a></div>';
						
						echo '<form role="search" method="get" id="searchform" action="/">';
							echo '<input type="text" value="" name="s" id="s" placeholder="Type to search">';
						echo '</form>';
					endif;
				?>
			</div>
		</div>
	</section>

<?php
get_footer();
