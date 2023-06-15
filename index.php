<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel = "stylesheet" href = "style.css"/>
</head>

<body>
    <h1>Форма</h1>
    <div class="input">
        <form action="check_data.php" method="post">
            <div><p>Имя:</p><input type="text" name="name" placeholder="Имя"></div>
            <div><p>Фамилия:</p><input type="text" name="surname" placeholder="Фамилия"></div>
            <div><p>Пароль:</p><input type="password" name="password" placeholder="Пароль"></div><br>
            <button type="submit">Отправить</button>
        </form>
    </div>
    <?php
    ?>
</body>

</html>