<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// Connexion à la base de données
require "require_connect.php";

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$motdepasse = $_POST['motdepasse'];

// On ajoute une entrée dans la table jeux_video
//ok $bdd->exec('INSERT INTO test1(prenom, codpost, motdepasse)
// VALUES(\'11H46\', \'91220\', \'MDP\')');

//TOP
//https://openclassrooms.com/fr/courses/2644516-securisez-les-mots-de-passe-des-utilisateurs-avec-php

$req = $bdd->prepare('INSERT INTO utilisateurs (prenom, nom, email, motdepasse,nombre_de_participation,nombre_de_followers,certification,Photo_de_profil) 
VALUES(:prenom, :nom, :email, :motdepasse,0 ,0,0,null)');
$req->execute(array(
	'prenom' => $prenom,
    'nom' => $nom,
    'email' => $email,
    'motdepasse' => $motdepasse
	));

    header('Location: user_connecter_front.php');
    //echo "<script>alert('Le compte a bien été créé');</script>"; 

?>
