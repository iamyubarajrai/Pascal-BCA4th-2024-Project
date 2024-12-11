<?php session_start();
include "../connection.php";
$last_id = $_GET['lastId'];

$sql = "SELECT id, fullname, email FROM users WHERE id > $last_id limit 1";
$res = mysqli_query($conn, $sql);
$output = "";
if($res->num_rows > 0):
    while($row = mysqli_fetch_assoc($res)): 
        $last_id = $row['id'];
        $output .= "<tr>
            <td>#</td>
            <td>{$row['fullname']}</td>
            <td>{$row['email']}</td>
            <td>
                <a href='./edit.php?id={$last_id}' class='btn'>Edit</a>
                <a href='./delete.php?id={$last_id}' class='btn btn--danger'>Delete</a>
            </td>
        </tr>";
    endwhile; 
else:
    $output = "finish";
endif;
echo json_encode(['id' => $last_id, 'data' => $output, 'last_id' => $last_id]);
