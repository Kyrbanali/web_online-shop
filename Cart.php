<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="stylesheet" href="styles/Mans.css">

    <style>
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
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
        </ul>
    </nav>
</header>





    <div>
        <h1>Корзина</h1>
    </div>
    <div class="products">


    <?php
    $pdo = new PDO("mysql:host=localhost; dbname=web1","root", "0000");
    $query = "set names utf8";
    $pdo->query($query);


    $query = "select * from cart as k join products as p on p.id = k.product_id where k.user_id ='{$_COOKIE['user']}'";
    $results = $pdo->query($query);
    $summa = 0;

    while ($row = $results->fetch(PDO::FETCH_ASSOC))
    {
        $summa += $row['cost'];
        echo '
                    <div class="product">
                    <img src="'.$row["image_src"].'" '.$row["product"].'">
                    
                    <a href="Product.php?product_id='.$row["id"].'"><h2>'.$row["product"].'</h2></a>
                    
                    <p>'.$row["cost"].' ₽</p>
                    <div>
                       <button onclick="runD('.$row['id'].')" type="submit">Удалить из корзины</button>
                       </div>
                </div>
            ';
    }

    ?>
    </div>
<script>
    function runD(id){
        location.href = "./deleteFromCart.php?product_id="+id;
    }
</script>

<div>
        <h2>Общая сумма = <?php echo "$summa"; ?></h2>
        <h2>Оформление заказа...</h2>
        <h2>Вводим данные карты...</h2>
        <h2>Вводим адрес доставки...</h2>

    </div>





<footer>
    <p>© 2022 Магазин одежды Cressida. Все права защищены.</p>
</footer>
</body>