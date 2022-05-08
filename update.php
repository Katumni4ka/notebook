<?php
/** @var QueryBuilder $db */
//Update - изменение или обновление существующей задачи

$data = [
    "id" => $_GET['id'],
    "title" => $_POST['title'],
    "content" => $_POST['content']
];

$db->update("tasks", $data);

header("Location: /");
exit;
