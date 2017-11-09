<div class = "four_item_expander">
<?php

if( have_rows('popOut_repeater') ):
	//Istilise i to 0, i is used to keep track of itterations and insert a new row tag every three runs
		$i = 0;
		// loop through the rows of data
		while ( have_rows('popOut_repeater' )) : the_row();
		
		//Get the image the user entered and put it into image (its a relational array)
		$img = get_sub_field('pop_out_image');
		?>
		<div>
				<img src="<?php echo $img['url']; ?>" alt ="<?php echo $img['alt'];?>"> 
				<h4><?php the_sub_field('popOut_title');?></h4>
				<div class="hiddenWidth">
					<p><?php the_sub_field('popOut_content');?></p>
</div>
		</div>
		
		<?php
	endwhile;
endif;
?>
</div>
