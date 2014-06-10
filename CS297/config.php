<?php

/**Author: David Kiel
 Date: 3/14/04
   Site: DKCentral_Articles
     file: config.php
*/

ini_set( "display_errors", true );
date_default_timezone_set( "America/Los_Angeles" ); 
define( "DB_DSN", "mysql:host=localhost;dbname=cms" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "" );
define( "CLASS_PATH", "class" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "david" );
define( "ADMIN_PASSWORD", "mypass" );
require( CLASS_PATH . "/Article.php" );


function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
    error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );

	//set off all error for security purposes
error_reporting(0);


//define some contstant
	define( "DB_DSN", "mysql:host=localhost;dbname=cms" ); 
	define( "DB_USERNAME", "root" ); 
	define( "DB_PASSWORD", "" ); 
define( "CLS_PATH", "class" ); 
//include the classes
include_once( CLS_PATH . "/user.php" );