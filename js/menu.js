jQuery(document).ready(function(){
    jQuery('#menu-button').click(function(){
        if(jQuery('.menu-container').hasClass('close-menu')){
            jQuery('.menu-container').animate({
                right: "0px"
              }, 500, function() {
                jQuery('.menu-container').removeClass('close-menu');
                jQuery('.menu-container').addClass('open-menu');
            });
        }else if(jQuery('.menu-container').hasClass('open-menu')){
            jQuery('.menu-container').animate({
                right: "250px"
              }, 500, function() {
                jQuery('.menu-container').removeClass('open-menu');
                jQuery('.menu-container').addClass('close-menu');
            });   
        }
    });
});