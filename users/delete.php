<?php
/** @var QueryBuilder $db */
// Delete - удаление определенной задачи

$id = $_GET['id'];

$db->delete("users", $id);

header('Location: /');
