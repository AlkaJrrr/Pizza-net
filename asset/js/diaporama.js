console.log('coucou');
$(window).on('load',function() {
    $('.flexslider').flexslider({
        animation: "slide",            //String: Select your animation type, "fade" or "slide"
        easing: "swing",   
        controlNav: false,
        directionNav: false
    });
    
});
