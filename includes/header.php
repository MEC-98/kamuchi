<header class="header <?php echo in_array(basename($_SERVER['PHP_SELF']), ['faq.php', 'Politique_de_cookies.php', 'policy-privacy.php', 'contactus.php']) ? 'active' : ''; ?>" data-header>
    <div class="container">

        <h1>
            <a href="index.php" class="logo">KAMUCHI TRANS</a>
        </h1>

        <nav class="navbar" data-navbar>

            <div class="navbar-top">
                <a href="index.php" class="logo">KAMUCHI TRANS</a>

                <button class="nav-close-btn" aria-label="Fermer le menu" data-nav-toggler>
                    <ion-icon name="close-outline"></ion-icon>
                </button>
            </div>

            <ul class="navbar-list">
                <li class="navbar-item">
                    <a href="index.php#home" class="navbar-link" data-nav-link>
                        <span>Accueil</span>
                        <ion-icon name="chevron-forward"></ion-icon>
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="index.php#about" class="navbar-link" data-nav-link>
                        <span>À propos</span>
                        <ion-icon name="chevron-forward"></ion-icon>
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="index.php#service" class="navbar-link" data-nav-link>
                        <span>Services</span>
                        <ion-icon name="chevron-forward"></ion-icon>
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="contactus.php" class="navbar-link" data-nav-link>
                        <span>Contact</span>
                        <ion-icon name="chevron-forward"></ion-icon>
                    </a>
                </li>
            </ul>

        </nav>

        <div class="header-contact">

            <div>
                <p class="contact-label">Appelez-nous</p>

                <a href="tel:+212708010729" class="contact-number">+212 708010729</a>
            </div>

            <div class="contact-icon">
                <ion-icon name="call-outline"></ion-icon>
            </div>

        </div>

        <button class="nav-open-btn" aria-label="Ouvrir le menu" data-nav-toggler>
            <ion-icon name="menu-outline"></ion-icon>
        </button>

        <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
</header>
