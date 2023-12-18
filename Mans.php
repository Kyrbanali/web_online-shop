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

    

  <h1>Мужская одежда</h1>
  <div class="products">

        <?php
        $pdo = new PDO("mysql:host=localhost; dbname=web1","root", "0000");
        $query = "set names utf8";
        $pdo->query($query);
        $query = 'select * from products where description ="man"';
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

<!--      <div class="product">-->
<!--        <img src="img/man_r.jpg" alt="Мужская рубашка">-->
<!--        <a href="Product.php"><h2>Мужская рубашка</h2></a>-->
<!--        <p>Цена: $29.99</p>-->
<!--      </div>-->
    
<!--      <div class="product">-->
<!--        <img src="https://provokatorspb.ru/imgs/products/big/1639384505_g8p.jpg" alt="Мужской костюм">-->
<!--        <a href="Product.php"><h2>Мужской костюм</h2></a>-->
<!--        <p>Цена: $9.99</p>-->
<!--      </div>-->
<!---->
<!--      <div class="product">-->
<!--        <img src="https://ae04.alicdn.com/kf/H097b967cbcc3416eb55d1a909064640eB.jpg" alt="Мужские брюки">-->
<!--        <a href="Product.php"><h2>Мужские брюки</h2></a>-->
<!--        <p>Цена: $39.99</p>-->
<!--      </div>-->
<!---->
<!--      <div class="product">-->
<!--        <img src="https://ae04.alicdn.com/kf/S4faadc4648934fc2a1d1f166f0f8830ee.jpg" alt="Мужская куртка">-->
<!--        <a href="Product.php"><h2>Мужская куртка</h2></a>-->
<!--        <p>Цена: $49.99</p>-->
<!--      </div>-->
  </div>

<footer>
    <p>© 2022 Магазин одежды Cressida. Все права защищены.</p>
</footer>
    <script>
        function runA(id){
            location.href = "./addToCart.php?product_id="+id;
        }
    </script>
</body>