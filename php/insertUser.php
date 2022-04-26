<?php

require_once 'connect.php';

global $connect;

$userName = addcslashes($_POST['userName'],"'");
$password = addcslashes($_POST['password'],"'");

$password = md5($password.'_-12e0ife0=-12?wad,wowe');

mysqli_query($connect, "INSERT INTO `user` (`id`, `name`, `password`, `role`, `reg_date`) VALUES (NULL, '$userName', '$password', 'user', CURRENT_TIMESTAMP)");

mysqli_close($connect);
header('Location: ../signin.php');