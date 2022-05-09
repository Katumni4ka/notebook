<?php //Create - показывает форму ?>

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
            <h1>Create user</h1>
            <form action="/users/store" method="POST">
                <div class="form-group">
                    <form action="signup.php" method="post">
                        <input type="email" class="form-control" name="email" id="email"
                               placeholder="Введите Email"><br>
                        <input type="password" class="form-control" name="password" id="password"
                               placeholder="Введите пароль"><br>
                        <input type="password" class="form-control" name="password_2" id="password_2"
                               placeholder="Повторите пароль"><br>
                        <button class="btn btn-success" name="do_signup" type="submit">Зарегистрировать</button>
                    </form>
                    <br>
                    <p>Если вы зарегистрированы, тогда нажмите <a href="login.php">здесь</a>.</p>
                    <p>Вернуться на <a href="index.php">главную</a>.</p>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>