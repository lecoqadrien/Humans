<section class="rightNav">
  <div class="rightNavTop">
    <div class="profilePicAndName">
      <div class="myProfilePic"></div>
        <?php  
        echo "<h2>" . $_SESSION['prenom2'] . " " . $_SESSION['nom2'] . "</h2>"; ?>
    </div>
  </div>

<div class="stats">
  <ul class="firstStat">
    <li class="statsNumbers"><?php echo $_SESSION["followers"]?></li>
    <li class="statsLabels">ABONNÉ(E)S</li>
  </ul>

  <ul class="secondStat">
    <li class="statsNumbers"><?php echo $_SESSION["abonnements"]?></li>
    <li class="statsLabels">ABONNEMENTS</li>
  </ul>

  <ul class="thirdStat">
    <li class="statsNumbers"><?php echo $_SESSION["projects"]?></li>
    <li class="statsLabels">PROJETS</li>
  </ul>
</div>

<h2 class="bestFriendsTitle">Meilleurs amis</h2>

<div class="bestFriendsContent">

  <ul class="bestFriendsPictures">
    <div class="bestFriendsPicture1"></div>
    <div class="bestFriendsPicture2"></div>
    <div class="bestFriendsPicture3"></div>
  </ul>

  <ul class="bestFriendsLabels">
    <a href="">Maxime Frisou</a>
    <a href="">Jane Meyer</a>
    <a href="">Kelkun Dotre</a>
  </ul>

</div>
<h2 class="recentProjectsTitle">Projets récents</h2>

<div class="recentProjectsContent">

  <ul class="recentProjectsPictures">
    <div class="recentProjectsPicture1"></div>
    <div class="recentProjectsPicture2"></div>
    <div class="recentProjectsPicture3"></div>
  </ul>

  <ul class="recentProjectsLabels">
    <a href="">Construction école au Mali</a>
    <a href="">Soutient famille Fiacre</a>
    <a href="">Les Valis Help</a>
  </ul>

</div>
</section>