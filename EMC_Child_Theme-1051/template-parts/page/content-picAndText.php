<div class="picAndText">
<?php $image = get_sub_field('banner_image'); ?>
<img src= "<?php echo $image['url']; ?>" alt = "alt ="<?php echo $image['alt']?>">
<div class="content">
<?php 
if( have_rows('pic_and_text_content') ): 

	// loop through all the rows of flexible content
	while ( have_rows('pic_and_text_content') ) : the_row();
		if( get_row_layout() == 'wysiwyg_editor_picAndText' ){?>
				<div class="verical-center">
					<?php the_sub_field("content_editor_picandtext");?>
				</div>
		<?php
		}
		if( get_row_layout() == 'fancy_bullet_points_picAndText' ){
			get_template_part( 'template-parts/page/content', 'fancyBullets' );
		}
		
	endwhile;
	
endif;
?>
</div>


</div>