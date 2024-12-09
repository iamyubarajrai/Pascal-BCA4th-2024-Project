<?php session_start();
// print_r($_GET);
include "../connection.php";

$ids = implode(",", $_SESSION['ids']); //Array to normal data conversion 

$sql = "SELECT id, fullname, email FROM users WHERE id NOT IN ($ids) limit 1";
$res = mysqli_query($conn, $sql);

if($res->num_rows > 0):
    while($row = mysqli_fetch_assoc($res)): 
        array_push($_SESSION['ids'], $row['id']); ?>
    <tr>
        <td>1</td>
        <td><?php echo $row['fullname']; ?></td>
        <td><?php echo $row['email'];?></td>
        <td>
            <a href="./edit.php?id=<?php echo $row['id'];?>" class="btn">Edit</a>
            <a href="./delete.php?id=<?php echo $row['id'];?>" class="btn btn--danger">Delete</a>
        </td>
    </tr>
    <?php endwhile; 
else:
    echo (!isset($_SESSION['data_end'])) ? "Oops! data not found." : "";
    $_SESSION['data_end'] = true;
endif;
?>
