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


if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail is not valid";
  	$erreur = true;
}

 /* Envoi du mail */
if ( !$erreur ) {
  mail( $destinataire , $objet , $message , $header );
} else {
	echo "erreur";
}

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

header("Location: http://$host/$uri/index.php#section9?haveMessage=true");

?>

