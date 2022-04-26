<?php

require_once 'connect.php';

global $connect;

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `article` WHERE `article`.`id` = $id");

mysqli_close($connect);

header('Location: ../admin_panel.php?page=2');