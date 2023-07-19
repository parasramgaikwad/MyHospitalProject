<?php
include "connection.php";
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";
extract($_POST);

$master_service_image=time().$_FILES['master_service_image']['name'];
move_uploaded_file($_FILES['master_service_image']['tmp_name'],'uploads/'.$master_service_image);


// $sql="CREATE TABLE master_service (master_service_id INT PRIMARY KEY AUTO_INCREMENT, master_service_name TEXT, master_service_image TEXT)";

$master_service_name=addslashes($master_service_name);
$master_service_image=addslashes($master_service_image);

$sql="INSERT INTO master_service (master_service_name, master_service_image) 		VALUES ('$master_service_name','$master_service_image')";

mysqli_query($conn,$sql);
header('location:master_service.php');

?>