$(document).ready(function(){

    //VIDEO //



    $('#play-video').on('click', function(ev) {
        $('.video-cover').fadeOut(500);
        $('iframe').css('opacity','1');
        $("#video")[0].src += "?autoplay=1";
        ev.preventDefault();

    });

    // POPIN //

    $('.img-visuel-card, .item-gallery-wrapper, .vertical-gallery-item').on('click', function() {
        var imgSrc = $(this).find('img').prop('src');
       $('.popin-container, .popin-overlay').fadeIn();
       $('.popin-container img').attr('src', imgSrc);
       $('body').css('overflow','hidden');
       console.log(imgSrc);
    });

    $('.btn-close-popin').on('click', function () {
        $('.popin-container, .popin-overlay').fadeOut();
        $('body').css('overflow','visible');
    });


    // OPEN - CLOSE NAV MOBILE //

    $('.btn-menu-trigger').on('click', function () {
        $('.nav-mobile').toggleClass('nav-mobile-open');
    });

    $('.btn-close-menu').on('click', function () {
        if($('.nav-mobile').hasClass('nav-mobile-open')){
            $('.nav-mobile').removeClass('nav-mobile-open');
        } else {

        }
    });

    // SUBLIST //
    $('.trigger-sub-list').hover(function() {
       $(this).find('.nav-sub-list').fadeToggle('fast');
    });

});