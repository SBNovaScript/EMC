<div class="picAndText">
<?php $image = get_sub_field('banner_image'); ?>
<img src= "<?php echo $image['url']; ?>" alt = "alt ="<?php echo $image['alt']?>">
<div class="content">
<?php the_sub_field("content");?>
</div>
</div>