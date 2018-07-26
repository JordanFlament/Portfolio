<?php
    session_start(); // ouverture de la session en cour
    session_unset(); // destruction des données entrée dans les variables pour le bon fonctionnement de l'utilisation
    session_destroy(); // destruction de la session
    header('Location: ../connexion.php');// redirection vers la page de connection
    exit;    
?>