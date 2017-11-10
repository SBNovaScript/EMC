<!-- TODO These colums get totally messed up if amount of text is diffrent or image demitions are diffrent, Fix this issue-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<?php

if(have_rows('three_field_repeater') ):

	while (have_rows('three_field_repeater') ): the_row();
	
		?>
	
	
	<div id="three_col_layout">
<div class="w3-cell-row abc">
  <div class="three_project w3-container w3-cell w3-cell-top w3-mobile col">
    <img class="three_projects_img" src="<?php the_sub_field('three_projects_image_one') ?>">
    <h1><?php the_sub_field('three_project_title_one') ?> <span class="date">(<?php the_sub_field('three_project_date_one') ?>)</span></h1>
    <p><?php the_sub_field('three_project_description_one') ?> </p>
  </div>
  
  <div class="three_project w3-container w3-mobile w3-cell col">
  <img class="three_projects_img" src="<?php the_sub_field('three_project_image_two') ?>">
  <h1> <?php the_sub_field('three_project_title_two') ?> <span class="date">(<?php the_sub_field('three_project_date_two') ?>)</span></h1>
    <p><?php the_sub_field('three_project_description_two') ?></p>
  </div>
  
</div>
</div>
		<?php
	endwhile;
	
else :

endif;

?>

