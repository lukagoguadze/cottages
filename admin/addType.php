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
    <title>add</title>
    <link rel="stylesheet" href="../css/bootsrap.css">
    <style>
        body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 30px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .form-label {
      margin-top: 15px;
    }

    .btn-primary {
      margin-top: 25px;
    }

    </style>
</head>
<body>
    <div class="container">
  <h3 class="mb-4 text-center">დაამატე ახალი სახლის ტიპი</h3>
  <form action="delete/addType.php" method="POST" enctype="multipart/form-data">
    <label for="title" class="form-label">სახლის ტიპი</label>
    <input type="text" class="form-control" name="home_type" required>

    <label for="square_meter" class="form-label">აღწერა</label>
    <textarea class="form-control" name="description" required></textarea>

    <button type="submit" class="btn btn-primary w-100">შენახვა</button>
    <a href="admin.php" class="btn btn-secondary mt-3">უკან დაბრუნება</a>

  </form>
    </div>
</body>
</html>