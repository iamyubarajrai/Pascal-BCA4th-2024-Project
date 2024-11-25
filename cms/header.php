<?php
$project_root = "http://localhost:80/pascalpro"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMD - E-Commerce</title>
    <!-- CSS file -->
    <link rel="stylesheet" href="<?php echo $project_root; ?>/cms/assets/style.css" type="text/css">
</head>
<body id="dashboard">
    <header id="header">
        <a href="<?php echo $project_root; ?>/cms/" title="Logo" class="site-logo">Logo</a>
        <div class="profile-box">
            <span class="profile-icon js-drop">
                <svg class="icon"><use xlink:href="#icon-user"></use></svg>
            </span>
            <ul class="profile-list">
                <li><a href="#" title="Account">Account</a></li>
                <li><a href="#" title="Sign out">Sign out</a></li>
            </ul>
        </div>
    </header>
    <div id="sidebar">
        <ul class="menu">
            <li>
                <a href="<?php echo $project_root; ?>/cms/" title="Dashboard">
                    <svg class="icon"><use xlink:href="#icon-dashboard"></use></svg>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" title="Products" class="js-drop">
                    <span>
                        <svg class="icon"><use xlink:href="#icon-shopping"></use></svg>
                        <span>Products</span>
                    </span>
                </a>
                <ul>
                    <li><a href="<?php echo $project_root; ?>/cms/products/list.php" title="All Products">All Products</a></li>
                    <li><a href="<?php echo $project_root; ?>/cms/products/add.php" title="Add Product">Add Product</a></li>
                    <li><a href="<?php echo $project_root; ?>/cms/products/categories.php" title="Categories">Categories</a></li>
                </ul>
            </li>
            <li>
                <a href="#" title="Orders">
                    <svg class="icon"><use xlink:href="#icon-order"></use></svg>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="#" title="Settings">
                    <svg class="icon"><use xlink:href="#icon-cogs"></use></svg>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </div>