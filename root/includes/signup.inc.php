<?php

if (isset($_POST['submit'])) {

  //include_once('dbh.inc.php');

  include 'dbh.inc.php';

  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

  if(!$conn){
    echo "Connection failed: " . mysqli_connect_error();
  }


  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $place = mysqli_real_escape_string($conn, $_POST['place']);
  $street = mysqli_real_escape_string($conn, $_POST['street']);
  $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


  //Error handling
  //Check for empty input
  if(empty($first) || empty($last) || empty($place) || empty($street) || empty($postcode) || empty($email) || empty($uid) || empty($pwd)) {
    header("Location: ../signup.php?signup=empty");
    exit();
  }
    //Check if input is invalid
  else if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
    header("Location: ../signup.php?signup=invalid");
    exit();
  }
      //Check if email is valid
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../signup.php?signup=invalidemail");
    exit();
  } else {

    $sql = "SELECT * FROM users WHERE user_uid='$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
      header("Location: ../signup.php?signup=usertaken");
      exit();
    } else {
      //Hashing the password
      $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
      //Insert the User into DB
      $sql = "INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_place`, `user_street`, `user_postcode`, `user_email`, `user_uid`, `user_pwd`) VALUES (NULL, '$first', '$last', '$place', '$street', '$postcode', '$email', '$uid', '$hashedPwd');";

      mysqli_query($conn, $sql);
      if (mysqli_query($conn, $sql)) {
       echo "New record created successfully";
      }
      header("Location: ../signup.php?signup=success");
      exit();
        }
      }


} else {

  header("Location: ../signup.php");
  exit();


}
