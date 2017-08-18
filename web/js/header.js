"use strict";

function heightBackground(){
    var height = $(window).height();
    $(".cover, .bgCover").css({
        'height': height
    });
}

function changeBackgroundImage() {
    var cover = document.getElementById('cover');
    var bgImage = cover.getAttribute('data-bgImage');

    switch (bgImage)
    {
        case "index":
            cover.style.backgroundImage='url(web/img/index_cover.jpg)';
            break;
        case "contact":
            cover.style.backgroundImage='url(web/img/contact_cover.jpg)';
            break;
        default:
            cover.style.backgroundImage='none';
    }
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
        $('.headerContent').addClass('hidden');
    } else
    {
        $('.headerContent').removeClass('hidden');
    }
}