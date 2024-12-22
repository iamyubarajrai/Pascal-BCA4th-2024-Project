<?php include "./inc/connection.php"; 
$sql = "SELECT * FROM products LIMIT 4";
$res = mysqli_query($conn, $sql); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage | College Project</title>
    <link href="./assets/style.css" rel="stylesheet">
</head>
<body>
    <h1>Collge Project Landing...</h1>
    <h2>Featured Products</h2>
    <div class="grid-box">
        <?php while($data = mysqli_fetch_assoc($res)):
            print_r($data); ?>
            <div class="grid-item">
                <h3><?php echo $data['title']; ?></h3>
                <p><?php echo $data['description']; ?></p>
                <img src="../cms/assets/uploads/<?php echo $data['image']; ?>" alt="">
            </div>
        <?php endwhile; ?>
    </div>
    <script src="./assets/script.js"></script>
</body>
</html>