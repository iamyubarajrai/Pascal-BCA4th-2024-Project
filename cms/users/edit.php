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
        <form action="./update.php" method="POST" name="usermgmt">
            <div class="field-group">
                <label for="fname">Full Name</label>
                <input type="text" name="fname" id="fname" value="">
            </div>
            <div class="field-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" value="">
            </div>
            <div class="field-group">
                <label for="email">E-Mail</label>
                <input type="email" name="email" id="email" value="" disabled>
            </div>
            <div class="field-group">
                <label for="addr">Address</label>
                <input type="text" name="addr" id="addr" value="">
            </div>
            <button type="submit" name="submit">Update</button>
        </form>
    </div>
</body>
</html>