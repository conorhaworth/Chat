jQuery(document).ready(function(){
    jQuery('.modal-close').click(function(){
        jQuery('.modal-item').each(function(){
            jQuery(this).css('display', 'none');
        });
    });
});
function openSettings(){
    jQuery('.overlay').css('display', 'block');
    jQuery('.modal-container').css('display', 'block');
    jQuery('#modal-settings').css('display', 'block');
}