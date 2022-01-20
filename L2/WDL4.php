<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'products2_db';

//Set DSN

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

//Create a PDO instance

$pdo = new PDO($dsn, $user, $password);

//var_dump($pdo);

