<?php 
require_once 'config.php';

if(isset($_POST['article_titre'], $_POST['article_contenu'])) {
  if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])) {

        $article_titre = htmlspecialchars($_POST['article_titre']);
        $article_contenu = htmlspecialchars($_POST['article_contenu']);

        $ins = $pdo->prepare('INSERT INTO articles (titre, contenus, date_time_publication)
          VALUES (:titre, :contenus, NOW())');
          $ins->execute(array(
            'titre' => $_POST['article_titre'],
            'contenus' => $_POST['article_contenu']
          )
        );
  } else {
      $erreur = 'Veuillez remplir tous les champs';
  };
}
?>
<section class="post">
    <div class="post_message">
        Bienvenue sur human , le site qui vous permet de faire des voyages humanitaires.
    </div>
    <div class="posts_articles">
        <?php
        $req = $pdo-> query('SELECT* FROM articles ORDER BY id DESC');
        while($articles = $req->fetch()) : ?>
        <div class="hello">
                <img src="./assets/images/balancoire.jpeg" alt="" class="balancoire">
                <h2 class="text_posts"><?php echo $articles['titre']?></h2><br>
                <div class="post_articles">
                    <div class="post_article1_photo">
                        <img src="./assets/images/Maxime Frisou.svg" alt="">
                        <h3 class="article1_title">Thomas Smith</h3>
                    </div>
                </div>
        </div>
        <div class="hello">
                <img src="./assets/images/handicape.jpeg" alt="" class="balancoire">
                <h2 class="text_posts"><?php echo $articles['titre']?></h2><br>
                <div class="post_articles">
                    <div class="post_article1_photo">
                        <img src="./assets/images/Maxime Frisou.svg" alt="">
                        <h3 class="article1_title">Maxime Frisou</h3>
                    </div>
                </div>
        </div>

            <?php endwhile;?>
    </div>
    
</section>