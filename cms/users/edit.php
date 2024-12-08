<?php session_start();
include "../connection.php";
if(!isset($_GET['id'])) header("location: ./list.php");

$id = $_GET['id'];
$sql = "SELECT fullname, email, phone, address FROM users WHERE id=$id";
$res = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit | User Management</title>
    <link href="../assets/style.css" rel="stylesheet">
</head>
<body>
    <div class="form-box container container--small">
        <h1 class="form-box__title">Update User</h1>
        <?php while($row = mysqli_fetch_assoc($res)): 
            $fullname = isset($row['fullname']) ? $row['fullname'] : '';
            $address = isset($row['address']) ? $row['address'] : '';
            $phone = isset($row['phone']) ? $row['phone'] : '';
            $email = isset($row['email']) ? $row['email'] : '';
            ?>
        <form action="./update.php" method="POST" name="usermgmt">
            <div class="field-group">
                <label for="fname">Full Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo $fullname; ?>">
            </div>
            <div class="field-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>">
            </div>
            <div class="field-group">
                <label for="email">E-Mail</label>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>" disabled>
            </div>
            <div class="field-group">
                <label for="addr">Address</label>
                <input type="text" name="addr" id="addr" value="<?php echo $address; ?>">
            </div>
            <button type="submit" name="submit">Update</button>
        </form>
        <?php endwhile;  ?>
    </div>
</body>
</html>