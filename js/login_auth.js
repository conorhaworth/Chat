/*global jQuery, window, document, $*/

function usernameError(){
    jQuery('#login_username').css('border-color', 'red');
    jQuery('#login_username_error').css('display','block');
    jQuery('#login_submit').attr('disabled', '');
}

function usernameValid(){
    jQuery('#login_username').css('border-color', 'green');
    jQuery('#login_username_error').css('display','none');
    jQuery('#login_submit').removeAttr('disabled');
}

function validateUsername(username){
    //Username too short
    if(username.length <= 0){
        usernameError();
        return;
    }
    //Username too long
    if(username.length > 18){
        usernameError();
        return;
    }
    if(username.replace(/[^0-9]/g,"").length == 0 && username.replace(/[^A-Za-z]/g,"").length == 0){
        usernameError();
        return;
    }
    if(username.replace(/[0-9A-Za-z-_+]/g,"").length > 0){
        usernameError();
        return;
    }
    usernameValid();
}

jQuery(document).ready(function(){
    jQuery('#login_username').keyup(function(){
        if(typeof timer != 'undefined'){
            clearTimeout(timer);
            var timer = window.setTimeout(validateUsername(jQuery('#login_username').val()), 500); 
        }
            var timer = window.setTimeout(validateUsername(jQuery('#login_username').val()), 500); 
    });
});