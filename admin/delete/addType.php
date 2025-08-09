
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
    <link rel="stylesheet" href="../../css/bootsrap.css">
    <style>
    .contaner{
        width: 100%;
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="contaner">
    <?php

include("../../dbconnect.php");

$type = $_POST["home_type"];
$desc = $_POST["description"];

$stm1 = $conn->prepare("INSERT INTO gl_house_type(house_type) VALUES(?)");
$stm1->bind_param("s", $type);

if ($stm1->execute()) {
    echo ":) წარმატებით დაემატა.<br>";

    $last_id = $conn->insert_id;

    $stm2 = $conn->prepare("INSERT INTO gl_house_type_desc(house_type_desc, gl_house_type_id) VALUES(?, ?)");
    $stm2->bind_param("si", $desc, $last_id);

    if ($stm2->execute()) {
        echo ':) წარმატებით დაემატა.<br>
        <a href="../admin.php" class="btn btn-secondary mt-3">უკან დაბრუნება</a>';
    } else {
        echo "error: " . $stm2->error;
    }

    $stm2->close();

} else {
    echo "error: " . $stm1->error;
}

$stm1->close();
$conn->close();
?>
</div>
</body>
</html>
