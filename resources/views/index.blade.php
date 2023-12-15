<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IGC Certificate</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
</head>

<body>
    <header>
        <div class="container">
            <a class="logo" href="{{ asset('home') }}">loogoo</a>
            <ul id="nav__items" class="nav__items">
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <div class="buttons">
                <button class="sign-in btn">Log In</button>
                <button class="sign-up btn">Sign Up</button>
            </div>
            <div id="open__items-btn" class="active">
                <span>|</span>
                <span>|</span>
            </div>
        </div>
    </header>
    <section class="landingPage">
        <div class="container">
            <h1>IGC Certificate</h1>
            <p>
                Débloquez de nouvelles opportunités avec notre certificat, mettez en
                valeur votre savoir-faire et votre expertise auprès du monde entier.
            </p>
            <button class="btn greenGradient">
                <a href="{{ asset('RequestCertificate') }}">Créez votre certificat</a>
            </button>
            <div class="landingPage__images">
                <img src="assets/1.png" data-number="1" />
                <img src="assets/2.png" data-number="2" />
                <img src="assets/3.png" data-number="3" />
            </div>
        </div>
    </section>
    <section class="whyUs">
        <div class="container">
            <div class="image">
                <img src="assets/3.png" alt="" />
            </div>
            <div class="content">
                <h1>Pourquoi choisir notre certificat ?</h1>
                <p>
                    Faites progresser votre carrière avec IGC - certification rapide,
                    reconnaissance immédiate. Notre processus sans accroc propulse vos
                    compétences vers l’avant.
                </p>
                <ul>
                    <li>Ouvert à tous</li>
                    <li>Digne de confiance</li>
                    <li>Réelle appréciation</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="howWorks">
        <div class="container">
            <h2 class="h2title">Comment ça fonctionne?</h2>
            <p class="ptitle">
                Suivez ces étapes simples pour obtenir votre certificat:
            </p>
            <div class="steps">
                <div class="step">
                    <span>1</span>
                    <h3>appliquer</h3>
                    <p>
                        remplissez le formulaire avec vos coordonnées et vos compétences
                    </p>
                </div>
                <div class="step">
                    <span>2</span>
                    <h3>soumettre</h3>
                    <p>
                        fournissez votre CV pour nous aider à mieux comprendre vos
                        qualifications.
                    </p>
                </div>
                <div class="step">
                    <span>3</span>
                    <h3>revoir</h3>
                    <p>notre équipe évaluera votre candidature et vos compétences.</p>
                </div>
                <div class="step">
                    <span>4</span>
                    <h3>recevoir</h3>
                    <p>si approuvé, vous recevrez votre certificat par e-mail.</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="accounts">
                <a href=""><img src="assets/file_pdf_document-4096-1165017167.png" alt="" /></a>
                <a href=""><img src="assets/file_pdf_document-4096-1165017167.png" alt="" /></a>
                <a href=""><img src="assets/file_pdf_document-4096-1165017167.png" alt="" /></a>
            </div>
            <div class="logo">
                <a href="{{ asset('home') }}">logo</a>
            </div>
            <a class="contactUs" href="">Contactez-nous</a>
        </div>
    </footer>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>