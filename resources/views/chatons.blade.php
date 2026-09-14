@extends('layouts.app')

@section('title', 'Nos chatons | Le Monde de Talya')

@section(
    'meta_description',
    'Découvrez les chatons et les futures portées de la chatterie Le Monde de Talya.'
)

@push('styles')
    @vite('resources/css/pages/cats.css')
@endpush

@section('content')
    <main class="cats-page kittens-page">

        <section class="kittens-hero">
            <div class="kittens-hero-image-wrapper">
                <img
                    src="{{ asset('images/chatons-hero.jpg') }}"
                    alt="Chaton Maine Coon du Monde de Talya"
                    class="kittens-hero-image"
                >

                <div class="kittens-hero-overlay"></div>
            </div>

            <div class="kittens-hero-content">
                <p class="cats-eyebrow">
                    Le Monde de Talya
                </p>

                <h1>
                    Nos petits
                    <em>trésors</em>
                </h1>

                <p>
                    Retrouvez prochainement les chatons et les futures
                    portées du Monde de Talya.
                </p>
            </div>

            <div class="cats-hero-footer">
                <span>Naissances · Évolution · Adoption</span>
                <span>Chatterie familiale</span>
            </div>
        </section>


        <section class="kittens-status">
            <div class="cats-container">
                <div class="kittens-status-heading">
                    <div>
                        <span class="cats-section-number">01</span>

                        <p class="cats-section-eyebrow">
                            Nos portées
                        </p>
                    </div>

                    <h2>
                        Aucun chaton présenté
                        <em>pour le moment</em>
                    </h2>
                </div>

                <div class="kittens-status-content">
                    <div class="kittens-status-indicator">
                        <span></span>
                        Informations prochainement disponibles
                    </div>

                    <p>
                        Les prochaines portées et les chatons seront ajoutés
                        sur cette page lorsque leurs informations et leurs
                        photographies seront prêtes.
                    </p>

                    <p>
                        Pour recevoir des renseignements ou échanger autour
                        d’un futur projet d’adoption, vous pouvez contacter
                        directement la chatterie.
                    </p>

                    <a href="{{ route('contact') }}" class="cats-button">
                        Être informé
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>
            </div>
        </section>


        <section class="kittens-journey">
            <div class="cats-container">
                <div class="kittens-journey-heading">
                    <span class="cats-section-number">02</span>

                    <p class="cats-section-eyebrow">
                        Leur évolution
                    </p>

                    <h2>
                        Des premières semaines
                        <em>jusqu’à l’adoption</em>
                    </h2>
                </div>

                <div class="kittens-journey-grid">
                    <article>
                        <span class="kittens-journey-number">01</span>
                        <h3>La naissance</h3>
                        <p>
                            Les premières informations et photographies
                            permettront de présenter chaque nouvelle portée.
                        </p>
                    </article>

                    <article>
                        <span class="kittens-journey-number">02</span>
                        <h3>L’évolution</h3>
                        <p>
                            Les portraits évolueront afin de suivre les
                            changements et la personnalité de chaque chaton.
                        </p>
                    </article>

                    <article>
                        <span class="kittens-journey-number">03</span>
                        <h3>La rencontre</h3>
                        <p>
                            Les familles pourront échanger avec la chatterie
                            pour préparer leur projet avec attention.
                        </p>
                    </article>
                </div>
            </div>
        </section>


        <section class="kittens-information">
            <div class="kittens-information-content">
                <span class="cats-section-number">03</span>

                <p class="cats-section-eyebrow">
                    Préparer votre projet
                </p>

                <h2>
                    Une adoption
                    <em>réfléchie</em>
                </h2>

                <p>
                    Accueillir un Maine Coon est un engagement important.
                    Nous prenons le temps d’échanger avec chaque famille
                    afin de mieux comprendre son environnement et ses attentes.
                </p>

                <a href="{{ route('adoption') }}" class="cats-text-link">
                    Découvrir l’adoption
                    <span aria-hidden="true">↗</span>
                </a>
            </div>

            <div class="kittens-information-visual">
                <div class="kittens-information-frame">
                    <span>Le Monde de Talya</span>
                    <strong>Une nouvelle histoire commence ici.</strong>
                </div>
            </div>
        </section>


        <section class="cats-bottom-cta">
            <div>
                <p class="cats-section-eyebrow">
                    Restons en contact
                </p>

                <h2>
                    Vous souhaitez être informé
                    <em>des futures portées ?</em>
                </h2>

                <a href="{{ route('contact') }}">
                    Contacter la chatterie
                    <span aria-hidden="true">↗</span>
                </a>
            </div>
        </section>

    </main>
@endsection
