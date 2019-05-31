<html>

<head>
  <title>Connexion</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/design.css" type="text/css">

</head>

<header>
    <div>
        <a href="./user_creer_front.php">S'inscrire</a>
        &nbsp;&nbsp;
        <a href="./user_connecter_front.php">Se connecter</a>
    </div>
  </header>

<body>
  <section class="bloc_inscription">
    <div class="form">
      <div>
      <h2>CONNEXION</h2>
      </div>
      <form method="POST" action="">     
        <div class="form__group">
          <input type="mail" placeholder="Mail" id="mdp" name="mail" class="form__input">
        </div>
        <div class="form__group">
          <input type="password" placeholder="Mot de passe" class="form__input">
        </div>
      <div class="submit">
          <input type="submit" class="submit__button" name="forminscription" value="Connexion" />
        </div>
        
      <?php
      if (isset($erreur)) {
        echo '<font color="red">' . $erreur . "</font>";
      }
      ?>
    </div>
    <div class="mdp">Mot de passe oublié ? </div>
   <div class="join">
<?php
   echo '<a href="signin.php"><img src="./assets/images/join.png" alt="rejoins"/></a>'
   ?>
   </div>

  </section>
</body>

</html>