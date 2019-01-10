(function ($) {
    //Bootstrap tooltip
    $('[data-toggle="tooltip"]').tooltip();

    //Scroll to Top
    $(".scroll-to-top").click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });

    // Toggle Scroll to Top button
    $(window).scroll(function () {

        var position = $(window).scrollTop();

        if (position >= 200) {
            $('.scroll-to-top').addClass('active');
        }
        else {
            $('.scroll-to-top').removeClass('active');
        }
    });

    /* user options util */
    $('.user-actions-btn').click(function () {
        if ($('.search-small-btn').hasClass('show-search-small-box')) {
            if ($(window).width() > 767) {
                $('.search-small-box').fadeOut(300);
            } else {
                $('.search-small-box').fadeOut(0);
            }
            $('.search-small-btn').removeClass('show-search-small-box');
        }

        if ($('.user-actions-btn').hasClass('show-actions-box')) {
            if ($(window).width() > 767) {
                $('.actions-box').fadeOut(300);
            } else {
                $('.actions-box').fadeOut(0);
            }
            $('.user-actions-btn').removeClass('show-actions-box');
        } else {
            if ($(window).width() > 767) {
                $('.actions-box').fadeIn(300);
            } else {
                $('.actions-box').fadeIn(0);
            }
            $('.user-actions-btn').addClass('show-actions-box');
        }
    });

    if ($('.user-actions-btn').length != 0) {
        $('.actions-box, .user-actions-btn').on('click', function (e) {
            e.stopPropagation();
        });

        $('body').on('click', function () {
            if ($('.user-actions-btn').hasClass('show-actions-box')) {
                $('.user-actions-btn').removeClass("show-actions-box");
                $('.actions-box').fadeOut(300);
            }
        });
    }
    /* end */

    /* search small util */
    $('.search-small-btn').click(function () {
        if ($('.user-actions-btn').hasClass('show-actions-box')) {
            if ($(window).width() > 767) {
                $('.actions-box').fadeOut(300);
            } else {
                $('.actions-box').fadeOut(0);
            }
            $('.user-actions-btn').removeClass('show-actions-box');
        }

        if ($('.search-small-btn').hasClass('show-search-small-box')) {
            if ($(window).width() > 767) {
                $('.search-small-box').fadeOut(300);
            } else {
                $('.search-small-box').fadeOut(0);
            }
            $('.search-small-btn').removeClass('show-search-small-box');
        } else {
            if ($(window).width() > 767) {
                $('.search-small-box').fadeIn(300);
            } else {
                $('.search-small-box').fadeIn(0);
            }
            $('.search-small-btn').addClass('show-search-small-box');
        }
    });

    if ($('.search-small-btn').length != 0) {
        $('.search-small-box, .search-small-btn').on('click', function (e) {
            e.stopPropagation();
        });

        $('body').on('click', function () {
            if ($('.search-small-btn').hasClass('show-search-small-box')) {
                $('.search-small-btn').removeClass("show-search-small-box");
                $('.search-small-box').fadeOut(300);
            }
        });
    }
    /* end */

    /* add to cart modal */
    $('#shoppingCartModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget),
            recipient = button.data('modal-body'),
            title = button.data('modal-title'),
            money = button.data('product-price'),
            modal = $(this);
        modal.find('.modal-title').text(title);
        modal.find('.form-area').children().remove();
        modal.find('.form-area').append(recipient);
        modal.find('.info-area div').children(':last').remove();
        modal.find('.info-area div').append('<span>' + money + '</span>');
        modal.find('.remove-if-modal').attr('style', 'display:none');
        modal.find('form').find('select').attr('style', 'width:100%').select2();
        modal.find('form').validate();

        /* capture submit click */
        modal.find('.action-save').on('click', function (capt) {
            modal.find('.remove-if-modal').trigger('click');
        });
        /* end */

    });
    /* end */

})(jQuery);