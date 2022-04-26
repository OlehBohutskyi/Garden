<?php

require_once ('connect.php');

global $connect;

$blocks = $_POST['block'];
$articles = mysqli_query($connect, 'SELECT * FROM article');
$articles = mysqli_fetch_all($articles);

$article_id = 0;
foreach ($blocks as $key => $value){
    foreach ($articles as $article){
        if ($value == $article[1]) $article_id = $article[0];
    }
    mysqli_query($connect, "UPDATE block SET article_id = '$article_id' WHERE id = '$key'");
}

mysqli_close($connect);

header("Location: ../admin_panel.php?page=1");
