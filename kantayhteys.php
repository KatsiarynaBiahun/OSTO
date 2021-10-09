<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
?>

<?php

$servername = "localhost";
$username = "katariina";
$password = "Koira123";
$database = "tietokanta1";

// Create connection
$dbconnect = mysqli_connect($servername, $username, $password, $database);

//Jotta ä ja ö näkyisivät oikein phpmyadminisissa  
mysqli_set_charset($dbconnect,'utf8');

// Check connection
if (!$dbconnect) {
  die("Yhteys tietokantaan ei toimii: " . mysqli_connect_error()); 
} 
//echo "Yhteys tietokantaan toimii "; 
?>