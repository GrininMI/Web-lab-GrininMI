<?php
$servername = "127.0.0.1";
$username   = "root";
$password   = "kali";
$dbName     = "site_db";

$link = mysqli_connect($servername, $username, $password, $dbName);
if (!$link) {
    die("Ошибка подключения к БД: " . mysqli_connect_error());
}

// таблица пользователей
$sql = "CREATE TABLE IF NOT EXISTS users (
    id       INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50)  NOT NULL,
    email    VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
if (!mysqli_query($link, $sql)) {
    echo "Не удалось создать таблицу users: " . mysqli_error($link);
}

// таблица постов
$sql = "CREATE TABLE IF NOT EXISTS posts (
    id        INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title     VARCHAR(255) NOT NULL,
    main_text TEXT NOT NULL,
    image     VARCHAR(255)
)";
if (!mysqli_query($link, $sql)) {
    echo "Не удалось создать таблицу Posts";
}

mysqli_close($link);
?>