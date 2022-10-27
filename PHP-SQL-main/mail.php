<?php

if (isset($_POST["message"])) {
    $header="MIME-Version: 1.0\r\n";
    $header.='From:"Portfolio"<portfolio@projet.com>'."\n";
    $header.='Content-Type:text/html; charset="uft-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit'; 

    $message = "Ce message proviens du formulaire
    Nom :" . " " . $_POST["nom"] . "
    Message :" . " " . $_POST["message"] . "
    Proviens de :" . " " . $_POST["email"];

    mail("tflammanc@gaming.bs", $_POST["sujet"], $message, 
    "From:contact@exemple.fr" . "\r\n" . "Reply-to:" .  $_POST["email"]);
}