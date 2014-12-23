/* Custom functions */

/* Set up foundation off canvas menu */
jQuery(document).foundation({
    offcanvas: {
        open_method: 'overlap',
        close_on_click: false
    }
});

/* When the user scrolls down, #logo needs to be hidden so it doesn't block content */
jQuery(function(){
    jQuery(document).on('scroll', function() {
        var scrollTop = jQuery(document).scrollTop();
        if(scrollTop === 0){
            if( Modernizr.csstransforms3d ) {
                jQuery('#logo').removeClass('rotate-away');
            } else {
                jQuery('#logo').show(600);
            }
        } else {
            if( Modernizr.csstransforms3d ) {
                jQuery('#logo').addClass('rotate-away');
            } else {
                jQuery('#logo').hide(600);
            }
        }
    });
});
