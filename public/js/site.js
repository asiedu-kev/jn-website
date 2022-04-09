$(function () {

    "use strict";

    // Animations sur les textes

    AOS.init({
        once: true,
    });

    // Scroll to hash (ancre)


    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 100);
    });


    // Header de la navbar


    var menu = $('#menu-overlay')

    $('#btn-menu').click(function (e) {
        $('.nav').css('height', '400px');
        menu.css('height', '100vh');

        $('.menu-overlay-link1').css('bottom', '0px')
        $('.menu-overlay-link2').css('bottom', '0px')
        $('.menu-overlay-link3').css('bottom', '0px')
        $('.menu-overlay-link4').css('bottom', '0px')
        $('.menu-overlay-title').css('right', '-31px')



    });

    $('#close-menu').click(function (e) {
        menu.css('height', '0vh');

    });


    // Animation sur le header

    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos < currentScrollPos) {
            $('#navbar').css("top", '-100px');

        }
        else {
            $('#navbar').css("top", '0px');

        }
        prevScrollpos = currentScrollPos;
    }



    /* Owl videos carousel */

    var videos = $('.owl-videos');

    videos.owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 3,
                margin: 20
            }
        },
    });


    var counter = [];

    var wOwlItem = 0;
        var wOwlStage= 0;





    videos.on('changed.owl.carousel', event => {

        var el = event.item.index;
        var list = event.item.count;

        console.log(el)

        if(el >= 0){

            counter.push(el);

            $('#videos-controller').removeClass('videos-controller');
            if(window.screen.width > 768){
                $('.owl-stage').css('width','3500px ');
                $('.owl-item').css('width','560px');
            }




        }





        var ret = (counter.length - 1);

        if(counter[ret] == 0 ){

            if(window.screen.width > 768){
                $('.owl-stage').css('width','3500px');
                $('#videos-controller').addClass('videos-controller');
                $('.owl-item').css('width','560px');

            }
        }
    });


    $('.owlVideosNext').click(function () {
        videos.trigger('next.owl.carousel');
    });

    $('.owlVideosPrev').click(function () {
        videos.trigger('prev.owl.carousel');
    });





    /*open popup videos */
    $('.owl-carousel').on('click', '.owl-item .popup-trigger', function (e) {
        $('#iframe-video').attr('src', '');
        var youtubelink = $(this).attr('data-yt');

        $('#iframe-video').attr('src', youtubelink);
        $("#popup").css('height', '100vh');
    })


    $("#close-popup").click(function (e) {
        $("#popup").css('height', '0vh');
    });


    // Carousel pour le mode histoire

    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,
        effect: "fade",
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: true,
        // Navigation arrows
        navigation: {
            nextEl: '.owl-History-Next',
            prevEl: '.owl-History-Prev',
        },
        pagination: {
            el: ".history-paginate",
            type: "fraction",
        },
        breakpoints: {
            0: {
                direction: 'vertical',
            },
            768: {
                direction: 'vertical',
            }
        }


    });



    // Verifier la fin du carousel

    swiper.on('reachEnd', function () {
        $('#myHistory').removeClass('fullView');
            $('#navbar').removeClass('d-none');
            $('#endHomepage').removeClass('d-none');

            $('html, body').css({
                position: 'relative',
                overflow: 'scroll',
                height: 'auto'
            });
            $('html, body').animate({
                scrollTop: $('#endHomepage').scrollTop()
            }, 100);
      });




    // Gerer le carousel sur les prix avec swiper

    var galleryThumbs = new Swiper(".price-thumbs", {
        centeredSlides: true,
        centeredSlidesBounds: true,
        slidesPerView: 3,
        watchOverflow: false,
        watchSlidesVisibility: false,
        watchSlidesProgress: false,
        direction: 'vertical',
        breakpoints: {
            0: {
                direction: 'horizontal',
            },
            768: {
                direction: 'vertical',
            }
        }

    });

    galleryThumbs.on('slideChange', function () {
        var element = galleryThumbs.realIndex;
alert('ici')
        console.log(element);
    });

    $('.swiper-slide-thumb-active .card-price-thumbs img').addClass('border-thumbs');

    var galleryMain = new Swiper(".price-main", {
        watchOverflow: false,
        watchSlidesVisibility: false,
        watchSlidesProgress: false,
        preventInteractionOnTransition: true,
        freeMode: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        thumbs: {
            swiper: galleryThumbs
        },
    });

    galleryMain.on('slideChangeTransitionStart', function () {
        galleryThumbs.slideTo(galleryMain.activeIndex);
    });

    galleryThumbs.on('transitionStart', function () {
        galleryMain.slideTo(galleryThumbs.activeIndex);
    });


    function isOnScreen(elem) {
        // if the element doesn't exist, abort
        if (elem.length == 0) {
            return;
        }
        var $window = jQuery(window)
        var viewport_top = $window.scrollTop()
        var viewport_height = $window.height()
        var viewport_bottom = viewport_top + viewport_height
        var $elem = jQuery(elem)
        var top = $elem.offset().top
        var height = $elem.height()
        var bottom = top + height

        return (bottom > viewport_top) && (top < viewport_bottom);
    }

    var stepDisplay = 0;

    window.addEventListener('scroll', function (e) {

        if (isOnScreen(jQuery('#myHistory'))) {
            $('#myHistory').addClass('fullView');
            $('#navbar').addClass('d-none');


            $('html, body').css({
                position: 'relative',
                overflow: 'hidden',
                height: '100%'
            });
            stepDisplay = 1;
        }



    });



    $(window).scroll(function () {  });



});



