<?php session_start();
include "../connection.php";
$sql = "SELECT id, fullname, email FROM users limit 1";
$res = mysqli_query($conn, $sql);
// $ids = [];
$_SESSION['ids'] = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users | User Management</title>
    <script src="../assets/jquery.min.js"></script>
</head>
<body>
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
                <?php while($row = mysqli_fetch_assoc($res)): 
                    //print_r($row);
                    array_push($_SESSION['ids'], $row['id']);
                    ?>
                <tr>
                    <td>1</td>
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
        <a href="#" title="Load More" class="js-load">Load More</a>
    </div>

    <script type="text/javascript">
        let jsLoad = jQuery(".js-load"),
            appBox = jQuery(".data-box tbody");
        jsLoad.on("click", (e) => {
            e.preventDefault(); //preventing page reload/refresh
            $.ajax({
                url: "./ajax.php",
                method: "GET",
                data: {ids: <?php echo json_encode($_SESSION['ids']); ?>},
                success: function(res) {
                    // console.log(res);
                    appBox.append(res);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });
    </script>
</body>
</html>
<?php $_SESSION['msg'] = ''; ?>