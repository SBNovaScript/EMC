<?php /* Template Name: project_page */ ?>
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
		
		<?php/*BROKEN get_template_part( 'template-parts/page/content', 'projectsSlider' ); */ ?>
		<?php /*get_template_part( 'template-parts/page/content', 'projectGrid' );*/ ?>
			<?php
			if (have_posts()) : while (have_posts()) : the_post();

	// are there any rows within within our flexible content?
	if( have_rows('project_page_content') ): 

		// loop through all the rows of flexible content
		while ( have_rows('project_page_content') ) : the_row();

		// BLOCK WITH TEXT AND LINK (Pink Block)
		if( get_row_layout() == 'pink_block' )
			get_template_part( 'template-parts/page/content', 'pinkBlock' );

		// BLOCK WITH TEXT AND LINK
		if( get_row_layout() == 'word_block' )
			get_template_part( 'template-parts/page/content', 'wordbar' );

		// PROJECTS GRID
		if( get_row_layout() == 'project_grid' )
			get_template_part( 'template-parts/page/content', 'projectGrid' );



		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional

endwhile; endif; // close the WordPress loop ?>
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
