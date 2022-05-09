<?php
/** @var \QueryBuilder $db */
//CRUD: CREATE, READ, UPDATE, DELETE - для всех сайтов функции


$users = $db->all("users");

// ImageManager - не связывается ни с какой таблицей, отдельная папка с картинками
// upload($image)
// delete($path)
//  ...


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
            <h1>All users</h1>
            <a href="/users/create" class="btn btn-success">Add User</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>

                    <tr>
                        <td><?= $user['id']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td>
                            <a href="/users/show?id=<?= $user['id']; ?>" class="btn btn-info">
                                Show
                            </a>
                            <a href="/users/edit?id=<?= $user['id']; ?>" class="btn btn-warning">
                                Edit
                            </a>
                            <a onclick="return confirm('are you sure?');" href="/users/delete?id=<?= $user['id']; ?>"
                               class="btn btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
