<?php

require_once ('connect.php');

global $connect;

$user_name = $_COOKIE['user'];

$user = mysqli_query($connect, "SELECT * FROM user WHERE name = '$user_name'");
$user = mysqli_fetch_assoc($user);

$user_id = $user['id'];

$text = addcslashes($_POST['text'],"'");

$article_id = $_GET['article'];
mysqli_query($connect, "INSERT INTO `comment` (`id`, `user_id`, `article_id`, `creation_date`, `text`) VALUES (NULL, '$user_id', '$article_id', CURRENT_TIMESTAMP, '$text')");
mysqli_close($connect);
header("Location: ../article.php?article=".$article_id);

