<?php 

$host = "localhost";
$user = "root";
$pass = ""; 
$dbname = "tarefaagillis";
$port = "3306";

$conne = new PDO ("mysql:
            host=$host;
            port=$port;
            dbname=". $dbname, 
            $user, 
            $pass);

if(!$conne){
    die('Não foi possível conectar ao MySql Server');
    }

