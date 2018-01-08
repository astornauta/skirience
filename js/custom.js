window.mr = window.mr || {};
mr.forms.validateFields = function(form) {
    var body = $(body),
        error = false,
        originalErrorMessage,
        name,
        count = 0,
        thisElement;

        form = $(form);

    count = form.find('.validate-required[type="checkbox"]:checked').length;
    console.log(count);
    if (count == 0) {
        error = 1;
        $('#Aspen').addClass('field-error');
    } else {
        $('#Aspen').removeClass('field-error');
    }
    // form.find('.validate-required[type="checkbox"]').each(function() {
    //     var checkbox = $(this);
    //     if (!$('[name="' + $(this).attr('name') + '"]:checked').length) {
    //         error = 1;
    //         name = $(this).attr('data-name') ||  'check';
    //         checkbox.parent().addClass('field-error');
    //         body.find('.form-error').text('Please tick at least one ' + name + ' box.');
    //         body.find('.form-error').text('Por favor selecciona al menos un destino');
    //     }
    // });

    form.find('.validate-required, .required, [required]').not('input[type="checkbox"]').each(function() {
        if ($(this).val() === '') {
            $(this).addClass('field-error');
            error = 1;
        } else {
            $(this).removeClass('field-error');
        }
    });

    form.find('.validate-email, .email, [name*="cm-"][type="email"]').each(function() {
        if (!(/(.+)@(.+){2,}\.(.+){2,}/.test($(this).val()))) {
            $(this).addClass('field-error');
            error = 1;
        } else {
            $(this).removeClass('field-error');
        }
    });

    form.find('.validate-number-dash').each(function() {
        if (!(/^[0-9][0-9-]+[0-9]$/.test($(this).val()))) {
            $(this).addClass('field-error');
            error = 1;
        } else {
            $(this).removeClass('field-error');
        }
    });

    // Validate recaptcha
    if(form.find('div.recaptcha').length && typeof form.attr('data-recaptcha-sitekey') !== typeof undefined){
        thisElement = $(form.find('div.recaptcha'));

        if(grecaptcha.getResponse(form.data('recaptchaWidgetID')) !== ""){
            thisElement.removeClass('field-error');
        }else{
            thisElement.addClass('field-error');
            error = 1;
        }
    }

    if (!form.find('.field-error').length) {
        body.find('.form-error').fadeOut(1000);
    }else{

        var firstError = $(form).find('.field-error:first');

        if(firstError.length){
            $('html, body').stop(true).animate({
                scrollTop: (firstError.offset().top - 100)
            }, 1200, function(){firstError.focus();});
        }
    }



    return error;
};
