@extends('layouts.template')

@section('content')
    <section class="mt-header mb-4">
        <div class="container position-relative hero-container">
            <img src="{{ asset('icons/big-black-circle.svg') }}" alt="" class="hero-big-circle">
            <img src="{{ asset('icons/medium-black-circle.svg') }}" alt="" class="hero-medium-circle d-none d-md-inline">
            <img src="{{ asset('icons/small-black-circle.svg') }}" alt="" class="hero-small-circle">
            <div class="hero-image-container">
                <img src="{{ asset('img/banner.png') }}" alt="" class="hero-image">

                <div class="container hero-title-block">
                    <div class="col-12 col-md-6 px-3">
                        <h1 class="text-white font-bold text-xs-center wb-h2">Hello, je suis
                            <span class="color-primary">Junior Natabou.</span>
                        </h1>

                    </div>

                    <div class="text-center hero-see-more">
                        <a class="btn text-white btn-hash" href="#aboutJn">
                            <div>
                                <span class="d-block fs-16 font-mono-medium">See more</span>
                                <span class="d-block"><i
                                        class="fas fa-chevron-down fs-16 fa-animate-chevron"></i></span>

                            </div>

                        </a>
                    </div>
                </div>


            </div>
            <div class="border-bottom wb-underline-m d-none d-md-block"></div>

        </div>
        <div class="border-bottom d-block d-md-none mt-4"></div>

    </section>

    <section>
        <div class="container container-custom wb-py " id="aboutJn">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 d-flex justify-content-center mb-3">
                    <div class="profile-image-container ">
                        <img src="{{ asset('img/profile.png') }}" alt="profile" class="profile-image">
                    </div>
                </div>

                <div class="col-12 col-md-6 d-flex justify-content-start py-3">

                    <div class="col-12 col-md-10">
                        <div class="mb-5">
                            <p class="wb-h4 font-regular"> Junior est le PDG de JN <br> HOLDING SAS, et le fondateur de JN
                                Médias où il aide les entreprises et
                                particuliers à construire leur empire sur Internet grâce à une méthode simple en 3 étapes.
                            </p>
                        </div>

                        <div class="d-flex flex-column flex-md-row ">
                            <a href=""
                                class="btn btn-wb-primary font-mono-medium rounded-pill d-block mb-3 d-md-inline fs-18 px-4 me-md-3">Démarrer</a>
                            <a href=""
                                class="btn btn-wb-primary font-mono-medium rounded-pill d-block mb-3 d-md-inline fs-18 px-4">En
                                savoir
                                plus</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid wb-py-7 bg-black position-relative">
            <img src="{{ asset('icons/big-white-circle.svg') }}" alt="" class="news-big-circle">
            <img src="{{ asset('icons/medium-white-circle.svg') }}" alt="" class="news-medium-circle">
            <img src="{{ asset('icons/small-white-circle.svg') }}" alt="" class="news-small-circle">
            <div class="container d-flex flex-column flex-md-row justify-content-center align-items-center">
                <img src="{{ asset('img/logo/forbes.svg') }}" alt="" class="img-news">
                <img src="{{ asset('img/logo/ted.svg') }}" alt="" class="img-news">
                <img src="{{ asset('img/logo/startup.svg') }}" alt="" class="img-news">
                <img src="{{ asset('img/logo/surf.svg') }}" alt="" class="img-news">

            </div>
        </div>
    </section>


    <section>
        <div class="container container-about wb-py">
            <h2 class="color-primary font-bold wb-h0 mb-5">À propos</h2>
            <div class="my-4">
                <div class="row justify-content-md-center fs-18 ">
                    <div class="col-12 col-md-4 mb-3 pe-md-4 aos-init aos-animate" data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back" data-aos-delay="300">
                        <p class=" mb-0  "> Il y a 3 ans, j'ai démarré mon aventure sur internet. Cela a été la
                            meilleure décision de ma vie, car grâce à la réussite dans mes business, je peux désormais
                            voyager partout dans le monde.
                        </p>
                    </div>

                    <div class="col-12 col-md-4 mb-3 pe-md-4 aos-init aos-animate" data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back" data-aos-delay="500">
                        <p class=""> Dès le début de mon aventure, j'ai compris que le numérique était un
                            véritable levier d'autonomisation pour les jeunes africains. C'est pourquoi, en Juillet  2019,
                            au cours d'une conférence TEDx, j'ai exprimé mon engagement à aider un maximum de jeunes à
                            embrasser les opportunités qui s'y offrent.
                        </p>
                    </div>

                    <div class="col-12 col-md-4 mb-3 pe-md-4 aos-init aos-animate" data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back" data-aos-delay="700">
                        <p class="">
                            En deux ans, j'ai donné de nombreuses conférences gratuites, développé des ressources librement
                            accessibles et des programmes d'accompagnement pour aider ceux qui souhaitent apprendre des
                            compétences et/ou se lancer le numérique.
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid bg-wb-secondary wb-py-7 ">
            <div class="container-wb">
                <div class="row align-items-center">
                    <div class="col-12 col-md-5">
                        <h2 class="font-bold wb-h3">La révolution du <br>
                            e-commerce</h2>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="row">
                            <div class="col-12 col-md-7   ">
                                <p class="mb-0 fs-18">En trois ans, j'ai formé et accompagné des centaines de jeunes
                                    dans le monde entier au e-commerce.</p>
                            </div>
                            <div class="col-12 col-md-5 d-flex justify-content-md-end mt-3">
                                <button class="btn btn-wb-light d-none d-md-inline owlVideosPrev me-4"> <i
                                        class="fas fa-chevron-left"></i>
                                </button>
                                <button class="btn btn-wb-light d-none d-md-inline owlVideosNext"> <i
                                        class="fas fa-chevron-right"></i>
                                </button>

                            </div>
                        </div>

                    </div>
                </div>


            </div>

            <div class="container-wb py-5">
                <div class="owl-carousel owl-videos owl-theme">
                    <div class="item">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card card-videos">
                                <img src="{{ asset('img/videos_youtube/yt-1.png') }}" alt="">
                                <div class="inset-videos"></div>
                                <div class="popup-trigger" id="popup-trigger"
                                    data-yt="https://www.youtube.com/embed/i_AiuO96cVI">
                                    <div class="popup-img">
                                        <img src="{{ asset('icons/play-icone.svg') }}" alt="play icone">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card card-videos">
                                <img src="{{ asset('img/videos_youtube/yt-2.png') }}" alt="">
                                <div class="inset-videos"></div>
                                <div class="popup-trigger" id="popup-trigger"
                                    data-yt="https://www.youtube.com/embed/B5dfX6hVCwA">
                                    <div class="popup-img">
                                        <img src="{{ asset('icons/play-icone.svg') }}" alt="play icone">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card card-videos">
                                <img src="{{ asset('img/videos_youtube/yt-3.png') }}" alt="">
                                <div class="inset-videos"></div>
                                <div class="popup-trigger" id="popup-trigger"
                                    data-yt="https://www.youtube.com/embed/YqSC37sSE0Y">
                                    <div class="popup-img">
                                        <img src="{{ asset('icons/play-icone.svg') }}" alt="play icone">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card card-videos">
                                <img src="{{ asset('img/videos_youtube/yt-4.png') }}" alt="">
                                <div class="inset-videos"></div>
                                <div class="popup-trigger" id="popup-trigger"
                                    data-yt="https://www.youtube.com/embed/YbpJY2fz7jk">
                                    <div class="popup-img">
                                        <img src="{{ asset('icons/play-icone.svg') }}" alt="play icone">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>

    <section>
        <div class="container container-about wb-py-8 wb-pb-revolution">
            <div class="row">
                <div class="col-12 col-md-5">
                    <h2 class="color-primary font-bold wb-h3 mb-4">Rejoins la <br> révolution e- <br> commerce</h2>

                    <div class="col-12 col-md-9">
                        <p class="fs-18 mb-4  aos-init aos-animate" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                            data-aos-delay="100">Pour moi, le e-commerce est une énorme opportunité à saisir pour la
                            jeunesse africaine. Les jeunes
                            africains peuvent obtenir les mêmes résultats que tous ceux que j'ai accompagnés en Europe et
                            partout dans le monde.</p>


                        <p class="fs-18 mb-4 aos-init aos-animate" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                            data-aos-delay="250">C'est pourquoi, conscient des difficultés que les jeunes africains
                            éprouvent à obtenir des résultats,
                            j'ai développé ECOM ELITE le premier programme E-commerce 100% adapté pour l'Afrique
                            francophone.
                        </p>
                    </div>


                    <a href=""
                        class="btn px-5 btn-wb-primary font-mono-medium rounded-pill fs-18 aos-init aos-animate mb-5 mb-md-0"
                        data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="400">Rejoindre ECOM ELITE</a>

                </div>

                <div class="col-12 col-md-7 mt-3 m-join-ecom position-relative">
                    <img src="{{ asset('img/join-1.png') }}" alt="" class="img-join-1">
                    <img src="{{ asset('img/join2.png') }}" alt="" class="img-join-2">

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid bg-black text-white wb-py-7">
            <div class="container-wb">
                <h5 class="text-uppercase history-deco font-bold fs-18 position-relative">Mon histoire</h5>
            </div>

            <div class="container-wb">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-10 card-history-header font-regular wb-h4 ">
                                            <p class="">
                                                Je suis né le 12 Juillet à Cotonou en République du Bénin, d'une famille
                                                modeste. Mon père est décédé seulement 3 mois avant ma naissance. Ma mère
                                                m'a alors élevée seule dans un petit quartier de Bohicon, au Sud du pays.



                                            </p>


                                            <a href="" class="color-primary fs-24">Voir ma conference TEd</a>


                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/young.png') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-10 card-history-header font-regular wb-h4">
                                            <p class="">
                                                Quelques années plus tard, j'ai eu mon Brevet d'études du premier cycle en
                                                étant parmi les meilleurs élèves du Bénin.


                                            </p>




                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/young-2.jpg') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-10 card-history-header font-regular wb-h4">
                                            <p class="">
                                                J'étais tellement passionné par les robots que quelques mois plus tard j'ai
                                                décidé de passer un concours international, le Google Science Fair, avec mon
                                                ami Junior Hounkpe. Nous avions développé un prototype de robot agricole, et
                                                nous nous sommes mis à chercher les ressources pour concrétiser le projet.


                                            </p>

                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/young-3.jpg') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="container-wb py-2 py-md-5">
                <div class="d-flex justify-content-center justify-content-md-between align-items-center">
                    <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start">
                        <button class="btn btn-wb-dark owl-History-Prev me-4"> <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-wb-dark owl-History-Next"> <i class="fas fa-chevron-right"></i> </button>

                    </div>

                    <div class="col-6 d-none d-md-block d-flex justify-content-end">
                        <div class="wb-h1 d-flex justify-content-end  pe-5 history-paginate"></div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container container-join-me wb-py">
            <div class="row">
                <div class="col-12 col-md-7 mb-5 mb-md-0">
                    <h2 class="text-black wb-h1 d-inline d-md-none  mb-4 mb-md-0">Rejoins- <br> moi mainten <br> ant et
                        <br> écrivons <br> le reste
                        de <br> l'histoire <br> ensemble.
                    </h2>
                    <h2 class="text-black wb-h1 d-none d-md-block ">Rejoins-moi maintenant et écrivons le reste
                        de l'histoire ensemble.</h2>


                </div>

                <div class="col-12 col-md-5 d-flex justify-content-center d-flex justify-content-md-end align-items-center flex-column">
                    <a href="" class="text-decoration-none">
                        <div class="join-box mb-3">
                            <span><i class="fas fa-arrow-right rotate-icone fs-32"></i></span>
                            <p class=" text-start  font-mono-medium fs-24">Se faire accompagner</p>
                        </div>
                    </a>
                    <a href="" class="text-decoration-none">
                        <div class="join-box">
                            <span><i class="fas fa-arrow-right rotate-icone fs-32"></i></span>
                            <p class=" text-start  font-mono-medium fs-24">Rejoindre <br> mon réseau</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="popup" id="popup">
        <span class="popup-close" id="close-popup">&times;</span>
        <div class="popup-content">
            <iframe id="iframe-video" class="popup-iframe" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
@endsection
