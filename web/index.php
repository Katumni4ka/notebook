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
$auth->login('user@example.com', 'adf');
$user = $auth->currentUser();
$auth->fullName();

$url = $_SERVER['REQUEST_URI'];
if ($url === '/list' || $url === '/') {
    require '../index.php';
    exit();
} elseif ($url === '/create') {
    require '../create.php';
    exit();
} elseif ($url === '/delete') {
    require '../delete.php';
    exit();
} elseif ($url === '/edit') {
    require '../edit.php';
    exit();
} elseif ($url === '/show') {
    require '../show.php';
    exit();
} elseif ($url === '/store') {
    require '../store.php';
    exit();
} elseif ($url === '/update') {
    require '../update.php';
    exit();
}
echo "404 | ERROR";
