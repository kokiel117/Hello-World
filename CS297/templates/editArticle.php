
 <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <link rel="stylesheet" type="text/css" href="brew.css">
   
        <h2>Oregon Brew review </h2>
     </div>

      <h1><?php echo $results['pageTitle']?></h1>

      <form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
        <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>"/>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        <ul>

          <li>
            <label for="title">Name Of Establishment</label>
            <input type="text" name="title" id="title" placeholder="Name of estalishment" required autofocus maxlength="50" value="<?php echo htmlspecialchars( $results['article']->title )?>" />
          </li>

          <li>
            <label for="summary">Location</label>
            <textarea name="summary" id="summary" placeholder="City/State" required maxlength="50" style="height: 2.5em;"><?php echo htmlspecialchars( $results['article']->summary )?></textarea>
          </li>

          <li>
            <label for="content">Review</label>
            <textarea name="content" id="content" placeholder="Review their brew!" required maxlength="100000" style="height: 30em;"><?php echo htmlspecialchars( $results['article']->content )?></textarea>
          </li>

          <li>
            <label for="publicationDate">Date of Visit</label>
            <input type="date" name="publicationDate" id="nDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date( "Y-m-d", $results['article']->publicationDate ) : "" ?>" />
          </li>


        </ul>
<br>
        <div class="buttons">
          <input type="submit" name="saveChanges" value="Save" />
          <input type="submit" formnovalidate name="cancel" value="Cancel" />
        </div>

      </form>

<?php if ( $results['article']->id ) { ?>
      <a1><a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Article?')">Delete This Article</a></a1>
<?php } ?>

