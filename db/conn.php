<?php
    //Development Database Connection
    //$host = '127.0.0.1';
    //$db = 'royale_estate_db';
    //$user = 'root';
    //$pass = '';
    //$charset = 'utf8mb4';

    //Remote Database Connection
    $host = 'remotemysql.com';
    $db = 'w53xDoxATJ';
    $user = 'w53xDoxATJ';
    $pass = 'ICdbrJoNFP';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->insertUser("admin","password");
?>