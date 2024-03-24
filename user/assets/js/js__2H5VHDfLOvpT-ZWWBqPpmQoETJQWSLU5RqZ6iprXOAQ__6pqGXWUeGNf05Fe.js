"use strict";
var $portfolio_filter,$grid_selectors,$blog,$port_filter;
var isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};


/*==============================================================
 owl slider
 ==============================================================*/

$(document).ready(function () {

    var isMobile = false;
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        isMobile = true;
    }




    /*===========================================================
     Contact Form 
     ============================================================ */

    $('.tz_submit').on('click', function (event) {
        event.preventDefault();
        var name_attr = [];
        var values = [];
        var tz_process = "";
        if($(this).closest("section").attr('id') !== undefined)
        {
            var section_id = $(this).closest("section").attr('id');
        }else{
            var section_id = $(this).closest("footer").attr('id');
        }
        var submit_loader = '<div class="loading text-deep-green display-inline-block margin-five no-margin-tb no-margin-right" id="loading">Loading...</div>';
        $('#' + section_id).find('form').find('button').after(submit_loader);
        $('#' + section_id).find('form input, form select,form textarea').each(
                function (index) {
                    
                    if ($(this).is('[data-email="required"]')) {
                        var required_val = $(this).val();
                        if (required_val != '') {
                            name_attr.push($(this).attr('name'));
                            values.push($(this).val());
                            tz_process = true;
                        } else {
                            $('#loading').remove();
                            $(this).addClass('tz_input_error');
                            tz_process = false;
                        }
                    }

                    if (!$(this).is('[data-email="required"]')) {
                        name_attr.push($(this).attr('name'));
                        values.push($(this).val());
                    }

                });
        
        var captcha_length = $('.g-recaptcha').length;
        if (captcha_length >= 1) {
            var response = grecaptcha.getResponse();
            //recaptcha failed validation
            if (response.length == 0) {
                $('#loading').remove();
                $('#google-recaptcha-error').remove();
                $('#' + section_id).find('.g-recaptcha').after('<span class="google-recaptcha-error" id="google-recaptcha-error">Invalid recaptcha</span>');
                tz_process = false;
            } else {
                $('#google-recaptcha-error').remove();
                $('#recaptcha-error').hide();
                tz_process = true;
            }
        }
        if (tz_process) 
        {
            localStorage.setItem('tz_section',section_id);
            $.post("tz_mail/contact.php", {
                data: { input_name: name_attr,values: values,section_id:section_id},
                type: "POST",
            }, function (data) {
                $('#loading').remove();
                var tz_form_output = '';
                if(data) 
                {
                    if(data.type == "tz_message") 
                    {
                       $('#error').remove(); 
                       $('#success').remove();
                       $('#google-recaptcha-error').remove(); 
                       var tz_form_output = '<div id="success" class="no-margin-lr alt-font">'+data.text+'</div>';
                    }else if (data.type == "tz_error") {
                        $('#success').remove();
                        $('#error').remove(); 
                        var tz_form_output = '<div id="error" class="no-margin-lr alt-font">'+data.text+'</div>';
                    }else{
                        var tz_form_output = '';
                    } 
                }

                if(tz_form_output != '')
                {
                    var section_id = localStorage.getItem('tz_section');
                    $('#'+section_id).find('form').before(tz_form_output);
                }
                $('#' + section_id).find('form input,form textarea').each(function (index) {
                    $(this).val('');
                    $(this).removeClass('tz_input_error');
                });

                setTimeout(function(){
                    $('#success').fadeOut();
                    $('#success').remove();
                    $('#error').fadeOut();
                    $('#error').remove();
                    $(this).submit();
                 },5000);
                localStorage.removeItem('tz_section');
            }, 'json');
        }
        
        $('#' + section_id).find('form input,form textarea').each(function (index) {
            $(this).keypress(function () {
                $(this).removeClass('tz_input_error');
            });
        });

        $('#' + section_id).find('form input,form textarea').each(function (index) {
            if ($(this).is(":focus")) {
                $(this).removeClass('tz_input_error');
            }
        });

        $('#' + section_id).find('form select').each(function (index) {
            $(this).on("change", function () {
                var val = this.value;
                if (val == ''){
                    $(this).removeClass('tz_input_error');
                }
            });
        });
    });

	 /*===========================================================
    Business Contact Form 
    ============================================================ */

    $('#contact-guest').submit(function (event) {
        event.preventDefault();
        var tz_process = "";
        if($(this).closest("section").attr('id') !== undefined)
        {
            var section_id = $(this).closest("section").attr('id');
        }else{
            var section_id = $(this).closest("footer").attr('id');
        }
        var submit_loader = '<div class="loading text-deep-green display-inline-block margin-five no-margin-tb no-margin-right" id="loading">Loading...</div>';
        $('#' + section_id).find('form').find('button').after(submit_loader);
        var name = $('#' + section_id).find('[name=name]').val();
        var email = $('#' + section_id).find('[name=email]').val();
        var comment = $('#' + section_id).find('[name=comment]').val();
        if(name == "")
        {
            $('#' + section_id).find('[name=name]').addClass('tz_input_error');
            $('#loading').remove();
            tz_process = false;
        }else{
             $('#' + section_id).find('[name=name]').removeClass('tz_input_error');
             tz_process = true;
        }
        if(email == "")
        {
            $('#' + section_id).find('[name=email]').addClass('tz_input_error');
            $('#loading').remove();
            tz_process = false;
        }else if(email != ''){

            if(IsEmail(email)==false)
            {
                $('#' + section_id).find('[name=email]').addClass('tz_input_error');
                $('#loading').remove();
                tz_process = false;
            }else{
                $('#' + section_id).find('[name=email]').removeClass('tz_input_error');
                tz_process = true;
            }
        }

        var captcha_length = $('.g-recaptcha').length;
        if (captcha_length >= 1) {
            var response = grecaptcha.getResponse();
            //recaptcha failed validation
            if (response.length == 0) {
                $('#loading').remove();
                $('#google-recaptcha-error').remove();
                $('#' + section_id).find('.g-recaptcha').after('<span class="google-recaptcha-error" id="google-recaptcha-error">Invalid recaptcha</span>');
                tz_process = false;
            } else {
                $('#google-recaptcha-error').remove();
                $('#recaptcha-error').hide();
                tz_process = true;
            }
        }
        

        if(tz_process) 
        {
            localStorage.setItem('tz_section',section_id);
            //alert(name + ' ' + email + ' ' + comment);
            $.post("/tz_mail/business-contact.php", 
              {name: name,email: email,comment: comment},
              function (data) {
                $('#loading').remove();
                var tz_form_output = '';
                if (data) 
                {
                    if(data.type == "tz_message") 
                    {
                       $('#success').remove();
                       $('#error').remove(); 
                       $('#google-recaptcha-error').remove(); 
                       var tz_form_output = '<div id="success" class="no-margin-lr alt-font">'+data.text+'</div>';
                    } else if (data.type == "tz_error") {
                        $('#success').remove();
                        $('#error').remove();
                        $('#google-recaptcha-error').remove();  
                        var tz_form_output = '<div id="error" class="no-margin-lr alt-font">'+data.text+'</div>';
                    }else{
                        var tz_form_output = '';
                    } 
                }

                if(tz_form_output != '')
                {
                    var section_id = localStorage.getItem('tz_section');
                    $('#'+section_id).find('form').before(tz_form_output);
                }
                $('#' + section_id).find('form input,form textarea').each(function (index) {
                    $(this).val('');
                    $(this).removeClass('tz_input_error');
                });

                 setTimeout(function(){
                    $('#success').fadeOut();
                    $('#success').remove();
                    $('#error').fadeOut();
                    $('#error').remove();
                    $(this).submit();
                 },5000);
                 localStorage.removeItem('tz_section');

            }, 'json');

        }
    });

    $('form input,form textarea').each(function (index) {
        $(this).keypress(function () {
            $(this).removeClass('tz_input_error');
        });
    });

    $('form select').each(function (index) {
        $(this).on("change", function () {
            var val = this.value;
            if (val == '')
            {
                $(this).removeClass('tz_input_error');
            }
        });
    });

    $('form input,form textarea').each(function (index) {
        if ($(this).is(":focus")) {
            $(this).removeClass('tz_input_error');
        }
    });


    function IsEmail(email) 
    {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
    }
    
});


setTimeout(function () {
    $(window).scroll();
}, 500);



$(window).on("orientationchange", function () {
    if (isMobile.any()) {
        $(window).unbind('equalize');
        //$('.equalize > div').css('height', '');
        setTimeout(function () {
            $('.equalize').equalize();
        }, 500);
    }
});


/*==============================================================
 accordion
 ==============================================================*/

$('.accordion-style1 .collapse').on('show.bs.collapse', function () {
    var id = $(this).attr('id');
    $('a[href="#' + id + '"]').closest('.panel-heading').addClass('active-accordion');
    $('a[href="#' + id + '"] .panel-title').find('i').addClass('fa-angle-up').removeClass('fa-angle-down');
});
$('.accordion-style1 .collapse').on('hide.bs.collapse', function () {
    var id = $(this).attr('id');
    $('a[href="#' + id + '"]').closest('.panel-heading').removeClass('active-accordion');
    $('a[href="#' + id + '"] .panel-title').find('i').removeClass('fa-angle-up').addClass('fa-angle-down');
});


/*==============================================================
 counter
 ==============================================================*/

jQuery(function ($) {
    // start all the timers
    animatecounters();
});

function animatecounters() {
    $('.timer').each(count);
    function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
    }

}



;/*})'"*/
;/*})'"*/
