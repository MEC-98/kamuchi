<footer class="footer">
    <div class="container">

        <div class="footer-top section">

            <div class="footer-brand">

                <a href="index.php#home" class="logo">KAMUCHI TRANS</a>
                <div id="fcontact-details">
                    <div class="fdetails">
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Av. d'Espagne, Tanger</p>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <p><a href="mailto:Info@kamuchi.ma">Info@kamuchi.ma</a></p>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <p><a href="tel:+212708010729">+212 708010729</a></p>
                            </li>
                            <li>
                                <i class="fa-brands fa-whatsapp"></i>
                                <p><a href="https://wa.me/212708010729">+212 708010729</a></p>
                            </li>
                            <li>
                                <i class="fa-solid fa-clock"></i>
                                <p>Du lundi au vendredi :<br>08h00 à 17h00</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <ul class="footer-list">

                <li>
                    <p class="footer-list-title">Liens rapides</p>
                </li>

                <li>
                    <a href="index.php#about" class="footer-link">À propos</a>
                </li>

                <li>
                    <a href="index.php#service" class="footer-link">Services</a>
                </li>

                <li>
                    <a href="contactus.php" class="footer-link">Contactez-nous</a>
                </li>

                <li>
                    <a href="index.php#destinations" class="footer-link">Destinations</a>
                </li>

            </ul>

            <ul class="footer-list">

                <li>
                    <p class="footer-list-title">Autres Liens</p>
                </li>

                <li>
                    <a href="policy-privacy.php" class="footer-link">Politique de confidentialité</a>
                </li>

                <li>
                    <a href="faq.php" class="footer-link">FAQ</a>
                </li>

                <li>
                    <a href="Politique_de_cookies.php" class="footer-link">Politique de cookies</a>
                </li>

            </ul>

        </div>

        <div class="footer-bottom">
            <center>
                <p class="copyright">
                    &copy; <span id="year-range"></span> KAMUCHI TRANS.
                </p>
            </center>
        </div>

        <script>
            // JavaScript pour définir dynamiquement la plage d'années
            //const yearOfCreation = 2024;
            const currentYear = new Date().getFullYear();
            const yearRange = ( /*yearOfCreation === */ currentYear) /*? yearOfCreation : `${yearOfCreation} - ${currentYear}`*/ ;
            document.getElementById('year-range').textContent = yearRange;
        </script>

    </div>
</footer>
