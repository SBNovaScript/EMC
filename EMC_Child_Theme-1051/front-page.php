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

<div class="wrap">
	
<div id="primary" class="content-area">
	
<main id="main" class="site-main" role="main">


<?php // Show the selected frontpage content.
			if (have_posts()) : while (have_posts()) : the_post();
		get_template_part( 'template-parts/page/content', 'video.php' );
	// are there any rows within within our flexible content?
	if( have_rows('page_content') ): 

		// loop through all the rows of flexible content
		while ( have_rows('page_content') ) : the_row();

		// BLOCK WITH TEXT AND LINK (Pink Block)
		if( get_row_layout() == 'pink_block' )
			get_template_part( 'template-parts/page/content', 'pinkBlock' );

		// BLOCK WITH TEXT AND LINK
		if( get_row_layout() == 'word_block' )
			get_template_part( 'template-parts/page/content', 'wordbar' );

		// PROJECTS GRID
		if( get_row_layout() == 'project_grid' )
			get_template_part( 'template-parts/page/content', 'projectGrid' );
		
		//TWO PROJECT LAYOUT
		if( get_row_layout() == 'two_projects' )
			get_template_part( 'template-parts/page/content', 'twoProjects' );
		
		//PHOTO GALLERY GRID
		if( get_row_layout() == 'photo_gallery' )
			get_template_part( 'template-parts/page/content', 'gallery' );
		
		//MISSION STATEMENT
		if( get_row_layout() == 'mission_statement' )
			get_template_part( 'template-parts/page/content', 'missionStatement' );
		
		//PIC AND TEXT BLOCK
		if( get_row_layout() == 'pic_and_text' )
			 get_template_part( 'template-parts/page/content', 'picAndText' ); 
		//MID SIZED TEXT WITH LOTS OF SPACING
		if( get_row_layout() == 'mid_text' )
			 get_template_part( 'template-parts/page/content', 'midText' ); 

		 //TWO IMAGES ON ONE LINE
		 if( get_row_layout() == 'two_images' )
			 get_template_part( 'template-parts/page/content', 'twoImages' ); 
		 
		 //The Video Block 
		 if( get_row_layout() == 'video_block' )
			 get_template_part( 'template-parts/page/content', 'video' ); 
		 
		 //The Video Block 
		 if( get_row_layout() == 'pop_out' )
			 get_template_part( 'template-parts/page/content', 'PopOut' ); 
		 
		 //The Projects block
		 if( get_row_layout() == 'three_projects' )
			 get_template_part( 'template-parts/page/content', 'projects' ); 
	 
		  //The spacer
		 if(get_row_layout() == 'spacer')
			get_template_part( 'template-parts/page/content', 'spacer' ); 

		 
		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional

		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional

		
 ?>

		

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