jQuery(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    jQuery(window).scroll( function(){
    
        /* Check the location of each desired element */
        jQuery('.three_col_layout').each( function(i){
            
            var bottom_of_object = jQuery(this).offset().top + jQuery(this).outerHeight();
            var bottom_of_window = jQuery(window).scrollTop() + jQuery(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window >= bottom_of_object - 200 ){
                
                jQuery(this).animate({'opacity':'1'},500);
                    
            }
            
        }); 
    
    });
    
});