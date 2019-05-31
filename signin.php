<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=siphp', 'root', '');

if (isset($_POST['forminscription'])) {
  // $pseudo = htmlspecialchars($_POST['pseudo']);
  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $mdp = sha1($_POST['mdp']);
  $mdp2 = sha1($_POST['mdp2']);
  if (!empty($_POST['pseudo']) and !empty($_POST['mail']) and !empty($_POST['mail2']) and !empty($_POST['mdp']) and !empty($_POST['mdp2'])) {
    $pseudolength = strlen($pseudo);
    if ($pseudolength <= 255) {
      if ($mail == $mail2) {
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
          $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
          $reqmail->execute(array($mail));
          $mailexist = $reqmail->rowCount();
          if ($mailexist == 0) {
            if ($mdp == $mdp2) {
              $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
              $insertmbr->execute(array($pseudo, $mail, $mdp));
              $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
            } else {
              $erreur = "Vos mots de passes ne correspondent pas !";
            }
          } else {
            $erreur = "Adresse mail déjà utilisée !";
          }
        } else {
          $erreur = "Votre adresse mail n'est pas valide !";
        }
      } else {
        $erreur = "Vos adresses mail ne correspondent pas !";
      }
    } else {
      $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
    }
  } else {
    $erreur = "Tous les champs doivent être complétés !";
  }
}
?>

<html>

<head>
  <title>LOLOLOLOLOLOL</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/design.css" type="text/css">
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
</head>

<header>
    <div>
      <h1>HUMANS</h1>
    </div>
  </header>

<body>
  <section class="bloc_inscription">
    <div class="form">
      <div>
      <h2>CRÉER TON COMPTE</h2>
      </div>
      <form method="POST" action="">
        <div class="form__group form__group--primary">
          <input type="text" placeholder="Nom" id="nom" name="nom" class="form__inputer" value="<?php if (isset($nom)) : echo $nom;  endif ?>" />
          <input type="text" placeholder="Prénom" id="prenom" name="prenom" class="form__inputer" value="<?php if (isset($prenom)) : echo $prenom;                                                                       endif ?>" />
        </div>        
        <div class="form__group">
          <input type="mail" placeholder="Mail" id="mdp" name="mail" class="form__input">
        </div>
        <div class="form__group">
          <input type="password" placeholder="Mot de passe" class="form__input">
        </div>
        <div class="form__group">
          <input type="password" placeholder="Confirmez votre mot de passe" id="mdp2" name="mdp2" class="form__input" />
        </div>
      </form>
      <div class="submit">
          <input type="submit" class="submit__button" name="forminscription" value="Connexion" />
        </div>
      <?php
      if (isset($erreur)) {
        echo '<font color="red">' . $erreur . "</font>";
      }
      ?>
    </div>
  </section>
</body>

</html>