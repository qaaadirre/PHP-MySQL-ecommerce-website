<?php
// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone
date_default_timezone_set('Asia/Dubai');

// Host Name
$dbhost = 'sql12.freesqldatabase.com';

// Database Name
$dbname = 'sql12743058';

// Database Username
$dbuser = 'sql12743058';

// Database Password
$dbpass = '3Yhingx9Sc';

// Defining base url
define("BASE_URL", "http://fashionys.com/");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}
