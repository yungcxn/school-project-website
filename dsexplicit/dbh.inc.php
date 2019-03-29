<?php

$dbServername = "192.168.178.49";
$dbUsername = "root";
$dbPassword = "EfeCan00";
$dbName = "faith";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
  echo "Connection failed";
}

?>
