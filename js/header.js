"use strict";

function heightBackground(){
    var height = $(window).height();
    $(".cover, .bgCover").css({
        'height': height
    });
}

function headerVisibility() {
    var scrollPos = $(window).scrollTop();
    $('.headerContent').css({
        'margin-top': (scrollPos / 4) + "px",
        'opacity': 1 - (scrollPos / 200)
    })
}