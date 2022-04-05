$(function () {

    "use strict";


    AOS.init({
        once: true,
    });

    /* scroll  to about */

    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 100);
    });


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


    /*navbar scroll */

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
        loop: true,
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
                items: 2
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

    /* history carousel */

    var history = $('.owl-history');

    history.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        items: 1,
        center: true,
    });

    $('.owlHistoryNext').click(function () {
        history.trigger('next.owl.carousel');
    });

    $('.owlHistoryPrev').click(function () {
        history.trigger('prev.owl.carousel');
    });


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
        //   mousewheel: true,
        //   slidesPerView: 1,
        //   spaceBetween: 30,
        //   mousewheel: true,

    });

    // swiper.on('reachEnd', function () {
    //     $('#myHistory').removeClass('fullView');
    //         $('#navbar').removeClass('d-none');
    //         $('#endHomepage').removeClass('d-none');

    //         $('html, body').css({
    //             position: 'relative',
    //             overflow: 'scroll',
    //             height: 'auto'
    //         });
    //         $('html, body').animate({
    //             scrollTop: $('#endHomepage').offset().top
    //         }, 100);
    //   });




    /* pricing*/

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


    //   var tail = window.innerWidth;

    //   if(tail < 768){
    //     galleryThumbs.changeDirection('horizontal', true)
    //   }

    //   $(window).on('resize', function(){
    //     var win = $(this); //this = window

    //     if (win.width() < 768 ) { galleryThumbs.changeDirection('horizontal', true)}
    // });

    /* check element in view*/

    function checkInView(elem, partial) {
        var container = $(".scrollable");
        var contHeight = container.height();
        var contTop = container.scrollTop();
        var contBottom = contTop + contHeight;

        var elemTop = $(elem).offset().top - container.offset().top;
        var elemBottom = elemTop + $(elem).height();

        var isTotal = (elemTop >= 0 && elemBottom <= contHeight);
        var isPart = ((elemTop < 0 && elemBottom > 0) || (elemTop > 0 && elemTop <= container.height())) && partial;

        return isTotal || isPart;
    }

    /**
         * Easy selector helper function
         */
    const select = (el, all = false) => {
        el = el.trim()
        if (all) {
            return [...document.querySelectorAll(el)]
        } else {
            return document.querySelector(el)
        }
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        if (all) {
            select(el, all).forEach(e => e.addEventListener(type, listener))
        } else {
            select(el, all).addEventListener(type, listener)
        }
    }

    /**
     * Easy on scroll event listener
     */
    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }

    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select('#navbarSupportedContent .menu-cta', true)
    const navbarlinksActive = () => {
        let position = window.scrollY + 200
        navbarlinks.forEach(navbarlink => {
            if (!navbarlink.hash) return
            let section = select(navbarlink.hash)
            if (!section) return
            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                navbarlink.classList.add('active')
            } else {
                navbarlink.classList.remove('active')
            }
        })
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)
    $("#accompagnement-step").scroll(function () {
        var result = checkInView($("#accompagnement-step"), true);

        console.log(result);

        if (result) {
            $("#accompagnement-step").addClass('wb-full');
        }
        else {
            $("#accompagnement-step").addRemove('wb-full');
        }
    });





    var swiperVideos = new Swiper('.swiper-videos', {
        slidesPerView: 3,
        centeredSlides: true,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
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

    // window.addEventListener('scroll', function (e) {

    //     if (isOnScreen(jQuery('#myHistory'))) { /* Pass element id/class you want to check */
    //         $('#myHistory').addClass('fullView');
    //         $('#navbar').addClass('d-none');


    //         $('html, body').css({
    //             position: 'relative',
    //             overflow: 'hidden',
    //             height: '100%'
    //         });
    //         stepDisplay = 1;
    //     }


    //     if (isOnScreen(jQuery('.step-element'))) { /* Pass element id/class you want to check */
    //         $('.step-element').addClass('fullView');
    //         stepDisplay = 1;
    //     }

    //     if (isOnScreen(jQuery('#joinUs'))) { /* Pass element id/class you want to check */
    //         $('.step-element').removeClass('fullView');
    //         stepDisplay = 0;
    //     }
    // });

    // $(window).scroll(function () {

    //     if (stepDisplay == 3) {
    //         $('.step-element').removeClass('fullView');

    //     }
    // });



});



