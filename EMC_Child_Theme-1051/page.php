
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php 
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
		//THREE PROJECT LAYOUT
		if( get_row_layout() == 'three_projects' )
			get_template_part( 'template-parts/page/content', 'projects' );
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
		 
		 //Pop Up Block
		 if( get_row_layout() == 'pop_out' )
			 get_template_part( 'template-parts/page/content', 'PopOut' ); 
		 
		 //The spacer
		 if(get_row_layout() == 'spacer')
			get_template_part( 'template-parts/page/content', 'spacer' ); 
		
		//The linked photo grid
		if(get_row_layout() == 'linked_photo_gallery')
			get_template_part( 'template-parts/page/content', 'linkedGrid' ); 
		
		//Two Project Layout
		 if( get_row_layout() == 'two_projects' )
			get_template_part( 'template-parts/page/content', 'twoProjects' );
		
		//Four Project Layout
		if( get_row_layout() == 'four_projects' )
			get_template_part( 'template-parts/page/content', 'fourProjects' );
		
		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional

endwhile; endif; // close the WordPress loop ?>
			

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
