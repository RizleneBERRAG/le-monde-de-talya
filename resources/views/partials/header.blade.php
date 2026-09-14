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
                <span class="brand-detail">
                    Chatterie familiale · Isère
                </span>
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
        <nav
            class="desktop-navigation"
            aria-label="Navigation principale"
        >
            <a
                href="{{ route('home') }}"
                class="{{ request()->routeIs('home') ? 'active' : '' }}"
            >
                Accueil
            </a>

            <a
                href="{{ route('chatterie') }}"
                class="{{ request()->routeIs('chatterie') ? 'active' : '' }}"
            >
                La chatterie
            </a>

            <a
                href="{{ route('maine-coons') }}"
                class="{{ request()->routeIs('maine-coons') ? 'active' : '' }}"
            >
                Nos Maine Coons
            </a>

            <a
                href="{{ route('chatons') }}"
                class="{{ request()->routeIs('chatons') ? 'active' : '' }}"
            >
                Nos chatons
            </a>

            <a
                href="{{ route('adoption') }}"
                class="{{ request()->routeIs('adoption') ? 'active' : '' }}"
            >
                L’adoption
            </a>
        </nav>

        <a
            href="{{ route('contact') }}"
            class="header-contact {{ request()->routeIs('contact') ? 'active' : '' }}"
        >
            Prendre contact
            <span aria-hidden="true">↗</span>
        </a>
    </div>

    <nav
        class="mobile-navigation"
        id="mobile-navigation"
        aria-label="Navigation mobile"
    >
        <a
            href="{{ route('home') }}"
            class="{{ request()->routeIs('home') ? 'active' : '' }}"
        >
            Accueil
        </a>

        <a
            href="{{ route('chatterie') }}"
            class="{{ request()->routeIs('chatterie') ? 'active' : '' }}"
        >
            La chatterie
        </a>

        <a
            href="{{ route('maine-coons') }}"
            class="{{ request()->routeIs('maine-coons') ? 'active' : '' }}"
        >
            Nos Maine Coons
        </a>

        <a
            href="{{ route('chatons') }}"
            class="{{ request()->routeIs('chatons') ? 'active' : '' }}"
        >
            Nos chatons
        </a>

        <a
            href="{{ route('adoption') }}"
            class="{{ request()->routeIs('adoption') ? 'active' : '' }}"
        >
            L’adoption
        </a>

        <a
            href="{{ route('contact') }}"
            class="{{ request()->routeIs('contact') ? 'active' : '' }}"
        >
            Contact
        </a>
    </nav>
</header>
