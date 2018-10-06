jQuery(document).ready(function ($) {
    var ms_ie = false;
    var ua = window.navigator.userAgent;
    var old_ie = ua.indexOf('MSIE');
    var new_ie = ua.indexOf('Trident/');
    if ((old_ie > -1) || (new_ie > -1)) {
        ms_ie = true;
    }
    if (ms_ie) {
        jQuery('body').addClass('ie');
    }

    jQuery('.alert').append('<i class="icon-cancel message-close fa fa-close"></i>');
    jQuery('body').on('click', '.icon-cancel.message-close', function () {
        jQuery(this).parent().animate({
            'opacity': '0'
        }, function () {
            jQuery(this).slideUp();
        });
    });
    jQuery('.sidebar #simplenews-block-form-69 input[type="submit"]').attr('value','Go!');

    jQuery('.view-compare-products .flag-compare .unflag-action,.view-wishlist .flag-shop .unflag-action').on('click',function(){
        jQuery(this).parents('li').fadeOut();
    })
    /*MAP*/
    jQuery('.google-map').click(function () {
        jQuery('.google-map iframe').css("pointer-events", "auto");
    });
    jQuery(".google-map").mouseleave(function () {
        jQuery('.google-map iframe').css("pointer-events", "none");
    });
    /*VALIDATE*/
    jQuery('.simplenews-subscribe').validate();
    jQuery('#simplenews-block-form-69').validate();
    jQuery('#simplenews-block-form-69--2').validate();
    jQuery('.comment-form').validate();
    jQuery('.webform-client-form').validate();
    jQuery("#add-review").click(function() {
        jQuery('html, body').animate({
            scrollTop: jQuery("#op-reviews").offset().top -50
        }, 800);
    });
});