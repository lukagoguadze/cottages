<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: auth/login.php");
    exit();
}

header("Content-Type: application/json");
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['id']) || !isset($data['image'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit;
}

include("../../dbconnect.php");
$id = $data['id'];
$image = $data['image'];

$stmt = $conn->prepare("DELETE FROM house_description WHERE house_description_id = ?");
$stmt->bind_param("i", $id);
$success = $stmt->execute();
$stmt->close();

if ($success) {
    $imagePath = "../../home-images/" . basename($image);
    if (file_exists($imagePath)) {
        unlink($imagePath); 
    }

    echo json_encode(['success' => true, 'message' => 'წაშლა წარმატებით შესრულდა']);
} else {
    echo json_encode(['success' => false, 'message' => 'წაშლა ვერ მოხერხდა']);
}
