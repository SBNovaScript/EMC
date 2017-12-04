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
<style>
/*This hides the costom header text on pages where this subpage menu is actavated which fixes a nasty spacing issue*/
.custom-header {
	display:none;
}
</style>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
<div class="subPage">

<span class="slideOutIcon" style="cursor:pointer;" onclick="openNav()">&#9776;</span> <!--makes pull out menu bars-->
<!--Why is this element broken-->
<span id = "title"><!--EMERGENT MEDIA CENTER--><?php bloginfo( 'name' ); ?></span>

<!--

*Note that Jen wanted this hidden for now.

<div id="EII_bar_nav">
<a class="word" id="block1" href="<?php echo get_theme_mod( 'EmergeLink', 'http://www.google.com' ); ?>"><?php echo get_theme_mod( 'EmergeText', 'EMERGE' ); ?></a>
<a class="word" id="block2" href="<?php echo get_theme_mod( 'InnovateLink', 'http://www.google.com' ); ?>"><?php echo get_theme_mod( 'InnovateText', 'INNOVATE' ); ?></a>
<a class="word" id="block3" href="<?php echo get_theme_mod( 'InspireLink', 'http://www.google.com' ); ?>"><?php echo get_theme_mod( 'InspireText', 'INSPIRE' ); ?></a>
</div>
-->

<!--TODO: I have no idea why commenting out the old menu icon makes the page discription collapse, probbly something with spacing-->
<div id="mySidenav" class="sidenav"><!--This div is what slides out -->

<a href="javascript:void(0)" id="closeNav" class="closebtn" onclick="closeNav()">&times;</a> <!--makes the little x simbol-->
	<?php wp_nav_menu( array(
	
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>
	<!--<div class="three-boxes"><div></div><div id="center"></div><div id="end"></div></div>-->
</div>

<div id="darkMask"></div>
	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>
</div>
</nav><!-- #site-navigation -->


<script>
var navWidth= "100%";
var darkWidth = "100%";
var isOpen = false;


//This function opens the menu to diffrent widths based on screen size. It basically uses meta querys
//TODO We might want to implement code to dinamically resize as the window changes, right now it only checks size when menu opens
function openNav() {
	isOpen = true;
	navWidth = "100%";
	
	/*
	if (window.matchMedia('(max-width: 500px)').matches){
		console.log("Less then 500px");
		navWidth = "100%";
		darkWidth = "0";
	}else if(window.matchMedia('(max-width: 900px)').matches){
		console.log("Less then 900px");
		navWidth = "100%";
	}
	else{
		navWidth = "100%";
				console.log("Greater then 900");
	}
	*/
		console.log("meunu opwn");
		document.getElementById("mySidenav").style.width = navWidth;
		document.getElementById("darkMask").style.width = darkWidth;
}

function closeNav() {
	isOpen = false;
	//reset the width back to tiny so they dissippear
    document.getElementById("mySidenav").style.width = "0";
	document.getElementById("darkMask").style.width = "0";
}
/*
window.onresize = resize;
*/
//May not be the most effecent way, but this function lets the menu dinamically resize when window resizes
/*
function resize() {
    if(isOpen){
		if (window.matchMedia('(max-width: 500px)').matches){
		console.log("Less then 500px");
		navWidth = "100%";
		darkWidth = "0";
	}else if(window.matchMedia('(max-width: 900px)').matches){
		console.log("Less then 900px");
		navWidth = "100%";
	}
	else{
		navWidth = "100%";
				console.log("Greater then 900");
	}
	
		console.log("meunu opwn");
		document.getElementById("mySidenav").style.width = navWidth;
		document.getElementById("darkMask").style.width = darkWidth;
	}

}*/
</script>