<?php
/**
 * The front page template file
 *
 
* If the user has selected a static page for their homepage, this is what will
 * appear.
 *
 Learn more: https://codex.wordpress.org/Template_Hierarchy
 *

 * @package WordPress
 * @subpackage Twenty_Seventeen
 *
 @since 1.0
 * @version 1.0
 */

get_header(); ?>


<div id="primary" class="content-area">
	
<main id="main" class="site-main" role="main">


<?php // Show the selected frontpage content.
		
	if ( have_posts() ) :
			
		while ( have_posts() ) : the_post();
				
			/*get_template_part( 'template-parts/page/content', 'front-page' );*/
			if( have_rows('home_page_content') ): 

					// loop through all the rows of flexible content
					while ( have_rows('home_page_content') ) : the_row();

						// BLOCK WITH TEXT AND LINK (Pink Block)
						if( get_row_layout() == 'pink_block' )
						get_template_part( 'template-parts/page/content', 'pinkBlock' );

						// BLOCK WITH TEXT AND LINK
						if( get_row_layout() == 'word_block' )
							get_template_part( 'template-parts/page/content', 'wordbar' );

						// PROJECTS GRID
						if( get_row_layout() == 'project_grid' )
							get_template_part( 'template-parts/page/content', 'projectGrid' );
						
						//THREE PROJECT LAYOUT
						if( get_row_layout() == 'three_projects' )
							get_template_part( 'template-parts/page/content', 'projects' );

		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional
			endwhile;
		
			else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
			
				get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

		

<?php 
		// Get each of our panels and show the post data.
		
if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			
/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * 
@since Twenty Seventeen 1.0
			 *
			 *
 @param int $num_sections Number of front page sections.
			 */
			
$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			
global $twentyseventeencounter;
			// Create a setting and control for each of the sections available in the theme.
		
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
			
	$twentyseventeencounter = $i;
				
	twentyseventeen_front_page_section( null, $i );
		
	}

	
endif; // if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>


	
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>