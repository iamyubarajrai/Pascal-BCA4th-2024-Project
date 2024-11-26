<?php session_start();
if(isset($_POST['submit'])) {
    // print_r($_POST);
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];
    $addr = $_POST['addr'];

    if($pwd == $cpwd) {
        $pwdHash = sha1($pwd); //Hashing algorithms: MD5(), SHA1(), BCrypt() etc
        $query = "INSERT INTO tbl_users (fullname, phone, email, address, password) VALUES('$fname', '$phone', '$email', '$addr', '$pwdHash')"; //SQL Statement 
        include "../connection.php";
        $res = mysqli_query($conn, $query);

        if($res) $_SESSION['msg'] = "User Registered successfully.";
        else $_SESSION['msg'] = "Oops! User Registration failed.";
    } else {
        $_SESSION['msg'] = "Password not matched.";
    }   
} else {
    $_SESSION['msg'] = "You are trying to access unauthorized page.";
}
header("location: ./add.php");