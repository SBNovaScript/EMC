<div class="twoImages">
<?php
$isEqual = get_sub_field("is_equal_sized");
$floatRight = get_sub_field("should_float_right");

$img1 = get_sub_field('large_image');
$img2 = get_sub_field('small_image');
?>
<!--Need to add more logic so this lets user decide which image should float where-->
<div class="big">
  <img src="<?php echo $img1['url']; ?>" alt ="<?php echo $img1['alt']?>"> 
</div>
<div class="small">
  <img src="<?php echo $img2['url']; ?>" alt ="<?php echo $img2['alt']?>"> 
</div>
</div>