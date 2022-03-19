@extends('layouts.template')

@section('content')
    <section>
        <div class="container">
            <img src="{{ asset('icons/big-black-circle.svg') }}" alt="">
            <img src="{{ asset('icons/medium-black-circle.svg') }}" alt="">
            <img src="{{ asset('icons/medium-black-circle.svg') }}" alt="">
            <div>
                <img src="{{ asset('img/banner.png') }}" alt="">

                <div class="container">
                    <div>
                        <h1 class="text-white font-bold">Hello, je suis <br>
                            <span class="color-primary">Lorem ipusum</span>  </h1>
                    </div>

                    <div class="text-center">
                        <button class="btn text-dark">
                            <div>
                                <span>See more</span>
                                <span><box-icon name='chevron-down'></box-icon></span>

                            </div>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container-fluid p-2 bg-dark">
            <div class="container">
                <img src="{{ asset('img/forbes.png') }}" alt="">
                <img src="{{ asset('img/ted.png') }}" alt="">
                <img src="{{ asset('img/startup.png') }}" alt="">
                <img src="{{ asset('img/circle.png') }}" alt="">

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="color-primary font-bold title-h2">A propos</h2>
            <div class="my-4">
                <div class="row justify-content-center ">
                    <div class="col ">
                        <p class=" mb-0"> Il y a 3 ans, j'ai démarré mon aventure sur internet. Cela a été la
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
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="{{asset('img/profile.png')}}" alt="">
                </div>

                <div class="col-6">
                    <div>
                        <p> Junior est le PDG de JN HOLDING SAS, et le fondateur de JN Médias où il aide les entreprises et
                            particuliers à construire leur empire sur Internet grâce à une méthode simple en 3 étapes.</p>
                    </div>

                    <div class="d-flex">
                        <a href="" class="btn btn-wb-primary font-mono-medium rounded-pill px-5 me-3">Démarrer</a>
                        <a href="" class="btn btn-wb-primary font-mono-medium rounded-pill px-5">En savoir plus</a>

                    </div>
                </div>
            </div>
        </div>
    </section>




    <section>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2 class="color-primary font-bold section-title">Rejoins la <br> révolution e- <br> commerce</h2>

                    <div class="col-9">
                        <p>Pour moi, le e-commerce est une énorme opportunité à saisir pour la jeunesse africaine. Les jeunes
                            africains peuvent obtenir les mêmes résultats que tous ceux que j'ai accompagnés en Europe et
                            partout dans le monde.</p>


                        <p>C'est pourquoi, conscient des difficultés que les jeunes africains éprouvent à obtenir des résultats,
                            j'ai développé ECOM ELITE le premier programme E-commerce 100% adapté pour l'Afrique francophone.
                        </p>
                    </div>


                    <a href="" class="btn px-5 btn-wb-primary font-mono-medium rounded-pill">Rejoindre ECOM ELITE</a>

                </div>

                <div class="col-8">
                    <img src="{{asset('img/join-1.png')}}" alt="">
                    <img src="{{asset('img/join2.png')}}" alt="">

                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-dark font-bold join-title ">Rejoins-moi <br> maintenant et <br> écrivons le reste <br> de l'histoire <br> ensemble.</h2>


                </div>

                <div class="col-6">
                    <div class="join-box mb-3">
                        <img src="{{asset('icons/icone-arrow-right.svg')}}" alt="">
                        <p class="mb-0 font-mono-medium">Se faire accompagner</p>
                    </div>

                    <div class="join-box">
                        <img src="{{asset('icons/icone-arrow-right.svg')}}" alt="">
                        <p class="mb-0 font-mono-medium">Rejoindre mon réseau</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
