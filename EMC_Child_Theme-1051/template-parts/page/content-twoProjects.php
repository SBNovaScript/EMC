<!-- TODO These colums get totally messed up if amount of text is diffrent or image demitions are diffrent, Fix this issue-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php


if(have_rows('two_field_repeater') ):

	$idtext = 0;

	while (have_rows('two_field_repeater') ): the_row();
	
		?>
<div class="fade-in-layout three_col_layout" id="idtext-<?php echo $idtext; $idtext +=1; ?>">
	<div class="w3-cell-row abc">

	  <div class="three_project w3-container w3-cell w3-cell-top w3-mobile col">
		<img class="three_projects_img" src="<?php the_sub_field('two_projects_image_one') ?>">
		<h1><?php the_sub_field('two_project_title_one') ?> 
		<span class="date">
		
		<?php if(get_sub_field('two_projects_date_one') != ""){
			echo "(";
		} ?>
		
		<?php the_sub_field('two_projects_date_one') ?>
		
		<?php if(get_sub_field('two_projects_date_one') != ""){
			echo ")";
		} ?>
		
		</span></h1>
		<p><?php the_sub_field('two_project_description_one') ?> </p>
	  </div>
	  
	  <div class="three_project w3-container w3-mobile w3-cell col">
		<img class="three_projects_img" src="<?php the_sub_field('two_projects_image_two') ?>">
		<h1> <?php the_sub_field('two_project_title_two') ?> <span class="date">
		
		<?php if(get_sub_field('two_projects_date_two') != ""){
			echo "(";
		}
		?>
		
		<?php the_sub_field('two_projects_date_two') ?>
		
		<?php if(get_sub_field('two_projects_date_two') != ""){
			echo ")";
		}
		?>
		
		</span></h1>
		<p><?php the_sub_field('two_project_description_two') ?></p>
	  </div>
  
	</div>
</div>

<div class="spacer" style="height: <?php the_sub_field("spacer_height");?>px;"  ></div>
		<?php
	endwhile;
	
else :

endif;

?>

