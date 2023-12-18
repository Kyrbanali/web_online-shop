<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мужская одежда</title>
    <link rel="stylesheet" href="styles/Mans.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php"><img src="https://static.tildacdn.com/tild3837-3265-4366-b339-656664353135/1.png" alt="#"></a></li>
            <!-- <li><a href="New.html">Новинки</a></li> -->
            <li><a href="Mans.php">Мужская одежда</a></li>
            <li><a href="Womans.php">Женская одежда</a></li>
            <li><a href="Contacts.php">Контакты</a></li>
            <?php if($_COOKIE['user'] != null):?>
                <li><a href="Cart.php">Корзина</a></li>
            <?php else: ?>
                <li><a href="SignIn.php">Войти</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>
</body>
<?php
$pdo = new PDO("mysql:host=localhost; dbname=web1","root", "0000");
$query = "set names utf8";
$pdo->query($query);

$searchTerm = $_GET['search'];

$sql = "SELECT * FROM products WHERE product LIKE '%$searchTerm%'";

$results = $pdo->query($sql);
?>

<h1>Результат поиска по: <?php echo $searchTerm; ?></h1>
<div class="products">

    <?php


    while ($row = $results->fetch(PDO::FETCH_ASSOC))
    {
        echo '
                    <div class="product">
                    <img src="'.$row["image_src"].'" '.$row["product"].'">
                    
                    <a href="Product.php?product_id='.$row["id"].'"><h2>'.$row["product"].'</h2></a>
                    
                    <p>'.$row["cost"].' ₽</p>
                </div>
            ';
    }
    ?>
</div>

<footer>
    <p>© 2022 Магазин одежды Cressida. Все права защищены.</p>
</footer>