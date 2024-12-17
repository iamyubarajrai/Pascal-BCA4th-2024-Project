<?php if(!isset($_SESSION)) session_start();
if(!isset($_SESSION['login']) && $_SESSION['login'] == false) {
    header("location: http://localhost/pascalpro/cms/login.php");
}