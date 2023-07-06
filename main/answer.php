<?php
        require_once "../database/createDB.php";
        require_once "../database/createtable.php";
        require_once "../database/connect.php";
        require_once '../database/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/answer.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="head">
        <div class="title">INFO FROM DATABASE</div>
    </div>
    <div class="answer">
        <?php
        $request =  $_SERVER['REQUEST_METHOD'];
        if ($request == 'GET') {
            Select($connect);
        } elseif ($request == 'POST') {
            Create($connect, $_POST);
            header("Location: http://test/index.php");
        }
        ?>
    </div>
</body>

</html>