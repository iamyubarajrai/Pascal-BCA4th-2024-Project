<?php session_start();
if(isset($_POST['submit'])) {
    //print_r($_POST);
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwdHash = sha1($pwd);

    include "./connection.php";
    $sql = "SELECT id, email, password FROM users WHERE email='$email'";
    $res = mysqli_query($conn, $sql);
    if($res) {
        while($row = mysqli_fetch_assoc($res)) {
            if($row['password'] == $pwdHash) {
                $_SESSION['login'] = true;
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['msg'] = "Thank you!";
                header("location: ./index.php");
            }
        }
    } else {
        $_SESSION['user_id'] = NULL;
        $_SESSION['login'] = false;
        $_SESSION['msg'] = "User not found!";
        header("location: ./login.php");
    }
}