
<section class="leftNav">
	<img src="assets/images/Humans_logo.png" alt="humans" class="humansLogo">
  <ul class="navMenuLeft">
    <li><img src="assets/images/monitor.svg" alt=""><a href="">Fil d'actualité</a></li>
    <li><img src="assets/images/piggy-bank.svg" alt=""><a href="./events_cagnotte/index.php">Cagnottes</a></li>
    <li><img src="assets/images/star (1).svg" alt=""><a href="">Évènements</a></li>
    <li><img src="assets/images/chat 2.svg" ><a href="#" onclick="f_tchat()">Messages</a>
</li>
    <li><img src="assets/images/settings.svg" alt=""><a href="">Paramètres</a></li>
    <li><img src="assets/images/logout.svg" alt=""><a href="public_index.php">Déconnexion</a></li>
  </ul>
</section>

<script type="text/javascript">
function f_tchat(){
var url="user_connecter_front.secu.php";
newwin=window.open(url,'','width=400,height=400,top=200,left=200');
if(newwin){
window.onfocus=function(){newwin.window.close()}
}
}
</script>

<?php
echo "<h2>" . $_SESSION['prenom2'] . " " . $_SESSION['nom2'] . "</h2>"; ?>