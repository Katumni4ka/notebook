<?php
//Show - вывод одной задачи

require 'database/QueryBuilder.php';

$db = new QueryBuilder;

$id = $_GET['id'];
//$task = $db-> getTask($id);
$task = $db->getOne("tasks", $id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?= $task['title']; ?></h1>
            <p>
                <?= $task['content']; ?>
            </p>
            <a href="/">Go Back</a>
        </div>
    </div>
</div>
</body>
</html>