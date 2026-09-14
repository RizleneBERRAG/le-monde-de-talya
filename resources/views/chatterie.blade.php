@extends('layouts.app')

@section('title', 'La chatterie | Le Monde de Talya')

@section(
    'meta_description',
    'Découvrez Le Monde de Talya, une chatterie familiale de Maine Coons située en Isère.'
)

@push('styles')
    @vite('resources/css/pages/chatterie.css')
@endpush

@section('content')
    <main class="cattery-page">

        {{-- HERO --}}
        <section class="cattery-hero">
            <img
                src="{{ asset('images/chatterie-hero.jpg') }}"
                alt="La chatterie Le Monde de Talya"
                class="cattery-hero-image"
            >

            <div class="cattery-hero-overlay"></div>

            <div class="cattery-hero-content">
                <p class="cattery-eyebrow">
                    Le Monde de Talya
                </p>

                <h1>
                    Une chatterie
                    <em>née de la passion</em>
                </h1>

                <p class="cattery-hero-description">
                    Un environnement familial pensé pour accompagner nos
                    Maine Coons avec attention, respect et douceur.
                </p>
            </div>

            <div class="cattery-hero-footer">
                <span>Chatterie familiale</span>
                <span>Isère · 38</span>
            </div>
        </section>


        {{-- INTRODUCTION --}}
        <section class="cattery-introduction">
            <div class="cattery-container cattery-introduction-grid">
                <div class="cattery-section-heading">
                    <span class="cattery-section-number">01</span>

                    <p class="cattery-section-eyebrow">
                        Notre univers
                    </p>

                    <h2>
                        Bien plus qu’un élevage,
                        <em>une histoire de cœur</em>
                    </h2>
                </div>

                <div class="cattery-introduction-copy">
                    <p class="cattery-lead">
                        Le Monde de Talya est avant tout une chatterie familiale,
                        créée autour d’une véritable passion pour le Maine Coon.
                    </p>

                    <p>
                        Nos chats partagent notre quotidien et grandissent au
                        contact de la vie de famille. Nous accordons une attention
                        particulière à leur bien-être, à leur équilibre et à leur
                        socialisation.
                    </p>

                    <p>
                        Chaque naissance représente une nouvelle histoire.
                        Nous prenons le temps de connaître chaque chaton,
                        son caractère et ses besoins, afin de l’accompagner
                        avec attention jusqu’à sa future famille.
                    </p>
                </div>
            </div>
        </section>


        {{-- HISTOIRE --}}
        <section class="cattery-story">
            <div class="cattery-story-image-wrapper">
                <img
                    src="{{ asset('images/chatterie-histoire.jpg') }}"
                    alt="Un Maine Coon du Monde de Talya"
                    class="cattery-story-image"
                    loading="lazy"
                >

                <span class="cattery-image-caption">
                    Le Monde de Talya · Isère
                </span>
            </div>

            <div class="cattery-story-content">
                <span class="cattery-section-number">02</span>

                <p class="cattery-section-eyebrow">
                    Notre histoire
                </p>

                <h2>
                    Une aventure construite
                    <em>avec sincérité</em>
                </h2>

                <p>
                    Notre projet s’est construit autour d’une admiration profonde
                    pour cette race majestueuse, connue pour sa présence,
                    sa douceur et son caractère particulièrement attachant.
                </p>

                <p>
                    Au fil du temps, cette passion est devenue une volonté :
                    faire découvrir le Maine Coon dans un cadre sérieux,
                    humain et respectueux de chaque animal.
                </p>

                <div class="cattery-signature">
                    <span>Notre philosophie</span>
                    <strong>Respecter leur nature et leur personnalité.</strong>
                </div>
            </div>
        </section>


        {{-- VALEURS --}}
        <section class="cattery-values">
            <div class="cattery-container">
                <div class="cattery-values-heading">
                    <div>
                        <span class="cattery-section-number">03</span>

                        <p class="cattery-section-eyebrow">
                            Nos valeurs
                        </p>
                    </div>

                    <h2>
                        Ce qui guide
                        <em>notre quotidien</em>
                    </h2>
                </div>

                <div class="cattery-values-grid">
                    <article class="cattery-value">
                        <span class="cattery-value-number">01</span>

                        <h3>Bien-être</h3>

                        <p>
                            Un cadre de vie confortable et stimulant, dans lequel
                            chaque chat peut évoluer à son rythme.
                        </p>
                    </article>

                    <article class="cattery-value">
                        <span class="cattery-value-number">02</span>

                        <h3>Socialisation</h3>

                        <p>
                            Une présence quotidienne et des interactions adaptées
                            pour préparer les chatons à leur future vie de famille.
                        </p>
                    </article>

                    <article class="cattery-value">
                        <span class="cattery-value-number">03</span>

                        <h3>Accompagnement</h3>

                        <p>
                            Des échanges sincères avec chaque famille, avant
                            l’adoption comme après le départ du chaton.
                        </p>
                    </article>
                </div>
            </div>
        </section>


        {{-- QUOTIDIEN --}}
        <section class="cattery-daily">
            <div class="cattery-daily-content">
                <span class="cattery-section-number">04</span>

                <p class="cattery-section-eyebrow">
                    Leur quotidien
                </p>

                <h2>
                    Ils grandissent
                    <em>à nos côtés</em>
                </h2>

                <p>
                    Nos Maine Coons font partie intégrante de notre quotidien.
                    Cette proximité nous permet d’observer leur évolution,
                    de respecter leurs habitudes et de découvrir pleinement
                    leur personnalité.
                </p>

                <ul class="cattery-daily-list">
                    <li>
                        <span>01</span>
                        Vie au sein d’un environnement familial
                    </li>

                    <li>
                        <span>02</span>
                        Attention portée au caractère de chacun
                    </li>

                    <li>
                        <span>03</span>
                        Jeux, découvertes et interactions quotidiennes
                    </li>

                    <li>
                        <span>04</span>
                        Accompagnement progressif vers l’adoption
                    </li>
                </ul>
            </div>

            <div class="cattery-daily-image-wrapper">
                <img
                    src="{{ asset('images/chatterie-quotidien.jpg') }}"
                    alt="Le quotidien des Maine Coons de la chatterie"
                    class="cattery-daily-image"
                    loading="lazy"
                >
            </div>
        </section>


        {{-- CTA --}}
        <section class="cattery-contact">
            <div class="cattery-contact-content">
                <p class="cattery-section-eyebrow">
                    Faisons connaissance
                </p>

                <h2>
                    Vous souhaitez découvrir
                    <em>Le Monde de Talya ?</em>
                </h2>

                <p>
                    Nous serons ravis de répondre à vos questions et d’échanger
                    avec vous autour de votre projet d’adoption.
                </p>

                <a href="{{ route('contact') }}" class="cattery-contact-link">
                    Prendre contact
                    <span aria-hidden="true">↗</span>
                </a>
            </div>
        </section>

    </main>
@endsection
