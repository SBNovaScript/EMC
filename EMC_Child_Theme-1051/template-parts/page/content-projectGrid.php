<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<?php

if(have_rows('project_grid_layout') ):

	while (have_rows('project_grid_layout') ): the_row();
	
		?>
	
	<div class="col-sm-4">
		<img src=<?php the_sub_field('repeat_image'); ?>> 
		<h2><?php the_sub_field('repeat_title'); ?></h2>
		<p class="projectsPage">
		<?php the_sub_field('repeat_text'); ?>
		</p>
	</div>
		
		<?php
	endwhile;
	
else :

endif;

?>