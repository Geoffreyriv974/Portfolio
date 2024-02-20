<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Geoffrey Riviere</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
<header id="header">
    <div class="site">
        <ul class="menu">
            <li><a href="#header" class="nav-link">Accueil</a></li>
            <li><a href="#partie2" class="nav-link">Compétences</a></li>
            <li><a href="#partie3" class="nav-link">Projets</a></li>
            <li><a href="#partie4" class="nav-link">Éxpériences</a></li>
            <li><a href="contact.php" class="nav-link">Contacter</a></li>
        </ul>
        <div class="menu-burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <img src="image/bussiness-man.png" alt="mon visage" id="my">
    <div id="my_name">
        <h1>Geoffrey Riviere</h1>
        <h2>Développeur Web</h2>
    </div>
</header>
<main>
    <section id="partie1">
        <div class="mes_sites">
            <a href="https://www.linkedin.com/in/geoffrey-riviere-078468259?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BUjs7yZodSPyhghOz0DosZQ%3D%3D">
                <img src="image/linkedin.png" alt="linkrdin" width="75" height="75" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
            </a>
            <a href="Papier/Geoffrey_Riviere_CV.pdf">
                <img src="image/cv.png" alt="mon visage" width="75" height="75" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
            </a>
            <a href="https://github.com/Geoffreyriv974">
                <img src="image/github.png" alt="github" width="75" height="75" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
            </a>
        </div>
    </section>
    <section id="partie2">
        <h1 class="name_partie"><strong>Mes compétences</strong></h1>
        <div class="case_competence">
            <div class="card_page" style="width: 18rem;">
                <img src="image/web.png" class="img_comp" alt="web">
                <div class="card-body card_comp">
                    <h5 class="card-title">Web</h5>
                    <ul class="text_overlay">
                        <li><strong><span class="color_orange">HTML</span></strong></li>
                        <li><strong><span class="color_blue">CSS</span></strong></li>
                        <li><strong><span class="color_purple">PHP</span></strong></li>
                        <li><strong><span class="color_red">UI/UX</span></strong></li>
                    </ul>
                </div>
            </div>
            <div class="card_page" style="width: 18rem;">
                <img src="image/binary-code.png" class="img_comp" alt="python">
                <div class="card-body card_comp">
                    <h5 class="card-title">Programmation</h5>
                    <ul class="text_overlay">
                        <li><strong><span class="color_yellow">Python/Tkinter</span></strong></li>
                        <li><strong><span class="color_blue">C/C++</span></strong></li>
                        <li><strong><span class="color_brown">SQL</span></strong></li>
                        <li><strong><span class="color_red">UML</span></strong></li>
                        <li><strong><span class="color_green">API</span></strong></li>
                    </ul>
                </div>
            </div>
            <div class="card_page" style="width: 18rem;">
                <img src="image/internet.png" class="img_comp" alt="réseaux">
                <div class="card-body card_comp">
                    <h5 class="card-title">Réseaux</h5>
                    <ul class="text_overlay">
                        <li><strong><span class="color_blue">Cisco</span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="case_competence">
            <div class="card_page" style="width: 18rem;">
                <img src="image/content-management-system.png" class="img_comp" alt="windows">
                <div class="card-body card_comp">
                    <h5 class="card-title">Système</h5>
                    <ul class="text_overlay">
                        <li><strong><span class="color_blue">Windows serveur</span></strong></li>
                        <li><strong><span class="color_brown">Linux</span></strong></li>
                    </ul>
                </div>
            </div>
            <div class="card_page" style="width: 18rem;">
                <img src="image/soutien-technique.png" class="img_comp" alt="outils">
                <div class="card-body card_comp">
                    <h5 class="card-title">Outils</h5>
                    <ul class="text_overlay">
                            <li><strong><span class="color_red">Figma</span></strong></li>
                            <li><strong><span class="color_blue">Packet Tracer</span></strong></li>
                            <li><strong><span class="color_orange">VmWare</span></strong></li>
                        <li><strong><span class="color_brown">JetBrains</span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="partie3">
        <h1 class="name_partie"><strong>Mes projets</strong></h1>
        <h2 class="name_project_type" id="pythonTitle">Python</h2>
        <div id="carousel_project_python" class="carousel slide carouselExampleCaptions" style="display: none">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/calculator.png" class="d-block picture_project" alt="calculatrice">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Calculatrice</h5>
                        <a href="télécharger/calculatrice.zip" class="btn_project">Télécharger</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel_project_python" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel_project_python" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h2 class="name_project_type" id="webTitle">Web</h2>
        <div id="carousel_project_web" class="carousel slide carouselExampleCaptions" style="display: none">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/sport-car.png" class="d-block picture_project" alt="voiture">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Auto-école de Mormal</h5>
                        <a href="web/site_auto_école/index.html" class="btn_project">Visiter</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel_project_web" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel_project_web" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <img src="image/Cloudy.svg" id="img_cloudy_pro">
    </section>
    <section id="partie4">
        <h1 class="name_partie_spe"><strong>Mes expériences</strong></h1>
        <h2 class="experience_pro">Professionnelle</h2>
        <div class="main-timeline">
            <div class="timeline">
                <div class="timeline-content-1">
                    <span class="year">10 juillet - 16 septembre 2023</span>
                    <h3 class="title">Job étudiant -- Intermarché, Le Quesnoy</h3>
                    <p class="description">
                        Mise en rayon : Fruits & Légumes, épicerie, Parfumerie<br>
                        inventaire
                    </p>
                </div>
            </div>
            <div class="timeline">
                <div class="timeline-content">
                    <span class="year">3 avril - 30 juin 2023</span>
                    <h3 class="title">Stage développement -- Auto-école</h3>
                    <p class="description">
                        Création d'un site internet<br>
                        langage utilisé : HTML, CSS, PHP<br>
                        Maquette réalisée sur figma<br>
                        site non mis en ligne
                    </p>
                </div>
            </div>
            <div class="timeline">
                <div class="timeline-content-1">
                    <span class="year">1 septembre - 12 septembre 2022</span>
                    <h3 class="title">Vendanges -- Cernay-Lès Reims</h3>
                    <p class="description">
                        Cueillette du raisin<br>
                        Transport du raisin jusqu'au camion de transport
                    </p>
                </div>
            </div>
            <div class="timeline">
                <div class="timeline-content">
                    <span class="year">12 novembre - 16 novembre 2018</span>
                    <h3 class="title">Stage découverte de 3e -- Mairie de Berlaimont</h3>
                    <p class="description">
                        Organisation de lâcher de ballon<br>
                        Création de flyers<br>
                        organisation événements<br>
                        cartographie des terrains de la commune
                    </p>
                </div>
            </div>
            <div class="timeline">
                <div class="timeline-content-1">
                    <span class="year"> 12 juillet - 26 juillet 2018</span>
                    <h3 class="title">Rénovation Bénévole -- Château fort de Guise</h3>
                    <p class="description">
                        Déblayage<br>
                        pavage<br>
                        maçonnerie
                    </p>
                </div>
            </div>
        </div>
        <h2 class="experience_scolaire">Scolaire</h2>
        <div class="liste_scolaire">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-backpack" viewBox="0 0 16 16">
                <path d="M4.04 7.43a4 4 0 0 1 7.92 0 .5.5 0 1 1-.99.14 3 3 0 0 0-5.94 0 .5.5 0 1 1-.99-.14ZM4 9.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-4Zm1 .5v3h6v-3h-1v.5a.5.5 0 0 1-1 0V10H5Z"/>
                <path d="M6 2.341V2a2 2 0 1 1 4 0v.341c2.33.824 4 3.047 4 5.659v5.5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5V8a6.002 6.002 0 0 1 4-5.659ZM7 2v.083a6.04 6.04 0 0 1 2 0V2a1 1 0 0 0-2 0Zm1 1a5 5 0 0 0-5 5v5.5A1.5 1.5 0 0 0 4.5 15h7a1.5 1.5 0 0 0 1.5-1.5V8a5 5 0 0 0-5-5Z"/>
            </svg>
            <div>
                <h2 class="name_scolaire">École-It</h2>
                <h3 class="type_scolaire"><strong>Master Ingénieur informatique - Valenciennes</strong></h3>
                <h6 class="info_scolaire">Programmation / Développement / Système et réseaux</h6>
            </div>
        </div>
        <div class="liste_scolaire">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-backpack" viewBox="0 0 16 16">
                <path d="M4.04 7.43a4 4 0 0 1 7.92 0 .5.5 0 1 1-.99.14 3 3 0 0 0-5.94 0 .5.5 0 1 1-.99-.14ZM4 9.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-4Zm1 .5v3h6v-3h-1v.5a.5.5 0 0 1-1 0V10H5Z"/>
                <path d="M6 2.341V2a2 2 0 1 1 4 0v.341c2.33.824 4 3.047 4 5.659v5.5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5V8a6.002 6.002 0 0 1 4-5.659ZM7 2v.083a6.04 6.04 0 0 1 2 0V2a1 1 0 0 0-2 0Zm1 1a5 5 0 0 0-5 5v5.5A1.5 1.5 0 0 0 4.5 15h7a1.5 1.5 0 0 0 1.5-1.5V8a5 5 0 0 0-5-5Z"/>
            </svg>
            <div>
                <h2 class="name_scolaire">Lycée Dupleix</h2>
                <h3 class="type_scolaire"><strong>Baccalauréat Général - Landrecies</strong></h3>
                <h6 class="info_scolaire">Spé : Histoire Géopolitique / SES</h6>
                <h6 class="info_scolaire">Option : Mathématique / Cinéma Audio-Visuel</h6>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="footer-partie">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16" color="white">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
        </svg>
        <a href="tel:0658973000" id="tel">06 58 97 30 00</a>
    </div>
    <div class="footer-partie">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16" color="white">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
        </svg>
        <a href="mailto:geoffrey.riviere@ecole-it.com" id="mail">geoffrey.riviere@ecole-it.com</a>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="global.js"></script>
</body>
</html>