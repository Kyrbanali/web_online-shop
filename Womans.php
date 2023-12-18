<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Женская одежда</title>
    <link rel="stylesheet" href="styles/Mans.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php"><img src="https://static.tildacdn.com/tild3837-3265-4366-b339-656664353135/1.png" alt="#"></a></li>
                <!-- <li><a href="New.php">Новинки</a></li> -->
                <li><a href="Mans.php">Мужская одежда</a></li>
                <li><a href="Womans.php">Женская одежда</a></li>
                <li><a href="Contacts.php">Контакты</a></li>
                <li><a href="SignIn.php">Войти</a></li>
            </ul>
        </nav>
    </header>

    

    <h1>Женская одежда</h1>
    <div class="products">
        <?php
        $pdo = new PDO("mysql:host=localhost; dbname=web1","root", "0000");
        $query = "set names utf8";
        $pdo->query($query);
        $query = 'select * from products where description ="woman"';
        $results = $pdo->query($query);
        while ($row = $results->fetch(PDO::FETCH_ASSOC))
        {
            echo '
                    <div class="product">
                    <img src="'.$row["image_src"].'" '.$row["product"].'">
                    
                    <a href="Product.php?product_id='.$row["id"].'"><h2>'.$row["product"].'</h2></a>
                    
                    <p>'.$row["cost"].' ₽</p>
                    <div>
                       <button onclick="runA('.$row['id'].')" type="submit">Добавить в корзину</button>
                       </div>
                </div>
            ';
        }
        ?>

    </div>
    <script>
        function runA(id){
            location.href = "./addToCart.php?product_id="+id;
        }
    </script>
<footer>
    <p>© 2022 Магазин одежды Cressida. Все права защищены.</p>
</footer>
  
</body>