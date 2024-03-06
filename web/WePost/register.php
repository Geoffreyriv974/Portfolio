<?php

require_once("database.php");

if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm'])) {
    $firstname = $_POST['firstname'];
    $name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm'];

    if ($password === $confirm_password) {

        $req = $bdd->prepare('INSERT INTO inscription (firstname, lastname, email, password, confirm) VALUES (?, ?, ?, ?, ?)');
        $req->execute(array(
            $firstname, $name, $email, $password, $confirm_password
        ));

        header("Location: index.html");
        exit();
    } else {
        echo '<script>document.getElementById("password-error").innerHTML = "Les mots de passe ne correspondent pas. Veuillez réessayer.";</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="style_inscription.css">
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div class="name_project">
            <h1>Bienvenue sur WePost</h1>
        </div>
    </header>
    <form method="POST">
        <div class="forlmulaire">
            <input type="text" placeholder="Prénom" name="firstname" required />
            <input type="text" placeholder="Nom" name="lastname" required />
            <input type="email" placeholder="Exemple@gmail.com" name="email" required />
            <input type="password" placeholder="Mot de passe" name="password" required />
            <input type="password" placeholder="Confirmer le mot de passe" name="confirm" required />
            <div id="password-error" class="error-message"></div>

            <input type="submit" value="S'inscrire" id="btn_valid"/>
        </div>
    </form>
</body>
</html>