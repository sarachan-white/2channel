<?php

$user = "root";
$pass = "";

//DBと接続
try {
    $pdo = new PDO('mysql:host=localhost;dbname=2channel', $user, $pass);
    //echo "DBとの接続に成功しました";
} catch (PDOException $error) {
    echo $error->getMessage();
}
