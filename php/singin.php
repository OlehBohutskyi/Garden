<?php

require_once 'connect.php';

global $connect;

$userName = addcslashes($_POST['userName'],"'");
$password = addcslashes($_POST['password'],"'");
$password = md5($password.'_-12e0ife0=-12?wad,wowe');

$user = mysqli_query($connect, "SELECT * FROM user WHERE name = '$userName'");

$user = mysqli_fetch_assoc($user);
mysqli_close($connect);
if ($password == $user['password']) {
    setcookie('user',$user['name'],time()+3600*24,"/");
    setcookie('role',$user['role'],time()+3600*24,"/");
    header("Location: ../index.php");


}
else header("Location: ../signin.php?wrong=1");