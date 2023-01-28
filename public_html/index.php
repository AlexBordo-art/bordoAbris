<?php
include 'function.php';
include 'class.php';

$pdo = connectionToDB();

$db = new Q($pdo);

$article = $db -> getAll();



// $article = getArticles($pdo);


include 'view.php';
?>