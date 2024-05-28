<?php
if (isset($_POST["email"])) {
    $message = "Ce message vous a été envoyé via la page contact du site Mon portfolio
    Nom : " . $_POST["nom"] . "
    Email : " . $_POST["email"] . "
    Message : " . $_POST["message"];

    $retour = mail("estebannkrebs2@gmail.com", $_POST["objet"], $message, "From:contact@exemplesite.fr\r\nReply-to:" . $_POST["email"]);
    if ($retour) {
        echo "<p>L'email à bien été envoyé</p>";
    }
}