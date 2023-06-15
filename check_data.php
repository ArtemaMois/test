<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check_post</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <h1>Содержание формы</h1>
    <div class="content">
    <?php
    $servername = 'localhost';
    $username = 'root';
    $DBpassword = '';
    $DBname = 'testdb';
    $conn = new mysqli($servername, $username, $DBpassword, $DBname);
    if ($conn->connect_error) {
        die(" Error: " . $conn->connect_error);
    }
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, surname, password)
            VALUE ('$name','$surname', '$password')";
    if ($conn->query($sql) == True){
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<br> id: " . $row["id"] . "<br> Имя: " . $row["name"] . "<br> Фамилия: " . $row["surname"] . "<br> Пароль: " . md5($row["password"]) . "<br>";
            }
        }
    }
    else {
        echo "Error";
    }
    ?>
    </div>
   

</body>

</html>