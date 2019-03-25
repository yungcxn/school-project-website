<?php
try {
  $config = parse_ini_file('/includes/db.ini');
}catch(Exception $e) {
  echo "config couldn't be parsed!";
}
$dbServername = $config['servername']
$dbUsername = $config['username']
$dbPassword = $config['password']
$dbName = $config['db']

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
  echo "Connection failed";
}

?>
