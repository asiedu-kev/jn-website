@extends('layouts.template')

@section('content')
    <section class="mt-header">
        <div class=" container-title d-flex justify-content-center   align-items-center">
            <img src="{{ asset('icons/big-black-circle.svg') }}" alt="" class="title-big-circle">
            <img src="{{ asset('icons/medium-black-circle.svg') }}" alt="" class="title-medium-circle">
            <img src="{{ asset('icons/small-black-circle.svg') }}" alt="" class="title-small-circle">

            <div class="col-12 col-md-7 text-center">
                <h1 class=" font-bold wb-h2 text-center">Tout ce dont tu as besoin pour réussir sur Internet</h1>
                <div class="mt-4">
                    <p class="font-mono-regular fs-24 text-center d-none d-md-inline">Trois ressources complètes pour <br> démarrer ton parcours dans
                        les business <br> en ligne
                    </p>
                    <p class="font-mono-regular fs-24 text-center d-inline d-md-none">Trois ressources complètes pour  démarrer ton parcours dans
                        les business  en ligne
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container-wb wb-py-8">
            <div class="row px-4 p-md-2  ">
                <div class="card card-price bg-wb-primary text-white">
                    <div class="card-price-header">
                        <h3 class="font-bold fs-32">1 Million d’Euros</h3>
                    </div>

                    <div class="card-price-footer  ">

                        <h4 class="font-bold text-uppercase opacity-text-1 fs-24">ECOM ELITE</h4>
                        <div class="fs-18 font-regular">La formation e-commerce <br> exclusivement dédiée à l'Afrique</div>
                        <div class="card-price-footer-link py-4"><a href=""
                                class="d-block text-decoration-none text-white font-medium">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fs-18">En savoir plus</div>
                                    <div><i class="fas fa-arrow-right fs-18"></i></div>
                                </div>
                            </a></div>


                    </div>
                </div>
                <div class="card card-price bg-wb-tertiary color-primary">
                    <div class="card-price-header">
                        <h3 class="font-bold fs-32">1K à 10K Euros</h3>
                    </div>

                    <div class="card-price-footer ">
                        <h4 class="font-bold text-uppercase opacity-text-2 fs-24">NETCAMP</h4>
                        <div class="fs-18 font-regular d-none d-md-block ">L'application qui te forme pour gagner <br> tes premiers milliers
                            d'euros.</div>
                            <div class="fs-18 font-regular d-block d-md-none ">L'application qui te forme pour gagner  tes premiers milliers
                                d'euros.</div>
                        <div class="card-price-footer-link py-4"><a href=""
                                class="d-block text-decoration-none color-primary font-medium">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fs-18">En savoir plus</div>
                                    <div><i class="fas fa-arrow-right fs-18"></i></div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="card card-price bg-wb-secondary">
                    <div class="card-price-header">
                        <h3 class="font-bold fs-32">0 à 100 Euros</h3>
                    </div>

                    <div class="card-price-footer ">
                        <h4 class="font-bold text-uppercase opacity-text-3 fs-24">QUICK STARTS</h4>
                        <div class="fs-18 font-regular d-none d-md-inline">Un ensemble de formations en ligne <br> gratuites pour démarrer dans
                            les <br> business en ligne.</div>
                            <div class="fs-18 font-regular d-block d-md-none">Un ensemble de formations en ligne gratuites pour démarrer dans
                                les  business en ligne.</div>
                        <div class="card-price-footer-link py-4"><a href=""
                                class="d-block text-decoration-none text-dark font-medium">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fs-18">En savoir plus</div>
                                    <div><i class="fas fa-arrow-right fs-18"></i></div>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>



        </div>
        <div class="container-wb">
            <div class="mt-5 d-none d-md-block border-bottom"></div>
        </div>
    </section>

    <section>
        <div class="container-wb wb-py-6">
            <h2 class="color-primary font-bold wb-h0 mb-4">À propos</h2>
            <div class="row mt-5">
                <div class="col-12 col-md-4 mb-2 pe-md-4">
                    <p class=" fs-18  aos-init aos-animate" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100">Construire un empire sur Internet et commencer à gagner de
                        l'argent est possible lorsque l'on suit scrupuleusement toutes les étapes qui mènent vers le succès.
                        Et la première étape, c'est de se former.</p>
                    <p class=" fs-24  aos-init aos-animate" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300">Malheureusement la plupart des formations accessibles en ligne ne
                        prennent pas en compte les réalités des africains.</p>
                </div>
                <div class="col-12 col-md-4 mb-2 pe-md-4">
                    <p class=" fs-18  aos-init aos-animate" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500">Je m'appelle Junior Natabou et j'ai généré près de 3 millions
                        d'euros de chiffre d'affaires sur Internet. Depuis trois ans jelabore avec des experts du monde
                        entier pour développer des ressources pour leur permettre aux jeunes africains de se lancer
                        rapidement et efficacement sur Internet.</p>
                </div>
                <div class="col-12 col-md-4 mb-2 px-3 px-md-0 container-img-started-about">
                    <img src="{{ asset('img/profile.png') }}" alt="img-started-about" class="img-started-about">
                </div>

            </div>

        </div>
    </section>

    <section>
        <div class="container-fluid bg-wb-secondary wb-py-7">
            <div class="container-wb">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <h2 class="font-bold fs-32">Rejoins plus de 50 jeunes qui ont déjà profité des ressources pour
                            transformer leur vie.</h2>
                    </div>
                    <div class="col-12 col-md-5 d-flex justify-content-md-end">

                        <button class="btn btn-wb-light d-none d-md-inline owlVideosPrev me-4"> <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-wb-light d-none d-md-inline owlVideosNext"> <i class="fas fa-chevron-right"></i>
                        </button>


                    </div>

                </div>
            </div>

            <div class="container-wb py-5">
                <div class="owl-carousel owl-videos owl-theme">
                    <div class="item">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card card-videos">
                                <img src="{{asset('img/videos_youtube/yt-1.png')}}" alt="">
                                <div class="inset-videos"></div>
                                <div class="popup-trigger" id="popup-trigger" data-yt="https://www.youtube.com/embed/i_AiuO96cVI" >
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
                                <img src="{{asset('img/videos_youtube/yt-2.png')}}" alt="">
                                <div class="inset-videos"></div>
                                <div class="popup-trigger" id="popup-trigger" data-yt="https://www.youtube.com/embed/B5dfX6hVCwA" >
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
                                <img src="{{asset('img/videos_youtube/yt-3.png')}}" alt="">
                                <div class="inset-videos"></div>
                                <div class="popup-trigger" id="popup-trigger" data-yt="https://www.youtube.com/embed/YqSC37sSE0Y" >
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
                                <img src="{{asset('img/videos_youtube/yt-4.png')}}" alt="">
                                <div class="inset-videos"></div>
                                <div class="popup-trigger" id="popup-trigger" data-yt="https://www.youtube.com/embed/YbpJY2fz7jk" >
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
        <div class="container-wb wb-py wb-pb-8">
            <div class="row align-items-center">
                <div class="col-12 col-md-7 mb-5 mb-md-0">
                    <h2 class="text-dark font-bold wb-h1 ">C'est le moment de te lancer!</h2>
                    <p class="fs-32 d-none d-md-inline">Choisis la ressource adaptée <br> selon tes objectifs.</p>
                    <p class="fs-32 d-inline d-md-none  ">Choisis la ressource adaptée selon tes objectifs.</p>
                </div>
                <div class="col-12 col-md-5 d-flex justify-content-center  justify-content-md-end">
                    <a href="" class="text-decoration-none">
                        <div class="join-box mb-3">
                            <span><i class="fas fa-arrow-up fs-32"></i></span>
                            <p class="font-mono-medium text-start fs-24">Se faire accompagner</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <div class="popup" id="popup">
        <span class="popup-close" id="close-popup">&times;</span>
        <div class="popup-content">
            <iframe id="iframe-video" class="popup-iframe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>


@endsection
