<?php

function connectionToDB() {
    $dsn = "mysql:host=localhost;dbname=bordoazk_sss;charset = utf8";
    $usr = "bordoazk_sss";
    $password = "*RuM9cMu";
    try {
        $pdo = new PDO($dsn, $usr, $password);
    } catch (PDOException $e) {

        echo "Не удалось подключиться к базе данных: " . $e->getMessage();
        exit;
    }
    return $pdo;

}

// function getArticles($pdo)
// {







//     return $article;
// }
