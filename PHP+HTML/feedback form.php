<?php

$method = $_SERVER["REQUEST_METHOD"];
$error = null;
$showUserData = false;

$name = null;
$email = null;
$text = null;

if ($method === 'POST') {

    if (empty($_POST['name'])) {
        $error = 'Заполните имя';
    } elseif (empty($_POST['email'])) {
        $error = 'Заполните email';
    } elseif (empty($_POST['text'])) {
        $error = 'Заполните текст обращения';
    } elseif (empty($_POST['agree']) || $_POST['agree'] !== 'on') {
        $error = 'Согласитесь с обработкой данных';
    }

    if ($error === null) {
        $showUserData = true;

        $name = $_POST['name'];
        $email = $_POST['email'];
        $text = $_POST['text'];
    }
}

?>

<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
 
<body>
 
    <div class="container">

        <?php if ($error !== null): ?> 

        <div class="alert alert-danger mt-5" role="alert">
            <?= $error; ?>
        </div>

        <?php endif; ?>

        <?php if (!$showUserData): ?>

        <div class="card mt-5">
            <div class="card-header">
                Форма обратной связи
            </div>
            <div class="card-body">
 
                <form method="POST" action="/">
                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Текст обращения</label>
                        <textarea class="form-control" id="content" rows="3" name="text"></textarea>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="agree" name="agree">
                        <label class="form-check-label" for="agree">Согласен с обработкой данных</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
 
            </div>
 
        </div>

        <?php else: ?>
 
 
        <div class="card mt-5">
            <div class="card-header">
                Данные формы
            </div>
            <div class="card-body">
 
                <div class="row mb-3">
                    <div class="col-2">Имя:</div>
                    <div class="col-10"><?= $name; ?></div>
                </div>
                <div class="row mb-3">
                    <div class="col-2">Email:</div>
                    <div class="col-10"><?= $email; ?></div>
                </div>
                <div class="row mb-3">
                    <div class="col-2">Текст обращения:</div>
                    <div class="col-10"><?= $text; ?></div>
                </div>
 
                <a href="/" class="btn btn-primary">Обратно к форме</a>
 
            </div>
 
        </div>

        <?php endif; ?>
 
 
 
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
 
</html>