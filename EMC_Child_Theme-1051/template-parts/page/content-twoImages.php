
<div class="twoImages">
<?php
$isEqual = get_sub_field("is_equal_sized");
$floatRight = get_sub_field("should_float_right");

$img1 = get_sub_field('large_image');
$img2 = get_sub_field('small_image');
?>

<!-- If the user checked the Float right box then insert float right into html-->
<div <?php if(!($isEqual)){?> class="big"  <?php if($floatRight){?> style="float:right" <?php }} ?>>
  <img src="<?php echo $img1['url']; ?>" alt ="<?php echo $img1['alt'];?>"> 
</div>
<div 
<?php if(!($isEqual)):?>
	class="small"
<?php endif; ?>
>
  <img src="<?php echo $img2['url']; ?>" alt ="<?php echo $img2['alt'];?>"> 
</div>
</div>