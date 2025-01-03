<?php session_start();
include "../check.php";
include "../connection.php";
if(!isset($_GET['id'])) header("location: ./index.php");

$id = $_GET['id'];
$sql = "SELECT fullname, email, phone, address FROM users WHERE id=$id";
$res = mysqli_query($conn, $sql);
?>
<?php include "../header.php"; ?>
    <div class="form-box container container--small">
        <h1 class="form-box__title">Update User</h1>
        <?php echo (isset($_SESSION['msg']) && $_SESSION['msg'] != '') ? $_SESSION['msg'] : ''; ?>
        <?php while($row = mysqli_fetch_assoc($res)): 
            $fullname = isset($row['fullname']) ? $row['fullname'] : '';
            $address = isset($row['address']) ? $row['address'] : '';
            $phone = isset($row['phone']) ? $row['phone'] : '';
            $email = isset($row['email']) ? $row['email'] : '';
            ?>
        <form action="./update.php?id=<?php echo $id; ?>" method="POST" name="usermgmt">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
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
<?php include "../footer.php"; ?>