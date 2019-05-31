<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

        $_SESSION['prenom'] = '23h41';
        $_SESSION['nom'] = 'dada';
        $_SESSION['email'] = 'aqs';
       
    header('Location: accueil_tchat.php');

?>
