<?php
/** @var QueryBuilder $db */
//Update - изменение или обновление существующей задачи

$data = [
    "id" => $_GET['id'],
    "email" => $_POST['email'],
    "password" => $_POST['password']
];

$db->update("users", $data);

header("Location: /");
exit;
