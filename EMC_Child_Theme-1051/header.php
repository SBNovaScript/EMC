<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */


?>
<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta name="robots" content="noindex">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!--TODO: There is an issue with the menu positioning on sub pages with sizes less then 780px. Some css in a meta query is setting the margin top too big on smaller screens -->
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
<script type="text/javascript" src="wp-content/themes/EMC_Child_Theme-1051/js/fadeInControl.js"></script>
<script type="text/javascript" src="wp-content/themes/EMC_Child_Theme-1051/js/smooth-scroll.js"></script>
<!-- j must be lowercase in fadeInControl.js-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>


	<header id="masthead" class="site-header 
		<?php 


	//This fixes the issue with the header appearing above the top of the page on subpages. 
	//It may not be the most elegent way to do this but it's the only thing I've found that works
	//If the page is not the front page, add an inline style to give the element a top margin of 60px ?>
	
<?php	if (!is_front_page() ) : ?>

			sub-page-header
		<?php endif; ?>
	" role="banner">

	
	
	
			<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top" >
				<div class="wrap">
				
				<?php if(!is_front_page()){
					//If the page is not home include the menu for sub pages
					get_template_part( 'template-parts/navigation/navigation', 'topSubpage' ); 
				}else{
					get_template_part( 'template-parts/navigation/navigation', 'top' ); 
				}
				?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>
		
	<!--For some reson the title and discription are linked from this file-->
	<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
		
		


	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
