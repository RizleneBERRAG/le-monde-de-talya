@extends('layouts.app')

@section('title', 'L’adoption | Le Monde de Talya')

@section(
    'meta_description',
    'Découvrez le parcours d’adoption des chatons Maine Coon du Monde de Talya, de la première prise de contact jusqu’à leur arrivée dans leur famille.'
)

@push('styles')
    @vite('resources/css/pages/adoption.css')
@endpush

@section('content')
    <main class="adoption-page">

        <section class="adoption-hero">
            <div class="adoption-hero-glow" aria-hidden="true"></div>

            <div class="adoption-hero-container">
                <div class="adoption-hero-content">
                    <p class="adoption-eyebrow">Le Monde de Talya</p>

                    <h1>
                        Une adoption
                        <em>pensée pour la vie</em>
                    </h1>

                    <p class="adoption-hero-description">
                        Accueillir un Maine Coon est une décision importante.
                        Nous prenons le temps de connaître chaque famille pour
                        préparer une rencontre juste, sereine et durable.
                    </p>

                    <a href="#parcours-adoption" class="adoption-hero-link">
                        Découvrir le parcours
                        <span aria-hidden="true">↓</span>
                    </a>
                </div>

                <div class="adoption-hero-signature" aria-hidden="true">
                    <div class="adoption-hero-emblem">
                        <img src="{{ asset('images/logo-icon.png') }}" alt="">
                    </div>

                    <p>Une rencontre</p>
                    <strong>pour toute une vie</strong>
                    <span>Isère · 38</span>
                </div>
            </div>

            <div class="adoption-hero-footer">
                <span>Écoute · Confiance · Accompagnement</span>
                <span>Chatterie familiale</span>
            </div>
        </section>


        <section class="adoption-introduction">
            <div class="adoption-container adoption-introduction-grid">
                <div class="adoption-section-heading">
                    <span class="adoption-section-number">01</span>
                    <p class="adoption-section-eyebrow">Notre engagement</p>

                    <h2>
                        Trouver la famille
                        <em>qui lui correspond</em>
                    </h2>
                </div>

                <div class="adoption-introduction-copy">
                    <p class="adoption-lead">
                        Nous ne cherchons pas simplement un foyer, mais un cadre
                        de vie adapté au caractère et aux besoins de chaque chaton.
                    </p>

                    <p>
                        Votre quotidien, vos attentes et votre expérience avec les
                        animaux nous aident à mieux comprendre votre projet. Cet
                        échange permet de construire une adoption réfléchie, dans
                        l’intérêt du chaton comme de sa future famille.
                    </p>

                    <p>
                        Nous restons disponibles pour répondre à vos questions
                        avant la rencontre, pendant la préparation et après
                        l’arrivée de votre compagnon.
                    </p>
                </div>
            </div>
        </section>


        <section class="adoption-journey" id="parcours-adoption">
            <div class="adoption-container">
                <div class="adoption-journey-heading">
                    <div>
                        <span class="adoption-section-number">02</span>
                        <p class="adoption-section-eyebrow">Le parcours</p>
                    </div>

                    <h2>
                        Quatre étapes pour
                        <em>préparer son arrivée</em>
                    </h2>
                </div>

                <div class="adoption-steps">
                    <article class="adoption-step">
                        <span class="adoption-step-number">01</span>
                        <div>
                            <h3>Premier échange</h3>
                            <p>
                                Vous nous présentez votre foyer, votre rythme de vie
                                et ce que vous recherchez chez votre futur compagnon.
                            </p>
                        </div>
                    </article>

                    <article class="adoption-step">
                        <span class="adoption-step-number">02</span>
                        <div>
                            <h3>Faire connaissance</h3>
                            <p>
                                Nous échangeons autour des chatons et de leur
                                personnalité afin de vous orienter avec sincérité.
                            </p>
                        </div>
                    </article>

                    <article class="adoption-step">
                        <span class="adoption-step-number">03</span>
                        <div>
                            <h3>Préparer l’accueil</h3>
                            <p>
                                Nous vous accompagnons dans les préparatifs :
                                environnement, alimentation, sécurité et premiers jours.
                            </p>
                        </div>
                    </article>

                    <article class="adoption-step">
                        <span class="adoption-step-number">04</span>
                        <div>
                            <h3>Le grand départ</h3>
                            <p>
                                Le départ est organisé au moment adapté, avec les
                                informations utiles pour assurer une transition douce.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>


        <section class="adoption-prepare">
            <div class="adoption-prepare-panel">
                <span class="adoption-section-number">03</span>
                <p class="adoption-section-eyebrow">Avant son arrivée</p>

                <h2>
                    Un foyer prêt à
                    <em>l’accueillir</em>
                </h2>

                <p>
                    Quelques préparatifs simples permettent au chaton de découvrir
                    son nouvel environnement en douceur et en toute sécurité.
                </p>

                <a href="{{ route('contact') }}" class="adoption-text-link">
                    Poser une question
                    <span aria-hidden="true">↗</span>
                </a>
            </div>

            <div class="adoption-checklist">
                <article>
                    <span>01</span>
                    <div>
                        <h3>Un espace rassurant</h3>
                        <p>
                            Prévoir une pièce calme ou un espace délimité pour ses
                            premiers repères, avec couchage et cachettes.
                        </p>
                    </div>
                </article>

                <article>
                    <span>02</span>
                    <div>
                        <h3>Le nécessaire au quotidien</h3>
                        <p>
                            Gamelles, litière, griffoir, caisse de transport et jeux
                            adaptés doivent être installés avant son arrivée.
                        </p>
                    </div>
                </article>

                <article>
                    <span>03</span>
                    <div>
                        <h3>Un logement sécurisé</h3>
                        <p>
                            Fenêtres, balcons, plantes et petits objets demandent une
                            attention particulière pour éviter les accidents.
                        </p>
                    </div>
                </article>

                <article>
                    <span>04</span>
                    <div>
                        <h3>Du temps et de la patience</h3>
                        <p>
                            Chaque chaton s’adapte à son rythme. Une présence calme
                            et des habitudes stables facilitent la transition.
                        </p>
                    </div>
                </article>
            </div>
        </section>


        <section class="adoption-departure">
            <div class="adoption-container adoption-departure-grid">
                <div class="adoption-departure-heading">
                    <span class="adoption-section-number">04</span>
                    <p class="adoption-section-eyebrow">Le jour du départ</p>

                    <h2>
                        Toutes les informations
                        <em>pour bien commencer</em>
                    </h2>
                </div>

                <div class="adoption-departure-card">
                    <p>
                        Les éléments précis remis avec le chaton sont confirmés
                        directement avec la chatterie selon sa portée, son âge et
                        sa situation.
                    </p>

                    <ul>
                        <li>
                            <span aria-hidden="true">✓</span>
                            Ses habitudes et son alimentation
                        </li>
                        <li>
                            <span aria-hidden="true">✓</span>
                            Les documents liés au chaton
                        </li>
                        <li>
                            <span aria-hidden="true">✓</span>
                            Les informations de santé disponibles
                        </li>
                        <li>
                            <span aria-hidden="true">✓</span>
                            Nos conseils pour les premiers jours
                        </li>
                        <li>
                            <span aria-hidden="true">✓</span>
                            Un contact après son arrivée
                        </li>
                    </ul>

                    <p class="adoption-departure-note">
                        Les modalités définitives sont communiquées avant toute
                        réservation afin que chaque famille puisse s’engager en
                        étant pleinement informée.
                    </p>
                </div>
            </div>
        </section>


        <section class="adoption-faq">
            <div class="adoption-container adoption-faq-grid">
                <div class="adoption-faq-heading">
                    <span class="adoption-section-number">05</span>
                    <p class="adoption-section-eyebrow">Questions fréquentes</p>

                    <h2>
                        Avant de
                        <em>vous lancer</em>
                    </h2>
                </div>

                <div class="adoption-faq-list">
                    <details>
                        <summary>
                            Comment manifester mon intérêt pour un chaton ?
                            <span aria-hidden="true">+</span>
                        </summary>
                        <p>
                            Contactez-nous en nous présentant brièvement votre foyer
                            et votre projet. Nous reviendrons vers vous pour échanger
                            plus précisément.
                        </p>
                    </details>

                    <details>
                        <summary>
                            Puis-je choisir uniquement sur une photographie ?
                            <span aria-hidden="true">+</span>
                        </summary>
                        <p>
                            L’apparence compte, mais le caractère et le mode de vie
                            de la famille sont essentiels. Nous vous accompagnons
                            pour rechercher la meilleure compatibilité.
                        </p>
                    </details>

                    <details>
                        <summary>
                            À quel moment un chaton peut-il rejoindre sa famille ?
                            <span aria-hidden="true">+</span>
                        </summary>
                        <p>
                            Le départ dépend de son développement et des conditions
                            définies par la chatterie. La date exacte est confirmée
                            individuellement avec chaque famille.
                        </p>
                    </details>

                    <details>
                        <summary>
                            Restez-vous disponible après l’adoption ?
                            <span aria-hidden="true">+</span>
                        </summary>
                        <p>
                            Oui. Nous tenons à conserver un échange avec les familles
                            et restons disponibles pour les accompagner après le départ.
                        </p>
                    </details>
                </div>
            </div>
        </section>


        <section class="adoption-contact">
            <div class="adoption-contact-content">
                <p class="adoption-section-eyebrow">Votre projet commence ici</p>

                <h2>
                    Prêts à écrire
                    <em>une nouvelle histoire ?</em>
                </h2>

                <p>
                    Présentez-nous votre foyer et vos attentes. Nous prendrons le
                    temps de vous répondre et de vous guider dans votre démarche.
                </p>

                <a href="{{ route('contact') }}">
                    Parler de votre projet
                    <span aria-hidden="true">↗</span>
                </a>
            </div>
        </section>

    </main>
@endsection
