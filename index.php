<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .top-slider {
            width: 100%;
            margin-top: 20px;
        }

        .slider {
            width: 100%;
            height: 400px;
            overflow: hidden;
            display: flex;
            justify-content: center;
        }

        .slider img {
            width: 100%;
            max-width: 90%;
            height: 100%;
            object-fit: cover;


        }


        .buttons {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .buttons button {
            margin: 0 5px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин одежды</title>
    <link rel="stylesheet" href="styles/index.css">
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
                <li>
                    <form action="./Search.php" method="get">
                        <div class="searcher">
                            <input type="search" id="search" name="search">
                            <button class="searcherBtn" type="submit"><img class = "searcherImg" src="img/search-icon.jpg" alt=""></button>
                        </div>
                    </form>
                </li>
            </ul>
        </nav>

    </header>

    <?php
    $images = array(
        "https://static.tildacdn.com/tild3131-3965-4265-a262-666432363032/Cressida1.jpg",
        "https://static.tildacdn.com/tild3632-3838-4761-b362-313565633335/Cressida_13.jpg",
        "https://static.tildacdn.com/tild6165-3362-4330-a664-313936373430/115.jpg"
    );
    ?>
    <div class="top-slider">
        <div class="slider">
            <?php foreach ($images as $index => $image): ?>
                <img id="image-<?php echo $index; ?>" src="<?php echo $image; ?>" alt="Фото" <?php if ($index !== 0) echo 'style="display: none;"'; ?>>
            <?php endforeach; ?>
        </div>

        <div class="buttons">
            <?php foreach ($images as $index => $image): ?>
                <button onclick="showImage(<?php echo $index; ?>)"><?php echo $index + 1; ?></button>
            <?php endforeach; ?>
        </div>
    </div>


    <script>
        function showImage(index) {
            var images = document.querySelectorAll('.slider img');

            for (var i = 0; i < images.length; i++) {
                if (i === index) {
                    images[i].style.display = 'block';
                } else {
                    images[i].style.display = 'none';
                }
            }
        }
    </script>

    <main>
        <div class="Top_category">
            <h2>Новинки</h2>
            <div class="categories">
                <?php
                $pdo = new PDO("mysql:host=localhost; dbname=web1","root", "0000");
                $query = "set names utf8";
                $pdo->query($query);
                $query = 'select * from products where description ="new"';
                $results = $pdo->query($query);
                while ($row = $results->fetch(PDO::FETCH_ASSOC))
                {
                    echo '
                    <div class="category">
                    <img src="'.$row["image_src"].'" alt="#">
                    <a href="Product.php?product_id='.$row["id"].'"><h4><span>NEW </span>'.$row["category"].'</h4></a>
                    <p>'.$row["cost"].' ₽</p>
                    
                    <div>
                       <button onclick="runA('.$row['id'].')" type="submit">Добавить в корзину</button>
                       </div>
                    </div>
                    
                    
            ';
                }
                ?>
            </div>
        </div>
        <script>
            function runA(id){
                location.href = "./addToCart.php?product_id="+id;
            }
        </script>

        <div class="Top_category">
            <h2>Женская коллекция</h2>
            <div class="categories">
                <?php

                $query = 'select * from products where description ="woman_collection"';
                $results = $pdo->query($query);
                while ($row = $results->fetch(PDO::FETCH_ASSOC))
                {
                    echo '
                    <div class="category">
                    <img src="'.$row["image_src"].'" alt="#">
                    <a href="Product.php?product_id='.$row["id"].'"><h4>'.$row["category"].'</h4></a>
                    <p>'.$row["cost"].' ₽</p>
                    <div>
                       <button onclick="runA('.$row['id'].')" type="submit">Добавить в корзину</button>
                       </div>
                    </div>
                    
            ';
                }
                ?>

            </div>
        </div>

        <div class="Top_category">
            <h2>Мужская коллекция</h2>
            <div class="categories">
                <?php

                $query = 'select * from products where description ="man_collection"';
                $results = $pdo->query($query);
                while ($row = $results->fetch(PDO::FETCH_ASSOC))
                {
                    echo '
                    <div class="category">
                    <img src="'.$row["image_src"].'" alt="#">
                    <a href="Product.php?product_id='.$row["id"].'"><h4>'.$row["category"].'</h4></a>
                    <p>'.$row["cost"].' ₽</p>
                    <div>
                       <button onclick="runA('.$row['id'].')" type="submit">Добавить в корзину</button>
                       </div>
                    </div>
                    
            ';
                }
                ?>
            </div>
        </div>


    </main>


    <footer>
        <p>© 2022 Магазин одежды Cressida. Все права защищены.</p>
    </footer>
</body>