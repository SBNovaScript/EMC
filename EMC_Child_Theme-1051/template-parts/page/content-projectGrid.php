<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="container-fluid projects-page">

	<h1><?php the_sub_field('title')?></h1>
	
	<?php 
	// check if the repeater field has rows of data
	if( have_rows('project_grid_repeater') ):
	//Istilise i to 0, i is used to keep track of itterations and insert a new row tag every three runs
		$i = 0;
		// loop through the rows of data
		while ( have_rows('project_grid_repeater') ) : the_row();
		
		//Get the image the user entered and put it into image (its a relational array)
		$image = get_sub_field('project_grid_image');
		
		//Check if this run is a multible of 3 if so insert new row div wrapper
			if(($i % 3) == 0):?>
				<div class="row">
			<?php endif?>
			
			<!--All info that creates each item -->
			<div class="col-sm-4 three_col_layout">
			<img src="<?php echo $image['url']; ?>" alt ="<?php echo $image['alt']?>"> 
			<h2><?php the_sub_field('project_title'); ?></h2>
			<p>
			<?php the_sub_field('project_description'); ?>
			</p>
			</div>
<?php $i++ ?>
	<?php 
		
    endwhile;
	endif;
	?>



<?php
/*
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
*/
?>