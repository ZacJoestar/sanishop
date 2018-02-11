$(document).ready(function(){

    var aspect_ratio = 0.57;

    var $box = jQuery(".video-container");

    jQuery(document).ready(function($) {
        $box.height( $box.width() * aspect_ratio );
    });

    jQuery(window).resize(function() {
        $box.height( $box.width() * aspect_ratio );
    });


    $('#play-video').on('click', function(ev) {
        $('.video-cover').fadeOut(500);
        $('iframe').css('opacity','1');
        $("#video")[0].src += "&autoplay=1";
        ev.preventDefault();

    });

});