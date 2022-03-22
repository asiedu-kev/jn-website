@extends('layouts.template')

@section('content')
    <section>
        <div class="container position-relative hero-container">
            <img src="{{ asset('icons/big-black-circle.svg') }}" alt="" class="hero-big-circle">
            <img src="{{ asset('icons/medium-black-circle.svg') }}" alt="" class="hero-medium-circle">
            <img src="{{ asset('icons/medium-black-circle.svg') }}" alt="" class="hero-small-circle">
            <div>
                <img src="{{ asset('img/banner.png') }}" alt="" class="hero-image">

                <div class="container hero-title-block">
                    <div>
                        <h1 class="text-white font-bold">Hello, je suis <br>
                            <span class="color-primary">Junior Natabou.</span>
                        </h1>
                    </div>

                    <div class="text-center hero-see-more">
                        <button class="btn text-white">
                            <div>
                                <span class="d-block ">See more</span>
                                <span class="d-block"><i class="fas fa-chevron-down"></i></span>

                            </div>

                        </button>
                    </div>
                </div>


                <div class="border-bottom mt-4"></div>
            </div>
        </div>
    </section>

    <section>
        <div class="container container-custom">
            <div class="row align-items-center">
                <div class="col-6 d-flex justify-content-center">
                    <div class="profile-image-container">
                        <img src="{{ asset('img/profile.png') }}" alt="profile" class="profile-image">
                    </div>
                </div>

                <div class="col-6 d-flex justify-content-start">

                    <div class="col-8">
                        <div>
                            <p class="fs-22"> Junior est le PDG de JN <br> HOLDING SAS, et le fondateur de JN
                                Médias où il aide les entreprises et
                                particuliers à construire leur empire sur Internet grâce à une méthode simple en 3 étapes.
                            </p>
                        </div>

                        <div class="d-flex">
                            <a href="" class="btn btn-wb-primary font-mono-medium rounded-pill fs-16 px-4 me-3">Démarrer</a>
                            <a href="" class="btn btn-wb-primary font-mono-medium rounded-pill  fs-16 px-4">En savoir
                                plus</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid p-news bg-dark position-relative">
            <img src="{{ asset('icons/big-white-circle.svg') }}" alt="" class="news-big-circle">
            <img src="{{ asset('icons/medium-white-circle.svg') }}" alt="" class="news-medium-circle">
            <img src="{{ asset('icons/small-white-circle.svg') }}" alt="" class="news-small-circle">
            <div class="container d-flex justify-content-center">
                <img src="{{ asset('img/forbes.png') }}" alt="" class="img-news">
                <img src="{{ asset('img/ted.png') }}" alt="" class="img-news">
                <img src="{{ asset('img/startup.png') }}" alt="" class="img-news">
                <img src="{{ asset('img/circle.png') }}" alt="" class="img-news">

            </div>
        </div>
    </section>

    <section>
        <div class="container container-about">
            <h2 class="color-primary font-bold title-h2">A propos</h2>
            <div class="my-4">
                <div class="row justify-content-center ">
                    <div class="col ">
                        <p class=" mb-0 text-justify "> Il y a 3 ans, j'ai démarré mon aventure sur internet. Cela a été la
                            meilleure décision de ma vie, car grâce à la réussite dans mes business, je peux désormais
                            voyager partout dans le monde.
                        </p>
                    </div>

                    <div class="col ">
                        <p class="text-justify"> Dès le début de mon aventure, j'ai compris que le numérique était un
                            véritable levier d'autonomisation pour les jeunes africains. C'est pourquoi, en Juillet  2019,
                            au cours d'une conférence TEDx, j'ai exprimé mon engagement à aider un maximum de jeunes à
                            embrasser les opportunités qui s'y offrent.
                        </p>
                    </div>

                    <div class="col ">
                        <p class="text-justify">
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
        <div class="container-fluid bg-wb-secondary py-5">
            <div class="container-wb">
                <div class="row">
                    <div class="col-4">
                        <h2 class="font-bold">La révolution du <br>
                            e-commerce</h2>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-6   ">
                                <p class="mb-0">En trois ans, j'ai formé et accompagné des centaines de jeunes
                                    dans le monde entier au e-commerce.</p>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <button class="btn btn-wb-light owlVideosPrev me-4"> <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="btn btn-wb-light owlVideosNext"> <i class="fas fa-chevron-right"></i>
                                </button>

                            </div>
                        </div>

                    </div>
                </div>


            </div>

            <div class="container-wb py-5">
                <div class="owl-carousel owl-videos owl-theme">
                    <div class="item">
                        <div class="col-12">
                            <div class="card card-videos">
                                <iframe class="iframe-videos" src="https://www.youtube.com/embed/i_AiuO96cVI?controls=0"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-12">
                            <div class="card card-videos">
                                <iframe class="iframe-videos" src="https://www.youtube.com/embed/B5dfX6hVCwA"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-12">
                            <div class="card card-videos">
                                <iframe class="iframe-videos" src="https://www.youtube.com/embed/YqSC37sSE0Y"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="col-12">
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
        <div class="container container-about">
            <div class="row">
                <div class="col-4">
                    <h2 class="color-primary font-bold section-title">Rejoins la <br> révolution e- <br> commerce</h2>

                    <div class="col-9">
                        <p class="fs-14 ">Pour moi, le e-commerce est une énorme opportunité à saisir pour la
                            jeunesse africaine. Les jeunes
                            africains peuvent obtenir les mêmes résultats que tous ceux que j'ai accompagnés en Europe et
                            partout dans le monde.</p>


                        <p class="fs-14 ">C'est pourquoi, conscient des difficultés que les jeunes africains
                            éprouvent à obtenir des résultats,
                            j'ai développé ECOM ELITE le premier programme E-commerce 100% adapté pour l'Afrique
                            francophone.
                        </p>
                    </div>


                    <a href="" class="btn px-5 btn-wb-primary font-mono-medium rounded-pill">Rejoindre ECOM ELITE</a>

                </div>

                <div class="col-8 position-relative">
                    <img src="{{ asset('img/join-1.png') }}" alt="" class="img-join-1">
                    <img src="{{ asset('img/join2.png') }}" alt="" class="img-join-2">

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid bg-black text-white py-5">
            <div class="container-wb">
                <h5 class="text-uppercase history-deco font-bold fs-18 position-relative">Mon histoire</h5>
            </div>


            <div class="container-wb py-5 px-0">
                <div class="owl-carousel owl-history owl-theme">

                    <div class="item">
                        <div class="col-12">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-6">
                                        <div class="col-10">
                                            <p class="text-justify">
                                                Je suis né le 12 Juillet à Cotonou en République du Bénin, d'une famille
                                                modeste. Mon père est décédé seulement 3 mois avant ma naissance. Ma mère
                                                m'a alors élevée seule dans un petit quartier de Bohicon, au Sud du pays.
                                            </p>

                                            <a href="" class="color-primary">Voir ma conférence TED</a>
                                        </div>

                                    </div>

                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/young.png') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="item">
                        <div class="col-12">
                            <div class="card card-history">
                                <div class="row py-5">
                                    <div class="col-6">
                                        <div class="col-10">
                                            <p class="text-justify">
                                                Je suis né le 12 Juillet à Cotonou en République du Bénin, d'une famille
                                                modeste. Mon père est décédé seulement 3 mois avant ma naissance. Ma mère
                                                m'a alors élevée seule dans un petit quartier de Bohicon, au Sud du pays.
                                            </p>

                                            <a href="" class="color-primary">Voir ma conférence TED</a>
                                        </div>

                                    </div>

                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="card-history-img">
                                            <img src="{{ asset('img/profile.png') }}" alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>




                </div>

                <div class="container-wb py-5">
                    <div class="d-flex justify-content-between">
                        <div class="col-6 d-flex justify-content-start">
                            <button class="btn btn-wb-dark owlHistoryPrev me-4"> <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="btn btn-wb-dark owlHistoryNext"> <i class="fas fa-chevron-right"></i> </button>

                        </div>

                        <div class="col-6 d-flex justify-content-end">
                            <h4 class="text-muted">1/20</h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section>
        <div class="container container-join-me">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-dark font-bold join-title ">Rejoins-moi <br> maintenant et <br> écrivons le reste <br>
                        de l'histoire <br> ensemble.</h2>


                </div>

                <div class="col-6 d-flex justify-content-end align-items-center flex-column">
                    <a href="" class="text-decoration-none">
                        <div class="join-box mb-3">
                            <span><i class="fas fa-arrow-right rotate-icone"></i></span>
                            <p class=" text-justify  font-mono-medium">Se faire accompagner</p>
                        </div>
                    </a>
                    <a href="" class="text-decoration-none">
                        <div class="join-box">
                            <span><i class="fas fa-arrow-right rotate-icone"></i></span>
                            <p class=" text-justify  font-mono-medium">Rejoindre mon réseau</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
