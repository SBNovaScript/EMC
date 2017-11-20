<div class="gallery">
<!--Gallery Item-->
<?php 

$imageSize = '';
if( have_rows('photo_repeater') ):
	while ( have_rows('photo_repeater') ) : the_row();
	$image = get_sub_field('linked_image');?>
		<div class="innerWrap">
		
			<img src="<?php echo $image['url']; ?>" alt ="<?php echo $image['alt']?>"> 
			<div class="mask"><a href=""><span>Some Text</span></a></div>
		</div>
<?php 
		
    endwhile;
	endif;
	?>
