<h1>Gallery</h1>
<?php 
$images = get_sub_field('photo_gallery');
if($images){
	foreach($images as $image){ ?>
	<img src="<?php echo $image['sizes']['thumbnail']?>" alt="<?php echo $image['alt']; ?>" class="gridImg">
	<?php 
	}
}?>