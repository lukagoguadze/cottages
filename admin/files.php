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
  <title>Admin</title>
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

    .alert {
      margin: 20px auto;
      color: green;
    }
  </style>
</head>
<body>

<div class="container">
  <h3 class="mb-4 text-center">დაამატე სახლი</h3>
  <form action="add.php" method="POST" enctype="multipart/form-data">
    <label for="title" class="form-label">სათაური</label>
    <input type="text" class="form-control" name="title" required>

    <label for="square_meter" class="form-label">კვადრატული მეტრი</label>
    <input type="number" class="form-control" name="square_meter" required>

    <label for="length" class="form-label">სიგრძე</label>
    <input type="number" class="form-control" name="length" required>

    <label for="width" class="form-label">სიგანე</label>
    <input type="number" class="form-control" name="width" required>

    <label for="bedroom" class="form-label">საძინებელი</label>
    <input type="number" class="form-control" name="bedroom" required>

    <label for="image" class="form-label">სურათი</label>
    <input class="form-control" type="file" name="image" accept="image/*" required>

    <label for="type" class="form-label">სახლის ტიპი</label>
     <select class="form-select" id="exampleSelect" name="type">
      <?php include("delete/selectAllTypes.php"); ?>
     </select>

    <button type="submit" class="btn btn-primary w-100">შენახვა</button>
<a href="admin.php" class="btn btn-secondary mt-3">უკან დაბრუნება</a>

  </form>
</div>

</body>
</html>
