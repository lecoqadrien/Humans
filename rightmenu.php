<section class="rightNav">
  <div class="rightNavTop">
    <div class="profilePicAndName">
      <div class="myProfilePic"></div>
        <?php echo "<h2 class='myName'>" . $_SESSION["prenom"] . " " . $_SESSION["nom"] . "</h2>"    ?>
    </div>
  </div>
  <ul class="stats">
 
    <li><?php echo $_SESSION["followers"] ?></li>
    <li><?php echo $_SESSION["abonnements"] ?></li>
    <li><?php echo $_SESSION["projects"] ?></li>

  </ul>
</section>