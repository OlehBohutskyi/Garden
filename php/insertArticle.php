<?php

require_once 'connect.php';

global $connect;

$name = addcslashes($_POST['name'],"'");
$info = addcslashes($_POST['info'],"'");
$text = addcslashes($_POST['text'],"'");
$media = addcslashes($_POST['media'],"'");
$video = $_POST['video'];

$userName = $_COOKIE['user'];

if ($video == "on"){
    $bool = 1;
}else
    $bool = 0;

$user = mysqli_query($connect, "SELECT * FROM user WHERE name = '$userName'");

$user = mysqli_fetch_assoc($user);

$userId = $user['id'];

mysqli_query($connect, "INSERT INTO `article` (`id`, `name`, `info`, `text`, `user_id`, `creation_date`, `media`, `video`) VALUES (NULL, '$name', '$info', '$text', '$userId', CURRENT_TIMESTAMP, '$media', '$bool')");
mysqli_close($connect);
header('Location: ../admin_panel.php?page=2');