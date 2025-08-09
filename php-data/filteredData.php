<?php
include("../dbconnect.php");

$type = isset($_GET['type']) ? $_GET['type'] : '';

$stmt = $conn->prepare("SELECT * FROM gl_house_type WHERE house_type = ?");
$stmt->bind_param("s", $type);
$stmt->execute();

$result = $stmt->get_result();
$data = [];

while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

echo json_encode($data);
?>
