<header class="site-header" id="site-header">
    <div class="header-top">
        <a href="{{ route('home') }}" class="brand">
            <img
                src="{{ asset('images/logo-icon.png') }}"
                alt=""
                class="brand-logo"
            >

            <span class="brand-copy">
        <span class="brand-name">Le Monde de Talya</span>
        <span class="brand-detail">Chatterie familiale · Isère</span>
    </span>
        </a>

        <button
            class="mobile-menu-button"
            type="button"
            aria-label="Ouvrir le menu"
            aria-expanded="false"
            aria-controls="mobile-navigation"
        >
            <span></span>
            <span></span>
        </button>
    </div>

    <div class="header-bottom">
        <nav class="desktop-navigation" aria-label="Navigation principale">
            <a href="{{ route('home') }}" class="active">Accueil</a>
            <a href="#chatterie">La chatterie</a>
            <a href="#maine-coons">Nos Maine Coons</a>
            <a href="#chatons">Nos chatons</a>
            <a href="#adoption">L’adoption</a>
        </nav>

        <a href="#contact" class="header-contact">
            Prendre contact
            <span aria-hidden="true">↗</span>
        </a>
    </div>

    <nav
        class="mobile-navigation"
        id="mobile-navigation"
        aria-label="Navigation mobile"
    >
        <a href="{{ route('home') }}">Accueil</a>
        <a href="#chatterie">La chatterie</a>
        <a href="#maine-coons">Nos Maine Coons</a>
        <a href="#chatons">Nos chatons</a>
        <a href="#adoption">L’adoption</a>
        <a href="#contact">Prendre contact</a>
    </nav>
</header>
