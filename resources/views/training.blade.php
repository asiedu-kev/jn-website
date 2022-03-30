@extends('layouts.template')

@section('content')
    <section class="mt-header">
        <div class="p-wb-4 p-5 container-title d-flex justify-content-center align-items-center">
            <img src="{{ asset('icons/big-black-circle.svg') }}" alt="" class="title-big-circle">
            <img src="{{ asset('icons/medium-black-circle.svg') }}" alt="" class="title-medium-circle">
            <img src="{{ asset('icons/medium-black-circle.svg') }}" alt="" class="title-small-circle">

            <div class="col-md-6 col-sm-12 text-center py-5 d-flex align-items-center">
                <div class="col text-start">
                    <h1 class=" font-bold">Coaching entrepreneuriat et e-commerce</h1>
                    <p>Passe un nouveau cap ta vie et dans tes business</p>
                    <div class="mt-4">
                        <button
                            class="btn rounded-pill btn-wb-primary d-block d-md-inline text-xs-start px-2 px-md-3 w-100">Se
                            faire accompagner</button>
                    </div>
                </div>

                <div class="col d-none d-md-block">
                    <img src="" alt="" class="taining-hero-img">
                </div>



            </div>
        </div>


        <div class="co-12 d-flex justify-content-center py-3 mt-3 d-md-none">
            <img src="" alt="" class="taining-hero-img">
        </div>
    </section>

    <section>
        <div class="container-fluid py-5 bg-wb-secondary">
            <div class="container-wb py-5">
                <h2 class="font-bold join-title text-start">À tous les jeunes africains qui <br> souhaitent tout exploser
                    dans
                    <br> leur business en ligne 💥
                </h2>
                <div class="col-md-4 col-sm-12 mt-4">
                    <p>La différence entre ceux qui ont réalisé des millions d'euros en entrepreneuriat et ceux qui stagnent
                        n'a
                        absolument rien à voir avec les compétences qu'ils possèdent.</p>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container-wb py-5">
            <div class="d-flex justify-content-center flex-column align-items-start flex-md-row">
                <div class="col-md-5 col-sm-12 p-2 p-md-4 aos-init aos-animate" data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back" data-aos-delay="600">
                    <p class="text-justify"> C'est vrai, les compétences et le savoir faire, c'est important. Mais ce qui
                        te fait réussir, c'est la vitesse à laquelle tu arrives à trouver des solutions aux difficultés qle
                        tu vas rencontrer.
                    </p>
                    <p class="text-justify">Les personnes qui explosent tout en entrepreneuriat réussissent car ils ont
                        accès à un écosystème où ils peuvent trouver de l'accompagnement, des astuces et des outils pour
                        résoudre facilement les difficultés qu'ils rencontrent et aller rapidement vers le succès.
                    </p>



                </div>

                <div class="col-md-5 col-sm-12 p-2 p-md-4 aos-init aos-animate" data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back" data-aos-delay="1000">
                    <p class="text-justify"> C'est ce que les gourous et coachs sur les réseaux sociaux ne te diront
                        malheureusement jamais.
                    </p>
                    <p class="text-justify">En effet, le long de ton parcours d'entrepreneur, tu vas rencontrer beaucoup
                        de difficultés. Tu seras bloqué à certaines étapes et tu seras également soumis à de nombreux
                        dilemmes. À chaque fois, tu devras chercher et trouver la solution qui te fera avancer.
                    </p>

                    <p class="text-justify">À ce stade, une solution s'offre à toi : Tu peux essayer de trouver à chaque
                        fois toi-même la solution, en testant et en essayant beaucoup de choses.
                    </p>



                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid bg-black">
            <div class="container-wb p-2 py-3 p-md-5  text-white">
                <div class="row">
                    <div class="col-sm-12 mb-3 col-md-6 text-start">
                        <h5>Malheureusement, <br> voici ce qu'il se passe <br> très souvent</h5>
                    </div>

                    <div class="col-sm-12 mb-3 col-md-6 p-2 p-md-5">
                        <p class="text-justify aos-init aos-animate mb-2 mb-md-4" data-aos="fade-zoom-in"
                            data-aos-easing="ease-in-back" data-aos-delay="600">❌ <br>
                            Ça te prend beaucoup de temps pour trouver des solutions. Pendant que tu perds du temps, ceux
                            qui font le même business que toi évoluent rapidement et obtiennent de gros résultats.</p>
                        <p class="text-justify aos-init aos-animate mb-2 mb-md-4" data-aos="fade-zoom-in"
                            data-aos-easing="ease-in-back" data-aos-delay="900">❌ <br>
                            Tu finis par te décourager car les difficultés s'enchaînent. Tu deviens dépressif et tu as envie
                            de tout laisser tomber.</p>
                        <p class="text-justify aos-init aos-animate mb-2 mb-md-4" data-aos="fade-zoom-in"
                            data-aos-easing="ease-in-back" data-aos-delay="1200">❌ <br>
                            Tu prends beaucoup de mauvaises décisions, perds beaucoup d'argent et tu stagnes.</p>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container-wb py-5">
            <h2 class="color-primary text-center font-bold">Qui suis-je et comment je sais celà ?</h2>
            <div class="d-flex justify-content-center flex-column flex-md-row align-items-center mt-5">
                <div class="col-12 mb-2 col-md-6 container-img-ressource-about">
                    <img src="{{ asset('img/profile.png') }}" alt="img-started-about" class="img-started-about">
                </div>


                <div
                    class="col-12 mb-2 col-md-6 d-flex justify-content-md-center align-items-center p-ressource-about p-ressource-about-2">
                    <div class="col-12 fs-22">
                        <p class=" line-height-2">Devenir financièrement indépendant avec les business en ligne,
                            c'est possible et j'en suis la preuve.</p>
                        <p class=" line-height-2">Je m'appelle Junior Natabou, et du haut de mes <span
                                class="font-bold">18 ans</span> j'ai réussi à générer plus de <span
                                class="font-bold">2,5 millions</span> d'euros de chiffre d'affaires sur Internet.</p>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <section>
        <div class="container-wb px-md-5">
            <div class="d-flex justify-content-center  align-items-start flex-column flex-md-row">
                <div class="col-12 mb-3 col-md-6 p-2 p-md-4 aos-init aos-animate" data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back" data-aos-delay="600">
                    <p class="text-justify"> Pourtant, depuis 2019, comme tous les entrepreneurs, j'ai eu à faire face à
                        de nombreux problèmes dans mes différents business.

                    </p>
                    <p class="text-justify"> Lorsque j'ai démarré dans le e-commerce en 2019 notamment, j'ai perdu tout
                        mon capital de départ. Je ne me suis pas pour autant découragé. J'ai dû retourner chercher du
                        capital et recommencer. Mais j'ai encore échoué une seconde fois. Puis une troisième et une
                        quatrième fois.
                    </p>

                </div>

                <div class="col-12 mb-3 col-md-6 p-2 p-md-4 aos-init aos-animate" data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back" data-aos-delay="1000">


                    <p class="text-justify"> Honnêtement, j'étais totalement découragé et j'ai même frôlé la dépression.
                        Je voyais les autres réussir et je ne comprenais pas pourquoi ça ne fonctionnait pas pour moi.
                    </p>
                    <p class="text-justify"> J'aurais pu tout laisser tomber à ce moment-là…
                    </p>
                    <p class="text-justify"> Cependant, j'ai décidé de recommencer une dernière fois. Mais cette fois, en
                        prenant le soin de me faire accompagner par un expert. Et devine quoi ? Cette fois-ci, il m'a fallu
                        seulement 3 mois pour atteindre 100000€ de chiffres d'affaires.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid bg-black text-white">
            <div class="container-wb py-5">
                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-3">
                        <h2 class="text-start">Le coaching/ <br> accompagnement te <br> fait gagner du temps…</h2>
                    </div>

                    <div class="col-md-6 col-sm-12 mb-3 p-2 p-md-4">
                        <p class="text-justify aos-animate mb-2 mb-md-4" data-aos="fade-zoom-in"
                            data-aos-easing="ease-in-back" data-aos-delay="600">90% des entrepreneurs réussissent tout
                            simplement parce qu'ils se sont
                            fait accompagner. En te faisant accompagner tu auras un soutien de poids pour résoudre
                            rapidement toutes les difficultés que tu vas rencontrer :</p>
                        <p class="text-justify aos-animate mb-2 mb-md-4" data-aos="fade-zoom-in"
                            data-aos-easing="ease-in-back" data-aos-delay="900">✅ Dans ton parcours vers la réussite <br>
                            ✅ Sur ton business <br>
                            ✅ Dans ta carrière.</p>
                        <p class="text-justify aos-animate mb-2 mb-md-4" data-aos="fade-zoom-in"
                            data-aos-easing="ease-in-back" data-aos-delay="1200">Malheureusement, se faire accompagner, ce
                            n'est pas simple. La plupart des
                            programmes de coaching de qualité coûtent très cher ( en moyenne de 2000€). Mais ils constituent
                            une garantie sûr pour obtenir des résultats et atteindre tes objectifs.</p>
                        <p class="text-justify font-bold aos-animate mb-2 mb-md-4" data-aos="fade-zoom-in"
                            data-aos-easing="ease-in-back" data-aos-delay="1500">Ce que je te propose : Un accompagnement
                            accessible et adapté à
                            tes besoins.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid bg-wb-secondary py-5">
            <div class="container-wb">
                <div class="row align-items-md-center">
                    <div class="col-12 col-md-4">
                        <h2 class="font-bold">Plus de 3 ans <br> d'expérience dans <br> l'accompagnement</h2>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3   ">
                                <p class="mb-0">Cela fait quelques années que j'accompagne les jeunes du monde
                                    entier à obtenir des résultats stratosphériques dans leur vie.</p>
                            </div>
                            <div class="col-12 col-md-6 d-flex justify-content-md-end">
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
        <div class="container-wb py-5">
            <div class="d-flex justify-content-center flex-column align-items-center py-5">
                <div class="col-md-5 col-sm-12 mb-3 fs-18">
                    <p class="text-center">Ces résultats peuvent être les tiens. Gagne du temps et augmente tes chances
                        de réussite à 99% en te faisant accompagner aujourd'hui.</p>
                </div>
                <a class="btn rounded-pill btn-wb-primary px-3 text-decoration-none">Se faire accompagner</a>
            </div>
        </div>
    </section>

    <section>
        <div class="container-wb py-5">
            <h2 class="join-title color-primary font-bold">Je vais être ton coach 🔥</h2>
            <div class="row mt-3 py-4">
                <div class="col-sm-12 col-md-4  mb-2 aos-animate " data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                    data-aos-delay="600">
                    <h5 class="fw-bold  mb-4">Je mets à ta disposition 3 programmes d'accompagnement disponibles à des
                        tarifs forfaitaires.</h5>



                    <p class="text-justify"> ✅ Quelles que soient tes compétences</p>
                    <p class="text-justify">✅ Quel que soit la nature de ton business ou de ton entreprise</p>
                    <p class="text-justify">✅ Quels que soient tes objectifs</p>
                </div>
                <div class="col-sm-12 col-md-4  mb-2 aos-animate " data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                    data-aos-delay="900">
                    <h5 class="fw-bold mb-4">Je te donnerai les solutions à tout ce qui te bloque dans ton parcours vers
                        la réussite. Ne t'inquiète pas :</h5>



                    <p class="text-justify">❌ Pas besoin d'avoir des compétences digitales</p>
                    <p class="text-justify">❌ Pas besoin de faire nécessairement un business en ligne</p>
                    <p class="text-justify">❌ Pas besoin d'avoir un grand diplôme.</p>
                </div>

                <div class="col-sm-12 col-md-4  mb-2 aos-animate " data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                    data-aos-delay="1200">
                    <h5 class="fw-bold  mb-4">Je t'accompagne, je t'aide à atteindre tes objectifs et je te donne des
                        solutions clés en mains en 4 étapes.</h5>




                    <p class="text-justify">1- Entretien et diagnostic/audit</p>
                    <p class="text-justify">2- Identification des problèmes et difficultés qui t'empêchent de réussir</p>
                    <p class="text-justify">3- Plan d'action détaillé pour résoudre les problèmes et difficultés</p>
                    <p class="text-justify">4- Évaluation des réussites</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid bg-black h-wb-100 py-5">
            <div class="container-wb">
                <div class="row d-flex flex-column flex-md-row">
                    <div class="col-12 col-md-10 order-2 order-md-1">
                        <div class="swiper-container price-main">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="col-12">
                                        <div class="card card-swiper-price ">
                                            <div class="row">
                                                <div class="col-md-6 d-flex justify-content-center p-price-x">
                                                    <div class="card-swiper-price-header">
                                                        <img src="{{ asset('img/price1.png') }}" alt="">
                                                        <button
                                                            class="btn bg-wb-primary w-100 text-white font-mono-medium py-2 text-center mt-3">Commander</button>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 d-flex justify-content-center ps-md-5 mb-price-y">
                                                    <div>

                                                        <h3 class="text-white">Consulting/coaching mindset</h3>
                                                        <p class="mb-3 text-muted">87€ / 50.000 F.CFA</p>

                                                        <div class="my-4">
                                                            <h5 class="fs-14 font-bold">Parfait si</h5>
                                                            <p class="text-justify">Vous souhaitez avoir une entrevue
                                                                pour me
                                                                demander des conseils sur votre business en ligne, votre
                                                                carrière,
                                                                votre mindset ou les opportunités que vous pouvez saisir.
                                                            </p>
                                                        </div>

                                                        <div class="mt-4">

                                                            <h5 class="fs-14 font-bold">Vous avez droit à</h5>
                                                            <ul>
                                                                <li>Une entrevue enregistrée de 1 h où je réponds à toutes
                                                                    vos
                                                                    questions (valeur 759€)</li>
                                                                <li>Formation ELITE MINDSET pour booster votre mindset
                                                                    d'entrepreneur et passer un nouveau cap dans votre vie (
                                                                    Valeur
                                                                    187€ )</li>
                                                                <li>Stratégies Plan de Route pour atteindre vos objectifs en
                                                                    90
                                                                    jours</li>
                                                                <li>Deux mois d'accès gratuit à Netcamp ( valeur 100€)</li>
                                                            </ul>
                                                        </div>

                                                        <div class="mt-3 border-bottom"></div>

                                                        <div class="mt-3 row">
                                                            <div class="col-5">
                                                                <div class="text-uppercase fs-14 text-muted mb-2">Type de
                                                                    coaching</div>
                                                                <h6 class="fs-14">Individuel</h6>

                                                            </div>

                                                            <div class="col-4">
                                                                <div class="text-uppercase fs-14 text-muted mb-2">Durée
                                                                </div>
                                                                <h6 class="fs-14">1 heure</h6>

                                                            </div>
                                                            <div class="col-3">
                                                                <div class="text-uppercase fs-14 text-muted mb-2">Canal
                                                                </div>
                                                                <h6 class="fs-14">Zoom</h6>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12">
                                        <div class="card card-swiper-price ">
                                            <div class="row">
                                                <div class="col-md-6 d-flex justify-content-center p-price-x">
                                                    <div class="card-swiper-price-header">
                                                        <img src="{{ asset('img/price1.png') }}" alt="">
                                                        <button
                                                            class="btn bg-wb-primary w-100 text-white font-mono-medium py-2 text-center mt-3">Commander</button>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 d-flex justify-content-center ps-md-5 mb-price-y">
                                                    <div>

                                                        <h3 class="text-white">Consulting e-commerce</h3>
                                                        <p class="mb-3 text-muted">87€ / 50.000 F.CFA</p>

                                                        <div class="my-4">
                                                            <h5 class="fs-14 font-bold">Parfait si</h5>
                                                            <p class="text-justify">Vous avez débuté dans le e-commerce ou vous souhaitez y débuter.
                                                            </p>
                                                            <p class="text-justify">
                                                                Vous souhaitez une entrevue pour avoir mes conseils et produire plus rapidement des résultats.
                                                            </p>
                                                        </div>

                                                        <div class="mt-4">

                                                            <h5 class="fs-14 font-bold">Vous avez droit à</h5>
                                                            <ul>
                                                                <li>Coaching individuel enregistré de 1 h où je réponds à toutes vos préoccupations  (valeur 759€)</li>
                                                                <li>Audit complet de votre site si vous en avez ( valeur 457€)</li>
                                                                <li>Plan d'action complet 30000€/100000€ en 90 jours selon votre niveau ( valeur 599€) </li>
                                                                <li>Maîtrise pointue des stratégies free trafic et paid trafic ( valeur 297€)</li>
                                                                <li>Outils techniques complémentaires ( valeur 1257€)</li>
                                                            </ul>
                                                        </div>

                                                        <div class="mt-3 border-bottom"></div>

                                                        <div class="mt-3 row">
                                                            <div class="col-5">
                                                                <div class="text-uppercase fs-14 text-muted mb-2">Type de
                                                                    coaching</div>
                                                                <h6 class="fs-14">Individuel</h6>

                                                            </div>

                                                            <div class="col-4">
                                                                <div class="text-uppercase fs-14 text-muted mb-2">Durée
                                                                </div>
                                                                <h6 class="fs-14">1 heure</h6>

                                                            </div>
                                                            <div class="col-3">
                                                                <div class="text-uppercase fs-14 text-muted mb-2">Canal
                                                                </div>
                                                                <h6 class="fs-14">Zoom</h6>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12">
                                        <div class="card card-swiper-price ">
                                            <div class="row">
                                                <div class="col-md-6 d-flex justify-content-center p-price-x">
                                                    <div class="card-swiper-price-header">
                                                        <img src="{{ asset('img/price1.png') }}" alt="">
                                                        <button
                                                            class="btn bg-wb-primary w-100 text-white font-mono-medium py-2 text-center mt-3">Commander</button>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 d-flex justify-content-center ps-md-5 mb-price-y">
                                                    <div>

                                                        <h3 class="text-white">Coaching e-commerce</h3>
                                                        <p class="mb-3 text-muted">87€ / 50.000 F.CFA</p>

                                                        <div class="my-4">
                                                            <h5 class="fs-14 font-bold">Parfait si</h5>
                                                            <p class="text-justify">Vous faites du e-commerce ou vous souhaitez faire du e-commerce depuis l'Afrique
                                                            </p>

                                                            <p class="text-justify">Vous souhaitez un accompagnement de longue durée pour avoir mes conseils et produire plus rapidement des résultats</p>
                                                        </div>

                                                        <div class="mt-4">

                                                            <h5 class="fs-14 font-bold">Vous avez droit à</h5>
                                                            <ul>
                                                                <li>Coaching individuel de 1 mois où je vous aide à atteindre des objectifs significatifs (valeur 759€)</li>
                                                                <li>Audit complet de votre site si vous en avez ( valeur 457€)</li>
                                                                <li>Plan d'action complet 30000€/100000€ en 90 jours selon votre niveau ( valeur 599€)</li>
                                                                <li>Maîtrise pointue des stratégies free trafic et paid trafic ( valeur 297€ )</li>
                                                                <li>Formation ECOM ELITE ( valeur 969€)</li>
                                                                <li>Accès à un groupe d'entraide/coaching groupé</li>
                                                                <li>Outils techniques complémentaires ( valeur 1257€) </li>
                                                            </ul>
                                                        </div>

                                                        <div class="mt-3 border-bottom"></div>

                                                        <div class="mt-3 row">
                                                            <div class="col-5">
                                                                <div class="text-uppercase fs-14 text-muted mb-2">Type de
                                                                    coaching</div>
                                                                <h6 class="fs-14">Individuel /groupé</h6>

                                                            </div>

                                                            <div class="col-3">
                                                                <div class="text-uppercase fs-14 text-muted mb-2">Durée
                                                                </div>
                                                                <h6 class="fs-14"> 1 mois</h6>

                                                            </div>
                                                            <div class="col-4">
                                                                <div class="text-uppercase fs-14 text-muted mb-2">Canal
                                                                </div>
                                                                <h6 class="fs-12">ZOOM / WhatsApp</h6>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-2 d-flex flex-row  align-items-center justify-content-center  justify-content-md-start flex-md-column order-1 order-md-2 ">
                        <div class="swiper-container price-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card card-price-thumbs">
                                        <img src="{{ asset('img/thumb1.png') }}" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card card-price-thumbs">
                                        <img src="{{ asset('img/thumb2.png') }}" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card card-price-thumbs">
                                        <img src="{{ asset('img/thumb3.png') }}" alt="">
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
        <div class="container-wb py-5">
            <h2 class="text-center join-title font-bold text-uppercase">FAQ</h2>
            <div class="d-flex justify-content-center py-5">
                <div class="col-12 col-md-10">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button font-bold fs-16 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Comment se déroulent les programmes d'accompagnement ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Les programmes se déroulent en ligne à 100%. Pour ce qui est des séances de 1h,
                                    l'échange aura lieu via Zoom. Pour le coaching de 1 mois, les discussions se poursuivent
                                    via WhatsApp. Tous les détails de connexion vous seront envoyés par mail après que vous
                                    ayez lancé la commande. </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 border-top">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button font-bold fs-16 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    À qui sont destinés les programmes d'accompagnement ? </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam debitis porro numquam
                                    maxime natus aliquid aliquam rem optio? Consequatur obcaecati alias perspiciatis non
                                    similique rem! Mollitia, natus? Alias, eveniet? Cum. </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 border-top">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button font-bold fs-16 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Que se passe-t-il lorsque je commande un accompagnement sur le site ? </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum fuga voluptates
                                    eligendi architecto amet molestiae quis maiores inventore iste. Enim odio maiores minus
                                    fuga placeat, qui nulla ipsa corrupti maxime!
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-2 border-top">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button font-bold fs-16 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Que contiennent les programmes d'accompagnement ? </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam totam atque perferendis
                                    alias cupiditate, doloribus soluta amet. Perspiciatis harum, hic placeat, incidunt,
                                    quisquam sint facere repellat tenetur quasi dolor libero! </div>
                            </div>
                        </div>
                    </div>
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
