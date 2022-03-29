$(function(){

    "use strict";

    AOS.init();


    var menu = $('#menu-overlay')

    $('#btn-menu').click(function(e){

        menu.css('height','100vh');
        // $('.menu-overlay-link').addClass('anim');

    });

    $('#close-menu').click(function(e){
        menu.css('height','0vh');
        $('.menu-overlay-link').removeClass('anim');
    });


    /*navbar scroll */

    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
      if (prevScrollpos < currentScrollPos) {
        $('#navbar').css("top",'-100px');

      }
      else{
        $('#navbar').css("top",'0px');

      }
      prevScrollpos = currentScrollPos;
    }




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



/*open popup videos */
$('.owl-carousel').on('click', '.owl-item .popup-trigger', function (e) {
    $('#iframe-video').attr('src', '');
     var youtubelink = $(this).attr('data-yt');

        $('#iframe-video').attr('src', youtubelink);
        $("#popup").css('height','100vh');
})


$("#close-popup").click(function(e){
    $("#popup").css('height','0vh');
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
        pagination: {
            el: ".history-paginate",
            type: "fraction",
          },

      });


/* aos function */
function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  }

/* pricing*/

var galleryThumbs = new Swiper(".price-thumbs", {
    centeredSlides: true,
    centeredSlidesBounds: true,
    slidesPerView: 3,
    watchOverflow: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    direction: 'vertical'
  });

  var galleryMain = new Swiper(".price-main", {
    watchOverflow: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    preventInteractionOnTransition: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    effect: 'fade',
      fadeEffect: {
      crossFade: true
    },
    thumbs: {
      swiper: galleryThumbs
    }
  });

  galleryMain.on('slideChangeTransitionStart', function() {
    galleryThumbs.slideTo(galleryMain.activeIndex);
  });

  galleryThumbs.on('transitionStart', function(){
    galleryMain.slideTo(galleryThumbs.activeIndex);
  });

  });



