<?php


require( "config.php" );
session_start();
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
$username = isset( $_SESSION['username'] ) ? $_SESSION['username'] : "";

if ( $action != "login" && $action != "logout" && !$username ) {
  login();
  
}

switch ( $action ) {
  case 'login':
    login();
    break;
  case 'logout':
    logout();
    break;
  case 'newArticle':
    newArticle();
    break;
  case 'editArticle':
    editArticle();
    break;
  case 'deleteArticle':
    deleteArticle();
    break;
  default:
    listArticles();
}


function login() {

  $results = array();
  $results['pageTitle'] = " | Oregon Brew Review ";

  if ( isset( $_POST['login'] ) ) {

    // User has posted the login form: attempt to log in user

    if ( $_POST['username'] == ADMIN_USERNAME && $_POST['password'] == ADMIN_PASSWORD ) {

      // Login successful: Create a session and redirect homepage
      $_SESSION['username'] = ADMIN_USERNAME;
      header( "Location: admin.php" );

    } else {

      // Login failed: display an error message 
      $results['errorMessage'] = "Incorrect username or password. Please try again.";
       require( TEMPLATE_PATH . "/admin/loginForm.php" );
    }

  } else {

    //  display the form
    require( TEMPLATE_PATH . "/loginForm.php" );
  }

}


function logout() {
  unset( $_SESSION['username'] );
   header( "Location: admin.php" );
}


function newArticle() {

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

}


function editArticle() {

   $results = array();
    $results['pageTitle'] = "Edit Article";
     $results['formAction'] = "editArticle";

  if ( isset( $_POST['saveChanges'] ) ) {

    // User has posted the article edit: save article changes

    if ( !$article = Article::getById( (int)$_POST['articleId'] ) ) {
      header( "Location: admin.php?error=articleNotFound" );
       return;
    }

    $article->storeFormValues( $_POST );
     $article->update();
       header( "Location: admin.php?status=changesSaved" );

  } else if ( isset( $_POST['cancel'] ) ) {

    // User cancelled their edits: return to article list
    header( "Location: admin.php" );
  }  
     else {

    // User not posted the article edit: display the form
    $results['article'] = Article::getById( (int)$_GET['articleId'] );
     require( TEMPLATE_PATH . "/editArticle.php" );
  }

}


function deleteArticle() {

  if ( !$article = Article::getById( (int)$_GET['articleId'] ) ) {
    header( "Location: admin.php?error=articleNotFound" );
     return;
  }

  $article->delete();
   header( "Location: admin.php?status=articleDeleted" );
}


function listArticles() {
  $results = array();
   $data = Article::getList();
    $results['articles'] = $data['results'];
     $results['totalRows'] = $data['totalRows'];
      $results['pageTitle'] = "All Articles";

  if ( isset( $_GET['error'] ) ) {
    if ( $_GET['error'] == "articleNotFound" ) $results['errorMessage'] = "Error: Article not found.";
  }

  if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] == "changesSaved" ) $results['statusMessage'] = "Your changes have been saved.";
      if ( $_GET['status'] == "articleDeleted" ) $results['statusMessage'] = "Article deleted.";
  }

  require( TEMPLATE_PATH . "/listArticles.php" );
}

?>
