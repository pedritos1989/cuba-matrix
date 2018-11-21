(function ($) {
    $('#register-terms-check').on('click', function () {
        var self = this;
        if ($(self).is(':checked')) {
            $('.create-account-button').removeClass('disabled');
        } else {
            $('.create-account-button').addClass('disabled');
        }
    });
})(jQuery);