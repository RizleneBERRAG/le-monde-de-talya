@extends('layouts.app')

@section('title', 'Nos Maine Coons | Le Monde de Talya')

@section(
    'meta_description',
    'Découvrez prochainement les Maine Coons de la chatterie Le Monde de Talya en Isère.'
)

@push('styles')
    @vite('resources/css/pages/cats.css')
@endpush

@section('content')
    <main class="cats-page adults-page">

        <section class="cats-hero cats-hero-dark">
            <div class="cats-hero-decoration"></div>

            <div class="cats-hero-container">
                <div class="cats-hero-content">
                    <p class="cats-eyebrow">
                        Le Monde de Talya
                    </p>

                    <h1>
                        Nos Maine
                        <em>Coons</em>
                    </h1>

                    <p>
                        Découvrez prochainement les chats qui font vivre
                        et grandir l’histoire du Monde de Talya.
                    </p>
                </div>

                <div class="cats-hero-visual">
                    <img
                        src="{{ asset('images/maine-coons-hero.jpg') }}"
                        alt="Maine Coon du Monde de Talya"
                        class="cats-hero-image"
                    >

                    <span class="cats-hero-image-number">01</span>
                </div>
            </div>

            <div class="cats-hero-footer">
                <span>Élégance · Douceur · Caractère</span>
                <span>Isère · 38</span>
            </div>
        </section>


        <section class="cats-introduction">
            <div class="cats-container cats-introduction-grid">
                <div>
                    <span class="cats-section-number">01</span>

                    <p class="cats-section-eyebrow">
                        Nos compagnons
                    </p>

                    <h2>
                        Les visages de
                        <em>notre chatterie</em>
                    </h2>
                </div>

                <div class="cats-introduction-text">
                    <p class="cats-lead">
                        Chaque Maine Coon possède une présence, un caractère
                        et une histoire qui lui sont propres.
                    </p>

                    <p>
                        Cette page accueillera prochainement les présentations
                        individuelles de nos chats : leurs photographies,
                        leur personnalité, leurs couleurs et leurs principales
                        informations.
                    </p>
                </div>
            </div>
        </section>


        <section class="cats-coming">
            <div class="cats-container">
                <div class="cats-coming-card">
                    <div class="cats-coming-mark">
                        <span></span>
                        <span></span>
                    </div>

                    <p class="cats-section-eyebrow">
                        Présentations à venir
                    </p>

                    <h2>
                        Leurs portraits sont
                        <em>en préparation</em>
                    </h2>

                    <p>
                        Nous préparons actuellement les fiches de nos Maine Coons.
                        Vous pourrez bientôt découvrir chacun d’eux plus en détail.
                    </p>

                    <a href="{{ route('contact') }}" class="cats-button">
                        Nous contacter
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>
            </div>
        </section>


        <section class="cats-future-preview">
            <div class="cats-container">
                <div class="cats-future-heading">
                    <span>Prochainement</span>
                    <p>Chaque fiche pourra présenter</p>
                </div>

                <div class="cats-future-grid">
                    <article>
                        <span>01</span>
                        <h3>Son portrait</h3>
                        <p>
                            Une sélection de photographies permettant de
                            découvrir pleinement son apparence.
                        </p>
                    </article>

                    <article>
                        <span>02</span>
                        <h3>Son caractère</h3>
                        <p>
                            Ses habitudes, son tempérament et ce qui le rend
                            véritablement unique.
                        </p>
                    </article>

                    <article>
                        <span>03</span>
                        <h3>Ses informations</h3>
                        <p>
                            Les renseignements essentiels seront ajoutés
                            après validation avec la chatterie.
                        </p>
                    </article>
                </div>
            </div>
        </section>


        <section class="cats-bottom-cta">
            <div>
                <p class="cats-section-eyebrow">
                    Une question ?
                </p>

                <h2>
                    Échangeons autour de
                    <em>nos Maine Coons</em>
                </h2>

                <a href="{{ route('contact') }}">
                    Prendre contact
                    <span aria-hidden="true">↗</span>
                </a>
            </div>
        </section>

    </main>
@endsection
