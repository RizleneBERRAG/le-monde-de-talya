<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-main">
            <div class="footer-identity">
                <a href="{{ route('home') }}" class="footer-brand">
                    <img
                        src="{{ asset('images/logo-complet.png') }}"
                        alt="Le Monde de Talya"
                    >
                </a>

                <p>
                    Élevage familial de Maine Coons situé en Isère.
                    Des chatons élevés avec passion, au cœur de notre foyer.
                </p>
            </div>

            <div class="footer-column">
                <p class="footer-column-title">Navigation</p>

                <nav class="footer-navigation" aria-label="Navigation secondaire">
                    <a href="{{ route('home') }}">Accueil</a>
                    <a href="{{ route('chatterie') }}">La chatterie</a>
                    <a href="{{ route('maine-coons') }}">Nos Maine Coons</a>
                    <a href="{{ route('chatons') }}">Nos chatons</a>
                    <a href="{{ route('adoption') }}">L’adoption</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </nav>
            </div>

            <div class="footer-column">
                <p class="footer-column-title">Nous contacter</p>

                <div class="footer-contact">
                    <a href="tel:+33781314625">
                        07 81 31 46 25
                    </a>

                    <a href="mailto:lemondedetalya@gmail.com">
                        lemondedetalya@gmail.com
                    </a>

                    <span>Isère · 38</span>

                    <a
                        href="https://www.facebook.com/profile.php?id=61556003648375"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        Facebook
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>
                © {{ date('Y') }} Le Monde de Talya
            </p>

            <div class="footer-legal">
                <a href="#">Mentions légales</a>
                <a href="#">Confidentialité</a>
            </div>

            <a href="#site-header" class="back-to-top">
                Retour en haut
                <span aria-hidden="true">↑</span>
            </a>
        </div>
    </div>
</footer>
