<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<header>
    <div class="site">
        <ul class="menu">
            <li><a href="index.php" class="nav-link">Accueil</a></li>
            <li><a href="index.php#partie2" class="nav-link">Compétences</a></li>
            <li><a href="index.php#partie3" class="nav-link">Projets</a></li>
            <li><a href="index.php#partie4" class="nav-link">Éxpériences</a></li>
            <li><a href="contact.php" class="nav-link">Contacter</a></li>
        </ul>
        <div class="menu-burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>
<main>
    <h1 class="name_partie"><strong>Me contacter</strong></h1>
    <form action="login.php" method="POST">
        <div class="contact-main">
            <div class="contact-form">
                <h2><strong>Formulaire de contact</strong></h2>
                <form>
                    <div class="form-group">
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" required placeholder="nom, prénom">
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" required placeholder="exemple@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="message">Object :</label>
                        <input type="text" id=object name="message" required placeholder="Object...">
                    </div>
                    <div class="form-group">
                        <label for="message">Message :</label>
                        <textarea id="message" name="message" required placeholder="Ecrivez votre message..."></textarea>
                    </div>
                    <div class="form-group btn-mail">
                        <button type="submit"><strong>Envoyer</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </form>
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

</body>
</html>