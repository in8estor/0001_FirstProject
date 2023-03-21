<?php

// echo 'Hello World!';

$servername = 'localhost';
$username = 'root';
$password = 'root';
$database = 'MyFirstDatabase';

// устанавливаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
var_dump($conn);

// проверяем соединение
if (!$conn) {
    die('NO CONNECTION' . mysqli_connect_error()) . PHP_EOL;
}
    echo 'CONNECTED' . PHP_EOL;

// добавляем в таблицу арифметический результат
$sql = 'INSERT INTO MyFirstTable (result) VALUES (700 + 77)';