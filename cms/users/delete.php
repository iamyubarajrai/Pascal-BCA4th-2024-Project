<?php session_start();
include "../connection.php";
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id=$id";
    $res = mysqli_query($conn, $sql);

    if($res) $_SESSION['msg'] = "User deleted successfully.";
    else $_SESSION['msg'] = "Oops! User deletion failed.";
}
header("location: ./index.php");
