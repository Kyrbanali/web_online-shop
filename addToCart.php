<?php

$conn = new PDO("mysql:host=localhost; dbname=web1","root", "0000");
$query = "set names utf8";
$conn->query($query);
$product_id = $_GET['product_id'];
$conn->exec("insert into cart(user_id, product_id) VALUES ('{$_COOKIE['user']}', '$product_id')");
header("Location:./Cart.php");

//// Функция для добавления товара в корзину
//function addToCart($user_id, $product_id, $quantity) {
//    global $conn;
//
//    // Проверяем, есть ли уже такой товар в корзине пользователя
//    $checkQuery = "SELECT * FROM cart WHERE user_id = $user_id AND product_id = $product_id";
//    $checkResult = $conn->query($checkQuery);
//
//    if ($checkResult->num_rows > 0) {
//        // Если товар уже есть в корзине, обновляем количество
//        $updateQuery = "UPDATE cart SET quantity = quantity + $quantity WHERE user_id = $user_id AND product_id = $product_id";
//
//        if ($conn->query($updateQuery) === TRUE) {
//            echo "Количество товара обновлено в корзине!";
//        } else {
//            echo "Ошибка при обновлении количества товара в корзине: " . $conn->error;
//        }
//    } else {
//        // Если товара еще нет в корзине, добавляем новую запись
//        $insertQuery = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($user_id, $product_id, $quantity)";
//
//        if ($conn->query($insertQuery) === TRUE) {
//            echo "Товар успешно добавлен в корзину!";
//        } else {
//            echo "Ошибка при добавлении товара в корзину: " . $conn->error;
//        }
//    }
//}
//// Функция для удаления товара из корзины
//function removeFromCart($user_id, $product_id) {
//    global $conn;
//
//    $deleteQuery = "DELETE FROM cart WHERE user_id = $user_id AND product_id =  $product_id";
//    if ($conn->query($deleteQuery) === TRUE) {
//        echo "Товар успешно удален из корзины!";
//    } else {
//        echo "Ошибка при удалении товара из корзины: " . $conn->error;
//    }
//}
//
//// Функция для получения содержимого корзины function getCartContents($user_id) { global $conn;
//function getCartContents($user_id) {
//    global $conn;
//    $selectQuery = "SELECT * FROM cart WHERE user_id = $user_id";
//    $result = $conn->query($selectQuery);
//    if ($result->num_rows > 0) {
//        while ($row = $result->fetch_assoc())
//        {
//            echo "Товар ID: " . $row["product_id"] . ", Количество: " . $row["quantity"] . "";
//        }
//    } else { echo "Корзина пуста."; }
//}