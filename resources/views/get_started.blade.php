@extends('layouts.template')

@section('content')
    <section>
        <div class="p-5 container-title d-flex justify-content-center   align-items-center">
            <img src="{{ asset('icons/big-black-circle.svg') }}" alt="" class="title-big-circle">
            <img src="{{ asset('icons/medium-black-circle.svg') }}" alt="" class="title-medium-circle">
            <img src="{{ asset('icons/medium-black-circle.svg') }}" alt="" class="title-small-circle">

            <div class="col-12 col-md-5 text-center py-5">
                <h1 class=" font-bold">Tout ce dont tu as <br> besoin pour réussir <br> sur Internet</h1>
                <div class="mt-4 px-md-4">
                    <p class="font-mono-medium text-center">Trois ressources complètes pour <br> démarrer ton parcours dans
                        <br> les business en ligne
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container-wb py-5">
            <div class="row p-2 ">
                <div class="card card-price bg-wb-primary text-white">
                    <div class="card-price-header">
                        <h3 class="font-bold">1 Million d’Euros</h3>
                    </div>

                    <div class="card-price-footer  ">

                            <h4 class="font-bold text-uppercase opacity-60">ECOM ELITE</h4>
                            <div class="fs-16 font-regular">La formation e-commerce <br> exclusivement dédiée à l'Afrique</div>
                            <div class="card-price-footer-link py-4"><a href="" class="d-block text-decoration-none text-white font-medium">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>En savoir plus</div>
                                    <div><i class="fas fa-arrow-right"></i></div>
                                </div>
                            </a></div>


                    </div>
                </div>
                <div class="card card-price bg-wb-tertiary color-primary">
                    <div class="card-price-header">
                        <h3 class="font-bold">1K à 10K Euros</h3>
                    </div>

                    <div class="card-price-footer ">
                        <h4 class="font-bold text-uppercase opacity-60">NETCAMP</h4>
                        <div class="fs-16 font-regular">L'application qui te forme pour gagner <br> tes premiers milliers
                            d'euros.</div>
                        <div class="card-price-footer-link py-4"><a href="" class="d-block text-decoration-none color-primary font-medium">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>En savoir plus</div>
                                <div><i class="fas fa-arrow-right"></i></div>
                            </div>
                        </a></div>
                    </div>
                </div>
                <div class="card card-price bg-wb-secondary">
                    <div class="card-price-header">
                        <h3 class="font-bold">0 à 100 Euros</h3>
                    </div>

                    <div class="card-price-footer ">
                        <h4 class="font-bold text-uppercase opacity-60">QUICK STARTS</h4>
                        <div class="fs-16 font-regular">Un ensemble de formations en ligne <br> gratuites pour démarrer dans
                            les <br> business en ligne.</div>
                            <div class="card-price-footer-link py-4"><a href="" class="d-block text-decoration-none text-dark font-medium">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>En savoir plus</div>
                                    <div><i class="fas fa-arrow-right"></i></div>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>


            <div class="mt-5 d-none d-md-block border-bottom"></div>
        </div>
    </section>

    <section>
        <div class="container-wb py-5">
            <h2 class="color-primary font-bold title-h2">A propos</h2>
            <div class="row mt-5">
                <div class="col-12 col-md-4 mb-2 pe-md-4">
                    <p class="text-justify line-height-1">Construire un empire sur Internet et commencer à gagner de
                        l'argent est possible lorsque l'on suit scrupuleusement toutes les étapes qui mènent vers le succès.
                        Et la première étape, c'est de se former.</p>
                    <p class="text-justify line-height-1">Malheureusement la plupart des formations accessibles en ligne ne
                        prennent pas en compte les réalités des africains.</p>
                </div>
                <div class="col-12 col-md-4 mb-2 pe-md-4">
                    <p class="text-justify line-height-1">Je m'appelle Junior Natabou et j'ai généré près de 3 millions
                        d'euros de chiffre d'affaires sur Internet. Depuis trois ans jelabore avec des experts du monde
                        entier pour développer des ressources pour leur permettre aux jeunes africains de se lancer
                        rapidement et efficacement sur Internet.</p>
                </div>
                <div class="col-12 col-md-4 mb-2 container-img-started-about">
                    <img src="{{ asset('img/profile.png') }}" alt="img-started-about" class="img-started-about">
                </div>

            </div>

        </div>
    </section>


    <section>
        <div class="container-fluid bg-wb-secondary py-5">
            <div class="container-wb">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <h2 class="font-bold">Rejoins plus de 50 jeunes qui ont déjà profité des ressources pour
                            transformer leur vie.</h2>
                    </div>
                    <div class="col-12 col-md-5 d-flex justify-content-md-end">

                        <button class="btn btn-wb-light owlVideosPrev me-4"> <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-wb-light owlVideosNext"> <i class="fas fa-chevron-right"></i>
                        </button>


                    </div>

                </div>
            </div>

            <div class="container-wb py-5">
                <div class="owl-carousel owl-videos owl-theme">
                    <div class="item">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card card-videos">
                                <iframe class="iframe-videos" src="https://www.youtube.com/embed/i_AiuO96cVI?controls=0"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card card-videos">
                                <iframe class="iframe-videos" src="https://www.youtube.com/embed/B5dfX6hVCwA"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card card-videos">
                                <iframe class="iframe-videos" src="https://www.youtube.com/embed/YqSC37sSE0Y"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card card-videos">
                                <iframe class="iframe-videos" src="https://www.youtube.com/embed/YbpJY2fz7jk"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </section>

    <section>
        <div class="container-wb py-5">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h2 class="text-dark font-bold join-title ">C'est le moment <br> de te lancer!</h2>
                    <p>Choisis la ressource adaptée <br> selon tes objectifs.</p>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <a href="" class="text-decoration-none">
                        <div class="join-box mb-3">
                            <span><i class="fas fa-arrow-up"></i></span>
                            <p class="font-mono-medium text-start">Se faire accompagner</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
