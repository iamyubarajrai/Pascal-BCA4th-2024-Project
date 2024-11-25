<?php require("../connection.php");
if(isset($_POST['submit'])) {

    // echo "<pre>";
    // print_r($_POST);
    // print_r($_FILES);
    // echo "</pre>";
    
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $detail = $_POST['detail'];
    $excerpt = $_POST['excerpt'];
    $cat = $_POST['cat'];
    $rprice = $_POST['regular_price'];
    $dprice = $_POST['discount_price'];

    $file = $_FILES['img'];
    $file_name = $_FILES['img']['name'];
    $file_size = $_FILES['img']['size'];
    $mime_type = $_FILES['img']['type'];
    $file_tempname = $_FILES['img']['tmp_name'];

    if($file_size < 200000 ) {
        $mime_type_arr = ['image/jpeg', 'image/jpg', 'image/gif', 'image/png'];
        if(in_array($mime_type, $mime_type_arr)) {
            move_uploaded_file($file_tempname, "../assets/uploads/" . $file_name);
        } else {
            echo "File formate error";
        }
    } else {
        echo "File size error";
    }

}