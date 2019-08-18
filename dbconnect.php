<?php
// DB connection parameters 
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "cr14_fabian_andiel_sportsclub";

// Create the DB connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the DB connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

else {
	// echo "Läuft bei dir";
}

?>