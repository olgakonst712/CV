



<?php
/* Email du destinataire (mettez ici votre email) */
$destinataire = "olgakonstantinova712@gmail.com";

/* RÃ©cupÃ©ration */
$nom = $_POST['nom'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$header = "From: " . $_POST['email'];

/* VÃ©rification */
if ( $nom == "" ) {
  echo "Veuillez indiquer le nom.";
  $erreur = true;
}
if ( $subject == "" ) {
  echo "Veuillez indiquer le sujet.";
  $erreur = true;
}
if ( $message == "" ) {
  echo "Veuillez indiquer un message.";
  $erreur = true;
}

/* VÃ©rification du mail */
$email_regex = "^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+.[a-z0-9-]";
if ( $email == "" OR !eregi( $email_regex , $email ) ) {
  echo "Veuillez indiquer un email valide.";
  $erreur = true;
}
/* Envoi du mail */
if ( !$erreur ) {
  mail( $destinataire , $objet , $message , $header );
  echo "Le message a Ã©tÃ© envoyÃ©.";
}
?>