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
        .faq-container {
            max-width: 600px;
            line-height: 1.6;
            color: #333;
            max-width: 1000px;
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

        .faq-section {
            margin: 20px 0;
        }

        .faq-question {
            background-color: #003366;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .faq-answer {
            display: none;
            padding: 10px;
            border-left: 3px solid #003366;
            background-color: #e6e6e6;
            border-radius: 0 5px 5px 5px;
        }

        #faqmain {
            margin-top: 140px;
        }
    </style>
    <!--préchargement des images-->
</head>

<body id="top" style="
            display: block;
            justify-content: center;
            align-items: center;">

    <!--#EN-TÊTE-->
    <?php include_once('./includes/header.php'); ?>

    <main id="faqmain">
        <div class="faq-container">
            <h1>FAQ - KAMUCHI TRANS</h1>

            <div class="faq-section">
                <div class="faq-question">Comment puis-je réserver un service de transport ?</div>
                <div class="faq-answer">Pour réserver un service de transport, vous pouvez utiliser notre formulaire de réservation en ligne ou nous contacter directement par téléphone ou email.</div>
            </div>

            <div class="faq-section">
                <div class="faq-question">Quels types de véhicules proposez-vous ?</div>
                <div class="faq-answer">Nous proposons une variété de véhicules, y compris des berlines, des SUV, des minibus et des autocars, pour répondre à tous vos besoins de transport.</div>
            </div>

            <div class="faq-section">
                <div class="faq-question">Quels sont vos tarifs ?</div>
                <div class="faq-answer">Nos tarifs varient en fonction du type de service et de la distance. Veuillez consulter notre page de tarifs pour plus de détails ou nous contacter pour un devis personnalisé.</div>
            </div>

            <div class="faq-section">
                <div class="faq-question">Acceptez-vous les réservations de dernière minute ?</div>
                <div class="faq-answer">Oui, nous acceptons les réservations de dernière minute en fonction de la disponibilité. Il est toujours préférable de réserver à l'avance pour garantir la disponibilité du véhicule souhaité.</div>
            </div>

            <div class="faq-section">
                <div class="faq-question">Comment puis-je annuler ou modifier ma réservation ?</div>
                <div class="faq-answer">Pour annuler ou modifier votre réservation, veuillez nous contacter dès que possible. Des frais d'annulation peuvent s'appliquer en fonction des conditions de votre réservation.</div>
            </div>

            <div class="faq-section">
                <div class="faq-question">Quels modes de paiement acceptez-vous ?</div>
                <div class="faq-answer">Nous acceptons divers modes de paiement, y compris les cartes de crédit, les virements bancaires et les paiements en espèces. Veuillez vérifier les options disponibles lors de la réservation.</div>
            </div>

            <div class="faq-section">
                <div class="faq-question">Fournissez-vous des sièges pour enfants ?</div>
                <div class="faq-answer">Oui, nous pouvons fournir des sièges pour enfants sur demande. Veuillez indiquer votre besoin lors de la réservation pour que nous puissions nous assurer de leur disponibilité.</div>
            </div>

            <div class="faq-section">
                <div class="faq-question">Puis-je transporter des animaux de compagnie ?</div>
                <div class="faq-answer">Oui, les animaux de compagnie sont les bienvenus, mais ils doivent être transportés dans des cages ou des conteneurs appropriés. Veuillez nous informer lors de la réservation.</div>
            </div>

            <div class="faq-section">
                <div class="faq-question">Avez-vous des services pour les personnes à mobilité réduite ?</div>
                <div class="faq-answer">Oui, nous offrons des services adaptés aux personnes à mobilité réduite. Veuillez nous informer de vos besoins spécifiques lors de la réservation pour que nous puissions vous offrir le service le plus approprié.</div>
            </div>

            <div class="faq-section">
                <div class="faq-question">Quels sont vos horaires de service ?</div>
                <div class="faq-answer">Nos services sont disponibles 24 heures sur 24, 7 jours sur 7. Cependant, il est recommandé de réserver à l'avance pour garantir la disponibilité du véhicule souhaité.</div>
            </div>
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
