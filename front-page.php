<?php
/**
 * The front page template file
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
	}
	
get_footer();
