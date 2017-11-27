<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
	$(".item").click(function(){
  
  	$(this).children(".content").slideToggle(200);
    $(this).children(".icon").toggleClass("iconOpen");
    
    //Sqitch the plus sign for the minus sign and back
    if( $(this).children(".icon").text() == "+"){
    		$(this).children(".icon").text("-");
    }else{
    	$(this).children(".icon").text("+");
    }
    
    
  })

})
</script>

<div class="fancy_drop_down_menu">
<ul>
<?php
if( have_rows('fancy_bullet_points_picAndText_repeater') ):
		while ( have_rows('fancy_bullet_points_picAndText_repeater') ) : the_row();?>
	<li class="item">
		<div class="icon">+</div><h2> <?php the_sub_field('fancy_bullet_points_picAndText_repeater_title'); ?></h2>
		<h3><?php the_sub_field('fancy_bullet_points_picAndText_repeater_subtitle'); ?></h3>
		<div class="content">
			<p>
				<?php the_sub_field('fancy_bullet_points_picAndText_repeater_dropDownContent'); ?>
			</p>
		</div>
    
	</li>
			
		<?php
		endwhile;
endif;
?>

</ul>

</div>
