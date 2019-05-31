
<!-- Connexion à la base de données -->
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=siphp;charset=utf8', 'root', '');
    
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>
