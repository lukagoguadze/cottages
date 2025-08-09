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
    <link rel="stylesheet" href="../css/bootsrap.css">
    <title>Document</title>
</head>
<body>
    <style>
        .alert{
            text-align: center;
        }
    </style>
    <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("../dbconnect.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $square_meter = $_POST["square_meter"];
    $length = $_POST["length"];
    $width = $_POST["width"];
    $bedroom = $_POST["bedroom"];
    $type = $_POST["type"];

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === 0) {
         $originalName = $_FILES["image"]["name"];
         $extension = pathinfo($originalName, PATHINFO_EXTENSION);
         $imageName = uniqid("img_", true) . "." . $extension;

    $targetDir = "../home-images/";
    $targetPath = $targetDir . $imageName;

    if (!is_dir($targetDir)) {

        mkdir($targetDir, 0777, true);
    }
        if (file_exists($targetPath)) {
            $message = "Image already exists in the folder.";
        } else {
            $stmt = $conn->prepare("SELECT COUNT(*) FROM house_description WHERE img_path = ?");
            $stmt->bind_param("s", $imageName);
            $stmt->execute();
            $stmt->bind_result($count);
            $stmt->fetch();
            $stmt->close();

            if ($count > 0) {
                $message = "ფოტოს სახელი ამ სახელით უკვე დარეგისტრირებულია,ცადეთ სხვა  სახელით.";
            } else {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath)) {
                    $stmt = $conn->prepare("INSERT INTO house_description (house_name, square_meter, length, width, bedroom, img_path, gl_house_type_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
                    if (!$stmt) {
                        die("Prepare failed: " . $conn->error);
                    }
                    $stmt->bind_param("siiiisi", $title, $square_meter, $length, $width, $bedroom, $imageName, $type);
                    if ($stmt->execute()) {
                        $message = ":) წარმატებით დაემატა.";
                    } else {
                        $message = "Insert failed: " . $stmt->error;
                    }
                    $stmt->close();
                } else {
                    $message = "Failed to move uploaded image. Check folder permissions.";
                }
            }
        }
    } else {
        $message = "No image selected or upload error: " . $_FILES["image"]["error"];
    }

echo '<div class="alert">' . $message . '<br>
      <a href="admin.php" class="btn btn-secondary mt-3">უკან დაბრუნება</a>
      </div>';

}
?>
</body>
</html>
