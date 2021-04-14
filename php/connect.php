<?php
$servername = "localhost";
$username = "falcon";
$password = "AFOMEaki55";
$dbname = "elsa_bar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die();
}
echo "";
?>

