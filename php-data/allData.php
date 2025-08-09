<?php
include("../dbconnect.php");




    $sql="SELECT * FROM house_description;";
     $result=mysqli_query($conn,$sql);

   

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
