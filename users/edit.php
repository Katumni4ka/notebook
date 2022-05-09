<?php
/** @var QueryBuilder $db */
//Edit - вывод одной конкретной задачи, показывает форму (совокупность create+show)

$id = $_GET['id'];

$users = $db->getOne("users", $id);
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
            <h1>Edit user</h1>
            <form action="/users/update?id=<?= $users['id']; ?>" method="post">
                <div class="form-group">
                    <input type="text" name="email" class="form-control" value="<?= $users['email']; ?>"
                </div>
                <div class="form-group">
                    <button class="btn btn-warning" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>