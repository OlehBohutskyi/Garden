<?php
setcookie('user', $_COOKIE['user'],time()-3600*24,"/");
setcookie('role', $_COOKIE['role'],time()-3600*24,"/");

header("Location: index.php");

