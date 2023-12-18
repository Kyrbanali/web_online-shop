<?php

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost; dbname=web1","root", "0000");
$query = "set names utf8";
$pdo->query($query);
$pdo->exec("INSERT INTO feedback_form(name, email, text) VALUES ('$name', '$email', '$text')");

header("Location:./Contacts.php");
?>

