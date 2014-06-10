

<!DOCTYPE html>
<head>
<?php 
include_once("config.php"); 
?>


<?php if( !(isset( $_POST['register'] ) ) ) { ?>
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
				<li><a href="Review.html" title="Reviews">Reviews</a></li>
				<li><a href="CriticsCorner.php" title="Critics Corner">Critics Corner</a></li>
				<li><a href="contact.php" title="Contact Us">Contact Us</a></li>
			</ul>
		</div>
	  
	  </div>
	  <div class="pageLeftMenu">
	  </div>
	  <div class="pageContent">

	  <div id="login-wrapper">
			 <form method="post" action="">
				 <ul>
					 <li>
						 <label for="usn">Username </label>
						 <input type="text" id="usn" maxlength="30" required autofocus name="username" />
					 </li>
					
					 <li>
						 <label for="passwd">Password </label>
						 <input type="password" id="passwd" maxlength="30" required name="password" />
					 </li>
						
						<li>
						 <label for="conpasswd">Confirm Password </label>
						 <input type="password" id="conpasswd" maxlength="30" required name="conpassword" />
					 </li>
					 <li class="buttons"href="CritisCorner.php">
						 <input type="submit" href=".php" name="register" value="Register" />
						
					 </li>
					
				 </ul>
			 </form>
			</div>
		</div>

  <div class="pageRightMenu">
	   
	  </div>
	  <div class="pageFooter">
	  </div>
</div>
	
	</body>
</html>

<?php 

//if register button was clicked.
} else {
$usr = new Users; //create new instance of the class Users
$usr->storeFormValues( $_POST ); //store form values

//if the entered password is match with the confirm password then register him
if( $_POST['password'] == $_POST['conpassword'] ) {
echo $usr->register($_POST); 
} else {
//if not then say that he must enter the same password to the confirm box.
echo "Password and Confirm password not match"; 
}
}
?>
