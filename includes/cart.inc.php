<?php

$PName_query = mysql_query("SELECT `product_name` FROM `products`");
$PID_query = mysql_query("SELECT `product_id` FROM `products`");
$PPrice_query = mysql_query("SELECT `product_price` FROM `products`");
$PImageLink_query = mysql_query("SELECT `product_imagelink` FROM `products`");
$PDesc_query = mysql_query("SELECT `product_imagelink` FROM `products`");


$selectedProductNames = array();
$selectedProductIDs = array();
$selectedProductPrices = array();
$selectedProductImageLinks = array();
$selectedProductDescs = array();

while($row = mysql_fetch_assoc($PName_query)){

  $selectedProductNames[] = $row;

}

function drawSelectedProducts(){
  //draw selectedProducts to screen

}

/*
$_SESSION['u_id']
$_SESSION['u_first']
$_SESSION['u_last']
$_SESSION['u_place']
$_SESSION['u_street']
$_SESSION['u_postcode']
$_SESSION['u_email']
$_SESSION['u_uid']
*/

/*
put sth into the db
$sql = "INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_place`, `user_street`, `user_postcode`, `user_email`, `user_uid`, `user_pwd`) VALUES (NULL, '$first', '$last', '$place', '$street', '$postcode', '$email', '$uid', '$hashedPwd');";

mysqli_query($conn, $sql);*/
?>
