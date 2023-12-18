<?php
$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost; dbname=web1","root", "0000");
$query = "set names utf8";
$pdo->query($query);

$query = "select * from users as u where u.password='$password' and u.email='$email'";
$results = $pdo->query($query);

$row = $results->fetch(PDO::FETCH_ASSOC);

if ($results->rowCount()>0)
{
    setcookie("user", $row["id"], time() + 3600*100, "/");
    header("Location:./Index.php");
}
else{header("Location:./SignIn.php");}
