<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Форма Входа</title> 
        <link rel="stylesheet" href="styles/SignIn.css"> 
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
                </ul>
            </nav>
        </header>

        <main>
            <div class="login-form"> 
                <h2>Вход</h2> 
                <form method="post" action="./autori.php">
                    <input name="email" type="email" placeholder="Почта" required>
                    <input name="password" type="password" placeholder="Пароль" required>
                    <button type="submit">Вход</button>
                    <div class="registration_button">
                        <a href="SignUp.php">Регистрация</a>
                    </div> 
                </form> 
            </div> 
        </main>
        

        <footer>
            <p>© 2022 Магазин одежды Cressida. Все права защищены.</p>
        </footer>
    </body> 
</html>