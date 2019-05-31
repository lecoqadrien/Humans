<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// Connexion à la base de données
require "require_connect.php";

$email = $_POST['email'];
$motdepasse = $_POST['motdepasse'];
//$mdp_SHA1 = sha1($motdepasse);
$mdp_SHA1 = $motdepasse;

$requete = "SELECT id, prenom, nom, email, motdepasse FROM utilisateurs WHERE email = '".$email."'";

$reponse = $bdd->query($requete);

/*
OK avec REQUETES 1 et 2
foreach ($reponse as $key => $value){
    print_r($value);
}
*/
//https://www.php.net/manual/fr/control-structures.break.php

$statut_connect = 0;

foreach ($reponse as list($i, $p, $n, $e, $mdp)) {
        echo "<br><br>id: $i; Prénom: $p; Nom: $n; Email: $e\n";

    if ($mdp_SHA1 == $mdp)
    {
        $statut_connect = 1;
        $_SESSION['id_user2'] = $i;
        $_SESSION['prenom2'] = $p;
        $_SESSION['nom2'] = $n;
        $_SESSION['email2'] = $e;

        $_SESSION['id_user'] = $i;
        $_SESSION['prenom'] = $p;
        $_SESSION['nom'] = $n;
        $_SESSION['email'] = $e;
        break;
    }
}

if ($statut_connect == 1    )
{
    //echo 'La connexion est ok, redirection vers la page du TCHAT';
    
    header('Location: private_index.php');

}
else
{ 
    //echo 'La connexion est pas ok, resaisir email et mot de passe';
    header('Location: user_connecter_front.php');
}

?>
