@extends('layouts.template')

@section('content')
    <section>
        <div class="p-5 container-title d-flex justify-content-center align-items-center">
            <img src="{{ asset('icons/big-black-circle.svg') }}" alt="" class="title-big-circle">
            <img src="{{ asset('icons/medium-black-circle.svg') }}" alt="" class="title-medium-circle">
            <img src="{{ asset('icons/medium-black-circle.svg') }}" alt="" class="title-small-circle">

            <div class="col-12 col-md-5 text-center py-5">
                <h1 class=" font-bold">La méthode simple <br> en 3 étapes pour <br> percer dans les <br> business en
                    ligne</h1>
                <div class="mt-4 px-4">
                    <button class="btn rounded-pill btn-wb-primary px-3">Démarrer maintenant</button>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container-wb py-5">
            <div class="row">
                <div class="col-12 col-md-6 container-img-ressource-about">
                    <img src="{{ asset('img/profile.png') }}" alt="img-started-about" class="img-started-about">
                </div>


                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center p-ressource-about">
                    <div class="col-12 col-md-10 fs-22">
                        <p class="text-justify line-height-2">Devenir financièrement indépendant avec les business en ligne,
                            c'est possible et j'en suis la preuve.</p>
                        <p class="text-justify line-height-2">Je m'appelle Junior Natabou, et du haut de mes <span
                                class="font-bold">18 ans</span> j'ai réussi à générer plus de <span
                                class="font-bold">2,5 millions</span> d'euros de chiffre d'affaires sur Internet.</p>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <section>
        <div class="container-fluid bg-black">
            <div class="container-wb py-5 ">
                <div class="d-flex justify-content-center flex-column flex-md-row text-white">
                    <div class="col-12 col-md-4 p-2 p-md-4 me-md-4">
                        <p class="text-justify">Je sais que beaucoup de jeunes (toi aussi peut être) souhaitent s'inspirer
                            de mon parcours pour s'autonomiser car je reçois chaque jour des centaines de messages à ce
                            sujet sur mes réseaux sociaux.</p>
                    </div>

                    <div class="col-12 col-md-4 p-2 p-md-4">
                        <p class="text-justify">C'est pourquoi, en me basant sur ma propre expérience et celle de nombreux
                            entrepreneurs qui ont réussi sur le web, j'ai élaboré cette méthode en trois (03) étapes qui va
                            t'aider à grimper les échelons.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container-wb p-5">
            <div class="d-flex justify-content-center">
                <h2 class="font-bold  text-center">Voici comment <br> construire ton empire <br> sur Internet dès <br>
                    aujourd'hui</h2>

            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-5 bg-step-1">
            <div class="container-wb py-5">
                <div class="row">
                    <div class="col-12 col-md-2">
                        <div><span class="step-circle font-bold">1</span></div>
                        <div class="mt-2 font-bold">
                            <h3 class="fs-20 color-primary">Découverte</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <div class=" col-12 col-md-8">
                            <p class="text-justify">Avant de te lancer tu dois maîtriser ce que sont les business en
                                ligne, les avantages, limites, et tout ce que tu dois savoir pour régulariser ton activité
                                depuis l'Afrique.</p>
                            <p class="text-justify">Tu trouveras de nombreux articles à ce sujet sur internet. Mais si tu
                                veux gagner du temps, je te conseille de suivre les formations ENTIÈREMENT GRATUITES que
                                j'ai préparé sur le sujet.</p>
                            <a href="" class="color-primary font-bold fs-16">Je profite des Formations Gratuites</a>
                        </div>
                    </div>
                    <div class="col-12 mt-4 col-md-4 d-flex justify-content-md-end">
                        <div class=" container-img-ressource-methods">
                            <img src="{{ asset('img/hall.png') }}" alt="img-started-about" class="img-started-about">

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="container-fluid py-5 bg-step-2">
            <div class="container-wb py-5">
                <div class="row">
                    <div class="col-12 col-md-2">
                        <div><span class="step-circle font-bold">2</span></div>
                        <div class="mt-2 font-bold">
                            <h3 class="fs-20 color-primary">Formation</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <div class="col-12 col-md-8">
                            <p class="text-justify">Maintenant que tu es dans le bain, c'est le moment de te lancer. Cela
                                passe par la formation. Tu dois apprendre des compétences que tu vas utiliser pour
                                construire ton empire.


                            <p class="text-justify"> Il y a de nombreuses compétences que tu peux apprendre sur des
                                plateformes comme Openclassrooms.com ou Udemy.com. Ces formations coûtent cependant souvent
                                très cher.
                            </p>
                            <p class="text-justify"> Si tu ne sais pas par quoi commencer ou que tu n'as pas beaucoup
                                d'argent pour te former, je te conseille de prendre l'accès à NETCAMP, une plate-forme que
                                j'ai développé avec la collaboration de plusieurs experts européens pour t'aider à avoir
                                accès à toutes les formations possibles à moindre coût.</p>
                            </p>
                            <a href="" class="color-primary font-bold fs-16">Je rejoins NETCAMP</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-4 d-flex justify-content-md-end">
                        <div class=" container-img-ressource-methods">
                            <img src="{{ asset('img/hall.png') }}" alt="img-started-about" class="img-started-about">

                        </div>

                    </div>

                </div>
            </div>
        </div>


    </section>
    <section>
        <div class="container-fluid bg-step-3 py-5">
            <div class="container-wb py-5">
                <div class="row">
                    <div class="col-12 col-md-2">
                        <div><span class="step-circle font-bold">3</span></div>
                        <div class="mt-2 font-bold">
                            <h3 class="fs-20 color-primary break-word">Accompagnement</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <div class="col-sm-12 col-md-8">

                            <p class="text-justify"> Se former ne suffit pas toujours pour produire des résultats. Pour ma
                                part, j'ai dû prendre un coaching pour réussir à chiffrer en e-commerce. Beaucoup
                                d'entrepreneurs web ne réussissent pas malgré le fait qu'ils se soient formés parcequ'ils ne
                                se sont pas fait accompagner.
                            </p>
                            <p class="text-justify"> Un accompagnement te fait gagner du temps et te donne un raccourci
                                vers le succès. Si tu souhaites te faire accompagner par moi dans tes business, je propose
                                plusieurs programmes qui vont sûrement t'aider.
                            </p>
                            <a href="" class="color-primary font-bold fs-16">Je me fais accompagner</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 d-flex mt-3 justify-content-md-end">
                        <div class=" container-img-ressource-methods">
                            <img src="{{ asset('img/hall.png') }}" alt="img-started-about" class="img-started-about">

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container-wb py-5">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 mb-2">
                    <h2 class="text-dark font-bold join-title ">Prêt à nous <br> rejoindre ?</h2>
                    <p>Grimpe la première marche et <br> commence à construire ton <br> empire sur Internet aujourd'hui</p>
                </div>
                <div class="col-md-6 col-sm-12 mb-2 d-flex justify-content-center">
                    <a href="" class="text-decoration-none">
                        <div class="join-box mb-3">
                            <span><i class="fas fa-arrow-right rotate-icone"></i></span>
                            <p class="font-mono-medium text-start">Démarrer la <br> 1ere étape</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
