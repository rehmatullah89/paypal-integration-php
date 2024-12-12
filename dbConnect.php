<?php 
 // Connect with the database 
 //$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, "3800"); 
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "paypal_db";
// db connection
$db = new mysqli($localhost, $username, $password, $dbname, "3308");
 // Display error if failed to connect 
 if ($db->connect_errno) { 
     printf("Connect failed: %s\n", $db->connect_error); 
	exit(); 
 }