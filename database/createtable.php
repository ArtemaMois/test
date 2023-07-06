<?php

$conn = mysqli_connect('localhost', 'root', '', 'simplyDB');

$sql = "CREATE TABLE IF NOT EXISTS firstDb(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        surname VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL)";
if ($conn->query($sql) !== True) {
    die ("Error in Createtable");
}
