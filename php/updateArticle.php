<?php


require_once 'connect.php';

global $connect;

$name = addcslashes($_POST['name'],"'");
$info = addcslashes($_POST['info'],"'");
$text = addcslashes($_POST['text'],"'");
$media = addcslashes($_POST['media'],"'");
$video = addcslashes($_POST['video'],"'");

$id = $_GET['id'];


if ($video == "on") {
    $bool = 1;
} else
    $bool = 0;

mysqli_query($connect, "UPDATE `article` SET `name` = '$name', `info` = '$info', `text` = '$text', `media` = '$media', `video` = '$bool' WHERE `article`.`id` = $id");
mysqli_close($connect);
header('Location: ../admin_panel.php?page=2');