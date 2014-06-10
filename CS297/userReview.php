 <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <link rel="stylesheet" type="text/css" href="brew.css">
<?php


require( "config.php" );



  $results = array();
   $results['pageTitle'] = "New Article";
     $results['formAction'] = "newArticle";

  if ( isset( $_POST['saveChanges'] ) ) {

    // User has edited: save the new article
 $article = new Article;
    $article->storeFormValues( $_POST );
     $article->insert();
      header( "Location: Review.php" );

  } else if ( isset( $_POST['cancel'] ) ) {

    // User canceled their edits: return to article list
     header( "Location: index.php" );
  } 
  else {

    // User has not posted article edit: display the form
    $results['article'] = new Article;
     require( TEMPLATE_PATH . "/editArticle.php" );
 }



?>

