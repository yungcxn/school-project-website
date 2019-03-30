<?php

//getting product variables
//das ist fuer die shop container und dessen... kp
$PName_query = mysql_query("SELECT `product_name` FROM `products`");
$PID_query = mysql_query("SELECT `product_id` FROM `products`");
$PPrice_query = mysql_query("SELECT `product_price` FROM `products`");
$PImageLink_query = mysql_query("SELECT `product_imagelink` FROM `products`");
$PDesc_query = mysql_query("SELECT `product_imagelink` FROM `products`");

function drawContainer(){
  echo "lololol";
}
?>
