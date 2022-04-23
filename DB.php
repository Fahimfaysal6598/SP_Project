<?php
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Blood_Group = $_POST['Blood_Group'];
$Mobile_Num = $_POST['Mobile_Num'];

$DB = mysqli_connect("localhost","root","","demo");

$insert_query = "INSERT INTO info(Name,Address,Blood_Group,Mobile_Num)
VALUES ('$Name','$Address','$Blood_Group','$Mobile_Num')";

mysqli_query($DB,$insert_query);

echo"Successfully Done";
?>