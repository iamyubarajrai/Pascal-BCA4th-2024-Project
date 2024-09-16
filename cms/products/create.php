<?php require("../connection.php");
if(isset($_POST['submit'])) {
    /*
    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);
    echo "</pre>";
    */
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $detail = $_POST['detail'];
    $excerpt = $_POST['excerpt'];
    $cat = $_POST['cat'];
    $rprice = $_POST['regular_price'];
    $dprice = $_POST['discount_price'];
}