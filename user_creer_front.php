<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HUMANS</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="user_creer_front.css">

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
    </style>

</head>
<body>

    <div class="w3-container w3-row-padding w3-center">

    <div class="w3-container w3-center">
             <a href= "accueil_anonyme.php">
                <img src="./assets/images/Humans_logo.png">
            </a>
            <BR>
            <span class="w3-text-green w3-xlarge"><b>Inscription</b></span>
            <br><br>
    </div>
    
            </p>
                <form action="user_creer_back.php" style="border:1px solid #ccc" onsubmit="return f_valider()" method="post">
                    
                    <div class="w3-container w3-green" id="form_login">
                        <br>
                        <label for="prenom"><b>Prénom</b></label>
                        <input type="text" id="prenom" placeholder="" name="prenom" required >
                
                        <label for="nom"><b>Nom</b></label>
                        <input type="text" id="nom" placeholder="" name="nom" required>

                        <label for="mail"><b>Mail</b></label>
                        <input type="text" id="email" placeholder="" name="email" required>

                        <label for="motdepasse"><b>Mot de passe</b></label>
                        <input type="password" id="motdepasse" placeholder="" name="motdepasse" required>
                
                        <label for="mdp2"><b>Répéter mot de passe</b></label>
                        <input type="password" id="mdp2" placeholder="" name="mdp2" required onblur="f_verif_mdp()" />
                    </div>
                    <br>
                    <div class="clearfix">
                    <span class="w3-center">
                      <button type="button" class="cancelbtn"><b>Annuler</b></button>
                    </span>
                    <span class="w3-center">
                      <button type="submit" class="signupbtn"><b>Enregistrer</b></button>
                    </span>
                    </div>
                    
                </form>
                
                  <script>
                  
                /*
                https://openclassrooms.com/fr/courses/146276-tout-sur-le-javascript/144576-td-verification-dun-formulaire
                */
                
                var ERR_PRENOM = 0;
                var ERR_MAIL = 0;
                var ERR_MDP = 0;
                
                function f_verif_prenom()
                {
                   var prenom = document.getElementById('prenom').value;
                   var nb_car = parseInt(prenom.length);
                
                   if(nb_car < 3 || nb_car > 25)
                   {
                      alert("Le prénom doit faire entre 3 et 25 caractères");
                      ERR_PRENOM = 1;
                      /*document.getElementById('prenom').style.backgroundColor= '#FF99FF';*/
                      return;
                   }
                   else
                   {
                      ERR_PRENOM = 0;
                      return;
                   }
                }
                  
                function f_verif_mail()
                {
                   var mail = document.getElementById('mail').value;
                   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
                   if(!regex.test(mail))
                   {
                    alert("La syntaxe de l'adresse mail est incorrect");
                    ERR_MAIL = 1;
                    return;
                   }
                   else
                    {
                     ERR_MAIL = 0; 
                     return;
                   }
                }
                
                function f_verif_mdp()
                {
                    var mdp1 = document.getElementById('motdepasse').value;
                    var mdp2 = document.getElementById('mdp2').value;
                
                    if (mdp1 == mdp2)
                    {
                        ERR_MDP = 0; 
                        return;
                    }
                    else
                    {
                        alert("Les 2 mots de passe n'ont pas la même syntaxe");
                        ERR_MAIL = 1;
                        document.getElementById('motdepasse').value = "";
                        document.getElementById('mdp2').value = "";
                        return;
                    }
                }
                  
                function f_verif_form() {
                    alert("coucou blur avant quitter page"); 
                }
                
                /* 
                https://openweb.eu.org/articles/validation_formulaire
                "Notez l'emploi du mot-clé return sur l'appel de valider()."
                */
                function valider(){
                    alert("FALSE");
                    return false;
                }
                
                </script>

                    <?
                        $_SESSION['page_prec'] = 'user_creer_front.php';
                    ?>
                
                </body>
                </html>