<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<?php

	if(have_rows('photo_gallery_repeater')):
		$i = 0;
		while(have_rows('photo_gallery_repeater')) : the_row();
		
		$image = get_sub_field('photo_gallery_image_repeater');
		
		if(($i %3) == 0):?>
			<div class="row">
		<?php endif ?>
		
		<div class="col-sm-4">
		<img src="<?php echo $image['url'] ?>">
		
		
		<?php 
		$i++ ;
		endwhile;
		endif;
?>


<!--<h1>--><?php /*the_sub_field('gallery_title'); ?></h1>
<?php 
$images = get_sub_field('photo_gallery');
if($images){
	foreach($images as $image){ ?>
	<img src="<?php echo $image['sizes']['thumbnail']?>" alt="<?php echo $image['alt']; ?>" class="gridImg">
	<?php 
	}
}*/?>
