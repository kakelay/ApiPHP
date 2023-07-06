<?php
$server = "localhost";
$user = "root";
$psw= "";
$db="db_coffee";

// Create connection
$conn = mysqli_connect($server, $user, $psw);
$sql=mysqli_select_db($conn,$db);
// Check connection
if (!$sql) {
  echo("Connection failed: ".mysqli_error($conn));
}
 
?>