<?php

include("../dbconnect.php");

$stm="SELECT * FROM videos";
$result=mysqli_query($conn,$stm);
$arr=[];

while($row=mysqli_fetch_assoc($result)){
    $arr[]=$row;
}
echo json_encode($arr);