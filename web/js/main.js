"use strict";

$(document).ready(function () {
    // Fix Cover height
    heightBackground();
    $(window).resize(function(){
        heightBackground();
    });

    // Change background image cover
    changeBackgroundImage();

    // Fixed Navbar on scroll + fading header content
    $(window).scroll(function(){
        headerVisibility();
    });
    
});