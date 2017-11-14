<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<?php

	if(have_rows('gallery_repeater')):
		$i = 0;
		while(have_rows('gallery_repeater')) : thre_row();
		
		$image = get_sub_field('image_repeater');
		
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