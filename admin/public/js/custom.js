$(document).ready(function () {

    $('#lgn-submit').click(function () {
        var clck_invld = 0,
            mail_filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/,
            bot_number,
            bot_number_array,
            total;
        $('.lgn-input').removeClass('is-invalid');
        if ($('#lgn-bot').val().trim().length < 1) {
            $('#lgn-bot').parents('.lgn-input').addClass('is-invalid');
            clck_invld = 1;
            $('#lgn-bot').focus();
        } else if ($('#lgn-bot').val().trim().length > 0) {
            bot_number = $('#lgn-bot').parents('.lgn-input').find('label').text();
            bot_number_array = bot_number.match(/[\d\.]+/g);
            total = 0;
            if (bot_number_array.length > 0) {
                $.each(bot_number_array, function (key, element) {
                    total += +element;
                });
                if ($('#lgn-bot').val().trim() !== total.toString()) {
                    $('#lgn-bot').parents('.lgn-input').addClass('is-invalid');
                    clck_invld = 1;
                    $('#lgn-bot').focus();
                }
            } else {
                $('#lgn-bot').parents('.lgn-input').addClass('is-invalid');
                clck_invld = 1;
                $('#lgn-bot').focus();
            }
        }

        if ($('#lgn-pass').val().trim().length < 4) {
            $('#lgn-pass').parents('.lgn-input').addClass('is-invalid');
            clck_invld = 1;
            $('#lgn-pass').focus();
        }
        if ($('#lgn-mail').val().trim().length < 2) {
            $('#lgn-mail').parents('.lgn-input').addClass('is-invalid');
            clck_invld = 1;
            $('#lgn-mail').focus();
        }
        if (clck_invld === 1) {
            return false;
        }
    });

});