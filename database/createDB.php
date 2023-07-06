<?php


$conn = mysqli_connect('localhost', 'root', '');

$sql = "CREATE DATABASE IF NOT EXISTS simplyDB";

if($conn->query($sql) !== True){
    die("Create database error");
}