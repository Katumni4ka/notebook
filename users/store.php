<?php
/** @var QueryBuilder $db */
//Store - сохраняет новую задачу в блокноте

$data = [
    "email" => $_POST['email'],
    "password" => $_POST['password']
];

$db->store("users", $data);

header("Location: /");
exit;