<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Prototyp</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <header>







            <?php

              if(isset($_SESSION['u_uid'])){
                echo '<form action="includes/logout.inc.php" method="POST">
                      <button type="submit" name="submit">Logout</button>
                      </form>';
              } else {
                echo '<form action="includes/login.inc.php" method="POST">
                      <input type="text" name="uid" placeholder="Username/e-mail">
                      <input type="password" name="pwd" placeholder="Passwort">
                      <button type="submit" name="submit">LOGIN</button>
                      </form>

                      <a href="signup.php" class="signup">Sign Up</a>';
              }

            ?>



      <img class="logo" src="images/faith.png" alt="logo">


    <nav>
      <ul>
        <li><a href="shop.php">Home</a></li>
        <li><a href="info.php">Über uns</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="contact.php">Kontakt</a></li>
      </ul>

    </nav>
  </header>
