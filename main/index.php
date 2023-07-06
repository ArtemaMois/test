<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css"/>
    <title>PHP</title>
</head>

<body>
    <h1>Форма</h1>
    <div class="create">
        <form action="answer.php" method="post">
            <p>Заполните форму</p>
            <p>Имя:</p><input class="inputarea" type="text" name="name" placeholder="Имя"  required>
            <p>Фамилия:</p><input class="inputarea" type="text" name="surname" placeholder="Фамилия"  required>
            <p>Пароль:</p><input class="inputarea" type="password" name="password" placeholder="Пароль"  required><br>
            <p><button type="submit">Отправить</button></p>
        </form>
    </div>
    <div class="read">
        <form action="answer.php" method="get">
            <button type="submit">Показать данные</button>
        </form>
    </div>
</body>

</html>