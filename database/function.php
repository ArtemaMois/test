<?php

require_once "../database/createDB.php";
require_once "../database/createtable.php";
require_once "../database/connect.php";

function Select($connect)
{
    $sql = 'SELECT * FROM firstDB';

    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<br>" . "id: " . $row['id'] . "<br>" . "Имя: " . $row['name'] . "<br>" . "Фамлия: " . $row['surname'] . "<br>" . "Пароль: " . $row['password'] . "<br>";
        }
    }
}

function Create($connect, array $value)
{

    $sql = 'INSERT INTO ' . 'firstDb' . ' (name, surname, password) ';
    $row = " '" . $value['name'] . "', '" . $value['surname'] . "', '" . $value['password'] . "'";
    $sql .= ' ' . 'VALUES' . '(' . $row . ')';
    if ($connect->query($sql) !== True) {
        die('Error');
    }
}
