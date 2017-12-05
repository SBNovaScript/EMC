<!-- TODO These colums get totally messed up if amount of text is diffrent or image demitions are diffrent, Fix this issue-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php


if(have_rows('four_field_repeater') ):

	$idtext = 0;

	while (have_rows('four_field_repeater') ): the_row();
	
		?>
	<div class="two-projects-outer" id="idtext-<?php echo $idtext; $idtext +=1; ?>">
		<div class="w3-cell-row abc">
		  <div class="two-projects-container w3-container w3-cell w3-cell-top w3-mobile col">
			<img class="two-projects-img" src="<?php the_sub_field('four_projects_image_one') ?>">
			
			<div class="two-projects-overlay">
				<div class="two-projects-text">
					<h1><?php the_sub_field('four_projects_title_one') ?> <span class="date">(<?php the_sub_field('four_projects_date_one') ?>)</span></h1>
				</div>
			</div>
		  </div>
	  
		  <div class="two-projects-container w3-container w3-mobile w3-cell col">
			<img class="two-projects-img" src="<?php the_sub_field('four_projects_image_two') ?>">
			<div class="two-projects-overlay">
				<div class="two-projects-text">
					<h1> <?php the_sub_field('four_projects_title_two') ?> <span class="date">(<?php the_sub_field('four_projects_date_two') ?>)</span></h1>
				</div>
			</div>
		  </div>
		</div>
	</div>
	
	<div class="project-spacer" style="height: <?php the_sub_field("spacer_height");?>px;"  ></div>
	
		<?php
	endwhile;
	
else :

endif;

?>

