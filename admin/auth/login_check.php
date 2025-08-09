<?php
session_start();

$admin_username = "admin";
$admin_password = "123456"; 
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $admin_username && $password === $admin_password) {
    $_SESSION['admin'] = true;
    header("Location: ../admin.php");
    exit();
} else {
    echo "უპსსსსსსს :( შენიდღე არაა ბრო. <a href='login.php'>დააკლეკე->კიდევ სცადე შენ უბრალოდ არ უნდა დანებდე</a>";
}
