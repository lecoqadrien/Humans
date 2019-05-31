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
    <title>IDEMLIKE</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="user_connecter_front.css">

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
    </style>

</head>
<body>

<div class="w3-container w3-center">
             <a href= "private_index.php">
                <img src="./assets/images/Humans_logo.png">
            </a>
            <BR>
            <span class="w3-text-green w3-xlarge"><b>Accès sécurisé au tchat</b></span>
            <br><br>
</div>

<div class="w3-container w3-row-padding w3-center"></div>
    <form action="user_connecter_back_secu.php" method="post">

        <div class="container">  
                <label for="prenom"><b>Mail</b></label>
                <input type="text" placeholder="" name="email" required>

                <label for="motdepasse"><b>Mot de passe</b></label>
                <input type="password" placeholder="" name="motdepasse" required>
        
                <br><br>

                <button type="submit" class="w3-center">Se connecter</button>
          
        </div>

    </form>
</div>

</body>
</html>
