<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['object']) && !empty($_POST['object']) && isset($_POST['message']) && !empty($_POST['message'])) {

    // Inclure les fichiers PHPMailer
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    $mail = new PHPMailer(true);

    try {
        // Configuration du serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Spécifiez votre serveur SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'portfolio974@gmail.com'; // Votre adresse e-mail SMTP
        $mail->Password = 'capcopzfwsqrnaqa'; // Votre mot de passe SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Activer le chiffrement TLS; `PHPMailer::ENCRYPTION_SMTPS` encouragé
        $mail->Port = 587; // Port TCP à utiliser; utilisez 465 pour `PHPMailer::ENCRYPTION_SMTPS` ci-dessus

        // Destinataires
        $mail->setFrom($_POST['email'], $_POST['email']);
        $mail->addAddress('geoffrey.riviere@ecole-it.com', 'Destinataire'); // Ajoutez un destinataire

        // Contenu
        $mail->isHTML(true); // Définir le format de l'e-mail en HTML
        $mail->Subject = $_POST['object'];
        $mail->Body    = $_POST['message'];
        $mail->AltBody = $_POST['message'];

        $mail->send();
        header('Location: ./index.php');
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé. Erreur de Mailer : {$mail->ErrorInfo}";
    }
}
?>