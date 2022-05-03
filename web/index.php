<?php

if (!session_status()) {
    session_start();
}

require '../database/QueryBuilder.php';
require '../Components/Auth.php';// подключаю класс из папки database
// require - требует, а если подключаемый файл не найдется, то будет ошибка
// include - просто добавляет в скрипт файл, не найдет - ничего не будет
$db = new QueryBuilder;

$auth = new Auth($db);
//$auth->register('user@example.com', 'adf');
$auth->login('user@example.com', 'adf');
$user = $auth->currentUser();
$auth->fullName();

$url = $_SERVER['REQUEST_URI'];
if ($url == '/list') {
    require '../index.php';
    exit();
} elseif ($url == '/create') {
    echo "подключен файл create.php";
    exit();
}
echo "404 | ERROR";
