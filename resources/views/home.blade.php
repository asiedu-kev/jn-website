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
                            <a href="{{ route('get_started') }}"
                                class="btn btn-wb-primary font-mono-medium rounded-pill d-block mb-3 d-md-inline fs-18 px-md-4 py-md-2 me-md-3">Démarrer</a>
                            <a href="#myHistory"
                                class="btn btn-wb-primary font-mono-medium rounded-pill d-block mb-3 d-md-inline fs-18 px-md-4 py-md-2">En
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
                    <div class="col-12 col-md-4 mb-3 pe-md-4 " data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-delay="300">
                        <p class=" mb-0  "> Il y a 3 ans, j'ai démarré mon aventure sur internet. Cela a été la
                            meilleure décision de ma vie, car grâce à la réussite dans mes business, je peux désormais
                            voyager partout dans le monde.
                        </p>
                    </div>

                    <div class="col-12 col-md-4 mb-3 pe-md-4 " data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-delay="500">
                        <p class=""> Dès le début de mon aventure, j'ai compris que le numérique était un
                            véritable levier d'autonomisation pour les jeunes africains. C'est pourquoi, en Juillet  2019,
                            au cours d'une conférence TEDx, j'ai exprimé mon engagement à aider un maximum de jeunes à
                            embrasser les opportunités qui s'y offrent.
                        </p>
                    </div>

                    <div class="col-12 col-md-4 mb-3 pe-md-4 " data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-delay="700">
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

    <section class="overflow-hidden">
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

            <div class="container-fluid py-5 videos-controller position-relative" id="videos-controller">
                <div class="owl-carousel owl-videos owl-theme">
                    <div class="item owl-item-first">
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
                </div>

            </div>


            <div class="container d-md-none">
                <div class="row justify-content-center  mt-3">
                        <button class="btn btn-wb-light  d-md-none owlVideosPrev me-4"> <i
                                class="fas fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-wb-light  d-md-none owlVideosNext"> <i class="fas fa-chevron-right"></i>
                        </button>


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
                        <p class="fs-18 mb-4  " data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                            data-aos-delay="100">Pour moi, le e-commerce est une énorme opportunité à saisir pour la
                            jeunesse africaine. Les jeunes
                            africains peuvent obtenir les mêmes résultats que tous ceux que j'ai accompagnés en Europe et
                            partout dans le monde.</p>


                        <p class="fs-18 mb-4 " data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                            data-aos-delay="250">C'est pourquoi, conscient des difficultés que les jeunes africains
                            éprouvent à obtenir des résultats,
                            j'ai développé ECOM ELITE le premier programme E-commerce 100% adapté pour l'Afrique
                            francophone.
                        </p>
                    </div>


                    <a href="{{ route('get_started') }}"
                        class="btn px-4 py-md-2 btn-wb-primary font-mono-medium rounded-pill fs-18  mb-5 mb-md-0"
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
        </div>
        <div class="container-fluid bg-black text-white" id="myHistory">
            <div class="container-wb">
                <div class="swiper swiperHistory">
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
                                            {{-- <a href="" class="color-primary fs-24">Voir ma conference TEd</a> --}}
                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/1.jpg') }}" alt="" class="">
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
                                                Malgré ses maigres revenus, ma mère m'a inculqué une très bonne éducation
                                                dès le début, insistant sur la nécessité d'étudier et travailler dur pour
                                                réussir. C'est pourquoi, j'ai pris très tôt mes études au sérieux, étant
                                                régulièrement parmi les meilleurs élèves de ma promotion.
                                            </p>

                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/1.jpg') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4 ">
                                            <p>Quelques années plus tard, j'ai eu mon Brevet d'études du premier cycle en
                                                étant parmi les meilleurs élèves du Bénin.</p>

                                            <p>À cet âge, j'étais déjà un enfant très curieux. Je lisais beaucoup et je
                                                regardais des vidéos à la télé ou en ligne. C'est comme ça que j'ai
                                                découvert la robotique, un sous-domaine des sciences technologiques qui
                                                concerne la fabrication des robots et leur mise au service de l'industrie.
                                                J'en étais tombé éperdument amoureux</p>
                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0 pt-0 pt-md-3">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/2.jpg') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4">
                                            <p>J'étais tellement passionné par les robots que quelques mois plus tard j'ai
                                                décidé de passer un concours international, le Google Science Fair, avec mon
                                                ami Junior Hounkpe. Nous avions développé un prototype de robot agricole, et
                                                nous nous sommes mis à chercher les ressources pour concrétiser le projet.
                                            </p>
                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0 pt-0 pt-md-3">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/4.jpg') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4">
                                            <p>
                                                Comme on pouvait s'y attendre, cela a été très difficile au début. Nous
                                                avons essuyé plusieurs refus de la part de nombreuses organisations de la
                                                place. Mais notre projet a fini par attirer l'attention du Président de la
                                                République de notre pays, son Excellence Patrice Athanase Talon.

                                            </p>
                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0 pt-0 pt-md-3">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/5.JPG') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4 ">
                                            <p>
                                                Le Président Patrice Talon s'est montré très enthousiaste par rapport à
                                                notre projet. Il nous a vivement encouragés à le concrétiser, et, pour
                                                montrer son soutien, nous a offert un voyage tous frais payés au Rwanda,
                                                pour en apprendre plus sur le monde de la tech.
                                            </p>
                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0 pt-0 pt-md-3">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/6.jpg') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4">

                                            <p>
                                                En 2017, j'ai donc entrepris, accompagné de mon ami Patrick, un voyage au
                                                Rwanda. Pour la première fois de ma vie, j'ai vécu dans un hôtel extrêmement
                                                luxueux et j'ai côtoyé des personnes qui semblaient fortunées. C'était un
                                                tout autre monde. Je n'en croyais pas à mes yeux.
                                            </p>

                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0 pt-0 pt-md-3">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/7.jpg') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4">
                                            <p class="">
                                                La plupart des gens dans cet endroit pouvaient financer mon projet et
                                                m'aider à le réaliser. J'ai tout de suite compris que gagner de l'argent
                                                était important si je voulais réaliser mes rêves et poursuivre mes études en
                                                robotique. C'est pour ça que, dès mon retour au Bénin, une question s'est
                                                mise à m'obséder : comment réussir dans la vie ? Comment réaliser mes rêves
                                                ?</p>

                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0 pt-0 pt-md-3">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/8.jpg') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4 ">


                                            <p>
                                                J'ai commencé par faire des recherches sur Internet et je suis tombé sur des
                                                vidéos qui parlaient de business en ligne. J'ai tout de suite senti que
                                                c'étaient peut-être de véritables opportunités. J'allais au cyber de mon
                                                école et je passais des heures à regarder les vidéos pour apprendre.
                                            </p>

                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0 pt-0 pt-md-3">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/9.JPG') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4">

                                            <p>
                                                Au début, quelques proches m'ont déconseillé de me lancer. Mais je pensais
                                                que je n'avais pas vraiment le choix. Alors j'ai commencé par essayer tout
                                                un tas de business. J'ai commencé avec les crypto-monnaies, ce qui m'a
                                                permis de toucher mes premiers milliers de francs CFA. J'étais très heureux
                                                car c'était la preuve que je pouvais gagner de l'argent en ligne.
                                            </p>

                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/10.JPG') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4">
                                            <p class="">
                                                Je me suis par la suite activement formé en marketing digital puis en growth
                                                hacking. Résultat : J'ai décroché des contrats auprès d'agences à
                                                l'international. Les choses sont ensuite allées très vite : J'ai touché mes
                                                premiers milliers d'euros puis j'ai été invité à être speaker à un TEDx, une
                                                prestigieuse conférence qui rassemble les grosses têtes du monde.
                                            </p>

                                            <a href="" class="color-primary fs-24">Voir ma conference TEd</a>


                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/11.jpg') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4 ">

                                            <p>
                                                Au cours de la conférence TED, j'ai expliqué que je voulais aider un maximum
                                                de jeunes africains à profiter de l'opportunité que représente Internet.
                                            </p>

                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/12.jpg') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4">

                                            <p>
                                                C'est un objectif qui me tient particulièrement à cœur. C'est pourquoi j'ai
                                                travaillé plusieurs mois pour produire des formations gratuites pour ceux
                                                qui souhaitent se lancer dans les business en ligne. Ces formations sont
                                                librement accessibles sur la chaîne YouTube.
                                            </p>

                                            <p>
                                                Tu peux y accéder si tu souhaites également te lancer dans les business en
                                                ligne.

                                            </p>

                                            <a href="" class="color-primary fs-24">J'accède aux formations gratuites</a>



                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/13.jpg') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4">
                                            <p>
                                                Quelques mois après ma conférence TED, j'ai décidé d'aller plus loin et de
                                                passer un palier. J'ai utilisé toutes mes économies pour prendre la
                                                formation en E-commerce/Dropshipping de Yomi Denzel. Ça a été l'un des
                                                meilleurs investissements de ma vie.
                                            </p>

                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/14.JPG') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4 ">

                                            <p>
                                                Les débuts ont été difficiles, et j'ai dû prendre un coaching pour aller
                                                plus vite et obtenir des résultats. Mais à force de détermination, j'ai pu
                                                obtenir des résultats stratosphériques. En seulement 10 mois j'ai réussi à
                                                générer 1 million d'euros de chiffre d'affaires.
                                            </p>

                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/15.JPG') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4">

                                            <p>
                                                De nombreux médias ont parlé de mon exploit et j'ai même été nommé homme de
                                                l'année dans mon pays le Bénin. Du jour au lendemain, j'ai pu réaliser mes
                                                rêves les plus fous grâce au e-commerce. Je voyage partout dans le monde et
                                                je rencontre des personnes formidables.
                                            </p>
                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/16.JPG') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4">
                                            <p class="">
                                                En 2021, j'ai décidé de créer ma première société au Bénin : JN HOLDING SAS.
                                                La société comporte 5 filiales dont JN Services qui met en relation les
                                                jeunes africains avec les entreprises digitales européennes.
                                            </p>

                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/17.jpg') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4 ">
                                            <p class="">
                                                Cette même année j'ai organisé le JN University Tour. Pendant une quinzaine
                                                de jours, j'ai sillonné de nombreuses universités du Nord au Sud du Bénin
                                                🇧🇯 afin de faire découvrir aux étudiants, l'entrepreneuriat numérique et
                                                les opportunités que ce domaine d'activité présente.
                                            </p>

                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/18.JPG') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-md-8 col-sm-12 order-2 order-md-1">
                                        <div class="col-12 col-md-11 card-history-header font-regular wb-h4">
                                            <p class="">
                                                En 2021, Urban Studios ma société de production a organisé le plus grand
                                                événement musical de l'histoire du Bénin. Plus de 40000 personnes étaient
                                                présentes à Cotonou pour célébrer la musique.
                                            </p>




                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/19.jpg') }}" alt="" class="">
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
                                                J'ai débuté l'année 2022 avec une nouvelle tournée, cette fois continentale,
                                                et toujours dans le même esprit. Le JN AFRICA TOUR va permettre aux jeunes
                                                africains de découvrir les opportunités qu'offre le numérique pour leur
                                                autonomisation. </p>




                                        </div>

                                    </div>

                                    <div
                                        class="col-md-4 col-sm-12  d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/history/20.JPG') }}" alt="" class="">
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

    <section id="endHomepage">
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

                <div
                    class="col-12 col-md-5 d-flex justify-content-center d-flex justify-content-md-end align-items-center flex-column">
                    <a href="{{ route('ressources') }}" class="text-decoration-none">
                        <div class="join-box mb-3">
                            <span><i class="fas fa-arrow-right rotate-icone fs-32"></i></span>
                            <p class=" text-start  font-mono-medium fs-24">Se faire accompagner</p>
                        </div>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=22997000000&text=Call%20to%20action%20" target="_blank"
                        rel="noopener" class="text-decoration-none">
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
