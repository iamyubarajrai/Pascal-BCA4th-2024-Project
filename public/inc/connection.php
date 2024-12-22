<?php 
$conn = new mysqli("127.0.0.1", "root", "", "db_ppro");
if(!$conn) {
    die("Database connection failed!");
}