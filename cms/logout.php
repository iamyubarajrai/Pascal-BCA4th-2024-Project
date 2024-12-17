<?php 
session_start();
$_SESSION['user_id'] = NULL;
$_SESSION['login'] = false;
session_destroy();
header("location: ./login.php");