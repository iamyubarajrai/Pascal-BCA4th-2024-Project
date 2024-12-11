<?php session_start();
include "../connection.php";

$sql = "SELECT id, fullname, email FROM users limit 1";
$res = mysqli_query($conn, $sql);

$_SESSION['data_end'] = false;
$last_id = 0; ?>
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
                    $last_id = $row['id']; ?>
                <tr>
                    <td>#</td>
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
        <div class="data-finish"></div>
        <a href="#" title="Load More" class="js-load">Load More</a>
    </div>

    <script type="text/javascript">
        let jsLoad = jQuery(".js-load"),
            appBox = jQuery(".data-box tbody"),
            appBoxInfo = jQuery(".data-finish");

        let lastId = <?php echo $last_id; ?>;
        jsLoad.on("click", (e) => {
            e.preventDefault(); //preventing page reload/refresh
            $.ajax({
                url: "./ajax-method3.php",
                method: "GET",
                dataType: "TEXT", //TEXT, JSON
                data: {lastId},
                success: function(res) {
                    lastId = JSON.parse(res).last_id;
                    if(JSON.parse(res).data != 'finish') {
                        appBox.append(JSON.parse(res).data);
                    } else {
                        appBoxInfo.html("<em>No more data available.</em>");
                    }
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