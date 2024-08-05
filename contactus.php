<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAMUCHI TRANS - Contact</title>

    <!-- favicon-->
    <link rel="shortcut icon" href="./favicon.png" type="image/svg+xml">

    <!--custom css link-->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!--google font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--preload images-->
</head>

<body id="top">

    <!--#HEADER-->
    <?php include_once('./includes/header.php'); ?>
    <main>
        <article>

            <!--- #CONTACT-INFO-->
            <section class="section about" id="about" aria-label="about">
                <div style="text-align: center;">
                    <p class="section-subtitle">CONTACTEZ-NOUS</p>
                    <h2 class="h2 section-title">Visitez nos agences ou contactez-nous dès aujourd'hui</h2>
                    <p class="section-text">
                    </p>
                </div>
                <div id="contact-details">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d809.2764101150141!2d-5.789614673614138!3d35.772781285659505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzXCsDQ2JzIxLjgiTiA1wrA0NycyMi44Ilc!5e0!3m2!1sen!2sma!4v1718401164913!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="details">
                        <h3>Visitez nos agences ou contactez-nous dès aujourd'hui</h3>
                        <h3>Siège social</h3>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Av. d'Espagne, Tanger</p>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <p><a href="mailto:kamuchitrans@gmail.com">kamuchitrans@gmail.com</a></p>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <p><a href="tel:+2126708010729">+212 708010729</a></p>
                            </li>
                            <li>
                                <i class="fa-brands fa-whatsapp"></i>
                                <p><a href="https://wa.me/212708010729">+212 708010729</a></p>
                            </li>
                            <li>
                                <i class="fa-solid fa-clock"></i>
                                <p>Lundi au Vendredi : 08h00 à 17h00</p>
                            </li>
                        </ul>
                    </div>

                </div>


            </section>

            <!-- CONTACT-FORM -->
            <section class="section service" id="service" aria-label="service">
                <div class="cotact-container">
                    <span class="big-circle"></span>
                    <div class="form">
                        <div class="contact-form">
                            <span class="circle one"></span>
                            <span class="circle two"></span>

                            <form id="contactForm" autocomplete="off">
                                <h3 class="title">Contactez-nous</h3>
                                <div class="input-contact-container">
                                    <input type="text" id="name" name="name" class="input" />
                                    <label for="name">Nom d'utilisateur</label>
                                    <span>Nom d'utilisateur</span>
                                </div>
                                <div class="input-contact-container">
                                    <input type="email" id="email" name="email" class="input" />
                                    <label for="email">Email</label>
                                    <span>Email</span>
                                </div>
                                <div class="input-contact-container">
                                    <input type="tel" id="phone" name="phone" class="input" />
                                    <label for="phone">Téléphone</label>
                                    <span>Téléphone</span>
                                </div>
                                <div class="input-contact-container textarea">
                                    <textarea id="message" name="message" class="input"></textarea>
                                    <label for="message">Message</label>
                                    <span>Message</span>
                                </div>


                                <div class="input-contact-container checkbox-container">
                                    <input type="checkbox" id="privacyPolicy" name="privacyPolicy" />
                                    <a href="policy-privacy.php" target="_blank"><label for="privacyPolicy">J'ai lu et accepté la Politique de Confidentialité*</label></a>
                                </div>
                                <div class="input-contact-container checkbox-container">
                                    <input type="checkbox" id="commercialContact" name="commercialContact" />
                                    <label for="commercialContact">Je vous autorise à me contacter par email ou par tout autre moyen à des fins commerciales</label>
                                </div>

                                <!-- Google reCAPTCHA -->
                                <div class="g-recaptcha" data-sitekey="6Le1afopAAAAACU-nK6H5qqQX9qjNtv80d-QJ3K4"></div>
                                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                                <input type="submit" value="Envoyer" class="btn" />

                            </form>

                        </div>
                        <div class="contact-info">
                            <img src="assets/images/blog-1.png" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <style>
                .notification {
                    display: none;
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background-color: #5cb85c;
                    color: white;
                    padding: 15px;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    z-index: 1000;
                    text-align: center;
                }
            </style>
            <div id="notification" class="notification">
                Message sent successfully!
            </div>

            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <script>
                function showNotification(message) {
                    const notification = document.getElementById('notification');
                    notification.textContent = message;
                    notification.style.display = 'block';
                    setTimeout(hideNotification, 3000);
                }

                function hideNotification() {
                    const notification = document.getElementById('notification');
                    notification.style.display = 'none';
                }

                function clearErrors() {
                    const inputs = document.querySelectorAll('.input-contact-container .input, .input-contact-container.textarea .input');
                    inputs.forEach(input => input.classList.remove('error'));
                    const checkboxes = document.querySelectorAll('.input-contact-container.checkbox-container label');
                    checkboxes.forEach(label => label.classList.remove('error'));
                }

                function validateForm() {
                    const name = document.getElementById('name').value.trim();
                    const email = document.getElementById('email').value.trim();
                    const phone = document.getElementById('phone').value.trim();
                    const message = document.getElementById('message').value.trim();
                    const privacyPolicy = document.getElementById('privacyPolicy').checked;

                    let valid = true;

                    if (name === '') {
                        document.getElementById('name').classList.add('error');
                        valid = false;
                    }
                    if (email === '') {
                        document.getElementById('email').classList.add('error');
                        valid = false;
                    }
                    if (phone === '') {
                        document.getElementById('phone').classList.add('error');
                        valid = false;
                    }
                    if (message === '') {
                        document.getElementById('message').classList.add('error');
                        valid = false;
                    }
                    if (!privacyPolicy) {
                        document.querySelector('label[for="privacyPolicy"]').classList.add('error');
                        valid = false;
                    }

                    return valid;
                }

                document.getElementById('contactForm').addEventListener('submit', function(event) {
                    event.preventDefault();

                    hideNotification();
                    clearErrors();

                    if (!validateForm()) {
                        showNotification('Please fill out all required fields.');
                        return;
                    }

                    const recaptchaResponse = grecaptcha.getResponse();
                    if (!recaptchaResponse) {
                        showNotification('Please complete the reCAPTCHA.');
                        return;
                    }

                    document.getElementById('g-recaptcha-response').value = recaptchaResponse;

                    const formData = new FormData(this);

                    fetch('./assets/php/submit_contact.php', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => {
                            if (response.ok) {
                                return response.text();
                            } else {
                                throw new Error('Network response was not ok.');
                            }
                        })
                        .then(data => {
                            showNotification('Message sent successfully!');
                            document.getElementById('contactForm').reset();
                            grecaptcha.reset();
                        })
                        .catch(error => {
                            showNotification('There was an error sending your message.');
                        });
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
                    event.preventDefault(); // Prevent default form submission

                    // Fetch input value
                    var email = document.getElementById('emailAddress').value;

                    // Validate email format
                    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                    if (!emailRegex.test(email)) {
                        showCustomAlert('Veuillez entrer une adresse e-mail valide.');
                        return;
                    }

                    // Prepare XML request
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', './assets/php/subscribe.php', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            // Response handling
                            console.log(xhr.responseText); // Log server response
                            showCustomAlert(xhr.responseText); // Show server response in custom modal
                            document.getElementById('emailAddress').value = ''; // Clear input field
                        }
                    };
                    xhr.send('email=' + encodeURIComponent(email)); // Send data
                });

                // Function to show custom alert modal
                function showCustomAlert(message) {
                    var modal = document.getElementById('customAlertModal');
                    var messageElement = document.getElementById('customAlertMessage');

                    messageElement.textContent = message; // Set the message
                    modal.style.display = 'block'; // Show the modal

                    // Close modal when clicking on close button or OK button
                    document.getElementById('customAlertClose').onclick = closeCustomAlert;
                    document.getElementById('customAlertOkButton').onclick = closeCustomAlert;

                    // Close modal when clicking outside of the modal content
                    window.onclick = function(event) {
                        if (event.target === modal) {
                            closeCustomAlert();
                        }
                    };
                }

                // Function to close custom alert modal
                function closeCustomAlert() {
                    document.getElementById('customAlertModal').style.display = 'none';
                }
            </script>

        </article>
    </main>

    <!-- WhatsApp link-->
    <a href="https://wa.me/212708010729" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!--#FOOTER-->
    <?php include_once './includes/footer.php'; ?>

    <!--#BACK TO TOP-->
    <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
        <ion-icon name="chevron-up"></ion-icon>
    </a>

    <!--custom js link-->
    <script src="./assets/js/script.js" defer></script>

    <!--ionicon link-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>