<?php
include "../check.php";
include "../connection.php";
$sql = "SELECT id, fullname, email FROM users limit 1";
$res = mysqli_query($conn, $sql); ?>
<?php include "../header.php"; ?>
    <div class="data-box">
        <h1>All Users</h1>
        <?php echo (isset($_SESSION['msg']) && $_SESSION['msg'] != '') ? $_SESSION['msg'] : ''; ?>
        <table cellpadding="6px" cellspacing="0" border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Fullname</th>
                    <th>E-Mail/Username</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0;
                while($row = mysqli_fetch_assoc($res)): 
                    $i++;
                    ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['email'];?></td>
                    <td>
                        <a href="./edit.php?id=<?php echo $row['id'];?>" class="btn">Edit</a>
                        <a href="./delete.php?id=<?php echo $row['id'];?>" class="btn btn--danger">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
<?php include "../footer.php"; ?>
<?php $_SESSION['msg'] = ''; ?>