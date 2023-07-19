<?php
include "connection.php";
echo "<pre>";
// print_r($_FILES);
// print_r($_POST);
echo "</pre>";
$about_image="";
if($_FILES['about_image']['name']!="")
{
	$about_image=time().$_FILES['about_image']['name'];
	move_uploaded_file($_FILES['about_image']['tmp_name'],'uploads/'.$about_image);
}
// $sql="CREATE TABLE hospital_about (hospital_about_id INT PRIMARY KEY AUTO_INCREMENT, about_title TEXT, about_sub_title TEXT, about_details TEXT, about_head1 TEXT, about_head2 TEXT, about_head3 TEXT, about_head4 TEXT, about_image TEXT)";
extract($_POST);
// $sql="INSERT INTO  hospital_about (about_title, about_sub_title, about_details, about_head1, about_head2, about_head3, about_head4, about_image) VALUES
// 	('$about_title', '$about_sub_title', '$about_details', '$about_head1', '$about_head2', '$about_head3', '$about_head4', '$about_image')";
$about_title=addslashes($about_title);
$about_sub_title=addslashes($about_sub_title);
$about_details=addslashes($about_details);
$about_head1=addslashes($about_head1);
$about_head2=addslashes($about_head2);
$about_head3=addslashes($about_head3);
$about_head4=addslashes($about_head4);

if($about_image=='')
{
	 $sql="UPDATE hospital_about SET about_title='$about_title', about_sub_title='$about_sub_title', about_details='$about_details', about_head1='$about_head1', about_head2='$about_head2', about_head3='$about_head3', about_head4='$about_head4' WHERE hospital_about_id=1";
}
// echo $sql;
else
{
	$sql="UPDATE hospital_about SET about_title='$about_title', about_sub_title='$about_sub_title', about_details='$about_details', about_head1='$about_head1', about_head2='$about_head2', about_head3='$about_head3', about_head4='$about_head4', about_image='$about_image' WHERE hospital_about_id=1";
}

$res=mysqli_query($conn,$sql);
if($res)
{
	header('location:about.php');
	echo "Successfully Updated";
}
else
{	
	echo "Failed To Update";
}





?>