<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAMUCHI TRANS</title>

    <!--favicon-->
    <link rel="shortcut icon" href="./favicon.png" type="image/svg+xml">

    <!--lien CSS personnalisé-->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!--lien Google Fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!--préchargement des images-->
</head>

<body id="top">

    <!--#EN-TÊTE-->
    <?php include_once('./includes/header.php'); ?>

    <main>

        <article>

            <!---#HÉRO-->
            <section class="section hero" aria-label="accueil" id="accueil" style="background-image: url('./assets/images/hero-banner.jpg')">
                <div class="container">

                    <div class="hero-content">

                        <h2 class="h1 hero-title" style="color: #1a81b6;">
                            <span class="span">Vers toutes</span> les destinations.
                        </h2>

                        <p class="hero-text">
                            Facilitons le commerce mondial avec nos services de transport international efficaces et fiables.
                        </p>

                        <a href="index.php#service" class="btn-outline">Voir nos services</a>

                        <img src="./assets/images/hero-shape.png" width="116" height="116" loading="lazy" class="hero-shape shape-1">

                        <img src="./assets/images/hero-shape.png" width="116" height="116" loading="lazy" class="hero-shape shape-2">

                    </div>

                </div>
            </section>

            <!---#À PROPOS-->
            <section class="section about" id="a-propos" aria-label="à-propos">
                <div class="container">

                    <figure class="about-banner img-holder" style="--width: 400; --height: 720;">
                        <img src="./assets/images/about-banner.jpg" width="400" height="720" loading="lazy" alt="" class="img-cover">

                        <img src="./assets/images/about-shape-1.png" width="260" height="170" loading="lazy" alt="" class="abs-img abs-img-1">

                        <img src="./assets/images/about-shape-2.png" width="500" height="500" loading="lazy" alt="" class="abs-img abs-img-2">
                    </figure>

                    <div class="about-content">

                        <p class="section-subtitle">POURQUOI NOUS CHOISIR</p>

                        <h2 class="h2 section-title">
                            Nous sommes une agence de logistique et de transport professionnel.
                        </h2>
                        <p class="section-text">
                            Bienvenue chez KAMUCHI TRANS Solutions, votre partenaire fiable en logistique et expédition pour divers secteurs industriels.
                        </p>

                        <ul class="about-list">

                            <li class="about-item">
                                <div class="about-icon">
                                    <ion-icon name="chevron-forward"></ion-icon>
                                </div>

                                <p class="about-text">
                                    Chez KAMUCHI TRANS Solutions, nous sommes experts en logistique, offrant des solutions complètes pour optimiser votre chaîne d'approvisionnement.
                                </p>
                            </li>

                            <li class="about-item">
                                <div class="about-icon">
                                    <ion-icon name="chevron-forward"></ion-icon>
                                </div>

                                <p class="about-text">
                                    Grâce à notre réseau étendu de partenaires fiables, nous assurons des options flexibles adaptées à vos besoins spécifiques.
                                </p>
                            </li>

                            <li class="about-item">
                                <div class="about-icon">
                                    <ion-icon name="chevron-forward"></ion-icon>
                                </div>

                                <p class="about-text">
                                    Notre équipe d'experts analyse et optimise votre logistique, assurant une coordination efficace de l'enlèvement à la livraison.
                                </p>
                            </li>

                            <li class="about-item">
                                <div class="about-icon">
                                    <ion-icon name="chevron-forward"></ion-icon>
                                </div>

                                <p class="about-text">
                                    Nous nous engageons à fournir un service fiable et de qualité, utilisant des technologies avancées pour surveiller vos expéditions en temps réel.
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
            </section>

            <!---#SERVICE-->
            <section class="section service" id="service" aria-label="service">
                <div class="container">

                    <p class="section-subtitle">NOS SERVICES</p>

                    <h2 class="h2 section-title">Faites confiance à nos services.</h2>

                    <p class="section-text">
                        Nous avons une solide réputation de fiabilité, de qualité et de satisfaction client, garantissant la tranquillité d'esprit et un service exceptionnel.
                    </p>

                    <ul class="service-list grid-list">

                        <li>
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="./assets/images/service-icon-1.png" width="80" height="60" loading="lazy" alt="Camion">
                                </div>

                                <h3 class="h3 card-title">
                                    <span class="span">01</span> LOGISTIQUES
                                </h3>

                                <p class="card-text">
                                    Nous visons à optimiser les intermédiaires logistiques pour vous offrir un service de premier ordre.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="./assets/images/service-icon-2.png" width="74" height="60" loading="lazy" alt="Bateau">
                                </div>

                                <h3 class="h3 card-title">
                                    <span class="span">02</span> CONTRÔLE PORTUAIRE
                                </h3>

                                <p class="card-text">
                                    Nous visons à améliorer le contrôle portuaire pour vous offrir un service optimal et de haute qualité.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="./assets/images/service-icon-3.png" width="60" height="60" loading="lazy" alt="Avion">
                                </div>

                                <h3 class="h3 card-title">
                                    <span class="span">03</span> ACHAT ET VENTE
                                </h3>

                                <p class="card-text">
                                    Notre objectif est d'optimiser et d'améliorer l'achat et la vente afin de vous offrir le meilleur service.
                                </p>
                            </div>
                        </li>
                    </ul>

                </div>
            </section>

            <!---#Destinations-->
            <section class="logistic-connections" id="destinations">
                <h2>NOS DESTINATIONS</h2>
                <div class="connections-container">
                    <div class="connection">
                        <span class="icon"><img src="./assets/images/destination.png" alt=""></span>
                        <p>Maroc 🔁 Autriche</p>
                    </div>
                    <div class="connection">
                        <span class="icon"><img src="./assets/images/destination.png" alt=""></span>
                        <p>Maroc 🔁 Allemagne</p>
                    </div>
                    <div class="connection">
                        <span class="icon"><img src="./assets/images/destination.png" alt=""></span>
                        <p>Maroc 🔁 Pays-Bas</p>
                    </div>
                    <div class="connection">
                        <span class="icon"><img src="./assets/images/destination.png" alt=""></span>
                        <p>Maroc 🔁 Espagne</p>
                    </div>
                    <div class="connection">
                        <span class="icon"><img src="./assets/images/destination.png" alt=""></span>
                        <p>Maroc 🔁 Portugal</p>
                    </div>
                </div>
            </section>

            <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
            <script>
                var map = L.map('map').setView([31.7917, -7.0926], 5); // Coordonnées du Maroc

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                var destinations = [{
                        coords: [47.5162, 14.5501],
                        country: 'Autriche'
                    },
                    {
                        coords: [51.1657, 10.4515],
                        country: 'Allemagne'
                    },
                    {
                        coords: [52.1326, 5.2913],
                        country: 'Pays-Bas'
                    },
                    {
                        coords: [40.4637, -3.7492],
                        country: 'Espagne'
                    },
                    {
                        coords: [39.3999, -8.2245],
                        country: 'Portugal'
                    }
                ];

                destinations.forEach(function(destination) {
                    L.marker(destination.coords).addTo(map)
                        .bindPopup('Maroc ➡ ' + destination.country);
                });
            </script>

            <!--#NEWSLETTER-->
            <section class="section newsletter" aria-label="newsletter">
                <div class="container">
                    <figure class="newsletter-banner img-holder">
                        <img src="./assets/images/newsletter-banner.png" width="303" height="381" alt="bannière de newsletter" class="w-100">
                    </figure>

                    <div class="newsletter-content">
                        <h2 class="h2 section-title">Abonnez-vous pour des offres et des actualités</h2>

                        <form id="newsletterForm" class="newsletter-form">
                            <input type="email" name="email_address" id="emailAddress" placeholder="Entrez votre adresse e-mail" aria-label="email" class="email-field" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                            <button type="submit" class="newsletter-btn">S'abonner maintenant</button>
                        </form>
                    </div>
                </div>
            </section>
            <!-- Custom Alert Modal -->
            <div id="customAlertModal" class="custom-alert-modal">
                <div class="custom-alert-content">
                    <span class="custom-alert-close" id="customAlertClose">&times;</span>
                    <p id="customAlertMessage"></p>
                    <button id="customAlertOkButton" class="custom-alert-btn">OK</button>
                </div>
            </div>
            <script>
                document.getElementById('newsletterForm').addEventListener('submit', function(event) {
                    event.preventDefault(); // Empêche l'envoi du formulaire par défaut

                    // Récupère la valeur de l'input
                    var email = document.getElementById('emailAddress').value;

                    // Valide le format de l'e-mail
                    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                    if (!emailRegex.test(email)) {
                        showCustomAlert('Veuillez entrer une adresse e-mail valide.');
                        return;
                    }

                    // Prépare la requête XML
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', './assets/php/subscribe.php', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            // Gestion de la réponse
                            console.log(xhr.responseText); // Affiche la réponse du serveur dans la console
                            showCustomAlert(xhr.responseText); // Affiche la réponse du serveur dans une modale personnalisée
                            document.getElementById('emailAddress').value = ''; // Vide le champ de saisie
                        }
                    };
                    xhr.send('email=' + encodeURIComponent(email)); // Envoie des données
                });

                // Fonction pour afficher une alerte personnalisée
                function showCustomAlert(message) {
                    var modal = document.getElementById('customAlertModal');
                    var messageElement = document.getElementById('customAlertMessage');

                    messageElement.textContent = message; // Définit le message
                    modal.style.display = 'block'; // Affiche la modale

                    // Ferme la modale en cliquant sur le bouton de fermeture ou le bouton OK
                    document.getElementById('customAlertClose').onclick = closeCustomAlert;
                    document.getElementById('customAlertOkButton').onclick = closeCustomAlert;

                    // Ferme la modale en cliquant à l'extérieur du contenu de la modale
                    window.onclick = function(event) {
                        if (event.target === modal) {
                            closeCustomAlert();
                        }
                    };
                }

                // Fonction pour fermer la modale d'alerte personnalisée
                function closeCustomAlert() {
                    document.getElementById('customAlertModal').style.display = 'none';
                }
            </script>


        </article>
    </main>

    <!--#PIED DE PAGE-->
    <?php include_once './includes/footer.php'; ?>

    <!-- Lien WhatsApp -->
    <a href="https://wa.me/212708010729" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!--#RETOUR EN HAUT-->
    <a href="#top" class="back-top-btn" aria-label="Retour en haut" data-back-top-btn>
        <ion-icon name="chevron-up"></ion-icon>
    </a>

    <!--lien JS personnalisé-->
    <script src="./assets/js/script.js" defer></script>

    <!--lien ionicon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
