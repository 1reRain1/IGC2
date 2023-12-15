<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RequestCertificate</title>
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
                <li><a href="{{ asset('home') }}">Home</a></li>
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
    <section class="certificate">
        <div class="container">
            <h2 class="h2title">create your certificate</h2>
            <p class="ptitle">
                Ready to showcase your skills and unlock new opportunities? Fill out
                the form below to start your certificate journey.
            </p>
            <form action="">
                <h3>informations personnelles</h3>
                <label for="name">nom et prénom</label>
                <input type="text" name="name" id="name" placeholder="Mohamed" />
                <label for="">lieu de naissance</label>
                <input type="text" name="name" id="name" placeholder="djelfa" />
                <label for="">date de naissance</label>
                <input type="date" name="name" id="name" placeholder="name" />

                <h3>coordonnées</h3>
                <label for="">email</label>
                <input type="email" name="name" id="name" placeholder="chaibon@gmail.com" />
                <label for="">numéro de téléphone</label>
                <input type="number" name="name" id="name" placeholder="023423424" />
                <h3>informations personnelles</h3>
                <label for="SkillName">nom de la compétence</label>
                <input type="text" name="SkillName" id="SkillName" placeholder="Design" />
                <label for="">charger un CV</label>
                <div class="drop-section">
                    <div class="col">
                        <div class="cloud-icon">
                            <img src="assets/upload_1-512-1744225666.png" alt="" />
                        </div>
                        <span>glisser-déposer ou
                            <span class="file-selector"> choisir un fichier </span>à
                            télécharger</span>
                        <input type="file" class="file-selector-input" multiple />
                    </div>
                    <div class="col">
                        <div class="drop-here">Drop Here</div>
                    </div>
                </div>
                <div class="list-section">
                    <div class="list-title">Uploaded Files</div>
                    <div class="list"></div>
                </div>
                <input type="submit" class="submit btn greenGradient" value="faire une demande" />
            </form>
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