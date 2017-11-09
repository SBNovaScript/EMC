<!-- TODO These colums get totally messed up if amount of text is diffrent or image demitions are diffrent, Fix this issue-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php 
$img1 = the_sub_field('three_project_layout_images_one');
$img2 = the_sub_field('three_project_layout_images_two');
$img3 = the_sub_field('three_project_layout_images_three');
?>

<div id="three_col_layout">
<div class="w3-cell-row abc">
  <div class="w3-container w3-cell w3-cell-top w3-mobile col">
    <img src="<?php echo $img1['url']; ?>" alt ="<?php echo $img1['alt'];?>"> 
    <h1><?php echo the_sub_field('three_project_one_title') ?> <span class="date">(<?php echo the_sub_field('three_project_one_date') ?>)</span></h1>
    <p><?php echo the_sub_field('three_project_one_description') ?> </p>
  </div>
  
  <div class="w3-container w3-mobile w3-cell col">
  <img src="<?php echo $img2['url']; ?>" alt ="<?php echo $img2['alt'];?>"> 
  <h1> <?php echo the_sub_field('three_project_two_title') ?> <span class="date">(<?php echo the_sub_field('three_project_two_date') ?>)</span></h1>
    <p><?php echo the_sub_field('three_project_two_description') ?></p>
  </div>
  
  <div class="w3-container w3-mobile w3-cell col">
  <img src="<?php echo $img3['url']; ?>" alt ="<?php echo $img3['alt'];?>"> 
  <h1><?php echo the_sub_field('three_project_three_title') ?> <span class="date">(<?php echo the_sub_field('three_project_three_date') ?>)</span></h1>
    <p><?php echo the_sub_field('three_project_three_description') ?></p>
  </div>
</div>
</div>


