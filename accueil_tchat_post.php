<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>

<?php
// Connexion à la base de données
require "require_connect.php";

$id_user = $_SESSION["id_user"];
$prenom = $_SESSION["prenom"];
$message = $_POST['message'];

$req = $bdd->prepare('INSERT INTO tchat (tchat_message, tchat_date, user_id, user_prenom) 
VALUES(:tchat_message, now(), :user_id, :user_prenom)');
$req->execute(array(
	'tchat_message' => $message,
    'user_id' => $id_user,
    'user_prenom' => $prenom
	));

// Redirection du visiteur vers la page du minichat
header('Location: accueil_tchat.php');
?>