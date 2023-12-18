<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost; dbname=web1","root", "0000");
$query = "set names utf8";
$pdo->query($query);
$pdo->exec("INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')");

header("Location:./SignIn.php");
