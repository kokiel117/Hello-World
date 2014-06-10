<!--Author: David Kiel
 Date: 3/14/04
   Site: DKCentral_Articles
     file: viewArticle.php
   -->
<?php include "templates/include/header.php" ?>

      <h1 style="width: 75%;"><?php echo htmlspecialchars( $results['article']->title )?></h1>
      <div style="width: 75%; font-style: italic;"><?php echo htmlspecialchars( $results['article']->summary )?></div>
      <div style="width: 75%;"><?php echo $results['article']->content?></div>
      <p class="pubDate">Published on <?php echo date('j F Y', $results['article']->publicationDate)?></p>

  <a1><a href="index.php">Return to Homepage</a></a1>

<?php include "templates/include/footer.php" ?>

