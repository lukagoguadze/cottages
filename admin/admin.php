<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: auth/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="../css/bootsrap.css">
</head>
<body>
    <style>
        .link-contaner{
            text-align: center;
        }
    </style>
    <div class="link-contaner">
      <a href="files.php" class="btn btn-secondary mt-3">სახლის დამატება</a>
      <a href="deletePage.php" class="btn btn-secondary mt-3">სახლის წაშლა</a>
      <a href="addType.php" class="btn btn-secondary mt-3">სახლის ტიპის დამატება</a>
      <a class="btn btn-danger mt-3" href="auth/logout.php">Logout</a>

    </div>
</body>
</html>