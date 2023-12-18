<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/Product.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
                <?php if($_COOKIE['user'] != null):?>
                    <li><a href="Cart.php">Корзина</a></li>
                <?php else: ?>
                    <li><a href="SignIn.php">Войти</a></li>
                <?php endif ?>
            </ul>
        </nav>
    </header>

    <main>
        <div>
            <div class="product_card">
                <div class="container">
                    <?php

                    $pdo = new PDO("mysql:host=localhost; dbname=web1", "root", "0000");
                    $query = "set names utf8";
                    $pdo->query($query);

                    $product_id = $_GET['product_id'];
                    $path = "./addToCart.php";
                    $query = "select * from products where id =$product_id";
                    $results = $pdo->query($query);
                    $row = $results->fetch(PDO::FETCH_ASSOC);
                    echo '
                        <div class="product-image">
                        <img src="'.$row["image_src"].'" alt="Product Image">
                    </div>
                    <div class="product-info">
                       <div class="product-category">Категория товара: '.$row["category"].'</div>
                       <div class="product-details">
                          Стиль: '.$row["style"].'
                          <br>
                          
                          Продукт: '.$row["product"].'
                          <br>
                          Цвет: '.$row["color"].'
                          <br>
                          Размер: '.$row["size"].'
                       </div>
                       <div class="product-price">Цена: '.$row["cost"].'</div>
                       <br>
                       <br>
                       
                        <div>
                       <button onclick="run('.$row['id'].')" type="submit">Добавить в корзину</button>
                       </div>
                       
                    </div>
                    ';
                    ?>
                    <script>
                        function run(id){
                            location.href = "./addToCart.php?product_id="+id;
                        }
                    </script>

                 </div>
            </div>
            
            <!-- <div class="Table">
                <table border="3" cellpadding="20" cellspacing="15">
                 <tr>
                    <td colspan=2 align="center">Категория</td>
                    <td colspan=2 align="center">Стиль</td>
                </tr>
                <tr>
                    <td>Продукт</td>
                    <td>Цвет</td>
                    <td>Размер</td>
                    <td>Цена</td>
                </tr>
                <tr>
                    <td colspan=4 align="center">Описание Продукта</td>
                </tr>
                </table>
            </div> -->
        </div>
        
        
    </main>

    <footer>
        <p>© 2022 Магазин одежды Cressida. Все права защищены.</p>
    </footer>
</body>
</html>