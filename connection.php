<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="job_portal";
// Create connection
$con =  mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($con) {
  echo "Connected successfully";
}
else {
  echo "Connection Unsuccessful";
}

?>
