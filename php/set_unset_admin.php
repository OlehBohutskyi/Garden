<?php

require_once ('connect.php');

global $connect;

$id = $_GET['id'];

$user = mysqli_query($connect, "SELECT * FROM user WHERE id ='$id'");
$user = mysqli_fetch_assoc($user);


if ($user['role'] == 'user'){
    mysqli_query($connect, "UPDATE user SET role = 'admin' WHERE id = '$id'");
}
else {
    mysqli_query($connect, "UPDATE user SET role = 'user' WHERE id = '$id'");
}
mysqli_close($connect);
header("Location: ../admin_panel.php?page=3");
