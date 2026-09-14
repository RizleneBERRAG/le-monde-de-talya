@extends('layouts.app')

@section('title', 'Le Monde de Talya | Élevage familial de Maine Coons')

@push('styles')
    @vite('resources/css/pages/home.css')
@endpush

@section('content')
    <main>
        <section class="hero">
            <img
                src="{{ asset('images/hero-maine-coon.jpg') }}"
                alt="Maine Coon de la chatterie Le Monde de Talya"
                class="hero-image"
            >

            <div class="hero-overlay"></div>

            <div class="hero-content">
                <p class="hero-eyebrow">
                    Élevage familial de Maine Coons
                </p>

                <h1>
                    Des Maine Coons élevés
                    <em>avec passion</em>
                </h1>

                <p class="hero-description">
                    Au cœur de l’Isère, nos chatons grandissent auprès de nous,
                    dans un environnement familial rempli d’attention.
                </p>

                <div class="hero-actions">
                    <a href="#chatons" class="hero-primary-action">
                        Découvrir nos chatons
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a href="#chatterie" class="hero-secondary-action">
                        Notre histoire
                    </a>
                </div>
            </div>

            <div class="hero-footer">
                <span>38 · Isère</span>

                <a href="#chatterie" class="scroll-indicator">
                    Découvrir
                    <span aria-hidden="true">↓</span>
                </a>

                <span>Depuis 2022</span>
            </div>
        </section>

        <section class="home-about" id="chatterie">
            <div class="home-about-container">
                <div class="home-about-heading">
                    <p class="section-number">01</p>

                    <p class="section-eyebrow">
                        Bienvenue dans notre univers
                    </p>

                    <h2>
                        Une passion devenue
                        <em>une belle aventure</em>
                    </h2>
                </div>

                <div class="home-about-content">
                    <div class="home-about-image">
                        <img
                            src="{{ asset('images/chatterie-home.jpg') }}"
                            alt="Maine Coon de la chatterie Le Monde de Talya"
                            loading="lazy"
                        >

                        <div class="image-signature">
                            <span>Le Monde de Talya</span>
                            <small>Isère · 38</small>
                        </div>
                    </div>

                    <div class="home-about-text">
                        <p class="home-about-introduction">
                            Grande passionnée des félins, j’ai obtenu l’ACACED en
                            octobre 2022 afin de créer mon petit élevage familial
                            de Maine Coons.
                        </p>

                        <p>
                            Nos chats partagent notre quotidien et évoluent dans un
                            environnement familial. Chaque chaton grandit entouré
                            d’attention afin de préparer sereinement son arrivée dans
                            sa future famille.
                        </p>

                        <div class="home-about-details">
                            <article>
                                <strong>2022</strong>
                                <span>Obtention de l’ACACED</span>
                            </article>

                            <article>
                                <strong>Isère</strong>
                                <span>Élevage familial situé dans le 38</span>
                            </article>

                            <article>
                                <strong>Passion</strong>
                                <span>Bien-être et attention au quotidien</span>
                            </article>
                        </div>

                        <a href="#" class="text-link">
                            Découvrir la chatterie
                            <span aria-hidden="true">↗</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-cats" id="maine-coons">
            <div class="home-cats-container">
                <header class="home-cats-heading">
                    <div>
                        <p class="dark-section-eyebrow">
                            Nos compagnons
                        </p>

                        <h2>
                            Découvrez les Maine Coons
                            <em>du Monde de Talya</em>
                        </h2>
                    </div>

                    <p>
                        Bien plus que des reproducteurs, nos Maine Coons font partie
                        intégrante de notre famille et partagent notre quotidien.
                    </p>
                </header>

                <div class="home-cats-grid">
                    <a href="#" class="cat-card cat-card-large">
                        <img
                            src="{{ asset('images/maine-coon-femelles.jpg') }}"
                            alt="Les femelles Maine Coons du Monde de Talya"
                            loading="lazy"
                        >

                        <span class="cat-card-overlay"></span>

                        <span class="cat-card-number">01</span>

                        <span class="cat-card-content">
                    <small>Le Monde de Talya</small>
                    <strong>Nos femelles</strong>

                    <span class="cat-card-link">
                        Les découvrir
                        <span aria-hidden="true">↗</span>
                    </span>
                </span>
                    </a>

                    <a href="#" class="cat-card">
                        <img
                            src="{{ asset('images/maine-coon-males.jpg') }}"
                            alt="Les mâles Maine Coons du Monde de Talya"
                            loading="lazy"
                        >

                        <span class="cat-card-overlay"></span>

                        <span class="cat-card-number">02</span>

                        <span class="cat-card-content">
                    <small>Le Monde de Talya</small>
                    <strong>Nos mâles</strong>

                    <span class="cat-card-link">
                        Les découvrir
                        <span aria-hidden="true">↗</span>
                    </span>
                </span>
                    </a>

                    <a href="#" class="cat-card">
                        <img
                            src="{{ asset('images/maine-coon-quotidien.jpg') }}"
                            alt="Le quotidien des Maine Coons de la chatterie"
                            loading="lazy"
                        >

                        <span class="cat-card-overlay"></span>

                        <span class="cat-card-number">03</span>

                        <span class="cat-card-content">
                    <small>Dans notre famille</small>
                    <strong>Leur quotidien</strong>

                    <span class="cat-card-link">
                        En découvrir plus
                        <span aria-hidden="true">↗</span>
                    </span>
                </span>
                    </a>
                </div>
            </div>
        </section>

        <section class="home-adoption" id="adoption">
            <div class="home-adoption-container">
                <header class="home-adoption-heading">
                    <p class="section-number">02</p>

                    <div>
                        <p class="section-eyebrow">
                            Une adoption réfléchie
                        </p>

                        <h2>
                            Une nouvelle histoire
                            <em>commence ici</em>
                        </h2>
                    </div>
                </header>

                <div class="home-adoption-content">
                    <div class="adoption-introduction">
                        <p>
                            Accueillir un Maine Coon est une décision importante.
                            Chaque rencontre permet d’échanger sur votre projet et
                            de préparer au mieux l’arrivée de votre futur compagnon.
                        </p>

                        <a href="#contact" class="text-link">
                            Parler de votre projet
                            <span aria-hidden="true">↗</span>
                        </a>
                    </div>

                    <div class="adoption-steps">
                        <article class="adoption-step">
                            <span class="adoption-step-number">01</span>

                            <div>
                                <h3>Faire connaissance</h3>

                                <p>
                                    Un premier échange pour découvrir votre mode de vie,
                                    vos attentes et répondre à vos questions.
                                </p>
                            </div>
                        </article>

                        <article class="adoption-step">
                            <span class="adoption-step-number">02</span>

                            <div>
                                <h3>Choisir son compagnon</h3>

                                <p>
                                    Découvrir les chatons et trouver celui dont le
                                    caractère correspondra le mieux à votre foyer.
                                </p>
                            </div>
                        </article>

                        <article class="adoption-step">
                            <span class="adoption-step-number">03</span>

                            <div>
                                <h3>Préparer son arrivée</h3>

                                <p>
                                    Anticiper ses premiers jours et créer un environnement
                                    rassurant pour son installation dans sa nouvelle famille.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-contact" id="contact">
            <img
                src="{{ asset('images/contact-maine-coon.jpg') }}"
                alt="Maine Coon du Monde de Talya"
                class="home-contact-image"
                loading="lazy"
            >

            <div class="home-contact-overlay"></div>

            <div class="home-contact-container">
                <p class="contact-eyebrow">
                    Parlons de votre projet
                </p>

                <h2>
                    Une rencontre,
                    <em>une évidence</em>
                </h2>

                <p class="contact-introduction">
                    Vous souhaitez en savoir plus sur la chatterie, nos Maine Coons
                    ou une future portée ? Nous serons ravis d’échanger avec vous.
                </p>

                <div class="contact-actions">
                    <a
                        href="mailto:lemondedetalya@gmail.com"
                        class="contact-primary-action"
                    >
                        Nous écrire
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a
                        href="tel:+33781314625"
                        class="contact-secondary-action"
                    >
                        07 81 31 46 25
                    </a>
                </div>

                <div class="contact-location">
                    <span>Le Monde de Talya</span>
                    <span>Chatterie familiale</span>
                    <span>Isère · 38</span>
                </div>
            </div>
        </section>

    </main>
@endsection
