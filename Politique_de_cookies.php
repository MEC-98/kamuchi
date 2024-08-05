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
    <style>
        .cookies-container {
            max-width: 600px;
            line-height: 1.6;
            color: #333;
            margin: 150px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #0066cc;
        }

        h2 {
            color: #003366;
            margin-top: 20px;
        }

        p {
            text-align: justify;
        }

        #faqmain {
            margin-top: 140px;
        }
    </style>
    <!--préchargement des images-->
</head>

<body id="top" style="display: block; justify-content: center; align-items: center;">

    <!--#EN-TÊTE-->
    <?php include_once('./includes/header.php'); ?>

    <main id="faqmain">
        <div class="cookies-container">
            <h1>Politique de cookies - KAMUCHI TRANS</h1>
            <h2>Objet</h2>
            <p>L’objectif de cette politique est de vous informer de l’utilisation de cookies sur ce site web conformément aux dispositions de la législation sur les services de la société de l’information et du commerce électronique.</p>

            <h2>Que sont les cookies et à quoi servent-ils ?</h2>
            <p>Les cookies sont des fichiers ou des fichiers texte qu’un serveur web génère et stocke sur l’ordinateur/smartphone/tablette d’un utilisateur (ci-après ordinateur) lors de l’accès à certaines pages web, pour stocker et récupérer des informations sur la navigation effectuée par l’utilisateur à partir dudit ordinateur. Ils peuvent également consister en un code permettant d’identifier sans équivoque l’Utilisateur lors de la navigation. Par conséquent, les cookies peuvent stocker des informations sur l’ordinateur d’un utilisateur ou sur ses sessions de navigation sur les sites Web qu’il a visités, telles que la page qu’il visite, le temps passé sur Internet et d’autres données selon le type de cookie.</p>

            <p>En bref, l’utilisation de cookies lors de la navigation sur le site web nous permet d’obtenir des informations relatives à la navigation des utilisateurs ; améliorer l’expérience utilisateur dans la navigation ; de collecter des statistiques sur l’utilisation du Site par l’Utilisateur et d’autres informations telles que le navigateur utilisé par l’Utilisateur, le nombre de pages visitées, le nombre de visites, le suivi des mouvements de l’Utilisateur sur un site Web, le temps passé sur le Site ou sur une page spécifique, le remplissage ou le vidage du panier et d’autres informations ; géolocaliser l’Utilisateur en géolocalisant l’appareil connecté (informations régionales et éventuellement données de localité dans certains pays) ; mesurer l’efficacité de ses campagnes d’emailing et améliorer les fonctionnalités du service pour des segments spécifiques d’utilisateurs et en particulier d’abonnés en recevant des communications électroniques, commerciales, publicitaires et newsletters ; de savoir si les destinataires des communications publicitaires commerciales électroniques et des newsletters ont procédé à l’ouverture de ces communications et à l’utilisation des liens qu’elles contiennent pour chacun des destinataires, comme le fait de cliquer sur les liens contenus dans les e-mails, et de pouvoir préparer des rapports de suivi de campagne avec les informations collectées.</p>

            <p>Ce site web utilise des cookies, à la fois les siens et ceux de tiers. Par la suite, l’utilisateur peut trouver des informations spécifiques à leur sujet.</p>

            <h2>Comment l’utilisation de cookies sur notre site web est-elle autorisée ?</h2>
            <p>En ce qui concerne l’utilisation de cookies sur ce site web, l’utilisateur doit savoir qu’il autorise et consent à l’utilisation de cookies de la manière suivante :</p>

            <p>Vous acceptez l’utilisation des cookies utilisés sur ce site web aux fins indiquées dans la présente politique en cochant ou en cliquant sur l’avis d’ACCEPTATION qui est publié dans la première couche d’information.</p>

            <p>Dans tous les cas, malgré l’acceptation initiale de l’utilisation de cookies lors de la navigation sur notre site web, l’utilisateur peut révoquer son consentement à tout moment, en désactivant et en refusant leur utilisation, comme expliqué dans la section correspondante de la présente politique.</p>

            <p>Dans tous les cas, l’utilisateur a le contrôle sur les cookies, car ils sont stockés dans le navigateur des ordinateurs qu’il utilise. Par conséquent, à tout moment, l’utilisateur peut les lire, les filtrer, les rejeter et les supprimer.</p>
        </div>

        <script>
            document.querySelectorAll('.faq-question').forEach(question => {
                question.addEventListener('click', () => {
                    const answer = question.nextElementSibling;
                    if (answer.style.display === 'block') {
                        answer.style.display = 'none';
                    } else {
                        document.querySelectorAll('.faq-answer').forEach(a => a.style.display = 'none');
                        answer.style.display = 'block';
                    }
                });
            });
        </script>

    </main>

    <!--#PIED DE PAGE-->
    <?php include_once './includes/footer.php'; ?>

    <!-- Lien WhatsApp -->
    <a href="https://wa.me/212698416197" class="whatsapp-float" target="_blank">
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
