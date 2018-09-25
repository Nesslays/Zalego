<?php 
$db_host = "localhost";    // Host name
  $db_user = "root";         // Mysql username-specified in           privileges
  $db_pass = "";             // Mysql password  
  $db_name = "zalogodb"; // Database name   
// Connect to MySQL server. That is connect to the localhost using the username and password already set on your server. If unable to connect, get MySQL error 
$connection = mysqli_connect($db_host, $db_user, $db_pass); 
if (!$connection){     
die("Database Connection Failed" . mysqli_connect_error()); 
}  
// Select your database. If unable to select and connect to your database (login_system), get MySQL error 
$select_db = mysqli_select_db($connection,$db_name); 
if (!$select_db){     
die("Database Selection Server Failed" . mysqli_connect_error()); 
}  
?>