<?php
/** @var \QueryBuilder $db */
//CRUD: CREATE, READ, UPDATE, DELETE - для всех сайтов функции


$tasks = $db->all("tasks");

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
            <h1>All tasks</h1>
            <a href="/tasks/create" class="btn btn-success">Add Task</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tasks as $task): ?>

                    <tr>
                        <td><?= $task['id']; ?></td>
                        <td><?= $task['title']; ?></td>
                        <td>
                            <a href="/tasks/show?id=<?= $task['id']; ?>" class="btn btn-info">
                                Show
                            </a>
                            <a href="/tasks/edit?id=<?= $task['id']; ?>" class="btn btn-warning">
                                Edit
                            </a>
                            <a onclick="return confirm('are you sure?');" href="/tasks/delete?id=<?= $task['id']; ?>"
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
