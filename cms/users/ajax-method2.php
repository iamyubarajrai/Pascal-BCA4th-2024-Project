<?php session_start();
// print_r($_GET);
include "../connection.php";

$ids = implode(",", $_GET['ids']); //Array to normal data conversion 
$ids_count = count($_GET['ids']);

$sql = "SELECT id, fullname, email FROM users WHERE id NOT IN ($ids) limit 1";
$res = mysqli_query($conn, $sql);
$last_id = [];
$output = "";
if($res->num_rows > 0):
    $i = 0;
    while($row = mysqli_fetch_assoc($res)): 
        array_push($last_id, $row['id']);
        $SN = $ids_count + 1;
        $output .= "<tr>
            <td>{$SN}</td>
            <td>{$row['fullname']}</td>
            <td>{$row['email']}</td>
            <td>
                <a href='./edit.php?id={$last_id[$i]}' class='btn'>Edit</a>
                <a href='./delete.php?id={$last_id[$i]}' class='btn btn--danger'>Delete</a>
            </td>
        </tr>";
        $i++;
    endwhile; 
else:
    if($res->field_count == $ids_count) {
        $output = "finish";
    } else {
        $output = "";
    }
endif;
echo json_encode(['id' => $last_id, 'data' => $output]);
