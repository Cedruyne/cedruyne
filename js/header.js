"use strict";

function heightBackground(){
    var height = $(window).height();
    $(".cover, .bgCover").css({
        'height': height
    });
}

function headerVisibility() {
    var scrollPos = $(window).scrollTop();
    var currentPos = window.pageYOffset;
    $('.headerContent').css({
        'margin-top': (scrollPos / 4) + "px",
        'opacity': 1 - (scrollPos / 200)
    })

    if ((scrollPos > 110) || (currentPos > 110))
    {
        console.log("Scroll Pos : " + scrollPos + "Current Pos : " + currentPos);
        $('.headerContent').addClass('hidden');
    } else
    {
        $('.headerContent').removeClass('hidden');
    }
}