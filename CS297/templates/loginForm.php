
<<!DOCTYPE html>
<head>

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
        <li><a href="review.php" title="Reviews" >Reviews</a></li>
        <li><a href="CriticsCorner.php" title="Critics Corner">Critics Corner</a></li>
        <li><a href="contact.php" title="Contact Us">Contact Us</a></li>
      </ul>
    </div>
    
    </div>
    <div class="pageLeftMenu">
    </div>
    <div class="pageContent">
   <h2>Administrator Login</h2>
      <form action="admin.php?action=login" method="post" style="width: 50%;">
        <input type="hidden" name="login" value="true" />

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        <ul>

          <li>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Your admin username" required autofocus maxlength="20" />
          </li>

          <li>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Your admin password" required maxlength="20" />
          </li>

        </ul>
<br>
        <div class="buttons"href="review.php">
          <input type="submit" name="login" value="Login" />
        </div>

      </form>
    </div>
    <div class="pageRightMenu">
    </div>
    <div class="pageFooter">
    </div>
</div>
</body>
</html>
