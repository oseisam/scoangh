<?php


//enter server name
define("SERVERNAME",'localhost');
//enter username
define("USERNAME",'scoandb');
//enter password
define("PASSWORD",'');
//enter database
define("DATABASE",'scoandb');
//enter port, note default port is 3306
define("PORT", '3306');

$server = SERVERNAME;
$username = USERNAME;
$password = PASSWORD;
$database= DATABASE;
$port= PORT;
// Create connection
$conn = mysqli_connect($server, $username, $password,$database,$port);

// Check connection
if (!$conn) {
   // die("Connection failed: " . mysqli_connect_error());
    die("We are currently experiencing some difficulties. Please try again later.");
}

