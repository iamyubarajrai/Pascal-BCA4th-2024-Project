<?php session_start();
include "../connection.php";

if(isset($_POST['submit'])) {
    // $id = $_GET['id']; //takes id from "Query String Parameter"
    $id = $_POST['id']; ////takes id from field with POST method
    //print_r($_POST);
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $addr = $_POST['addr'];

    $sql = "UPDATE users SET fullname='$fname', phone='$phone', address='$addr' WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if($res) $_SESSION['msg'] = "User updated successfully.";
    else $_SESSION['msg'] = "User updation failed.";
}
header("location: ./edit.php");