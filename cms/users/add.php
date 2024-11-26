<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add | User Management</title>
    <link href="../assets/style.css" rel="stylesheet">
</head>
<body>
    <div class="form-box container container--small">
        <h1 class="form-box__title">Create User</h1>
        <form action="./create.php" method="POST" name="usermgmt">
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
                <input type="text" name="email" id="email" value="">
            </div>
            <div class="field-group">
                <label for="pwd">Password</label>
                <input type="password" name="pwd" id="pwd" value="">
            </div>
            <div class="field-group">
                <label for="cpwd">Confirm Password</label>
                <input type="password" name="cpwd" id="cpwd" value="">
            </div>
            <div class="field-group">
                <label for="addr">Address</label>
                <input type="text" name="addr" id="addr" value="">
            </div>
            <button type="submit" name="submit">Register</button>
        </form>
    </div>
</body>
</html>