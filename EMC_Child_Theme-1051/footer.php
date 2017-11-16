<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer>
			<div class="wrap1">
				
				
				<div class="footer">
<div class="fixed-col">
	<h2><a href="#">Contact Us</a></h2>
	
	<?php echo get_theme_mod('contactText'); ?>
	<!--
		<a href="#">Ketri Tracy,</a> 
		Busness devlopment manager, 
		Emergent Media Center,
        Champlain College<br> 
      802-856-8438<br>
      <a href ="#"> ktracy@champlain.edu</a>-->
    </div>
	
	
    <div class="varible-col">
      <?php

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
					<?php endif;?>
    </div>
    
	
    <div class="fixed-col final-item">
    <h2><a href="#">Partnerships</a></h2>
	<?php echo get_theme_mod('partnerText'); ?>
	
	<!--
      <a href="#">Test test test test def</a>
      <a href="#">Test test test test rff</a>
      <a href="#">Test test test test test</a>
      <a href="#">Test test test test stuff</a>
	  
	  -->
    </div>
</div> 
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
