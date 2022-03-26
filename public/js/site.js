$(function(){

    "use strict";

    AOS.init();

    
    var menu = $('#menu-overlay')

    $('#btn-menu').click(function(e){
        menu.css('height','100vh');
    });

    $('#close-menu').click(function(e){
        menu.css('height','0vh');
    });



    /* Owl videos carousel */

    var videos = $('.owl-videos');

    videos.owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });

    $('.owlVideosNext').click(function() {
        videos.trigger('next.owl.carousel');
    });

    $('.owlVideosPrev').click(function() {
        videos.trigger('prev.owl.carousel');
    });






  /* history carousel */

    var history = $('.owl-history');

    history.owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        items:1,
        center:true,
    });

    $('.owlHistoryNext').click(function() {
        history.trigger('next.owl.carousel');
    });

    $('.owlHistoryPrev').click(function() {
        history.trigger('prev.owl.carousel');
    });


    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        effect:"fade",
        // Navigation arrows
        navigation: {
          nextEl: '.owl-History-Next',
          prevEl: '.owl-History-Prev',
        },

      });


  });



