<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="style.css" />
</head>
<body>
    <h1>Ответ</h1>
    <div class="answer">
        <?php

            $servername = 'localhost';
            $username = 'root';
            $dbname = 'testDB';

            class DataBase{
                public $servername;
                public $username;
                public $password;
                public $dbname;


            public function __construct($servername, $username, $password, $dbname)
            {
                $this->servername = $servername;
                $this->username = $username;
                $this->password = $password;
                $this->dbname = $dbname;
            }


            public function CreateDB(){
                $conn = new mysqli($this->servername, $this->username, $this->password);
                if($conn->connect_error){
                    echo $conn->connect_error;
                }
                $sql = "CREATE DATABASE IF NOT EXISTS testDB";
                if($conn->query($sql)!== True){
                    echo "Create Database error";
                }
            }


            public function Connection(){
                $conn = new mysqli($this->servername, $this->username, $this->password, 'testDB');
                if($conn->connect_error){
                    exit ("Error" .$conn->connect_error);
                }
                return $conn;;
            }


            public function Createtable($conn){
                $sql = "CREATE TABLE IF NOT EXISTS users(
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(30) NOT NULL,
                    surname VARCHAR(30) NOT NULL,
                    password VARCHAR(30) NOT NULL)";
                    if($conn->query($sql)!==True){
                        echo "Error in Createtable";
                    }
            }


            public function Insert(array $val, $conn){
                if(!isset($val)){
                    die ("Insert error");
                }
                $sql = 'INSERT INTO '.'users'.' (name, surname, password) ';
                $row = " '".$val['name']."', '".$val['surname']."', '".$val['password']."'";
                $sql .= ' '.'VALUES'.'('.$row.')';
                if($conn->query($sql) !== True){
                    echo "Error Insert 1";
                }
            }


            public function Select($conn){
                $sql = 'SELECT * FROM users';
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()){
                        echo "<br>"."id: ".$row['id']."<br>"."Имя: ". $row['name']."<br>"."Фамлия: ".$row['surname']."<br>"."Пароль: ".$row['password']."<br>";
                    }
                }
            }


            public function Update( $conn, array $value){
                $newname = $value['name'];
                $newsurname = $value['surname'];
                $newpassword = $value['password'];
                $oldname = $value['updatename'];
                $sql = "UPDATE users SET name='$newname', surname = '$newsurname', password='$newpassword' WHERE name='$oldname'";
                if($conn->query($sql)!==True){
                    echo "Error in Update";
                }

            }


            public function Delete($dbname, $conn, $value){
                $sql = "DELETE FROM $dbname WHERE name='$value'";
                if($conn->query($sql) !== True){
                    exit("Delete error");
                }
            }

        }

            (new DataBase($servername, $username, '', $dbname))->CreateDB();
            (new DataBase($servername, $username, '', $dbname))->Connection();
            (new DataBase($servername, $username, '', $dbname))->Createtable((new DataBase($servername, $username, '', $dbname))->Connection());
            if($_POST['button'] == 'insert'){
                (new DataBase($servername, $username, '', $dbname))->Insert($_POST,(new DataBase($servername, $username, '', $dbname))->Connection());
            }

            elseif($_POST['button'] == 'select'){
                (new DataBase($servername, $username, '', $dbname))->Select((new DataBase($servername, $username, '', $dbname))->Connection());
            }

            elseif($_POST['button'] == 'update'){
                (new DataBase($servername, $username, '', $dbname))->Update((new DataBase($servername, $username, '', $dbname))->Connection(),$_POST);
            }

            elseif($_POST['button'] == 'delete'){
                (new DataBase($servername, $username, '', $dbname))->Delete('users', (new DataBase($servername, $username, '', $dbname))->Connection(), $_POST['name']);
            }
        ?>
    </div>

</body>
</html>