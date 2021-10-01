<?php
$nom = ($_POST['nom']);
$prenom = ($_POST['prenom']);
$email = ($_POST['text1']);
$sujet = ($_POST['sujet']);
$message = ($_POST['message']);

$to = "dannnn163@gmail.com";
$body = "De la part de : $nom $prenom, $email \n\nMessage: \n$message \n\nCordialement, $nom $prenom.";

if (!empty($email) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        mail($to, $sujet, $body);
        header('Location: mail-send.html');
    } else {
        header('Location: mail-failed.html');
    }
}
