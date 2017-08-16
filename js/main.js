"use strict";

$(document).ready(function () {
    // Fix Cover height
    heightBackground();
    $(window).resize(function(){
        heightBackground();
    });

    // Fixed Navbar on scroll + fading header content
    $(window).scroll(function(){
        fixNavbar();
        headerVisibility();
    });
    
});