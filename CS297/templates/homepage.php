<!--Author: David Kiel
 Date: 3/14/04
   Site: DKCentral_Articles
     file: viewArticle.php
   -->
<?php include "templates/include/header.php" ?>
<h1> Recent Articles</h1>
      <ul id="headlines">


<?php foreach ( $results['articles'] as $article ) { ?>

        <li>
          <h2>
            <span class="pubDate"><?php echo date('j F', $article->publicationDate)?></span><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a>
          </h2>
          <p class="summary"><?php echo htmlspecialchars( $article->summary )?></p>
        </li>

<?php } ?>

      </ul>
      
     <br>
  <a1><a href="./?action=archive">Article Archive</a></a1><a1><a href="userlogin.php">Post article</a></a1><a1> <a href="admin.php">Admin Login</a></a1>


<?php include "templates/include/footer.php" ?>

