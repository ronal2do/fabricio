var owl = jQuery('.owl-carousel');
jQuery('.owl-carousel').owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true
});

var balneario = angular.module('balneario', ['ngMask']);

