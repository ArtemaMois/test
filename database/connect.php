<?php

$connect = new mysqli('localhost', 'root','', 'simplyDB');

if($connect->connect_error){
    die ("Error connect to database");
}