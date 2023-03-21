<?php

// echo 'Hello World!';

$servername = 'localhost';
$username = 'root';
$password = 'root';
$database = 'MyFirstDatabase';

// устанавливаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
var_dump($conn);