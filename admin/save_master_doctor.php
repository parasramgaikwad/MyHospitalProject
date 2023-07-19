<?php
include "connection.php";
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";
extract($_POST);

$master_doctor_image=time().$_FILES['master_doctor_image']['name'];
move_uploaded_file($_FILES['master_doctor_image']['tmp_name'],'uploads/'.$master_doctor_image);


//$sql="CREATE TABLE master_doctor (master_doctor_id INT PRIMARY KEY AUTO_INCREMENT, master_doctor_name TEXT, master_doctor_image TEXT)";

$master_service_name=addslashes($master_service_name);
$master_service_image=addslashes($master_service_image);

$sql="INSERT INTO master_doctor (master_doctor_name, master_doctor_image) 		VALUES ('$master_doctor_name','$master_doctor_image')";

$res=mysqli_query($conn,$sql);
if($res)
{
	header('location:master_doctor.php');
}
else
{
	echo "Failed To Add";
}
?>