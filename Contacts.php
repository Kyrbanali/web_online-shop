<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="stylesheet" href="styles/Contacts.css">
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

    

    <main>
        <div class="Our_contacts">
            <h2>Наши контакты</h2>
        </div>
        <div class="feedback_info">
            <p>Мы всегда рады Видеть Вас в наших магазинах.</p>
            <p>Если у Вас возникли вопросы, свяжитесь с нами по телефону или напишите e-mail.</p>
        </div>


        <div class="adresses_form">
            <div class="adresses">

                <div class="name_Iremel">
                    <p>Cressida ТРК "Иремель"</p>
                </div>

                <div class="info_Iremel">
                    <p>Уфа, Менделеева, 137 с 10:00 до 21:00</p>

                </div>

                <div class="name_Mega">
                    <p>Cressida ТЦ "Мега Уфа"</p>
                </div>

                <div class="info_Mega">
                    <p>Уфа, Рубежная, 174 с 10:00 до 22:00</p>
                </div>

            </div>
        </div>

        <div class="container">
            <div>
                <h3>Форма обратной связи</h3>
            </div>
            <form method="post" action="./feedback_form.php">

              <div class="form-group">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="text">Ваш вопрос?</label>
                <input type="text" id="text" name="text" required>
              </div>
              
              <div class="form-group">
                <button  type="submit">Отправить</button>
              </div>
            </form>
        </div>
    </main>




    <footer>
        <p>© 2022 Магазин одежды Cressida. Все права защищены.</p>
    </footer>
</body>