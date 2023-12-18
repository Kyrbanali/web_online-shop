<?php

$conn = new PDO("mysql:host=localhost; dbname=web1","root", "0000");
$query = "set names utf8";
$conn->query($query);
$product_id = $_GET['product_id'];
$query = "delete from cart where user_id = '{$_COOKIE['user']}' and product_id = '$product_id' LIMIT 1";
$conn->query($query);
header("Location:./Cart.php");