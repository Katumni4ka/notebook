<?php
/** @var QueryBuilder $db */
//Show - вывод одной задачи

$id = $_GET['id'];
$user = $db->getOne("users", $id);
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
            <h1><?= $user['email']; ?></h1>
            <a href="/">Go Back</a>
        </div>
    </div>
</div>
</body>
</html>