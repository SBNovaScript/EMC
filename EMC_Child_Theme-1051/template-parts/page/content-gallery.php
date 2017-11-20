<h1><?php the_sub_field('gallery_title'); ?></h1>
<div class="gallery">
<?php 
$images = get_sub_field('photo_gallery');
if($images){?>

<?php
	foreach($images as $image){ ?>
	<img src="<?php echo $image['sizes']['medium']?>" alt="<?php echo $image['alt']; ?>" class="gridImg">
	<?php 
	}
}?>
</div>