jQuery(document).ready(function(e) {
    jQuery("form[ajax=true]").submit(function(e) {
        e.preventDefault();
        var form_data = jQuery(this).serialize();
        var form_url = '/php/send_message.php';
        var form_method = jQuery(this).attr("method").toUpperCase();
        
        jQuery.ajax({
            url: form_url, 
            type: form_method,      
            data: form_data,     
            cache: false,
            success: function(returnhtml){                          
                console.log(returnhtml);
            }           
        });     
    });      
});