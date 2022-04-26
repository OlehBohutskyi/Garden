<?php

require_once ('connect.php');

global $connect;

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM user WHERE id = '$id'");
mysqli_close($connect);

header("Location: ../admin_panel.php?page=3");