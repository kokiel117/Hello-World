<!DOCTYPE html>
<head>
<?php 
include_once("config.php");
  if( !(isset( $_POST['login'] ) ) ) { 
?>
	 <meta http-equiv="content-type" content="text/html; charset=utf-8">
	 <link rel="stylesheet" type="text/css" href="brew.css">
	 <title>Oregon Brew Review</title>
	 <meta name="Revuew your favorite beverages and the estabishment there served in" content="Bewary review" >
</head>
<body>
<div class="blended_grid">
	  <div class="pageHeader">
	  
	  </div>
	  <div class="pageNavigation" align="center">
	  	<div id="menu">
			<ul>
				<li><a href="index.php" title="Home">Home</a></li>
				<li><a href="review.php" title="Review">Reviews</a></li>
				<li><a href="CriticsCorner.php" title="Critics Corner" class="active">Critics Corner</a></li>
				<li><a href="contact.php" title="Contact Us">Contact Us</a></li>
			</ul>
		</div>
	  
	  </div>
	  <div class="pageLeftMenu">
	  </div>
	  <div class="pageContent">

	  <div id="login-wrapper">
			 <form method="post" action="">
				 <ul>  <center><h3> Critics Welcome!</h3></center>

					 <li>
						 <label for="usn">Username  </label>
						 <input type="text" maxlength="20" required autofocus name="username" />
					 </li>
					
					 <li>
						 <label for="passwd">Password  </label>
						 <input type="password" maxlength="20" required name="password" />
					 </li>
					 <li class="buttons">
						 <input type="submit" name="login" value="Log In" /> 
					 </li>
					
				 </ul>
				
<?php 
}else{
$usr = new Users; //create a new instance of the Users class
$usr->storeFormValues( $_POST ); //like I said before we will use the function storeFormValues to store the form values

if( $usr->userLogin() ) {
header("Location: userReview.php");
} else {
echo "Incorrect Username/Password"; 
}
}
?>

			 </form>

				
			</div>
	  </div>

	  <div class="pageRightMenu">
	   <div id="registration-wrapper">
	   <h2><center>Register to be a critic</center></h2>
	   
	   <center><a href="register.php"><button><span id="register">Here!</a></button></center></span>
	 
	   </div>
	  </div>
	  <div class="pageFooter">
	  </div>
</div>

</body>
</html>