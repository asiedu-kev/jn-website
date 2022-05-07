
$(function () {



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







    videos.on('changed.owl.carousel', event => {

        var el = event.item.index;
        var list = event.item.count;

        console.log(el)

        if (el >= 0) {

            counter.push(el);

            $('#videos-controller').removeClass('videos-controller');
            if (window.screen.width > 768) {
                $('.owl-stage').css('width', '3500px ');
                $('.owl-item').css('width', '560px');
            }




        }



        var ret = (counter.length - 1);

        if (counter[ret] == 0) {

            if (window.screen.width > 768) {
                $('.owl-stage').css('width', '3500px');
                $('#videos-controller').addClass('videos-controller');
                $('.owl-item').css('width', '560px');

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
        $('#iframe-video').attr('src', "");

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

    swiper.mousewheel.disable();


    // verification de la position de la section pour fixation sur la page

    eventRotation = false;

    const beforeFunction = () => {

        element = document.getElementById('myHistory');

        scrollpos = window.scrollY;

        var a, b;

        if (element) {
            a = element.offsetHeight;
            b = element.offsetTop;

        }


        eventRotation = false;
        posDef = scrollpos + 500;



        if (posDef >= (b)) {

            $('#myHistory').addClass('full');
            $('body').css('overflow', 'hidden')
        }

        swiper.mousewheel.enable();


    };

    const afterFunction = () => {

        element = document.getElementById('myHistory');

        scrollpos = window.scrollY;

        a = element.offsetHeight;
        b = element.offsetTop;
        eventRotation = true;
        posDef = scrollpos;
        eventRotation = true;
        swiper.mousewheel.enable();
        // if((posDef) <= (b+a)){
        //     $('#test').addClass('full');
        //     $('body').css('overflow','hidden')
        // }

    };

    window.addEventListener('scroll', beforeFunction);
    // Verifier la fin du carousel

    swiper.on('reachEnd', function () {
        swiper.mousewheel.disable();
        $('#myHistory').removeClass('full');
        $('body').css('overflow', 'initial')
        if (eventRotation) {
            window.addEventListener('scroll', beforeFunction);

            window.removeEventListener('scroll', afterFunction);
        }
        else {
            window.removeEventListener('scroll', beforeFunction)
            window.addEventListener('scroll', afterFunction);
        }

    });









});





