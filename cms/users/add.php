<?php session_start();
 include "../check.php"; 
include "../header.php"; ?>
    <div class="form-box container container--small">
        <h1 class="form-box__title">Create User</h1>
        <?php echo (isset($_SESSION['msg']) && $_SESSION['msg'] != '') ? $_SESSION['msg'] : ''; ?>
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
                <input type="email" name="email" id="email" value="">
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
<?php include "../footer.php"; ?>