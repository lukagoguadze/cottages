<?php
include("../dbconnect.php");

$sql="SELECT * FROM gl_house_type;";
$result = mysqli_query($conn, $sql);
$arr=[];

if($result->num_rows>0){
    while($row=mysqli_fetch_assoc($result)){
        $arr[]=$row;
    }
   echo json_encode($arr);
}else{
    echo 'data not found!';
}
