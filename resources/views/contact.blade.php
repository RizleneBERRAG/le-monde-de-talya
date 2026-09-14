@extends('layouts.app')

@section('title', 'Contact | Le Monde de Talya')

@push('styles')
    @vite('resources/css/pages/contact.css')
@endpush

@section('content')
    <main class="contact-page">

        <section class="contact-hero">
            <img
                src="{{ asset('images/contact-page.png') }}"
                alt="Chaton Maine Coon du Monde de Talya"
                class="contact-hero-image"
            >

            <div class="contact-hero-overlay"></div>

            <div class="contact-hero-content">
                <p class="contact-hero-eyebrow">
                    Le Monde de Talya
                </p>

                <h1>
                    Parlons de votre
                    <em>future rencontre</em>
                </h1>

                <p>
                    Une question sur notre chatterie, nos Maine Coons ou une
                    future portée ? Nous serons ravis d’échanger avec vous.
                </p>
            </div>

            <div class="contact-hero-footer">
                <span>Chatterie familiale</span>
                <span>Isère · 38</span>
            </div>
        </section>

        <section class="contact-main">
            <div class="contact-main-container">

                <aside class="contact-information">
                    <p class="contact-section-number">01</p>

                    <p class="contact-section-eyebrow">
                        Nos coordonnées
                    </p>

                    <h2>
                        Prenons le temps
                        <em>d’échanger</em>
                    </h2>

                    <p class="contact-information-introduction">
                        Chaque projet d’adoption est unique. Vous pouvez nous
                        contacter pour découvrir la chatterie et poser toutes
                        vos questions.
                    </p>

                    <div class="contact-details">
                        <article>
                            <span>Téléphone</span>

                            <a href="tel:+33781314625">
                                07 81 31 46 25
                            </a>
                        </article>

                        <article>
                            <span>Adresse e-mail</span>

                            <a href="mailto:lemondedetalya@gmail.com">
                                lemondedetalya@gmail.com
                            </a>
                        </article>

                        <article>
                            <span>Localisation</span>
                            <p>Isère · 38</p>
                        </article>

                        <article>
                            <span>Réseaux sociaux</span>

                            <a
                                href="https://www.facebook.com/profile.php?id=61556003648375"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                Suivre la chatterie sur Facebook
                                <span aria-hidden="true">↗</span>
                            </a>
                        </article>
                    </div>
                </aside>

                <div class="contact-form-area">
                    <div class="contact-form-heading">
                        <p>Votre message</p>

                        <span>
                            Les champs marqués d’un * sont obligatoires.
                        </span>
                    </div>

                    <form class="contact-form" id="contact-form">
                        <div class="form-row">
                            <div class="form-field">
                                <label for="firstname">Prénom *</label>

                                <input
                                    type="text"
                                    id="firstname"
                                    name="firstname"
                                    placeholder="Votre prénom"
                                    autocomplete="given-name"
                                    required
                                >
                            </div>

                            <div class="form-field">
                                <label for="lastname">Nom *</label>

                                <input
                                    type="text"
                                    id="lastname"
                                    name="lastname"
                                    placeholder="Votre nom"
                                    autocomplete="family-name"
                                    required
                                >
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field">
                                <label for="email">Adresse e-mail *</label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="exemple@email.fr"
                                    autocomplete="email"
                                    required
                                >
                            </div>

                            <div class="form-field">
                                <label for="phone">Téléphone</label>

                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    placeholder="06 00 00 00 00"
                                    autocomplete="tel"
                                >
                            </div>
                        </div>

                        <div class="form-field">
                            <label for="subject">Votre demande *</label>

                            <select id="subject" name="subject" required>
                                <option value="" selected disabled>
                                    Sélectionnez l’objet de votre demande
                                </option>

                                <option value="chaton">
                                    Adopter un chaton
                                </option>

                                <option value="portee">
                                    Être informé d’une future portée
                                </option>

                                <option value="chatterie">
                                    En savoir plus sur la chatterie
                                </option>

                                <option value="autre">
                                    Autre demande
                                </option>
                            </select>
                        </div>

                        <div class="form-field">
                            <label for="message">Message *</label>

                            <textarea
                                id="message"
                                name="message"
                                rows="7"
                                placeholder="Parlez-nous de votre projet et de votre foyer..."
                                required
                            ></textarea>
                        </div>

                        <label class="form-consent">
                            <input
                                type="checkbox"
                                name="privacy"
                                value="1"
                                required
                            >

                            <span>
                                J’accepte que mes informations soient utilisées
                                pour répondre à ma demande.
                            </span>
                        </label>

                        <button type="button" class="contact-submit">
                            Envoyer mon message
                            <span aria-hidden="true">↗</span>
                        </button>

                        <p class="contact-form-notice">
                            L’envoi du formulaire sera activé après validation
                            définitive du site.
                        </p>
                    </form>
                </div>

            </div>
        </section>

    </main>
@endsection
