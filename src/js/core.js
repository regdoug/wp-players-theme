/* Custom functions */
jQuery(function(){
    jQuery(document).on('scroll',function(){
        var scrollTop = jQuery(document).scrollTop();
        if(scrollTop == 0){
            jQuery('#logo').removeClass('rotate-away');
        } else {
            jQuery('#logo').addClass('rotate-away');
        }
    });
});
