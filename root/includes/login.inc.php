<?php

session_start();

if (isset($_POST['submit'])){

  include 'dbh.inc.php';

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  //Error handling
  if(empty($uid) || empty($pwd)){

    header("Location: ../shop.php?login=empty");
    exit();

  } else {
    $sql = "SELECT * FROM `users` WHERE `user_uid`='$uid' OR `user_email`='$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck < 1){
      header("Location: ../shop.php?login=error");
      exit();
    } else {
      if($row = mysqli_fetch_assoc($result)) {
        //De-hashing the PASSWORD
        $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
        if($hashedPwdCheck == false){
        header("Location: ../shop.php?login=error");
        exit();
        }
        elseif ($hashedPwdCheck == true) {
          //Logging in HERE
          $_SESSION['u_id'] = $row['user_id'];
          $_SESSION['u_first'] = $row['user_first'];
          $_SESSION['u_last'] = $row['user_last'];
          $_SESSION['u_place'] = $row['user_place'];
          $_SESSION['u_street'] = $row['user_street'];
          $_SESSION['u_postcode'] = $row['user_postcode'];
          $_SESSION['u_email'] = $row['user_email'];
          $_SESSION['u_uid'] = $row['user_uid'];

          header("Location: ../shop.php?login=success");
          exit();

        }
      }
    }
  }

} else {
    header("Location: ../shop.php?login=error");
    exit();

}
