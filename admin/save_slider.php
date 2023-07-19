<?php
include "connection.php";
// echo "<pre>";
// print_r($_FILES);
$file_name=time().$_FILES['slider_image']['name'];
move_uploaded_file($_FILES['slider_image']['tmp_name'],'uploads/'.$file_name);
// print_r($_POST);
// echo "</pre>";
// echo $file_name;
extract($_POST);
$sql="INSERT INTO slider(slider_image,slider_heading,slider_title) VALUES
			('$file_name','$slider_heading','$slider_title')";

mysqli_query($conn,$sql);
header('location:slider.php');
?>