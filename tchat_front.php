<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HUMAN</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="user_connecter_front.css">

<style>
  .bloc_gauche_user {
  position: fixed;
  top : 0;
  bottom: 0;
  right: 0;
  height : 100%;
  border: 3px solid #73AD21;
}

.bloc_droite_tchat {
  bottom: 0;
  right: 0;
  height : 100%;
  border: 3px solid #73AD21;
}

</style>

</head>

<body class="w3-white">


    <!-- Utilisation du framework w3css (tout ce qui est préfixé avec w3) -->
<div class="w3-row">

    <!-- la colonne de gauche (50% largeur=half) est pour lister les utilisateurs -->
  <div id = "bloc_gauche_user" class="w3-half w3-container w3-green">

      <div class="w3-text-black">

          <div class="w3-xlarge w3-center">USERS</div>
          <br><br>

          <b>Mon compte</b> :
          <br><br>


          <br><br><br>

          <b>Utilisateurs HUMAN</b> :
          <br>
          <span class="w3-small">
          
          <?php
            require "require_connect.php";

            $requete = "SELECT id, prenom, nom, email FROM utilisateurs";
            $reponse = $bdd->query($requete);

            foreach ($reponse as list($i, $p, $n, $e)) {
              echo "<br> &nbsp;id $i; Prénom: $p; Nom: $n; Email: $e\n";
            }
          ?>

          </span>
      </div>
  </div>

      <!-- la colonne de droite est la partie pour le TCHAT -->
    <div id ="bloc_droite_tchat" class="w3-half w3-container w3-blue">
          <div class="w3-xlarge w3-center w3-blue">TCHAT</div>
          <br><br>

    <form action="tchat_back" method="post">
        <p>
        <!--
        <label for="pseudo">Email</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />
        -->
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />
        <br>
        <input type="submit" value="Envoyer" />
	  </p>
    </form>

    <?php


      // Connexion à la base de données
      require "require_connect.php";

      $requete = "SELECT user_prenom, tchat_message, tchat_date FROM tchat ORDER BY tchat_id DESC LIMIT 0, 15";
      $reponse = $bdd->query($requete);

      foreach ($reponse as list($p, $m, $d)) {



        //echo "<br><br>: Prénom: $p; Message: $m; Date: $d\n";
        echo "<br><br><b> $p</b>: ($d)\n";
        echo "<br>=> $m\n";
      }

      $reponse->closeCursor();

      ?>
  </div>
</div> 


</body>
</html>