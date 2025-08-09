<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: auth/login.php");
    exit();
}
include("../dbconnect.php");


$sql="SELECT * FROM gl_house_type";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
    echo "<option value='" .$row['gl_house_type_id'] . "'>" .$row['house_type'] . "</option>";
}