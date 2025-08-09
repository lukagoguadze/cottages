<?php
include("../dbconnect.php");

$type = $_GET['type'];

$stmt = $conn->prepare("SELECT * FROM house_description t,gl_house_type g,gl_house_type_desc a
 where g.house_type=? and t.gl_house_type_id=g.gl_house_type_id and g.gl_house_type_id=a.gl_house_type_id;");
    $stmt->bind_param("s", $type);

$stmt->execute();
$result = $stmt->get_result();

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
