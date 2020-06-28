 
<?php
$servername = "localhost";
$username = "root";
$password = "callme@10";
$database = "u123112300_pokemon";

// Create connection
$con = mysqli_connect($servername, $username, $password , $database);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

