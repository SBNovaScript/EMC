<div class = "four_item_expander">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php

if( have_rows('popOut_repeater') ):
	//Istilise i to 0, i is used to keep track of itterations and insert a new row tag every three runs
		$i = 0;
		// loop through the rows of data
		while ( have_rows('popOut_repeater' )) : the_row();
		
		//Get the image the user entered and put it into image (its a relational array)
		$img = get_sub_field('pop_out_image');
		?>
		<div class="card">
				<img src="<?php echo $img['url']; ?>" alt ="<?php echo $img['alt'];?>"> 
				<h4><?php the_sub_field('popOut_title');?></h4>
				<div class="hiddenWidth">
					<p><?php the_sub_field('popOut_content');?></p>
</div>
		</div>
		
		<?php
	endwhile;
endif;
?>
</div>

<script>
$(document).ready(function(){
	
//Hide the text for all elements
 $(".four_item_expander").children("div").children(".hiddenWidth").hide();
 $(".four_item_expander div:nth-child(3)").children(".hiddenWidth").show();

 //Set font size big for default big element
 $(".four_item_expander div:nth-child(3)").children("h4").css('font-size','24px');

 //When any element is clicked
    $(".four_item_expander").children("div").click(function(){
		
		//Reset values to default for all elements
    	$(".four_item_expander").children("div").css('width','25%');
        $(".four_item_expander").children("div").children("h4").css('font-size','18px');  
		$(".four_item_expander").children("div").children(".hiddenWidth").hide();
        
		//Set values to blowen up values for element that was clicked
		$(this).css('width','50%');  			            		        
		$(this).children(".hiddenWidth").delay(0).fadeIn(20);
        $(this).children("h4").css('font-size','24px');
    });
});
</script>
