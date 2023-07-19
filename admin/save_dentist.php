<?php
include "connection.php";
echo "<pre>";
print_r($_FILES);
print_r($_POST);
echo "</pre>";

$dentist_image="";
if($_FILES['dentist_image']['name']!="")
{
	$dentist_image=time().$_FILES['dentist_image']['name'];
	move_uploaded_file($_FILES['dentist_image']['tmp_name'],'uploads/'.$dentist_image);
}

// $sql="CREATE TABLE hospital_our_dentist (hospital_our_dentist_id INT PRIMARY KEY AUTO_INCREMENT, dentist_image TEXT, dentist_name TEXT, dentist_specialist TEXT, dentist_twitter_link TEXT, dentist_facebook_link TEXT, dentist_linkedin_link TEXT, dentist_instagram_link TEXT)";
extract($_POST);

$sql="INSERT INTO hospital_our_dentist (dentist_image , dentist_name , dentist_specialist , dentist_twitter_link , dentist_facebook_link , dentist_linkedin_link , dentist_instagram_link ) VALUES 
	('$dentist_image', '$dentist_name', '$dentist_specialist', '$dentist_twitter_link', '$dentist_facebook_link', '$dentist_linkedin_link', '$dentist_instagram_link')";




$res=mysqli_query($conn,$sql);
if($res)
{
	header('location:our_dentist.php');
	echo "Successfully Inserted";
}
else
{	
	echo "Failed To Insert";
}