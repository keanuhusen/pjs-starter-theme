<?php
/**
 * The template for displaying all single pages
 */

get_header();
	
	$panelId = 1;
	
	if (have_rows('panels')) {
		while (have_rows('panels')) { the_row();
			
			if (get_row_layout() == 'empty') {
				get_template_part('template-parts/empty');
			}
			
			$panelId++;
		}
	} else {
		if (is_user_logged_in()) {
			get_template_part('template-parts/empty');
		}
	}
	
get_footer();
