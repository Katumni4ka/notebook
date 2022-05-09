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
$url = explode('?', $url)[0];
if ($url === '/') {
    require '../homepage.php';
    exit();
} elseif ($url === '/tasks/list' || $url === '/tasks/') {
    require '../tasks/index.php';
    exit();
} elseif ($url === '/tasks/create') {
    require '../tasks/create.php';
    exit();
} elseif ($url === '/tasks/delete') {
    require '../tasks/delete.php';
    exit();
} elseif ($url === '/tasks/edit') {
    require '../tasks/edit.php';
    exit();
} elseif ($url === '/tasks/show') {
    require '../tasks/show.php';
    exit();
} elseif ($url === '/tasks/store') {
    require '../tasks/store.php';
    exit();
} elseif ($url === '/tasks/update') {
    require '../tasks/update.php';
    exit();
}
echo "404 | ERROR";
