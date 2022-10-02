<?php
include "connect.php";

$filename = $_FILES["photo"]["name"];
$tempname = $_FILES["photo"]["temp_name"];
$newfilename = "./images/category/".$filename;

$sql = "INSERT INTO tbl_category(cat_name, photo)  
VALUES ('$_POST[cat_name]', '$filename')";

if (mysqli_query($conn, $sql)) {
  echo "บันทึกเรียบร้อย";
 // header("location: ./cat_select.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>