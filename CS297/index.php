<!DOCTYPE html>
<head>
	 <meta http-equiv="content-type" content="text/html; charset=utf-8">
	 <link rel="stylesheet" type="text/css" href="brew.css">
	 <?php


$con=mysqli_connect("localhost","root","");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create database
$sql="CREATE DATABASE cms";
if (mysqli_query($con,$sql))
  {
  echo "Database created successfully";
  }
  $con=mysqli_connect("localhost","root","","cms");

// Create table
$sql="CREATE TABLE  articles(
  id smallint unsigned NOT NULL auto_increment,
  publicationDate date NOT NULL,
  title varchar(255) NOT NULL,
  summary text NOT NULL,
  content mediumtext NOT NULL,
  PRIMARY KEY     (id))";

$sql="CREATE TABLE users (
  userID  int(11) NOT NULL AUTO_INCREMENT,
  username  varchar(50) NOT NULL,
  password  varbinary(250) NOT NULL,
  PRIMARY KEY (userID,username))" ;

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table articles and users created successfully";
  }
require( "config.php" );

//?>
   <script language="JavaScript" src="tFader.js"></script>	
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
				<li><a href="index.php" title="Home"class="active">Home</a></li>
				<li><a href="review.php" title="Reviews">Reviews</a></li>
				<li><a href="CriticsCorner.php" title="Critics Corner">Critics Corner</a></li>
				<li><a href="contact.php" title="Contact Us">Contact Us</a></li>
			</ul>
		</div>
	  
	  </div>
	  <div class="pageLeftMenu">
	  </div>
	  <div class="pageContent">
	  <br>
	  <script language="JavaScript">

 

            // configuration structure

            var A_TPL = {

                        // randomize the array each time page loads

                        'random' : false,

                        // number of transparency changes during the transition

                        //          increase for smoother transition, reduce for less CPU usage

                        'steps' : 30,

                        // transition duration in seconds

                        'transtime': 1.2,

                        // slide time in seconds

                        'slidetime': 1.5,

                        // width of the slide (optional)

                        'width' : 680,

                        // height of the slide (optional)

                        'height': 320,

                        // alt text for the image (optional)

                       'alt' : 'Something Appropriate Goes Here',

                        // css class assigned to the slide <img> (optional)
                        'css' : ''

            };

            // list of images to display

            var A_ITEMS = [

                        'images/RoxyAnn.jpg',

                        'images/brickhouse.jpg',

                        'images/wildriver.jpg',

                        'images/oregonvineyard.jpg'

            ];
            // fader initialization   

            var mySlideShow = new tFader (A_ITEMS, A_TPL);

 

</script>
<br>
<br>

           <center> <h2> Oregon Brew Review</h2></center>

	  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam leo dolor,
	   ultricies in luctus vitae, gravida pharetra leo. Sed eget porta nisi. Sed ut consectetur orci,
	    vel bibendum mi. Nulla facilisi. Mauris vel enim vitae lacus consequat pretium eget luctus arcu. 
	    Pellentesque tincidunt ligula ac convallis cursus. Donec accumsan tortor felis, eget sodales
	     diam tempus et. Ut sit amet ligula nulla. Suspendisse sagittis neque eu sodales consectetur.
	      Cras non metus vel lorem posuere bibendum a eu tellus. Morbi eget enim at eros vulputate fringilla.
	       Suspendisse eget varius ipsum. Morbi posuere eros consectetur lorem suscipit, vel sagittis velit aliquam. Nullam
	        tincidunt orci sit amet tortor interdum feugiat. Nulla nisi turpis, ornare eget accumsan ut, pharetra interdum lacus.
	         Quisque commodo odio eget viverra rutrum.<p>
	  </div>
	  <div class="pageRightMenu">
	  <h2><center>Critics Login </center></h2>
	   
	   <center><a href="Criticscorner.php"><button><span id="critics">Here!</a></button></center></span>
	  </div>
	  <div class="pageFooter">
	  </div>

</body>
</html>