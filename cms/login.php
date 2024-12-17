<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | User Management</title>
    <link href="./assets/style.css" rel="stylesheet">
</head>
<body>
    <div class="form-box container container--small">
        <h1 class="form-box__title">Login User</h1>
        <form action="./login-auth.php" method="POST" name="usermgmt">
            <div class="field-group">
                <label for="email">E-Mail</label>
                <input type="email" name="email" id="email" value="">
            </div>
            <div class="field-group">
                <label for="pwd">Password</label>
                <input type="password" name="pwd" id="pwd" value="">
            </div>
            <button type="submit" name="submit">Login</button>
        </form>
    </div>
</body>
</html>