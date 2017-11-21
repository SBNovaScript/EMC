<div class="gallery">
<!--Gallery Item-->
<?php 

$imageSize = '';
if( have_rows('photo_repeater') ):
	while ( have_rows('photo_repeater') ) : the_row();
	$image = get_sub_field('linked_image');?>
		<div class="innerWrap">
		<a href="<?php the_sub_field("image_link_location"); ?>">
			<img src="<?php echo $image['url']; ?>" alt ="<?php echo $image['alt']?>"> 
			<span><?php the_sub_field("image_title"); ?></span>
		</a>
		</div>
<?php 
		
    endwhile;
	endif;
	?>
