

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css"/>
    <title>PHP</title>
</head>

<body>
    <h1>Форма</h1>
    <div class="input">
        <form action="answer.php" method="post">
            <p>Выберите действие</p>
            <p><input type="radio" name="button" value="insert">Добавить</input></p>
            <p><input type="radio" name="button" value="select">Вывод данных</input></p>
            <p><input type="radio" name="button" value="update">Обновить данные</input></p>
            <p>Имя для обновления: <input type="text" name="updatename" placeholder="Введите имя" class="input__area"></p>
            <p><input type="radio" name="button" value="delete">Удалить пользователя</input></p>
            <p>Имя для удаления: <input type="text" name="deletename" placeholder="Введите имя" class="input__area"></p>
            <p>Заполните форму</p>
            <p>Имя:</p><input type="text" name="name" placeholder="Имя" class="input__area" required>
            <p>Фамилия:</p><input type="text" name="surname" placeholder="Фамилия" class="input__area" required>
            <p>Пароль:</p><input type="password" name="password" placeholder="Пароль" class="input__area" required><br>
            <p><button type="submit">Отправить</button></p>
         </form>
    </div>
</body>

</html>