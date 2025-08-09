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
    <title>delete home</title>
      <link rel="stylesheet" href="../css/red.css">
  <link href="../css/bootsrap.css" rel="stylesheet">
</head>
<body>
    <a href="admin.php" class="btn btn-secondary mt-3">უკან დაბრუნება</a>
    <div class="container my-5 content">
  <h2 class="text-center mb-4">სახლების სია</h2>
  <div class="row g-4 justify-content-center">




  </div>
</div>
<script src="delete/delHome.js"></script>
<script>


</script>
</body>
</html>