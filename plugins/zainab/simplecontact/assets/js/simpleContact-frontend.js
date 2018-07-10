jQuery(document).ready(function($){
    jQuery(window).on('ajaxBeforeSend', function() {
        jQuery('#simpleContactSubmitButton').prop('disabled',true);
    });

    jQuery(window).on('ajaxUpdateComplete', function() {
        jQuery('#simpleContactSubmitButton').prop('disabled',false);
    });

    jQuery('#simpleContactForm').on('ajaxSuccess', function() {
        document.getElementById('simpleContactForm').reset();
        
        if(typeof grecaptcha != "undefined")
            grecaptcha.reset();
    });
    
});