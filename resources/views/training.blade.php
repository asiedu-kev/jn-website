@extends('layouts.template')

@section('content')
    <section class="mt-header">
        <div class="container-title d-flex justify-content-center align-items-center">
            <img src="{{ asset('icons/big-black-circle.svg') }}" alt="" class="title-big-circle">
            <img src="{{ asset('icons/medium-black-circle.svg') }}" alt="" class="title-medium-circle">
            <img src="{{ asset('icons/small-black-circle.svg') }}" alt="" class="title-small-circle">

            <div class="col-12 col-md-6 text-center">
                <h1 class="wb-h2 wb-mb-5">La méthode simple en 3 étapes pour percer dans les business en
                    ligne</h1>
                <div class="mt-4">
                    <button
                        class="btn rounded-pill btn-wb-primary d-block d-md-inline fs-18 py-md-2 px-2 px-md-4 w-wb-100">Démarrer
                        maintenant</button>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container-wb wb-py-8">
            <div class="row">
                <div class="col-12 col-md-6 container-img-ressource-about mb-5 mb-md-0">
                    <img src="{{ asset('img/profile.png') }}" alt="img-started-about" class="img-started-about">
                </div>


                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <div class="col-12 col-md-10 fs-22">
                        <p class="fs-32 aos-init aos-animate mb-5" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                            data-aos-delay="100">Devenir financièrement indépendant avec les business en ligne,
                            c'est possible et j'en suis la preuve.</p>
                        <p class=" fs-32 aos-init aos-animate" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                            data-aos-delay="300">Je m'appelle Junior Natabou, et du haut de mes <span
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
                    <div class="col-12 wb-col-md-5  p-2 p-md-5 ">
                        <p class="fs-24 aos-init aos-animate" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                            data-aos-delay="100">Je sais que beaucoup de jeunes (toi aussi peut être) souhaitent s'inspirer
                            de mon parcours pour s'autonomiser car je reçois chaque jour des centaines de messages à ce
                            sujet sur mes réseaux sociaux.</p>
                    </div>

                    <div class="col-12 wb-col-md-5  p-2 p-md-5">
                        <p class="fs-24 aos-init aos-animate" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                            data-aos-delay="300">C'est pourquoi, en me basant sur ma propre expérience et celle de nombreux
                            entrepreneurs qui ont réussi sur le web, j'ai élaboré cette <strong
                                class="font-bold">méthode en trois (03) étapes qui va
                                t'aider à grimper les échelons.</strong> </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container-wb pb-5 wb-pt-7 wb-m-py-7">
            <div class="d-flex justify-content-center">
                <h2 class="wb-h3  text-center  d-none d-md-inline">Voici comment <br> construire ton empire <br> sur
                    Internet dès <br>
                    aujourd'hui</h2>
                <h2 class="wb-h3  text-center d-inline  d-md-none  ">Voici <br> comment <br> construire <br> ton empire <br>
                    sur Internet <br> dès
                    <br> aujourd'hui
                </h2>

            </div>
        </div>
    </section>

    <section class="step-trigger">
        <div class="h-step-container position-relative">
            <div class="container-fluid  bg-step-1 step-element ">
                <div class="container-wb py-5">
                    <div class="row">
                        <div class="col-12 col-md-2 mb-5 mb-md-0">
                            <div><span class="step-circle font-bold">1</span></div>
                            <div class="mt-2 font-bold">
                                <h3 class="fs-32 color-primary">Découverte</h3>
                            </div>
                        </div>
                        <div class="col-12 col-md-6  bg-step-1-text d-flex justify-content-center order-2 order-md-1 aos-init aos-animate pt-3"
                            data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100">
                            <div class=" col-12 col-md-8">
                                <p class=" fs-18">Avant de te lancer tu dois maîtriser ce que sont les business en
                                    ligne, les avantages, limites, et tout ce que tu dois savoir pour régulariser ton
                                    activité
                                    depuis l'Afrique.</p>
                                <p class=" fs-18">Tu trouveras de nombreux articles à ce sujet sur internet. Mais si
                                    tu
                                    veux gagner du temps, je te conseille de suivre les formations ENTIÈREMENT GRATUITES que
                                    j'ai préparé sur le sujet.</p>
                                <a href="" class="color-primary font-bold fs-18">Je profite des Formations Gratuites</a>
                            </div>
                        </div>
                        <div class=" bg-step-1-img col-12 mt-4 mt-md-0 mb-5 mb-md-0 col-md-4 d-flex justify-content-md-end align-items-md-center mb-3 order-1 order-md-2 aos-init aos-animate"
                            data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300">
                            <div class=" container-img-ressource-methods">
                                <img src="{{ asset('img/hall.png') }}" alt="img-started-about" class="img-started-about">

                            </div>

                        </div>

                    </div>
                </div>
            </div>


            <div class="container-fluid bg-step-2 step-element ">
                <div class="container-wb py-5">
                    <div class="row">
                        <div class="col-12 col-md-2 mb-5 mb-md-0">
                            <div><span class="step-circle font-bold">2</span></div>
                            <div class="mt-2 font-bold">
                                <h3 class="fs-32 color-primary">Formation</h3>
                            </div>
                        </div>
                        <div class="col-12 bg-step-2-text col-md-6 d-flex justify-content-center order-2 order-md-1 aos-init aos-animate pt-3"
                            data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100">
                            <div class="col-12 col-md-8">
                                <p class=" fs-18">Maintenant que tu es dans le bain, c'est le moment de te lancer.
                                    Cela
                                    passe par la formation. Tu dois apprendre des compétences que tu vas utiliser pour
                                    construire ton empire.


                                <p class=" fs-18"> Il y a de nombreuses compétences que tu peux apprendre sur des
                                    plateformes comme Openclassrooms.com ou Udemy.com. Ces formations coûtent cependant
                                    souvent
                                    très cher.
                                </p>
                                <p class=" fs-18"> Si tu ne sais pas par quoi commencer ou que tu n'as pas beaucoup
                                    d'argent pour te former, je te conseille de prendre l'accès à NETCAMP, une plate-forme
                                    que
                                    j'ai développé avec la collaboration de plusieurs experts européens pour t'aider à avoir
                                    accès à toutes les formations possibles à moindre coût.</p>
                                </p>
                                <a href="" class="color-primary font-bold fs-16">Je rejoins NETCAMP</a>
                            </div>
                        </div>
                        <div class="bg-step-2-img col-12 col-md-4  mb-5 mb-md-0 d-flex justify-content-md-end order-1 order-md-2 aos-init aos-animate"
                            data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300">
                            <div class=" container-img-ressource-methods">
                                <img src="{{ asset('img/hall.png') }}" alt="img-started-about" class="img-started-about">

                            </div>

                        </div>

                    </div>
                </div>
            </div>



            <div class="container-fluid bg-step-3  step-element ">
                <div class="container-wb py-5">
                    <div class="row">
                        <div class="col-12 col-md-2 mb-5 mb-md-0">
                            <div><span class="step-circle font-bold">3</span></div>
                            <div class="mt-2 font-bold">
                                <h3 class="fs-32 color-primary break-word">Accompagnement</h3>
                            </div>
                        </div>
                        <div class="col-12 bg-step-3-text col-md-6 d-flex justify-content-center order-2 order-md-1 aos-init aos-animate pt-3"
                            data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100">
                            <div class="col-sm-12 col-md-8">

                                <p class=" fs-18"> Se former ne suffit pas toujours pour produire des résultats.
                                    Pour ma
                                    part, j'ai dû prendre un coaching pour réussir à chiffrer en e-commerce. Beaucoup
                                    d'entrepreneurs web ne réussissent pas malgré le fait qu'ils se soient formés
                                    parcequ'ils ne
                                    se sont pas fait accompagner.
                                </p>
                                <p class=" fs-18"> Un accompagnement te fait gagner du temps et te donne un
                                    raccourci
                                    vers le succès. Si tu souhaites te faire accompagner par moi dans tes business, je
                                    propose
                                    plusieurs programmes qui vont sûrement t'aider.
                                </p>
                                <a href="" class="color-primary font-bold fs-16">Je me fais accompagner</a>
                            </div>
                        </div>
                        <div class="bg-step-3-img col-12 col-md-4 d-flex  mb-5 mb-md-0 justify-content-md-end order-1 order-md-2 aos-init aos-animate"
                            data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300">
                            <div class=" container-img-ressource-methods">
                                <img src="{{ asset('img/hall.png') }}" alt="img-started-about" class="img-started-about">

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>



    </section>

    <section>
        <div class="container-wb wb-py-8 wb-pb-8 mt-5 position-relative" id="joinUs">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 mb-5 mb-md-0">
                    <h2 class="text-dark wb-h1  d-none d-md-inline">Prêt à nous rejoindre ?</h2>
                    <h2 class="text-dark wb-h1 d-inline d-md-none">Prêt à <br> nous <br> rejoindre <br> ?</h2>

                    <div class="col-12 col-md-11 mt-4 ">
                        <p class="fs-32">Grimpe la première marche et commence à construire ton empire sur Internet
                            aujourd'hui</p>

                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-2 d-flex justify-content-center">
                    <a href="" class="text-decoration-none">
                        <div class="join-box mb-3">
                            <span><i class="fas fa-arrow-right rotate-icone fs-32"></i></span>
                            <p class="font-mono-medium text-start fs-24">Démarrer la <br> 1ere étape</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        window.addEventListener("load", function(event) {
            window.requestAnimationFrame(function() {
                let pageWidth = '';
                let slider_height = '';
                var testi1_height = '';
                var sliderHeight = function() {
                    pageWidth = window.innerWidth
                    testi1_height = window.innerHeight;

                }
                var home4Slider = function() {
                    if (pageWidth >= 768) {
                        var sliderAnim = gsap.timeline({
                            scrollTrigger: {
                                trigger: ".step-trigger",
                                start: "top  top",
                                end: "bottom top",
                                toggleActions: 'restart complete reverse reset',
                                markers: false,
                                scrub: true,
                                pin: true
                            }
                        });



                        sliderAnim.from(".bg-step-1, .bg-step-1-text, .bg-step-1-img", {
                            opacity: 1,
                            ease: Power3.easeInOut,
                            duration: 10
                        }).to(".bg-step-1, .bg-step-1-text, .bg-step-1-img", {
                            opacity: 0,
                            ease: Power3.easeInOut,
                            duration: 10
                        }).from(".bg-step-2, .bg-step-2-text, .bg-step-2-img", {
                            opacity: 0,
                            scale: 0,
                            ease: Power3.easeInOut,
                            duration: 5
                        }, "-=10").to(".bg-step-2, .bg-step-2-text, .bg-step-2-img", {
                            opacity: 1,
                            ease: Power3.easeInOut,
                            duration: 10
                        }).to(".bg-step-2, .bg-step-2-text, .bg-step-2-img", {
                            opacity: 0,
                            ease: Power3.easeInOut,
                            duration: 6
                        }).from(".bg-step-3, .bg-step-3-text, .bg-step-3-img", {
                            opacity: 0,
                            scale: 0,
                            ease: Power3.easeInOut,
                            duration: 5
                        }, "-=10").to(".bg-step-3, .bg-step-3-text, .bg-step-3-img", {
                            opacity: 1,
                            ease: Power3.easeInOut,
                            duration: 10
                        })


                    }

                }
                sliderHeight();
                home4Slider();



            });
        });
    });
</script>
