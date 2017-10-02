<!--TODO:Optomise this menu for mobil. It should just take a few lines of CSS in a meta query-->
<!--TODO: make darkness fade in -->
<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
/*
<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
		?>
	</button>
	*/
?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">

<span class="slideOutIcon" style="font-size:30px;cursor:pointer;color:black" onclick="openNav()">&#9776;</span> <!--makes pull out menu bars-->
	
<!--TODO: I have no idea why commenting out the old menu icon makes the page discription collapse, probbly something with spacing-->
<div id="mySidenav" class="sidenav"><!--This div is what slides out -->
<a href="javascript:void(0)" id="closeNav" class="closebtn" onclick="closeNav()">&times;</a> <!--makes the little x simbol-->
	<?php wp_nav_menu( array(
	
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>
	<div class="three-boxes"><div></div><div id="center"></div><div id="end"></div></div>
</div>

<div id="darkMask"></div>
	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->

<script>
function openNav() {
	
	//Set the width for the dark mask and the menu so they appear
    document.getElementById("mySidenav").style.width = "25%";
	document.getElementById("darkMask").style.width = "100%";
}

function closeNav() {
	//reset the width back to tiny so they dissippear
    document.getElementById("mySidenav").style.width = "0";
	document.getElementById("darkMask").style.width = "0";
}
</script>